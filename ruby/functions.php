<?php

function resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'resources');

function learningWordPress_setup(){
    //Nav menus
    register_nav_menus(array(
        'primary' => __( 'Primary Menu'),
        'footer' => __( 'Footer Menu'),
    ));
    
    //Add Featured Images
    add_theme_support('post-thumbnails');
    add_image_size('thumbnail', 1200, 900, true);
    add_image_size('banner-image', 920, 210, true);
}

add_action('after_setup_theme', 'learningWordpress_setup');