/**
 * Control del carousel del hero
 * QPM Servicios Técnicos
 */

(function() {
    'use strict';

    const Carousel = {
        slides: document.querySelectorAll('.hero-slide'),
        indicators: document.querySelectorAll('.indicator'),
        prevBtn: document.getElementById('prevBtn'),
        nextBtn: document.getElementById('nextBtn'),
        heroSection: document.getElementById('hero-carousel'),
        currentSlide: 0,
        slideInterval: null,
        intervalDuration: 5000,

        init() {
            if (this.slides.length === 0) return;
            
            this.bindEvents();
            this.start();
        },

        bindEvents() {
            this.nextBtn?.addEventListener('click', () => this.handleNavigation('next'));
            this.prevBtn?.addEventListener('click', () => this.handleNavigation('prev'));
            
            this.indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => this.handleNavigation('goTo', index));
            });

            this.heroSection?.addEventListener('mouseenter', () => this.stop());
            this.heroSection?.addEventListener('mouseleave', () => this.start());

            document.addEventListener('keydown', (e) => this.handleKeyboard(e));
        },

        show(index) {
            this.slides.forEach(slide => slide.classList.remove('active'));
            this.indicators.forEach(indicator => indicator.classList.remove('active'));
            
            this.slides[index]?.classList.add('active');
            this.indicators[index]?.classList.add('active');
            
            this.currentSlide = index;
        },

        next() {
            const nextIndex = (this.currentSlide + 1) % this.slides.length;
            this.show(nextIndex);
        },

        prev() {
            const prevIndex = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
            this.show(prevIndex);
        },

        start() {
            this.stop();
            this.slideInterval = setInterval(() => this.next(), this.intervalDuration);
        },

        stop() {
            if (this.slideInterval) {
                clearInterval(this.slideInterval);
                this.slideInterval = null;
            }
        },

        handleNavigation(action, index = null) {
            this.stop();
            
            switch(action) {
                case 'next':
                    this.next();
                    break;
                case 'prev':
                    this.prev();
                    break;
                case 'goTo':
                    if (index !== null) this.show(index);
                    break;
            }
            
            this.start();
        },

        handleKeyboard(e) {
            if (e.key === 'ArrowLeft') {
                this.handleNavigation('prev');
            } else if (e.key === 'ArrowRight') {
                this.handleNavigation('next');
            }
        }
    };

    document.addEventListener('DOMContentLoaded', () => Carousel.init());
})();
