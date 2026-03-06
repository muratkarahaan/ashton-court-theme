/**
 * Ashton Court Hotel - Booking System JavaScript
 * Handles booking form interactions and AJAX submissions
 */

(function() {
    'use strict';

    // ============================================
    // Configuration
    // ============================================
    const config = {
        ajaxUrl: typeof ashtonAjax !== 'undefined' ? ashtonAjax.ajaxurl : '/wp-admin/admin-ajax.php',
        nonce: typeof ashtonAjax !== 'undefined' ? ashtonAjax.nonce : '',
    };

    // ============================================
    // Booking Form Handler
    // ============================================
    class BookingForm {
        constructor(formElement) {
            this.form = formElement;
            this.grid = this.form.querySelector('.booking-form-grid');
            this.details = this.form.querySelector('.booking-form-details');
            this.checkAvailabilityBtn = this.form.querySelector('.btn-check-availability');
            this.bookNowBtn = this.form.querySelector('.btn-book-now');
            this.message = this.form.querySelector('.booking-form-message');
            
            this.state = {
                step: 1,
                isAvailable: false,
                isSubmitting: false,
            };
            
            this.init();
        }

        init() {
            if (this.checkAvailabilityBtn) {
                this.checkAvailabilityBtn.addEventListener('click', () => this.checkAvailability());
            }
            
            this.form.addEventListener('submit', (e) => this.handleSubmit(e));
            
            // Date validation
            this.initDateValidation();
        }

        initDateValidation() {
            const checkIn = this.form.querySelector('#booking-check-in');
            const checkOut = this.form.querySelector('#booking-check-out');
            
            if (!checkIn || !checkOut) return;
            
            // Set minimum dates
            const today = new Date();
            const tomorrow = new Date(today);
            tomorrow.setDate(tomorrow.getDate() + 1);
            
            checkIn.min = this.formatDate(today);
            checkOut.min = this.formatDate(tomorrow);
            
            // Update check-out min when check-in changes
            checkIn.addEventListener('change', () => {
                const checkInDate = new Date(checkIn.value);
                const minCheckOut = new Date(checkInDate);
                minCheckOut.setDate(minCheckOut.getDate() + 1);
                
                checkOut.min = this.formatDate(minCheckOut);
                
                // Clear check-out if invalid
                if (checkOut.value && new Date(checkOut.value) <= checkInDate) {
                    checkOut.value = '';
                }
                
                // Reset availability state
                this.resetState();
            });
            
            checkOut.addEventListener('change', () => {
                this.resetState();
            });
        }

        formatDate(date) {
            return date.toISOString().split('T')[0];
        }

        resetState() {
            this.state.isAvailable = false;
            this.hideMessage();
            
            if (this.details) {
                this.details.style.display = 'none';
            }
            if (this.checkAvailabilityBtn) {
                this.checkAvailabilityBtn.style.display = 'inline-flex';
            }
            if (this.bookNowBtn) {
                this.bookNowBtn.style.display = 'none';
            }
        }

        async checkAvailability() {
            if (this.state.isSubmitting) return;
            
            // Validate required fields
            const checkIn = this.form.querySelector('#booking-check-in');
            const checkOut = this.form.querySelector('#booking-check-out');
            const guests = this.form.querySelector('#booking-guests');
            
            if (!checkIn.value || !checkOut.value) {
                this.showMessage('Please select check-in and check-out dates.', 'error');
                return;
            }
            
            this.state.isSubmitting = true;
            this.checkAvailabilityBtn.textContent = 'Checking...';
            this.checkAvailabilityBtn.disabled = true;
            
            try {
                const formData = new FormData();
                formData.append('action', 'ashton_check_availability');
                formData.append('nonce', config.nonce);
                formData.append('check_in', checkIn.value);
                formData.append('check_out', checkOut.value);
                formData.append('guests', guests.value);
                
                const roomType = this.form.querySelector('#booking-room-type');
                if (roomType) {
                    formData.append('room_type', roomType.value);
                }
                
                const response = await fetch(config.ajaxUrl, {
                    method: 'POST',
                    body: formData,
                    credentials: 'same-origin',
                });
                
                const data = await response.json();
                
                if (data.success) {
                    this.state.isAvailable = true;
                    this.showMessage(data.data.message, 'success');
                    this.showDetailsForm();
                } else {
                    this.showMessage(data.data.message || 'Unable to check availability. Please try again.', 'error');
                }
            } catch (error) {
                console.error('Availability check error:', error);
                this.showMessage('An error occurred. Please try again or call us directly.', 'error');
            } finally {
                this.state.isSubmitting = false;
                this.checkAvailabilityBtn.innerHTML = '<span>Check Availability</span>';
                this.checkAvailabilityBtn.disabled = false;
            }
        }

        showDetailsForm() {
            if (this.details) {
                this.details.style.display = 'block';
                
                // Animate in
                if (typeof gsap !== 'undefined') {
                    gsap.from(this.details, {
                        opacity: 0,
                        y: 20,
                        duration: 0.4,
                        ease: 'power2.out',
                    });
                }
                
                // Focus first field
                const firstInput = this.details.querySelector('input');
                if (firstInput) {
                    setTimeout(() => firstInput.focus(), 100);
                }
            }
            
            if (this.checkAvailabilityBtn) {
                this.checkAvailabilityBtn.style.display = 'none';
            }
            if (this.bookNowBtn) {
                this.bookNowBtn.style.display = 'inline-flex';
            }
        }

        async handleSubmit(e) {
            e.preventDefault();
            
            if (!this.state.isAvailable) {
                this.checkAvailability();
                return;
            }
            
            if (this.state.isSubmitting) return;
            
            // Validate all required fields
            if (!this.validateForm()) {
                return;
            }
            
            this.state.isSubmitting = true;
            this.bookNowBtn.textContent = 'Processing...';
            this.bookNowBtn.disabled = true;
            
            try {
                const formData = new FormData(this.form);
                formData.append('action', 'ashton_booking');
                formData.append('nonce', config.nonce);
                
                const response = await fetch(config.ajaxUrl, {
                    method: 'POST',
                    body: formData,
                    credentials: 'same-origin',
                });
                
                const data = await response.json();
                
                if (data.success) {
                    this.showMessage(data.data.message, 'success');
                    this.form.reset();
                    this.resetState();
                    
                    // Track conversion (if analytics available)
                    if (typeof gtag === 'function') {
                        gtag('event', 'booking_request', {
                            event_category: 'Booking',
                            event_label: 'Form Submission',
                        });
                    }
                    
                    // Optional: Close modal after delay
                    setTimeout(() => {
                        if (window.AshtonCourt && window.AshtonCourt.closeBookingModal) {
                            window.AshtonCourt.closeBookingModal();
                        }
                    }, 3000);
                } else {
                    this.showMessage(data.data.message || 'Unable to process booking. Please try again.', 'error');
                }
            } catch (error) {
                console.error('Booking submission error:', error);
                this.showMessage('An error occurred. Please call us at +44 (0)1395 263002 to complete your booking.', 'error');
            } finally {
                this.state.isSubmitting = false;
                this.bookNowBtn.innerHTML = '<span>Complete Booking</span>';
                this.bookNowBtn.disabled = false;
            }
        }

        validateForm() {
            const requiredFields = this.form.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('error');
                    
                    // Remove error class on input
                    field.addEventListener('input', () => {
                        field.classList.remove('error');
                    }, { once: true });
                }
            });
            
            // Email validation
            const email = this.form.querySelector('#booking-email');
            if (email && email.value && !this.validateEmail(email.value)) {
                isValid = false;
                email.classList.add('error');
                this.showMessage('Please enter a valid email address.', 'error');
            }
            
            if (!isValid) {
                this.showMessage('Please fill in all required fields.', 'error');
            }
            
            return isValid;
        }

        validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        showMessage(text, type) {
            if (!this.message) return;
            
            this.message.textContent = text;
            this.message.className = 'booking-form-message ' + type;
            this.message.style.display = 'block';
            
            // Auto-hide success messages
            if (type === 'success') {
                setTimeout(() => {
                    this.hideMessage();
                }, 5000);
            }
        }

        hideMessage() {
            if (!this.message) return;
            
            this.message.style.display = 'none';
            this.message.className = 'booking-form-message';
            this.message.textContent = '';
        }
    }

    // ============================================
    // Contact Form Handler
    // ============================================
    class ContactForm {
        constructor(formElement) {
            this.form = formElement;
            this.submitBtn = this.form.querySelector('[type="submit"]');
            this.message = this.form.querySelector('.form-message');
            
            this.state = {
                isSubmitting: false,
            };
            
            this.init();
        }

        init() {
            this.form.addEventListener('submit', (e) => this.handleSubmit(e));
        }

        async handleSubmit(e) {
            e.preventDefault();
            
            if (this.state.isSubmitting) return;
            
            if (!this.validateForm()) return;
            
            this.state.isSubmitting = true;
            const originalText = this.submitBtn.textContent;
            this.submitBtn.textContent = 'Sending...';
            this.submitBtn.disabled = true;
            
            try {
                const formData = new FormData(this.form);
                formData.append('action', 'ashton_contact');
                formData.append('nonce', config.nonce);
                
                const response = await fetch(config.ajaxUrl, {
                    method: 'POST',
                    body: formData,
                    credentials: 'same-origin',
                });
                
                const data = await response.json();
                
                if (data.success) {
                    this.showMessage(data.data.message, 'success');
                    this.form.reset();
                } else {
                    this.showMessage(data.data.message || 'Unable to send message. Please try again.', 'error');
                }
            } catch (error) {
                console.error('Contact form error:', error);
                this.showMessage('An error occurred. Please email us directly.', 'error');
            } finally {
                this.state.isSubmitting = false;
                this.submitBtn.textContent = originalText;
                this.submitBtn.disabled = false;
            }
        }

        validateForm() {
            const requiredFields = this.form.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('error');
                }
            });
            
            return isValid;
        }

        showMessage(text, type) {
            if (!this.message) {
                // Create message element if it doesn't exist
                this.message = document.createElement('div');
                this.message.className = 'form-message';
                this.form.appendChild(this.message);
            }
            
            this.message.textContent = text;
            this.message.className = 'form-message ' + type;
            this.message.style.display = 'block';
        }
    }

    // ============================================
    // Date Picker Enhancement (Optional)
    // ============================================
    function enhanceDatePickers() {
        // Add placeholder text for date inputs
        const dateInputs = document.querySelectorAll('input[type="date"]');
        
        dateInputs.forEach(input => {
            // Add clear button
            const wrapper = document.createElement('div');
            wrapper.className = 'date-input-wrapper';
            input.parentNode.insertBefore(wrapper, input);
            wrapper.appendChild(input);
            
            // Style adjustments for native date picker
            input.addEventListener('focus', () => {
                wrapper.classList.add('focused');
            });
            
            input.addEventListener('blur', () => {
                wrapper.classList.remove('focused');
            });
        });
    }

    // ============================================
    // Guest Counter (Alternative to select)
    // ============================================
    function initGuestCounters() {
        const counters = document.querySelectorAll('.guest-counter');
        
        counters.forEach(counter => {
            const input = counter.querySelector('input');
            const minusBtn = counter.querySelector('.counter-minus');
            const plusBtn = counter.querySelector('.counter-plus');
            
            if (!input || !minusBtn || !plusBtn) return;
            
            const min = parseInt(input.min) || 1;
            const max = parseInt(input.max) || 10;
            
            minusBtn.addEventListener('click', () => {
                const current = parseInt(input.value) || min;
                if (current > min) {
                    input.value = current - 1;
                    input.dispatchEvent(new Event('change'));
                }
            });
            
            plusBtn.addEventListener('click', () => {
                const current = parseInt(input.value) || min;
                if (current < max) {
                    input.value = current + 1;
                    input.dispatchEvent(new Event('change'));
                }
            });
        });
    }

    // ============================================
    // Room Price Calculator
    // ============================================
    function initPriceCalculator() {
        const calculator = document.querySelector('.price-calculator');
        if (!calculator) return;
        
        const checkIn = calculator.querySelector('[name="check_in"]');
        const checkOut = calculator.querySelector('[name="check_out"]');
        const roomSelect = calculator.querySelector('[name="room"]');
        const guests = calculator.querySelector('[name="guests"]');
        const priceDisplay = calculator.querySelector('.calculated-price');
        
        function calculatePrice() {
            if (!checkIn.value || !checkOut.value) return;
            
            const startDate = new Date(checkIn.value);
            const endDate = new Date(checkOut.value);
            const nights = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24));
            
            if (nights < 1) return;
            
            let basePrice = 70;
            if (roomSelect && roomSelect.options[roomSelect.selectedIndex]) {
                const selectedOption = roomSelect.options[roomSelect.selectedIndex];
                basePrice = parseFloat(selectedOption.dataset.price) || 70;
            }
            
            const total = basePrice * nights;
            
            if (priceDisplay) {
                priceDisplay.innerHTML = `
                    <span class="nights">${nights} night${nights > 1 ? 's' : ''}</span>
                    <span class="total">£${total.toFixed(2)}</span>
                `;
            }
        }
        
        if (checkIn) checkIn.addEventListener('change', calculatePrice);
        if (checkOut) checkOut.addEventListener('change', calculatePrice);
        if (roomSelect) roomSelect.addEventListener('change', calculatePrice);
    }

    // ============================================
    // Initialize
    // ============================================
    function init() {
        // Initialize all booking forms
        const bookingForms = document.querySelectorAll('.ashton-booking-form');
        bookingForms.forEach(form => new BookingForm(form));
        
        // Initialize all contact forms
        const contactForms = document.querySelectorAll('.ashton-contact-form');
        contactForms.forEach(form => new ContactForm(form));
        
        // Enhancements
        enhanceDatePickers();
        initGuestCounters();
        initPriceCalculator();
    }

    // Run on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
