/**
 * Elemental Kids Club Theme Scripts
 *
 * @package ElementalKidsClub
 * @since 1.0.0
 */

(function() {
    'use strict';

    // Wait for DOM to be fully loaded
    document.addEventListener('DOMContentLoaded', function() {

        // Initialize Lucide Icons
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }

        // Wild Mail Bonus Form Handler
        const bonusForm = document.getElementById('bonus-form');
        const bonusSuccess = document.getElementById('bonus-success');

        if (bonusForm) {
            bonusForm.addEventListener('submit', function(e) {
                // If Wild Mail URL is not configured, prevent default and show message
                if (this.action.includes('YOUR_WILDMAIL_FORM_ACTION_URL_HERE')) {
                    e.preventDefault();
                    alert('Por favor, configura la URL de Wild Mail en el código del formulario.');
                    return;
                }

                // Show success message after form submission
                // Note: This will only work if Wild Mail redirects back or if using AJAX
                setTimeout(function() {
                    if (bonusSuccess) {
                        bonusSuccess.classList.remove('hidden');
                        bonusForm.reset();
                        setTimeout(function() {
                            bonusSuccess.classList.add('hidden');
                        }, 8000);
                    }
                }, 1000);
            });
        }

        // Scroll Animation Observer
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all elements with scroll-animate class
        document.querySelectorAll('.scroll-animate').forEach(function(el) {
            observer.observe(el);
        });

        // Observe all stagger items
        document.querySelectorAll('.stagger-item').forEach(function(el) {
            observer.observe(el);
        });

    });

})();
