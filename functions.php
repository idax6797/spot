<?php

function scripts() {

    wp_register_style('style',get_template_directory_uri().'/dist/app.css', [], 1, 'all');
    wp_enqueue_style('style');
    
    wp_register_script('app',get_template_directory_uri().'/dist/app.js', [], 1, true);
    wp_enqueue_script('app');

}
add_action('wp_enqueue_scripts','scripts');

add_theme_support('menus');

register_nav_menus(

    array(
        'main-menu' => __('Main Menu', 'theme'),
        'secondary-menu' => __('Secondary Menu', 'theme'),
    )
    
);

add_theme_support('post-thumbnails');

add_image_size('smallest', 300, 90, true);
add_image_size('largest', 800, 800, true);


add_theme_support('widgets');


register_sidebar( array(
    'name' => 'Footer Sidebar',
    'id' => 'footer-sidebar',
    'description' => 'footer',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );


/**
 * Inspiration from this
 * https://www.codexworld.com/wordpress-how-to-display-breadcrumb-without-plugin/
 */

function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Forside</a>';
    if (is_category() || is_single()) {
        echo '&nbsp;&nbsp;&lt;&nbsp;&nbsp;';
        the_category(' &bull; ');
    }
}