<?php
/**
 * Main Index Template
 *
 * @package ElementalKidsClub
 * @since 1.0.0
 */

get_header();
?>

<main class="py-16 md:py-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-brand-dark mb-6 font-headline tracking-wider uppercase">
                <?php bloginfo('name'); ?>
            </h1>
            <p class="text-xl md:text-2xl text-gray-700 font-sans mb-8">
                <?php bloginfo('description'); ?>
            </p>
            <a href="<?php echo esc_url(ekc_get_option('amazon_url', 'https://www.amazon.es/-/en/dp/B0G1YYTF7V/')); ?>" target="_blank" class="cta-button-3d inline-block px-10 py-4 bg-brand-pink text-white text-2xl font-bold rounded-xl transition duration-300 font-headline tracking-wider border-2 border-brand-dark">
                <i data-lucide="shopping-cart" class="w-6 h-6 inline mr-3"></i> VER EN AMAZON
            </a>
        </div>
    </div>
</main>

<?php
get_footer();
