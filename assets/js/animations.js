/**
 * Ashton Court Hotel - GSAP Animations
 * Cinematic scroll-triggered animations
 */

(function() {
    'use strict';

    // Check if GSAP is available
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
        return;
    }

    // Register ScrollTrigger plugin
    gsap.registerPlugin(ScrollTrigger);

    // ============================================
    // Configuration
    // ============================================
    const config = {
        ease: 'power3.out',
        duration: 1,
        stagger: 0.1,
        scrubSmooth: 1,
    };

    // ============================================
    // Hero Section Animations
    // ============================================
    function initHeroAnimations() {
        const hero = document.querySelector('.hero-section');
        if (!hero) return;

        const tl = gsap.timeline({
            defaults: { ease: config.ease, duration: config.duration },
        });

        // Wait for page load
        document.addEventListener('DOMContentLoaded', () => {
            // Delay to sync with loading screen
            gsap.delayedCall(2, () => {
                tl.to('.hero-location', {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                })
                .to('.hero-title', {
                    opacity: 1,
                    y: 0,
                    duration: 1,
                }, '-=0.5')
                .to('.hero-subtitle', {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                }, '-=0.6')
                .to('.hero-actions', {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                }, '-=0.5')
                .to('.hero-stats', {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                }, '-=0.4')
                .to('.hero-scroll-indicator', {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                }, '-=0.3');
            });
        });

        // Parallax effect on hero background
        const heroBackground = hero.querySelector('.hero-background');
        if (heroBackground) {
            gsap.to(heroBackground, {
                yPercent: 30,
                ease: 'none',
                scrollTrigger: {
                    trigger: hero,
                    start: 'top top',
                    end: 'bottom top',
                    scrub: config.scrubSmooth,
                },
            });
        }

        // Fade out hero content on scroll
        const heroContent = hero.querySelector('.hero-content');
        if (heroContent) {
            gsap.to(heroContent, {
                opacity: 0,
                y: -50,
                ease: 'none',
                scrollTrigger: {
                    trigger: hero,
                    start: '60% top',
                    end: 'bottom top',
                    scrub: config.scrubSmooth,
                },
            });
        }
    }

    // ============================================
    // Section Animations
    // ============================================
    function initSectionAnimations() {
        // Essence Section
        const essenceSection = document.querySelector('.essence-section');
        if (essenceSection) {
            // Content reveal
            gsap.from('.essence-content .section-tagline, .essence-content .section-title, .essence-text p, .essence-content .link-arrow', {
                scrollTrigger: {
                    trigger: '.essence-content',
                    start: 'top 80%',
                },
                y: 40,
                opacity: 0,
                duration: 0.8,
                stagger: 0.15,
                ease: config.ease,
            });

            // Images parallax
            const mainImage = essenceSection.querySelector('.essence-image-main');
            const accentImage = essenceSection.querySelector('.essence-image-accent');

            if (mainImage) {
                gsap.from(mainImage, {
                    scrollTrigger: {
                        trigger: mainImage,
                        start: 'top 80%',
                    },
                    clipPath: 'inset(0 100% 0 0)',
                    duration: 1.2,
                    ease: 'power4.out',
                });
            }

            if (accentImage) {
                gsap.from(accentImage, {
                    scrollTrigger: {
                        trigger: accentImage,
                        start: 'top 85%',
                    },
                    clipPath: 'inset(0 0 100% 0)',
                    duration: 1,
                    delay: 0.3,
                    ease: 'power4.out',
                });
            }
        }

        // Features Strip - Horizontal scroll on mobile (optional)
        const featuresStrip = document.querySelector('.features-strip');
        if (featuresStrip) {
            gsap.from('.feature-item', {
                scrollTrigger: {
                    trigger: featuresStrip,
                    start: 'top 85%',
                },
                y: 30,
                opacity: 0,
                duration: 0.6,
                stagger: 0.1,
                ease: config.ease,
            });
        }

        // Room Cards
        const roomCards = document.querySelectorAll('.room-card');
        roomCards.forEach((card, index) => {
            gsap.from(card, {
                scrollTrigger: {
                    trigger: card,
                    start: 'top 85%',
                },
                y: 60,
                opacity: 0,
                duration: 0.8,
                delay: index * 0.1,
                ease: config.ease,
            });
        });

        // Experience Cards
        const experienceCards = document.querySelectorAll('.experience-card');
        experienceCards.forEach((card, index) => {
            gsap.from(card, {
                scrollTrigger: {
                    trigger: card,
                    start: 'top 85%',
                },
                x: index % 2 === 0 ? -50 : 50,
                opacity: 0,
                duration: 0.8,
                ease: config.ease,
            });
        });

        // Testimonial Cards
        const testimonialCards = document.querySelectorAll('.testimonial-card');
        testimonialCards.forEach((card, index) => {
            gsap.from(card, {
                scrollTrigger: {
                    trigger: card,
                    start: 'top 85%',
                },
                y: 40,
                opacity: 0,
                duration: 0.7,
                delay: index * 0.1,
                ease: config.ease,
            });
        });
    }

    // ============================================
    // Panoramic Section Animation
    // ============================================
    function initPanoramicAnimation() {
        const panoramic = document.querySelector('.panoramic-section');
        if (!panoramic) return;

        const background = panoramic.querySelector('.panoramic-background');
        const quote = panoramic.querySelector('.panoramic-quote');

        // Parallax background
        if (background) {
            gsap.to(background, {
                yPercent: -20,
                ease: 'none',
                scrollTrigger: {
                    trigger: panoramic,
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: config.scrubSmooth,
                },
            });
        }

        // Quote reveal
        if (quote) {
            gsap.from(quote.querySelector('p'), {
                scrollTrigger: {
                    trigger: panoramic,
                    start: 'top 60%',
                },
                y: 40,
                opacity: 0,
                duration: 1,
                ease: config.ease,
            });

            gsap.from(quote.querySelector('cite'), {
                scrollTrigger: {
                    trigger: panoramic,
                    start: 'top 60%',
                },
                y: 20,
                opacity: 0,
                duration: 0.8,
                delay: 0.3,
                ease: config.ease,
            });
        }
    }

    // ============================================
    // Footer CTA Animation
    // ============================================
    function initFooterAnimation() {
        const footerCta = document.querySelector('.footer-cta');
        if (!footerCta) return;

        gsap.from('.footer-cta-content > *', {
            scrollTrigger: {
                trigger: footerCta,
                start: 'top 80%',
            },
            y: 30,
            opacity: 0,
            duration: 0.7,
            stagger: 0.15,
            ease: config.ease,
        });

        // Footer main sections
        gsap.from('.footer-grid > *', {
            scrollTrigger: {
                trigger: '.footer-main',
                start: 'top 85%',
            },
            y: 30,
            opacity: 0,
            duration: 0.6,
            stagger: 0.1,
            ease: config.ease,
        });
    }

    // ============================================
    // Image Reveal Animations
    // ============================================
    function initImageReveals() {
        const images = document.querySelectorAll('[data-image-reveal]');
        
        images.forEach(container => {
            const img = container.querySelector('img');
            if (!img) return;

            gsap.set(container, { overflow: 'hidden' });
            
            gsap.fromTo(container, 
                { clipPath: 'inset(0 100% 0 0)' },
                {
                    clipPath: 'inset(0 0% 0 0)',
                    duration: 1.2,
                    ease: 'power4.inOut',
                    scrollTrigger: {
                        trigger: container,
                        start: 'top 80%',
                    },
                }
            );

            gsap.fromTo(img,
                { scale: 1.3 },
                {
                    scale: 1,
                    duration: 1.4,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: container,
                        start: 'top 80%',
                    },
                }
            );
        });
    }

    // ============================================
    // Text Split Animations (if using SplitText or manual)
    // ============================================
    function initTextAnimations() {
        // For section titles
        const titles = document.querySelectorAll('[data-split-text]');
        
        titles.forEach(title => {
            // Simple word-based split (without SplitText plugin)
            const text = title.textContent;
            const words = text.split(' ');
            title.innerHTML = words.map(word => 
                `<span class="word"><span class="word-inner">${word}</span></span>`
            ).join(' ');

            gsap.from(title.querySelectorAll('.word-inner'), {
                scrollTrigger: {
                    trigger: title,
                    start: 'top 80%',
                },
                y: '100%',
                opacity: 0,
                duration: 0.8,
                stagger: 0.05,
                ease: 'power3.out',
            });
        });
    }

    // ============================================
    // Magnetic Buttons (Desktop only)
    // ============================================
    function initMagneticButtons() {
        if (!window.matchMedia('(hover: hover) and (pointer: fine)').matches) return;

        const magneticElements = document.querySelectorAll('.btn, .link-arrow');
        
        magneticElements.forEach(el => {
            el.addEventListener('mousemove', (e) => {
                const rect = el.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                
                gsap.to(el, {
                    x: x * 0.2,
                    y: y * 0.2,
                    duration: 0.3,
                    ease: 'power2.out',
                });
            });

            el.addEventListener('mouseleave', () => {
                gsap.to(el, {
                    x: 0,
                    y: 0,
                    duration: 0.5,
                    ease: 'elastic.out(1, 0.5)',
                });
            });
        });
    }

    // ============================================
    // Scroll Progress Indicator (Optional)
    // ============================================
    function initScrollProgress() {
        const progressBar = document.querySelector('.scroll-progress');
        if (!progressBar) return;

        gsap.to(progressBar, {
            scaleX: 1,
            ease: 'none',
            scrollTrigger: {
                trigger: document.body,
                start: 'top top',
                end: 'bottom bottom',
                scrub: 0.3,
            },
        });
    }

    // ============================================
    // Page Transition (for internal links)
    // ============================================
    function initPageTransitions() {
        const transitionOverlay = document.querySelector('.page-transition-overlay');
        if (!transitionOverlay) return;

        const internalLinks = document.querySelectorAll('a[href^="/"], a[href^="' + window.location.origin + '"]');
        
        internalLinks.forEach(link => {
            // Skip if link opens in new tab or is an anchor
            if (link.target === '_blank' || link.getAttribute('href').startsWith('#')) return;

            link.addEventListener('click', (e) => {
                e.preventDefault();
                const href = link.getAttribute('href');

                // Animate overlay
                gsap.to(transitionOverlay, {
                    y: 0,
                    duration: 0.5,
                    ease: 'power3.inOut',
                    onComplete: () => {
                        window.location.href = href;
                    },
                });
            });
        });

        // Exit animation on page load
        window.addEventListener('pageshow', () => {
            gsap.fromTo(transitionOverlay,
                { y: 0 },
                {
                    y: '-100%',
                    duration: 0.5,
                    ease: 'power3.inOut',
                    delay: 0.2,
                }
            );
        });
    }

    // ============================================
    // Refresh ScrollTrigger on resize
    // ============================================
    function initResizeHandler() {
        let resizeTimeout;
        
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                ScrollTrigger.refresh();
            }, 250);
        });
    }

    // ============================================
    // Initialize All Animations
    // ============================================
    function init() {
        // Wait for fonts to load for accurate measurements
        if (document.fonts && document.fonts.ready) {
            document.fonts.ready.then(() => {
                initHeroAnimations();
                initSectionAnimations();
                initPanoramicAnimation();
                initFooterAnimation();
                initImageReveals();
                initTextAnimations();
                initMagneticButtons();
                initScrollProgress();
                initPageTransitions();
                initResizeHandler();
                
                // Refresh after everything is set up
                ScrollTrigger.refresh();
            });
        } else {
            // Fallback for browsers without font loading API
            setTimeout(() => {
                initHeroAnimations();
                initSectionAnimations();
                initPanoramicAnimation();
                initFooterAnimation();
                initImageReveals();
                initTextAnimations();
                initMagneticButtons();
                initScrollProgress();
                initPageTransitions();
                initResizeHandler();
                
                ScrollTrigger.refresh();
            }, 500);
        }
    }

    // Run on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
