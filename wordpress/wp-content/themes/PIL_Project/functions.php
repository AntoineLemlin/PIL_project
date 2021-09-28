<?php 

function theme_functions() {
    
    add_theme_support( 'title-tag' );

    add_theme_support('custom-logo');
    
}

add_action( 'after_setup_theme', 'theme_functions' );


function add_scripts(){
wp_enqueue_style('style', get_template_directory_uri() . '/assets/styles/display.css', NULL, microtime(), all);
wp_enqueue_script('script', get_template_directory_uri() . '/JS/main.js',NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'add_scripts');


function theme_menus(){

    $locations = array(
        'primary' => 'Main Pages Menu in Header',
        'social' => 'Social Media Links Menu in Sidebar'
    );
    register_nav_menus($locations);

}

add_action('init', 'theme_menus');


?>