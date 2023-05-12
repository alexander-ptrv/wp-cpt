<?php
/*
Plugin Name: My Post Types
Description: Custom post types and taxonomies plugin.
*/


/* Projects custom post type with REST API support */

add_action( 'init', 'project_cpt' );
function project_cpt() {

    $labels = array(
        'name'               => _x( 'Projects', 'post type general name' ),
        'singular_name'      => _x( 'Project', 'post type singular name' ),
        'menu_name'          => _x( 'Projects', 'admin menu' ),
        'name_admin_bar'     => _x( 'Project', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'project' ),
        'add_new_item'       => __( 'Add New Project' ),
        'new_item'           => __( 'New Project' ),
        'edit_item'          => __( 'Edit Project' ),
        'view_item'          => __( 'View Project' ),
        'all_items'          => __( 'All Projects' ),
        'search_items'       => __( 'Search Projects' ),
        'parent_item_colon'  => __( 'Parent Projects:' ),
        'not_found'          => __( 'No project found.' ),
        'not_found_in_trash' => __( 'No project found in Trash.' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'menu_position'      => 5,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projects' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'show_in_rest'       => true,
        'rest_base'          => 'projects',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' )
    );

  register_post_type( 'project', $args );
}


/* Technologies */

add_action( 'init', 'technologies_taxonomy' );
function technologies_taxonomy() {

  $labels = array(
    'name'              => _x( 'Technologies', 'taxonomy general name' ),
    'singular_name'     => _x( 'Technology', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Technologies' ),
    'all_items'         => __( 'All Technologies' ),
    'parent_item'       => __( 'Parent Technology' ),
    'parent_item_colon' => __( 'Parent Technology:' ),
    'edit_item'         => __( 'Edit Technology' ),
    'update_item'       => __( 'Update Technology' ),
    'add_new_item'      => __( 'Add New Technology' ),
    'new_item_name'     => __( 'New Technology Name' ),
    'menu_name'         => __( 'Technologies' ),
  );

  $args = array(
    'hierarchical'          => true,
    'labels'                => $labels,
    'show_ui'               => true,
    'show_admin_column'     => true,
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'technologies' ),
    'show_in_rest'          => true,
    'rest_base'             => 'technologies',
  );

  register_taxonomy( 'technology', array( 'project' ), $args );
}


/* Tools */

add_action( 'init', 'tools_taxonomy' );
function tools_taxonomy() {

  $labels = array(
    'name'              => _x( 'Tools', 'taxonomy general name' ),
    'singular_name'     => _x( 'Tool', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Tools' ),
    'all_items'         => __( 'All Tools' ),
    'parent_item'       => __( 'Parent Tool' ),
    'parent_item_colon' => __( 'Parent Tool:' ),
    'edit_item'         => __( 'Edit Tool' ),
    'update_item'       => __( 'Update Tool' ),
    'add_new_item'      => __( 'Add New Tool' ),
    'new_item_name'     => __( 'New Tool Name' ),
    'menu_name'         => __( 'Tools' ),
  );

  $args = array(
    'hierarchical'          => true,
    'labels'                => $labels,
    'show_ui'               => true,
    'show_admin_column'     => true,
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'tools' ),
    'show_in_rest'          => true,
    'rest_base'             => 'tools',
  );

  register_taxonomy( 'tool', array( 'project' ), $args );
}


/* Features */

add_action( 'init', 'features_taxonomy' );
function features_taxonomy() {

  $labels = array(
    'name'              => _x( 'Features', 'taxonomy general name' ),
    'singular_name'     => _x( 'Feature', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Features' ),
    'all_items'         => __( 'All Features' ),
    'parent_item'       => __( 'Parent Feature' ),
    'parent_item_colon' => __( 'Parent Feature:' ),
    'edit_item'         => __( 'Edit Feature' ),
    'update_item'       => __( 'Update Feature' ),
    'add_new_item'      => __( 'Add New Feature' ),
    'new_item_name'     => __( 'New Feature Name' ),
    'menu_name'         => __( 'Features' ),
  );

  $args = array(
    'hierarchical'          => true,
    'labels'                => $labels,
    'show_ui'               => true,
    'show_admin_column'     => true,
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'features' ),
    'show_in_rest'          => true,
    'rest_base'             => 'features',
  );

  register_taxonomy( 'feature', array( 'project' ), $args );
}

?>