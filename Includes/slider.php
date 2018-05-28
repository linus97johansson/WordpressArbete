<?php
add_theme_support( 'post-thumbnails' );
function project_featured_type() {

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

'menu_icon'           => 'dashicons-images-alt2', // string (defaults to use the post icon)

'can_export'          => false, // bool (defaults to TRUE)

'delete_with_user'    => false, // bool (defaults to TRUE if the post type supports 'author')

'hierarchical'        => false, // bool (defaults to FALSE)

'has_archive'         => false, // bool|string (defaults to FALSE)

'query_var'           => false, // bool|string (defaults to TRUE - post type name)

'capability_type'     => 'post', // string|array (defaults to 'post')

'map_meta_cap'        => true, // bool (defaults to FALSE)

'rewrite' => array(
'slug'                  => 'featuredItems',
'with_front'            => false,
'pages'                 => false,
'thumbnail'             => true,
'feeds'                 => false,
),
'supports' => array(

/* Post titles ($post->post_title). */
'title',

/* Post content ($post->post_content). */
'editor',
    'thumbnail',

/* Displays the Revisions meta box. If set, stores post revisions in the database. */
'revisions',

/* Displays the Attributes meta box with a parent selector and menu_order input box. */
'page-attributes',

/* Displays the Format meta box and allows post formats to be used with the posts. */
'post-formats',
),

'labels' => array(
'name'               => __( 'Featured Items' ),
'singular_name'      => __( 'Featured Item'),
'menu_name'          => __( 'Featured Items'),
'name_admin_bar'     => __( 'Featured Items'),
'add_new'            => __( 'Add New'),
'add_new_item'       => __( 'Add New Featured Item'),
'edit_item'          => __( 'Edit Featured Item'),
'new_item'           => __( 'New Featured Item'),
'view_item'          => __( 'View Featured Item' ),
'search_items'       => __( 'Search Featured Items'),
'not_found'          => __( 'No Featured Items found'),
'not_found_in_trash' => __( 'No Featured Items found in trash'),
'all_items'          => __( 'All Featured Items'),
)
);

/* Register the post type. */
register_post_type(
'featureditem', // Post type name. Max of 20 characters. Uppercase and spaces not allowed.
$args      // Arguments for post type.
);
}

/* Register custom post types on the 'init' hook. */
add_action( 'init', 'project_featured_type' );