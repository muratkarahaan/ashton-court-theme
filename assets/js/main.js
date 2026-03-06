/**
 * Ashton Court Hotel - Main JavaScript
 * Premium interactions and smooth experience
 */

(function() {
    'use strict';

    // ============================================
    // Global State
    // ============================================
    const state = {
        isLoaded: false,
        isMenuOpen: false,
        isModalOpen: false,
        scrollY: 0,
        headerHeight: 80,
    };

    // ============================================
    // DOM Elements
    // ============================================
    const elements = {
        body: document.body,
        header: document.getElementById('site-header'),
        menuToggle: document.getElementById('menu-toggle'),
        mobileMenu: document.getElementById('mobile-menu-overlay'),
        loadingScreen: document.getElementById('loading-screen'),
        bookingModal: document.getElementById('booking-modal'),
        cursor: document.getElementById('custom-cursor'),
    };

    // ============================================
    // Smooth Scroll (Lenis)
    // ============================================
    let lenis = null;

    function initSmoothScroll() {
        if (typeof Lenis === 'undefined') {
            return;
        }

        lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            orientation: 'vertical',
            gestureOrientation: 'vertical',
            smoothWheel: true,
            wheelMultiplier: 1,
            smoothTouch: false,
            touchMultiplier: 2,
            infinite: false,
        });

        // Connect to GSAP ScrollTrigger if available
        if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
            lenis.on('scroll', ScrollTrigger.update);
            gsap.ticker.add((time) => {
                lenis.raf(time * 1000);
            });
            gsap.ticker.lagSmoothing(0);
        } else {
            function raf(time) {
                lenis.raf(time);
                requestAnimationFrame(raf);
            }
            requestAnimationFrame(raf);
        }
    }

    // ============================================
    // Loading Screen
    // ============================================
    function initLoadingScreen() {
        if (!elements.loadingScreen) return;

        // Wait for all resources to load
        window.addEventListener('load', () => {
            setTimeout(() => {
                elements.loadingScreen.classList.add('exiting');
                
                setTimeout(() => {
                    elements.loadingScreen.classList.add('hidden');
                    elements.body.classList.add('page-loaded');
                    state.isLoaded = true;
                }, 500);
            }, 1500); // Minimum display time for brand impact
        });

        // Fallback: Hide after max time
        setTimeout(() => {
            if (!state.isLoaded) {
                elements.loadingScreen.classList.add('hidden');
                elements.body.classList.add('page-loaded');
                state.isLoaded = true;
            }
        }, 4000);
    }

    // ============================================
    // Header Scroll Behavior
    // ============================================
    function initHeader() {
        if (!elements.header) return;

        const heroSection = document.getElementById('hero');
        let lastScrollY = 0;
        let ticking = false;

        function updateHeader() {
            const scrollY = window.scrollY || window.pageYOffset;
            
            // Add/remove scrolled class
            if (scrollY > 50) {
                elements.header.classList.add('scrolled');
            } else {
                elements.header.classList.remove('scrolled');
            }

            // Check if hero is visible
            if (heroSection) {
                const heroRect = heroSection.getBoundingClientRect();
                if (heroRect.bottom > 0) {
                    elements.header.classList.add('hero-visible');
                } else {
                    elements.header.classList.remove('hero-visible');
                }
            }

            lastScrollY = scrollY;
            ticking = false;
        }

        window.addEventListener('scroll', () => {
            if (!ticking) {
                requestAnimationFrame(updateHeader);
                ticking = true;
            }
        }, { passive: true });

        // Initial check
        updateHeader();
    }

    // ============================================
    // Mobile Menu
    // ============================================
    function initMobileMenu() {
        if (!elements.menuToggle || !elements.mobileMenu) return;

        function openMenu() {
            state.isMenuOpen = true;
            elements.menuToggle.setAttribute('aria-expanded', 'true');
            elements.mobileMenu.classList.add('active');
            elements.body.classList.add('menu-open');
            
            // Stop smooth scroll
            if (lenis) lenis.stop();
        }

        function closeMenu() {
            state.isMenuOpen = false;
            elements.menuToggle.setAttribute('aria-expanded', 'false');
            elements.mobileMenu.classList.remove('active');
            elements.body.classList.remove('menu-open');
            
            // Resume smooth scroll
            if (lenis) lenis.start();
        }

        function toggleMenu() {
            if (state.isMenuOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        }

        // Toggle button click
        elements.menuToggle.addEventListener('click', toggleMenu);

        // Close on menu link click
        const menuLinks = elements.mobileMenu.querySelectorAll('a');
        menuLinks.forEach(link => {
            link.addEventListener('click', closeMenu);
        });

        // Close on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && state.isMenuOpen) {
                closeMenu();
            }
        });

        // Close on resize to desktop
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024 && state.isMenuOpen) {
                closeMenu();
            }
        });
    }

    // ============================================
    // Booking Modal
    // ============================================
    function initBookingModal() {
        if (!elements.bookingModal) return;

        const openButtons = document.querySelectorAll('.open-booking-modal, #header-book-btn');
        const closeButton = elements.bookingModal.querySelector('.booking-modal-close');
        const overlay = elements.bookingModal.querySelector('.booking-modal-overlay');

        function openModal() {
            state.isModalOpen = true;
            elements.bookingModal.classList.add('active');
            elements.body.classList.add('modal-open');
            
            // Stop smooth scroll
            if (lenis) lenis.stop();
            
            // Focus first input
            setTimeout(() => {
                const firstInput = elements.bookingModal.querySelector('input, select');
                if (firstInput) firstInput.focus();
            }, 300);
        }

        function closeModal() {
            state.isModalOpen = false;
            elements.bookingModal.classList.remove('active');
            elements.body.classList.remove('modal-open');
            
            // Resume smooth scroll
            if (lenis) lenis.start();
        }

        // Open buttons
        openButtons.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                openModal();
            });
        });

        // Close button
        if (closeButton) {
            closeButton.addEventListener('click', closeModal);
        }

        // Close on overlay click
        if (overlay) {
            overlay.addEventListener('click', closeModal);
        }

        // Close on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && state.isModalOpen) {
                closeModal();
            }
        });
    }

    // ============================================
    // Custom Cursor
    // ============================================
    function initCustomCursor() {
        if (!elements.cursor) return;
        
        // Only on devices with hover capability
        if (!window.matchMedia('(hover: hover) and (pointer: fine)').matches) {
            elements.cursor.style.display = 'none';
            return;
        }

        const cursorDot = elements.cursor.querySelector('.cursor-dot');
        const cursorCircle = elements.cursor.querySelector('.cursor-circle');
        
        let mouseX = 0;
        let mouseY = 0;
        let cursorX = 0;
        let cursorY = 0;
        let circleX = 0;
        let circleY = 0;

        // Update cursor position
        document.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
        });

        // Animate cursor
        function animateCursor() {
            // Dot follows immediately
            cursorX += (mouseX - cursorX) * 0.2;
            cursorY += (mouseY - cursorY) * 0.2;
            
            // Circle follows with delay
            circleX += (mouseX - circleX) * 0.1;
            circleY += (mouseY - circleY) * 0.1;

            if (cursorDot) {
                cursorDot.style.transform = `translate(${cursorX}px, ${cursorY}px) translate(-50%, -50%)`;
            }
            if (cursorCircle) {
                cursorCircle.style.transform = `translate(${circleX}px, ${circleY}px) translate(-50%, -50%)`;
            }

            requestAnimationFrame(animateCursor);
        }
        animateCursor();

        // Hover states
        const hoverElements = document.querySelectorAll('a, button, input, select, textarea, [data-cursor="hover"]');
        
        hoverElements.forEach(el => {
            el.addEventListener('mouseenter', () => {
                elements.cursor.classList.add('hover');
            });
            el.addEventListener('mouseleave', () => {
                elements.cursor.classList.remove('hover');
            });
        });

        // Hide cursor when leaving window
        document.addEventListener('mouseleave', () => {
            elements.cursor.classList.add('hidden');
        });
        document.addEventListener('mouseenter', () => {
            elements.cursor.classList.remove('hidden');
        });
    }

    // ============================================
    // Scroll Animations (Observer-based)
    // ============================================
    function initScrollAnimations() {
        const animatedElements = document.querySelectorAll('[data-animate]');
        
        if (animatedElements.length) {
            const observerOptions = {
                root: null,
                rootMargin: '0px 0px -10% 0px',
                threshold: 0.1,
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animated');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            animatedElements.forEach(el => {
                observer.observe(el);
            });
        }

        // Essence Section Animations
        initEssenceAnimations();
    }

    // ============================================
    // Essence Section Animations
    // ============================================
    function initEssenceAnimations() {
        const essenceImageSide = document.querySelector('.essence-image-side');
        const essenceContentSide = document.querySelector('.essence-content-side');
        
        if (!essenceImageSide && !essenceContentSide) return;

        const observerOptions = {
            root: null,
            rootMargin: '0px 0px -15% 0px',
            threshold: 0.2,
        };

        const essenceObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                    essenceObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        if (essenceImageSide) {
            essenceObserver.observe(essenceImageSide);
        }
        if (essenceContentSide) {
            essenceObserver.observe(essenceContentSide);
        }
    }

    // ============================================
    // Smooth Anchor Links
    // ============================================
    function initSmoothAnchors() {
        const anchorLinks = document.querySelectorAll('a[href^="#"]');
        
        anchorLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                const href = link.getAttribute('href');
                if (href === '#') return;
                
                const target = document.querySelector(href);
                if (!target) return;
                
                e.preventDefault();
                
                const headerOffset = elements.header ? elements.header.offsetHeight : 0;
                const targetPosition = target.getBoundingClientRect().top + window.scrollY - headerOffset;
                
                if (lenis) {
                    lenis.scrollTo(targetPosition, { duration: 1.2 });
                } else {
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth',
                    });
                }
            });
        });
    }

    // ============================================
    // Form Enhancements
    // ============================================
    function initFormEnhancements() {
        // Date input min values
        const checkInInput = document.getElementById('booking-check-in');
        const checkOutInput = document.getElementById('booking-check-out');
        
        if (checkInInput && checkOutInput) {
            const today = new Date().toISOString().split('T')[0];
            checkInInput.min = today;
            
            checkInInput.addEventListener('change', () => {
                const checkInDate = new Date(checkInInput.value);
                checkInDate.setDate(checkInDate.getDate() + 1);
                checkOutInput.min = checkInDate.toISOString().split('T')[0];
                
                // Clear check-out if it's before check-in
                if (checkOutInput.value && new Date(checkOutInput.value) <= new Date(checkInInput.value)) {
                    checkOutInput.value = '';
                }
            });
        }

        // Floating labels (if using)
        const floatingInputs = document.querySelectorAll('.floating-label input');
        floatingInputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.classList.add('focused');
            });
            input.addEventListener('blur', () => {
                if (!input.value) {
                    input.parentElement.classList.remove('focused');
                }
            });
        });
    }

    // ============================================
    // Lazy Loading Images
    // ============================================
    function initLazyLoading() {
        const lazyImages = document.querySelectorAll('img[data-src]');
        
        if (!lazyImages.length) return;

        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        if (img.dataset.srcset) {
                            img.srcset = img.dataset.srcset;
                        }
                        img.classList.add('loaded');
                        imageObserver.unobserve(img);
                    }
                });
            }, { rootMargin: '50px' });

            lazyImages.forEach(img => {
                imageObserver.observe(img);
            });
        } else {
            // Fallback for older browsers
            lazyImages.forEach(img => {
                img.src = img.dataset.src;
            });
        }
    }

    // ============================================
    // Keyboard Navigation
    // ============================================
    function initKeyboardNav() {
        // Skip to content link
        const skipLink = document.querySelector('.skip-link');
        if (skipLink) {
            skipLink.addEventListener('click', (e) => {
                e.preventDefault();
                const mainContent = document.getElementById('site-main');
                if (mainContent) {
                    mainContent.focus();
                    mainContent.scrollIntoView();
                }
            });
        }

        // Focus visible polyfill behavior
        document.body.addEventListener('mousedown', () => {
            document.body.classList.add('using-mouse');
        });
        document.body.addEventListener('keydown', (e) => {
            if (e.key === 'Tab') {
                document.body.classList.remove('using-mouse');
            }
        });
    }

    // ============================================
    // Phone Number Formatting
    // ============================================
    function initPhoneFormatting() {
        const phoneInputs = document.querySelectorAll('input[type="tel"]');
        
        phoneInputs.forEach(input => {
            input.addEventListener('input', (e) => {
                // Basic formatting: remove non-numeric except + and spaces
                let value = e.target.value.replace(/[^\d\s+()-]/g, '');
                e.target.value = value;
            });
        });
    }

    // ============================================
    // Parallax Effects (Simple CSS-based)
    // ============================================
    function initParallax() {
        const parallaxElements = document.querySelectorAll('[data-parallax]');
        
        if (!parallaxElements.length) return;

        function updateParallax() {
            parallaxElements.forEach(el => {
                const speed = parseFloat(el.dataset.parallax) || 0.1;
                const rect = el.getBoundingClientRect();
                const scrolled = window.scrollY;
                const yPos = -(scrolled * speed);
                
                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    el.style.transform = `translate3d(0, ${yPos}px, 0)`;
                }
            });
        }

        window.addEventListener('scroll', () => {
            requestAnimationFrame(updateParallax);
        }, { passive: true });
    }

    // ============================================
    // Announcement Bar (Special Offer)
    // ============================================
    function initAnnouncementBar() {
        const bar = document.getElementById('announcement-bar');
        const closeBtn = document.getElementById('announcement-bar-close');

        if (!bar || !closeBtn) return;

        const offerHash = bar.getAttribute('data-offer-hash');
        const storageKey = 'ashton_offer_dismissed';

        // Check if this specific offer was previously dismissed (session only)
        try {
            const dismissed = sessionStorage.getItem(storageKey);
            if (dismissed && dismissed === offerHash) {
                bar.remove();
                return;
            }
        } catch (e) {
            // sessionStorage not available, show bar anyway
        }

        // Measure bar and push header down
        function updateBarOffset() {
            const barHeight = bar.offsetHeight;
            document.documentElement.style.setProperty('--announcement-height', barHeight + 'px');
            document.body.classList.add('has-announcement');
        }
        updateBarOffset();
        window.addEventListener('resize', updateBarOffset);

        // Dismiss handler
        closeBtn.addEventListener('click', function() {
            bar.classList.add('is-dismissed');
            document.body.classList.remove('has-announcement');
            document.documentElement.style.setProperty('--announcement-height', '0px');

            try {
                sessionStorage.setItem(storageKey, offerHash);
            } catch (e) {
                // Silently fail
            }

            // Remove from DOM after animation completes
            bar.addEventListener('animationend', function() {
                bar.remove();
                window.removeEventListener('resize', updateBarOffset);
            });
        });
    }

    // ============================================
    // Initialize Everything
    // ============================================
    function init() {
        initAnnouncementBar();
        initLoadingScreen();
        initSmoothScroll();
        initHeader();
        initMobileMenu();
        initBookingModal();
        initCustomCursor();
        initScrollAnimations();
        initSmoothAnchors();
        initFormEnhancements();
        initLazyLoading();
        initKeyboardNav();
        initPhoneFormatting();
        initParallax();
    }

    // Run on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    // Expose for external use if needed
    window.AshtonCourt = {
        state,
        elements,
        lenis,
        openBookingModal: () => {
            if (elements.bookingModal) {
                elements.bookingModal.classList.add('active');
                elements.body.classList.add('modal-open');
                state.isModalOpen = true;
            }
        },
        closeBookingModal: () => {
            if (elements.bookingModal) {
                elements.bookingModal.classList.remove('active');
                elements.body.classList.remove('modal-open');
                state.isModalOpen = false;
            }
        },
    };

})();
