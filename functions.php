<?php

//Load Styles
function load_css(){
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_register_style('main-style', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('main-style');
}

add_action('wp_enqueue_scripts', 'load_css');

//Load Scripts
function load_js(){
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', '4.3.1', true);
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');

//Theme Options
add_theme_support('menus');
add_theme_support('title-tag');

//Menus
register_nav_menus(array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',

));