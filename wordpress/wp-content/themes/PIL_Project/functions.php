<?php 

function theme_functions() {
    
    add_theme_support( 'title-tag');
    add_theme_support('menus');
    
}

add_action( 'after_setup_theme', 'theme_functions' );


function add_scripts(){
wp_enqueue_style('style', get_template_directory_uri() . '/assets/styles/display.css', NULL, microtime(), all);
wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/fonts/II Vorkurs/stylesheet.css', NULL, microtime(), all);
wp_enqueue_script('script', get_template_directory_uri() . '/JS/main.js',NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'add_scripts');
?>