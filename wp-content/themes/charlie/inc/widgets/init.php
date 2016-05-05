<?php
/*
     *$args = array('name'=>'Footer-Sidebar',
     *'before_widget' => '<div class="ftr-widget">',
     *'after_widget' => '</div><span class="specailShadow"></span>',
     *'before_title' => '<h3>',
     *'after_title' => '</h3>',
     *);
     *register_sidebar($args);
     *
     * Then in your widget you'll extract these arguments from the sidebar to use in the output of your widget instance.
     *
     * noticing above example, this is how you insert $args in functions. or in more clear way:
     *
     * http://stackoverflow.com/questions/17768968/whats-the-meaning-of-before-widget-after-widget
     */
//Description widget
require get_template_directory() . '/inc/widgets/description-widget.php';
require get_template_directory() . '/inc/widgets/contact-us-widget.php';



function cha_register_widgets_init() {

    register_widget( 'Description_Widget' );
    register_widget( 'Contact_Us_Widget' );


    $sidebars = array(
        'description-widget-sidebar' => __( 'Description Widget Sidebar', 'cha' ),
        'text-widget-sidebar' => __( 'Text Widget Sidbar', 'cha' ),
        'service-widget-left-sidebar' => __( 'Left Sidebar, Title & Text', 'cha' ),
        'service-widget-right-sidebar' => __( 'Right Sidebar, Title & Text', 'cha' ),
        'text-widget-contact-us-widget-sidebar' => __( 'Contact Us Description', 'cha' ),
        'contact-us-widget-sidebar' => __( 'Contact Us Widget Sidebar', 'cha' ),
        'company-adress-widget-sidebar' => __( 'Company adress Widget Sidebar', 'cha' )
    );

    foreach ( $sidebars as $id => $name ) {
        register_sidebar(array(
            'name' => $name,
            'id' => $id,
            'before_widget' => '',
            'after_widget' => '',
            'description' => 'Charlie Theme'
        ) );
    }
}
add_action( 'widgets_init', 'cha_register_widgets_init' );


function cha_widget_scripts() {
    wp_enqueue_media();
    wp_enqueue_script( 'cha-widget-js' , get_template_directory_uri() . '/assets/js/widgets.js', array( 'jquery'),'1.0', true );
}
add_action( 'admin_enqueue_scripts', 'cha_widget_scripts');
