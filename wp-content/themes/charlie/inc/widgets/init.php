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

function cha_description_widgets_init() {

    register_widget( 'Description_Widget' );


    register_sidebar(array(
        'name'          => __( 'Description Widget Sidebar', 'cha' ),
        'id'            => 'description-widget-sidebar',
        'before_widget'  => '<div class="description-widget">',
        'after_widget'   => '</div>'
    ) );

}
add_action( 'widgets_init', 'cha_description_widgets_init' );
