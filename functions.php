<?php

function scripts() {

    wp_register_style('style',get_template_directory_uri().'/dist/app.css', [], 1, 'all');
    wp_enqueue_style('style');
    
    wp_register_script('app',get_template_directory_uri().'/dist/app.js', [], 1, true);
    wp_enqueue_script('app');

}
add_action('wp_enqueue_scripts','scripts');

add_theme_support('menus');

add_theme_support('post-thumbnails');

register_nav_menus(

    array(
        'main-menu' => __('Main Menu', 'theme'),
        'secondary-menu' => __('Secondary Menu', 'theme'),
    )
    );