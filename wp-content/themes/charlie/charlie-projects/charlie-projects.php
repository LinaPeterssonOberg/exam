<?php

add_action( 'init', 'cha_projects_init' );
/**
 *
 * Register a projects post type
 * where you can add image,title and description of each projects or other content you want display as posttype
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function cha_projects_init() {
    $labels = array(
        'name'               => _x( 'Projects', 'post type general name', 'cha' ),
        'singular_name'      => _x( 'Projects', 'post type singular name', 'cha' ),
        'menu_name'          => _x( 'Projects', 'admin menu', 'cha' ),
        'name_admin_bar'     => _x( 'Post Projects', 'add new on admin bar', 'cha' ),
        'add_new'            => _x( 'Add new', 'Projects', 'cha' ),
        'add_new_item'       => __( 'Add new Projects', 'cha' ),
        'new_item'           => __( 'New Projects', 'cha' ),
        'edit_item'          => __( 'Edit Projects', 'cha' ),
        'view_item'          => __( 'View Projects', 'cha' ),
        'all_items'          => __( 'All Projects', 'cha' ),
        'search_items'       => __( 'Search Projects', 'cha' ),
        'not_found'          => __( 'No Projects found.', 'cha' ),
        'not_found_in_trash' => __( 'No Projects found in Trash.', 'cha' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description: Add new Projects', 'cha' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        //'rewrite' => array( 'slug' => 'employees' ),
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'trackbacks', 'page-attributes' ),
        'taxonomies' => array('category')
    );

    register_post_type( 'projects', $args );

}
