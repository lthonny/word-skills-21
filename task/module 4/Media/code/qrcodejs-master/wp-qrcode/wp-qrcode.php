<?php 
    
    add_action('wp_enqueue_scripts', 'wp_style_theme');

    // style css
    function wp_style_theme() {
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style('base', get_template_directory_uri() . './style.css');
    }