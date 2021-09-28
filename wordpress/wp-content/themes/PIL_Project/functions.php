<?php

function theme_functions()
{

    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'theme_functions');


function add_scripts()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/styles/display.css', NULL, microtime());
    wp_enqueue_script('script', get_template_directory_uri() . '/JS/main.js', NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'add_scripts');
?>
<?php if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'     => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'        => false
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'    => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'    => 'theme-general-settings',
    ));
}
?>