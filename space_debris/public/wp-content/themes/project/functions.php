<?php

 register_nav_menus();

add_theme_support('post-thumbnails');

function my_style(){
    wp_enqueue_style('space-debris',get_stylesheet_uri(),[],'1.0', false);
}
add_action('wp_enqueue_scripts','my_style');


function my_main_js(){
    wp_enqueue_script( 'script', get_template_directory_uri() . '/main.js', array ( 'jquery' ), 1.1, true);
}
add_action('wp_enqueue_scripts','my_main_js');