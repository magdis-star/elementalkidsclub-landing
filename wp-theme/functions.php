<?php
/**
 * Elemental Kids Club Theme Functions
 *
 * @package ElementalKidsClub
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function elementalkidsclub_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('customize-selective-refresh-widgets');

    // Add editor styles
    add_editor_style('style.css');
}
add_action('after_setup_theme', 'elementalkidsclub_setup');

/**
 * Enqueue Scripts and Styles
 */
function elementalkidsclub_scripts() {
    // Preconnect to Google Fonts
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';

    // Enqueue Google Fonts
    wp_enqueue_style(
        'elementalkidsclub-fonts',
        'https://fonts.googleapis.com/css2?family=Bangers&family=Inter:wght@400;600;800&display=swap',
        array(),
        null
    );

    // Enqueue Tailwind CSS (CDN)
    wp_enqueue_script(
        'tailwindcss',
        'https://cdn.tailwindcss.com',
        array(),
        null,
        false
    );

    // Enqueue Lucide Icons
    wp_enqueue_script(
        'lucide-icons',
        'https://unpkg.com/lucide@latest',
        array(),
        null,
        true
    );

    // Enqueue theme stylesheet
    wp_enqueue_style(
        'elementalkidsclub-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Enqueue custom scripts
    wp_enqueue_script(
        'elementalkidsclub-scripts',
        get_template_directory_uri() . '/assets/js/scripts.js',
        array('lucide-icons'),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'elementalkidsclub_scripts');

/**
 * Add Tailwind Config to Head
 */
function elementalkidsclub_tailwind_config() {
    ?>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'headline': ['Bangers', 'cursive'],
                        'sans': ['Inter', 'sans-serif'],
                    },
                    colors: {
                        'brand-bg': '#E5E7EB',
                        'brand-yellow': '#FAD02E',
                        'brand-pink': '#F43F5E',
                        'brand-blue': '#3B82F6',
                        'brand-dark': '#1F2937',
                    }
                }
            }
        }
    </script>
    <?php
}
add_action('wp_head', 'elementalkidsclub_tailwind_config', 5);

/**
 * WordPress Customizer Settings
 */
function elementalkidsclub_customize_register($wp_customize) {

    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'elementalkidsclub'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('hero_title', array(
        'default' => '¿BUSCAS HORAS DE DIVERSIÓN INTELIGENTE LEJOS DE LAS PANTALLAS?',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_title', array(
        'label' => __('Hero Title', 'elementalkidsclub'),
        'section' => 'hero_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('hero_description', array(
        'default' => 'Nuestro cuaderno combina Juegos de Lógica, Pasatiempos Entretenidos y Retos Educativos para niños de 8 a 12 años, garantizando que el tiempo libre sea de calidad.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('hero_description', array(
        'label' => __('Hero Description', 'elementalkidsclub'),
        'section' => 'hero_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('hero_image', array(
        'default' => get_template_directory_uri() . '/images/image1.jpg',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
        'label' => __('Hero Image', 'elementalkidsclub'),
        'section' => 'hero_section',
        'settings' => 'hero_image',
    )));

    // Amazon Settings
    $wp_customize->add_section('amazon_section', array(
        'title' => __('Amazon & Links', 'elementalkidsclub'),
        'priority' => 31,
    ));

    $wp_customize->add_setting('amazon_url', array(
        'default' => 'https://www.amazon.es/-/en/dp/B0G1YYTF7V/',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('amazon_url', array(
        'label' => __('Amazon Product URL', 'elementalkidsclub'),
        'section' => 'amazon_section',
        'type' => 'url',
    ));

    $wp_customize->add_setting('website_url', array(
        'default' => 'https://elementalkidsclub.com',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('website_url', array(
        'label' => __('Website URL', 'elementalkidsclub'),
        'section' => 'amazon_section',
        'type' => 'url',
    ));

    // Benefits Section
    $wp_customize->add_section('benefits_section', array(
        'title' => __('Benefits Section', 'elementalkidsclub'),
        'priority' => 32,
    ));

    $wp_customize->add_setting('benefits_image', array(
        'default' => get_template_directory_uri() . '/images/image2.jpg',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'benefits_image', array(
        'label' => __('Benefits Image', 'elementalkidsclub'),
        'section' => 'benefits_section',
        'settings' => 'benefits_image',
    )));

    // Interior Section
    $wp_customize->add_section('interior_section', array(
        'title' => __('Interior Preview Section', 'elementalkidsclub'),
        'priority' => 33,
    ));

    $wp_customize->add_setting('interior_image', array(
        'default' => get_template_directory_uri() . '/images/image3.jpg',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'interior_image', array(
        'label' => __('Interior Preview Image', 'elementalkidsclub'),
        'section' => 'interior_section',
        'settings' => 'interior_image',
    )));
}
add_action('customize_register', 'elementalkidsclub_customize_register');

/**
 * Helper function to get customizer setting with fallback
 */
function ekc_get_option($option_name, $default = '') {
    return get_theme_mod($option_name, $default);
}
