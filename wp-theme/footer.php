<?php
/**
 * Footer Template
 *
 * @package ElementalKidsClub
 * @since 1.0.0
 */
?>

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
        </p>
    </div>
</footer>

<!-- Initialize Lucide Icons -->
<script>
    lucide.createIcons();
</script>

<?php wp_footer(); ?>
</body>
</html>
