<?php


function my_theme_enqueue_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    wp_register_script('custom-script', get_stylesheet_directory_uri() . '/js/custom.js', '', '', true);
    wp_enqueue_script('custom-script');
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

    

