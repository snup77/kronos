<?php

function theme_supports() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'theme_supports');

function custom_theme_styles() {
    wp_enqueue_style('custom-style', get_stylesheet_uri()); // Loads style.css
}
add_action('wp_enqueue_scripts', 'custom_theme_styles');

function custom_theme_scripts() {
    wp_enqueue_script('custom-main', get_template_directory_uri() . '/assets/js/main.js');
}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');

// Callback function for the custom admin page content
function custom_admin_page_content() {
    echo '<h1>Welcome to the Custom Admin Page</h1>';
echo '<p>This is a custom page added to the WordPress admin menu.</p>';
}

function mytheme_register_menus() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu'),
            'footer' => __('Footer Menu') // Optional, more menus
        )
    );
}
add_action('after_setup_theme', 'mytheme_register_menus');