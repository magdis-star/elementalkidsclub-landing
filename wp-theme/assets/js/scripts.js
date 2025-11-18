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

        // Download Sample Button Functionality
        const downloadBtn = document.getElementById('download-btn');
        const downloadMessage = document.getElementById('download-message');

        if (downloadBtn && downloadMessage) {
            downloadBtn.addEventListener('click', function() {
                // Show confirmation message
                downloadMessage.classList.remove('hidden');

                // Simulate download: create a blob and download it
                const downloadContent = 'Este es un PDF de muestra simulado para Elemental Kids Club. El contenido real sería un archivo PDF con ejercicios de lógica, razonamiento y pasatiempos educativos.';
                const downloadUrl = URL.createObjectURL(new Blob([downloadContent], {type: 'application/pdf'}));

                const a = document.createElement('a');
                a.href = downloadUrl;
                a.download = 'Muestra_Actividades_ElementalKidsClub.pdf';
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
                URL.revokeObjectURL(downloadUrl);

                // Update button appearance
                downloadBtn.innerHTML = '<i data-lucide="check-circle" class="w-6 h-6 inline mr-3"></i>¡DESCARGADO!';
                if (typeof lucide !== 'undefined') {
                    lucide.createIcons();
                }
                downloadBtn.classList.remove('bg-brand-yellow', 'hover:bg-yellow-400');
                downloadBtn.classList.add('bg-gray-400', 'cursor-not-allowed');
                downloadBtn.disabled = true;

                // Hide message after 5 seconds
                setTimeout(function() {
                    downloadMessage.classList.add('hidden');
                }, 5000);
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
