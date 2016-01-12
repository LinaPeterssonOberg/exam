<?php

function cha_after_setup_theme() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'cha' ),
        'footer' => __( 'Footer Menu', 'cha'),
    ) );

    add_theme_support( 'post-formats' , array(
        'image', 'video', 'gallery'
    ) );

    add_theme_support('post-thumbnails');

    add_theme_support('title-tag' );

    add_theme_support('custom-background' );
}
add_action( 'after_setup_theme', 'cha_after_setup_theme' );

function cha_widgets_init() {

    register_sidebar(array(
        'name' => __('Default Sidebar', 'cha' ),
        'id' =>'default-sidebar',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ) );

}
add_action( 'widgets_init', 'cha_widgets_init' );

function cha_enqueue_scripts() {

    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ) );

}
add_action('wp_enqueue_scripts','cha_enqueue_scripts' );

//customizer
require get_template_directory() . '/inc/customizer.php';

//Widgets
require get_template_directory() . '/inc/widgets/init.php';
