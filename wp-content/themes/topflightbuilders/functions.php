<?php

require_once('wp-bootstrap-navwalker.php');

function topflightbuilders_theme_support() {
    // dynamic title tag support
    add_theme_support('title-tag');

    add_theme_support('custom-logo');

    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'topflightbuilders_theme_support');



function topflightbuilders_menus() {
    $locations = array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu'
    );

    register_nav_menus($locations);
}

add_action('init', 'topflightbuilders_menus');


function topflightbuilders_register_styles() {
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('topflightbuilders-style', get_template_directory_uri() . '/style.css', array('topflightbuilders-bootstrap', 'topflightbuilders-fonts', 'topflightbuilders-fontawesome'), $version, 'all');
    wp_enqueue_style('topflightbuilders-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2', 'all');
    wp_enqueue_style('topflightbuilders-fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap', array(), '1.0', 'all');
    wp_enqueue_style('topflightbuilders-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css', array(), '5.14.0', 'all');
    wp_enqueue_style('topflightbuilders-slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1', 'all');
    wp_enqueue_style('topflightbuilders-slick-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.8.1', 'all');

}
add_action('wp_enqueue_scripts', 'topflightbuilders_register_styles');


function topflightbuilders_register_scripts() {
    $version = wp_get_theme()->get('Version');

    wp_enqueue_script('topflightbuilders-jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
    wp_enqueue_script('topflightbuilders-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js', array(), '4.5.2', true);
    wp_enqueue_script('topflightbuilders-slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1.8.1', true);
    wp_enqueue_script('topflightbuilders-js', get_template_directory_uri() . '/assets/js/script.js', array(), $version, true);

}
add_action('wp_enqueue_scripts', 'topflightbuilders_register_scripts');


/* Disable WordPress Admin Bar for all users */
add_filter('show_admin_bar', '__return_false' );


function topflightbuilders_custom_header_setup() {
    $args = array(
        //'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
        'header-text' => true,
        'default-text-color' => 'fff',
        'width' => 1000,
        'height' => 250,
        'flex-width' => true,
        'flex-height' => true,
        //'video' => true
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'topflightbuilders_custom_header_setup' );


include_once('inc/customize.php');
include_once('inc/widgets.php');

?>