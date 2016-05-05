<?php

function cha_after_setup_theme() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'cha'),
        'footer' => __('Footer Menu', 'cha'),
    ));

    add_theme_support('post-formats', array(
        'image', 'video', 'gallery'
    ));

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

add_theme_support('custom-background',
    array(
        'default-color' => '2d2d2d',
        'default-image' => get_template_directory_uri() . '/assets/images/background.jpg',
        'default-repeat'     => 'no-repeat',
        'default-position-x' => 'center',
        'default-attachment' => 'fixed',
    )
);

/* WOOCOMMERCE */

add_action( 'after_setup_theme', 'cha_after_setup_theme' );
function woocommerce_support() {

    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'woocommerce_support' );

/* remove breadcrumbs Home/Shop */
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

/*remove sidebar*/
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

/*remove product shop list*/
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

add_filter( 'woocommerce_product_tabs', 'cha_woo_remove_reviews_tab', 98 );

function cha_woo_remove_reviews_tab($tabs) {

    unset( $tabs['reviews'] ); // Remove the reviews tab
    return $tabs;
}

// Display 12 products per page.
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );

/* Sidebars */
function cha_widgets_init() {

    register_sidebar(array(
        'name' => __('Default Sidebar', 'cha' ),
        'id' =>'sidebar-1',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ) );
}

add_action( 'widgets_init', 'cha_widgets_init' );

function cha_enqueue_scripts() {


    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('default-style', get_stylesheet_uri() );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ) );


}
add_action('wp_enqueue_scripts','cha_enqueue_scripts' );

    remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
    remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

    add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
    add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

//wooCommerce

    function my_theme_wrapper_start() {

        echo '<div class="container">';

    }

    function my_theme_wrapper_end() {

        echo '</div>';

    }

    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

//Customizer
require get_template_directory() . '/inc/customizer.php';
//Widgets
require get_template_directory() . '/inc/widgets/init.php';
