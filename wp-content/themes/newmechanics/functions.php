<?php

/**
 * Dequeue jQuery Migrate script in WordPress.
 */
function matrix_remove_jquery_migrate( &$scripts) {
    if(!is_admin()) {
        $scripts->remove( 'jquery');
    }
}
add_filter( 'wp_default_scripts', 'matrix_remove_jquery_migrate' );

/**
 * Enqueue scripts and styles.
 */
function matrix_scripts() {
    wp_enqueue_style( 'font-roboto', '//fonts.googleapis.com/css?family=Roboto:100,300,400,400i,700&amp;subset=cyrillic', array(), null );
    wp_enqueue_style( 'app-style', get_template_directory_uri() . '/css/style.min.css', array(), '0.0.1' );

    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', true );
    wp_enqueue_script( 'typed', '//cdn.jsdelivr.net/npm/typed.js@2.0.9', array(), '2.0.9', true );
    wp_enqueue_script( 'app-script', get_template_directory_uri() . '/js/script.min.js', array(), '0.0.1', true );
}
add_action( 'wp_enqueue_scripts', 'matrix_scripts' );

/**
 * Autoload Carbon Fields.
 */
function crb_load() {
    require_once __DIR__ .  '/carbon-fields/vendor/autoload.php';
    \Carbon_Fields\Carbon_Fields::boot();
}
add_action( 'after_setup_theme', 'crb_load' );

/**
 * Add Carbon fields require
 */
function crb_register_custom_fields() {
    // Path to the user-fields file
    require_once __DIR__ . '/inc/post-meta.php';
}
add_action( 'carbon_fields_register_fields', 'crb_register_custom_fields' );