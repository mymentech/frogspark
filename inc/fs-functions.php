<?php
// Register custom navigation menus
function frogspark_nav_menus() {

    $locations = array(
        'footer-menu' => __('Footer Navigation', 'frogspark'),
    );
    register_nav_menus($locations);

}

add_action('init', 'frogspark_nav_menus');
add_theme_support( 'post-thumbnails' );
add_image_size( 'blog_image', 900, 450 );