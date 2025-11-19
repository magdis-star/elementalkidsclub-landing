<?php
/**
 * Footer Template
 *
 * @package ElementalKidsClub
 * @since 1.0.0
 */
?>

<!-- Cookie Consent Banner -->
<div id="cookie-banner" class="fixed bottom-0 left-0 right-0 bg-brand-yellow/95 backdrop-blur-sm border-t-4 border-brand-dark shadow-2xl p-4 md:p-6 z-50 hidden">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
        <div class="flex items-start gap-3 flex-1">
            <i data-lucide="cookie" class="w-6 h-6 text-brand-dark flex-shrink-0 mt-1"></i>
            <p class="text-sm md:text-base text-brand-dark font-sans">
                Utilizamos cookies para mejorar tu experiencia en nuestra web. Al continuar navegando, aceptas nuestra
                <a href="<?php echo esc_url(home_url('/politica-de-privacidad/')); ?>" class="underline font-bold hover:text-brand-pink">Política de Privacidad</a>.
            </p>
        </div>
        <button id="accept-cookies" class="px-6 py-3 bg-brand-pink text-white font-bold rounded-lg hover:bg-red-500 transition duration-300 shadow-lg border-2 border-brand-dark font-headline tracking-wider whitespace-nowrap">
            ACEPTAR
        </button>
    </div>
</div>

<!-- FOOTER -->
<footer class="bg-brand-dark py-8">
    <div class="max-w-7xl mx-auto px-6 text-center text-gray-400">
        <p class="text-sm font-sans">
            &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos los derechos reservados.
        </p>
        <p class="text-xs mt-2 font-sans">
            <a href="<?php echo esc_url(ekc_get_option('website_url', 'https://elementalkidsclub.com')); ?>" target="_blank" class="hover:text-brand-yellow transition">
                <?php echo esc_html(parse_url(ekc_get_option('website_url', 'https://elementalkidsclub.com'), PHP_URL_HOST)); ?>
            </a>
            |
            <a href="<?php echo esc_url(home_url('/politica-de-privacidad/')); ?>" class="hover:text-brand-yellow transition">
                Política de Privacidad
            </a>
        </p>
    </div>
</footer>

<!-- Initialize Lucide Icons -->
<script>
    lucide.createIcons();
</script>

<!-- Cookie Consent Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cookieBanner = document.getElementById('cookie-banner');
        const acceptButton = document.getElementById('accept-cookies');

        // Check if user has already accepted cookies
        if (!localStorage.getItem('cookiesAccepted')) {
            cookieBanner.classList.remove('hidden');
        }

        // Handle accept button click
        acceptButton.addEventListener('click', function() {
            localStorage.setItem('cookiesAccepted', 'true');
            cookieBanner.classList.add('hidden');
        });
    });
</script>

<?php wp_footer(); ?>
</body>
</html>
