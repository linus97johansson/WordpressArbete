<?php
add_theme_support('title-tag');
include ('Includes/oppettiderwidget.php');
include ('Includes/menus.php');
include ('includes/slider.php');

/* Functions */

function project_post_type() {

    /* Set up the arguments for the post type. */
    $args = array(

        'public'              => false, // bool (default is FALSE)

        'publicly_queryable'  => true, // bool (defaults to 'public').

        'exclude_from_search' => false, // bool (defaults to 'public')

        'show_in_nav_menus'   => false, // bool (defaults to 'public')

        'show_ui'             => true, // bool (defaults to 'public')

        'show_in_menu'        => true, // bool (defaults to 'show_ui')

        'show_in_admin_bar'   => true, // bool (defaults to 'show_in_menu')

        'menu_position'       => 2, // int (defaults to 25 - below comments)

        'menu_icon'           => 'dashicons-carrot', // string (defaults to use the post icon)

        'can_export'          => true, // bool (defaults to TRUE)

        'delete_with_user'    => false, // bool (defaults to TRUE if the post type supports 'author')

        'hierarchical'        => false, // bool (defaults to FALSE)

        'has_archive'         => false, // bool|string (defaults to FALSE)

        'query_var'           => 'dish', // bool|string (defaults to TRUE - post type name)

        'capability_type'     => 'post', // string|array (defaults to 'post')

        'map_meta_cap'        => true, // bool (defaults to FALSE)

        'rewrite' => array(
            'slug'                  => 'meny',
            'with_front'            => false,
            'pages'                 => false,
            'feeds'                 => false,
        ),
        'supports' => array(

            /* Post titles ($post->post_title). */
            'title',

            /* Post content ($post->post_content). */
            'editor',

            /* Displays the Revisions meta box. If set, stores post revisions in the database. */
            'revisions',

            /* Displays the Attributes meta box with a parent selector and menu_order input box. */
            'page-attributes',

            /* Displays the Format meta box and allows post formats to be used with the posts. */
            'post-formats',
        ),

        'labels' => array(
            'name'               => __( 'Dishes' ),
            'singular_name'      => __( 'Dish'),
            'menu_name'          => __( 'Dishes'),
            'name_admin_bar'     => __( 'Dishes'),
            'add_new'            => __( 'Add New'),
            'add_new_item'       => __( 'Add New Dish'),
            'edit_item'          => __( 'Edit Dish'),
            'new_item'           => __( 'New Dish'),
            'view_item'          => __( 'View Dish' ),
            'search_items'       => __( 'Search Dishes'),
            'not_found'          => __( 'No Dishes found'),
            'not_found_in_trash' => __( 'No Dishes found in trash'),
            'all_items'          => __( 'All Dishes'),
        )
    );

    /* Register the post type. */
    register_post_type(
        'project', // Post type name. Max of 20 characters. Uppercase and spaces not allowed.
        $args      // Arguments for post type.
    );
}

/* Register custom post types on the 'init' hook. */
add_action( 'init', 'project_post_type' );


//Taxonomies

function dish_taxonomies() {
    $labels = array(
        'name'                       => _x( 'Dish Categories', 'Taxonomy General Name', 'portfolio-theme' ),
        'singular_name'              => _x( 'Dish Category', 'Taxonomy Singular Name', 'portfolio-theme' ),
        'menu_name'                  => __( 'Dish Categories', 'portfolio-theme' ),
        'all_items'                  => __( 'All Categories', 'portfolio-theme' ),
        'new_item_name'              => __( 'New Category Name', 'portfolio-theme' ),
        'add_new_item'               => __( 'Add New Dish Category', 'portfolio-theme' ),
        'edit_item'                  => __( 'Edit Dish Category', 'portfolio-theme' ),
        'update_item'                => __( 'Update Dish Category', 'portfolio-theme' ),
        'add_or_remove_items'        => __( 'Add or remove Dish Categories', 'portfolio-theme' ),
        'popular_items'              => __( 'Popular Categories', 'portfolio-theme' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'query_var'                  => 'project-type',
    );



    $price = array(
        'name'                       => _x( 'Dish Price', 'Taxonomy General Name'),
        'singular_name'              => _x( 'Dish Price', 'Taxonomy Singular Name'),
        'menu_name'                  => __( 'Dish Prices'),
        'all_items'                  => __( 'All Prices'),
        'new_item_name'              => __( 'New Skill Name'),
        'add_new_item'               => __( 'Add New Dish Price'),
        'edit_item'                  => __( 'Edit Dish Price'),
        'update_item'                => __( 'Update Dish Price' ),
        'add_or_remove_items'        => __( 'Add or remove Dish Prices'),
        'popular_items'              => __( 'Most Used Prices' ),
    );
    $priceArgs = array(
        'labels'                     => $price,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => false,
        'query_var'                  => 'dish-price',
    );

    register_taxonomy( 'project-Type', array('project'), $args );

    register_taxonomy( 'Price', array('project'), $priceArgs);
}



  add_action( 'init', 'dish_taxonomies' );




?>
