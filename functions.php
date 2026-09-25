<?php
/**
 * Daydreams Massage Jakarta - Functions and Definitions
 *
 * @package Daydreams_Massage_Jakarta
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function daydreams_massage_setup() {
    // Make theme available for translation.
    load_theme_textdomain('daydreams-massage', get_template_directory() . '/languages');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // Enable custom logo support.
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Register Primary Navigation Menu
    register_nav_menus(array(
        'primary' => __('Primary Menu (SPA Smooth Scroll)', 'daydreams-massage'),
        'footer'  => __('Footer Menu', 'daydreams-massage'),
    ));

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
}
add_action('after_setup_theme', 'daydreams_massage_setup');

/**
 * Enqueue scripts and styles.
 */
function daydreams_massage_scripts() {
    // 1. Google Fonts
    wp_enqueue_style(
        'daydreams-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap',
        array(),
        null
    );

    // 2. Font Awesome Icons
    wp_enqueue_style(
        'daydreams-fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        array(),
        '6.5.1'
    );

    // 3. Theme Main Stylesheet
    wp_enqueue_style(
        'daydreams-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );

    // 4. Tailwind CSS (Play CDN for instant styling without npm build tool requirement)
    wp_enqueue_script(
        'daydreams-tailwindcss',
        'https://cdn.tailwindcss.com',
        array(),
        '3.4.1',
        false // in head to prevent FOUC
    );

    // 5. Tailwind Configuration Script
    $tailwind_config = "
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: {
                            800: '#172554',
                            900: '#0f172a',
                            950: '#090d16',
                        },
                        gold: {
                            400: '#fbbf24',
                            500: '#f59e0b',
                            600: '#d97706',
                            700: '#b45309',
                        },
                        wa: {
                            light: '#25D366',
                            dark: '#128C7E',
                        }
                    },
                    fontFamily: {
                        sans: ['\"Plus Jakarta Sans\"', 'sans-serif'],
                        serif: ['\"Playfair Display\"', 'serif'],
                    }
                }
            }
        };
    ";
    wp_add_inline_script('daydreams-tailwindcss', $tailwind_config);
}
add_action('wp_enqueue_scripts', 'daydreams_massage_scripts');

/**
 * Theme Customizer Settings for WhatsApp, Phone, and Brand Info
 */
function daydreams_customize_register($wp_customize) {
    // Section: Daydreams Contact & Booking
    $wp_customize->add_section('daydreams_contact_section', array(
        'title'       => __('Pengaturan Kontak & WhatsApp', 'daydreams-massage'),
        'priority'    => 30,
        'description' => __('Konfigurasi nomor WhatsApp dan info operasional pijat panggilan.', 'daydreams-massage'),
    ));

    // Setting: Nomor WhatsApp Admin 1 (SISKA)
    $wp_customize->add_setting('daydreams_whatsapp_admin1', array(
        'default'           => '62895629139936',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('daydreams_whatsapp_admin1', array(
        'label'       => __('Nomor WhatsApp Admin 1 (SISKA)', 'daydreams-massage'),
        'section'     => 'daydreams_contact_section',
        'type'        => 'text',
    ));

    // Setting: Nomor WhatsApp Admin 2 (Mr.Erik)
    $wp_customize->add_setting('daydreams_whatsapp_admin2', array(
        'default'           => '6285221003849',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('daydreams_whatsapp_admin2', array(
        'label'       => __('Nomor WhatsApp Admin 2 (Mr.Erik)', 'daydreams-massage'),
        'section'     => 'daydreams_contact_section',
        'type'        => 'text',
    ));

    // Setting: Jam Operasional
    $wp_customize->add_setting('daydreams_hours', array(
        'default'           => '24 Jam Nonstop (Senin - Minggu)',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('daydreams_hours', array(
        'label'       => __('Jam Operasional', 'daydreams-massage'),
        'section'     => 'daydreams_contact_section',
        'type'        => 'text',
    ));
}
add_action('customize_register', 'daydreams_customize_register');

/**
 * Helper to retrieve theme options with fallback
 */
function daydreams_get_admin1_number() {
    return preg_replace('/[^0-9]/', '', get_theme_mod('daydreams_whatsapp_admin1', '62895629139936'));
}

function daydreams_get_admin2_number() {
    return preg_replace('/[^0-9]/', '', get_theme_mod('daydreams_whatsapp_admin2', '6285221003849'));
}

function daydreams_get_wa_number() {
    return daydreams_get_admin1_number();
}

function daydreams_get_phone_display() {
    return '+62 895-6291-39936';
}

function daydreams_get_hours() {
    return get_theme_mod('daydreams_hours', '24 Jam Nonstop (Senin - Minggu)');
}

/**
 * Generate standard WhatsApp URL with pre-filled message
 */
function daydreams_get_wa_link($custom_msg = '', $admin = 1) {
    $wa_num = ($admin === 2) ? daydreams_get_admin2_number() : daydreams_get_admin1_number();
    if (empty($custom_msg)) {
        $custom_msg = "Halo Admin Daydreams Massage Jakarta, saya ingin konsultasi / order layanan pijat panggilan 24 jam. Mohon info terapis yang ready,Info website https://daydreamsmassagejakarta.com/.";
    }
    return 'https://api.whatsapp.com/send?phone=' . $wa_num . '&text=' . rawurlencode($custom_msg);
}
