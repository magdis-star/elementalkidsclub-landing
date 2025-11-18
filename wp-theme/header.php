<?php
/**
 * Header Template
 *
 * @package ElementalKidsClub
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class('notebook-background text-brand-dark font-sans'); ?>>
<?php wp_body_open(); ?>

<!-- Navegación y Cabecera -->
<header class="bg-white/95 backdrop-blur-sm shadow-lg sticky top-0 z-50 border-b-4 border-brand-yellow">
    <nav class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <a href="<?php echo esc_url(ekc_get_option('website_url', 'https://elementalkidsclub.com')); ?>" target="_blank" class="text-3xl md:text-4xl text-brand-dark flex items-center font-extrabold font-headline tracking-wider leading-none">
            <i data-lucide="sparkles" class="w-7 h-7 md:w-8 md:h-8 inline mr-2 text-brand-pink"></i>
            <?php bloginfo('name'); ?>
        </a>
        <a href="<?php echo esc_url(ekc_get_option('amazon_url', 'https://www.amazon.es/-/en/dp/B0G1YYTF7V/')); ?>" target="_blank" class="px-4 md:px-5 py-2 bg-brand-pink text-white text-sm md:text-base font-bold rounded-full hover:bg-red-500 transition duration-300 shadow-md border-2 border-brand-dark/30 font-headline tracking-wider cta-button-3d" style="box-shadow: 0 3px 0 0 #A1102A;">
            COMPRAR →
        </a>
    </nav>
</header>
