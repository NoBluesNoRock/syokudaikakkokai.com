<?php

/**
 * Theme Setup
 */
function syokudai_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

    // Register Menus
    register_nav_menus(array(
        'global' => 'Global Navigation',
        'footer' => 'Footer Navigation',
    ));
}
add_action('after_setup_theme', 'syokudai_setup');

/**
 * Enqueue Scripts and Styles
 */
function syokudai_scripts() {
    wp_enqueue_style('syokudai-style', get_stylesheet_uri());
    wp_enqueue_script('syokudai-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'syokudai_scripts');

/**
 * Register Custom Post Types
 */
function syokudai_register_cpts() {
    // Info
    register_post_type('info', array(
        'labels' => array('name' => 'Info', 'singular_name' => 'Info'),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-megaphone',
        'show_in_rest' => true,
    ));

    // Discography (Music & Goods)
    register_post_type('discography', array(
        'labels' => array('name' => 'Music & Goods', 'singular_name' => 'Item'),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-album',
        'show_in_rest' => true,
    ));

    // Member
    register_post_type('member', array(
        'labels' => array('name' => 'Members', 'singular_name' => 'Member'),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-groups',
        'show_in_rest' => true,
    ));
}
add_action('init', 'syokudai_register_cpts');
