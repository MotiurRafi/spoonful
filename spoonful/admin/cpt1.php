<?php

function single_image_post_type()
{
    $labels = array(
        'name'               => _x('Single Images', 'post type general name'),
        'singular_name'      => _x('Single Image', 'post type singular name'),
        'menu_name'          => _x('Single Images', 'admin menu'),
        'name_admin_bar'     => _x('Single Image', 'add new on admin bar'),
        'add_new'            => _x('Add New', 'Single Image'),
        'add_new_item'       => __('Add New Single Image'),
        'new_item'           => __('New Single Image'),
        'edit_item'          => __('Edit Single Image'),
        'view_item'          => __('View Single Image'),
        'all_items'          => __('All Single Images'),
        'search_items'       => __('Search Single Images'),
        'parent_item_colon'  => __('Parent Single Images:'),
        'not_found'          => __('No single images found.'),
        'not_found_in_trash' => __('No single images found in Trash.'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'single-image'),
        'capability_type'    => 'post',
        'has_archive'        => false, // You can set this to true if you want an archive page
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-format-image', // Change this to the desired Dashicon
        'supports'           => array('title', 'thumbnail'), // Only support a single image
    );

    register_post_type('single_image', $args);
}
add_action('init', 'single_image_post_type');

// ----------------------------------
// ----------------------------------
// ----------------------------------
// ----------------------------------

function single_text_info_post_type()
{
    $labels = array(
        'name'               => _x('Single Text/Info', 'post type general name'),
        'singular_name'      => _x('Single Text/Info', 'post type singular name'),
        'menu_name'          => _x('Single Text/Info', 'admin menu'),
        'name_admin_bar'     => _x('Single Text/Info', 'add new on admin bar'),
        'add_new'            => _x('Add New', 'Single Text/Info'),
        'add_new_item'       => __('Add New Single Text/Info'),
        'new_item'           => __('New Single Text/Info'),
        'edit_item'          => __('Edit Single Text/Info'),
        'view_item'          => __('View Single Text/Info'),
        'all_items'          => __('All Single Text/Info'),
        'search_items'       => __('Search Single Text/Info'),
        'parent_item_colon'  => __('Parent Single Text/Info:'),
        'not_found'          => __('No single text/info found.'),
        'not_found_in_trash' => __('No single text/info found in Trash.'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'single-text-info'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-editor-textcolor', // Change this to the desired Dashicon
        'supports'           => array('title', 'editor', 'thumbnail'), // Support for title and content
    );

    register_post_type('single_text_info', $args);
}
add_action('init', 'single_text_info_post_type');


// ----------------------------------
// ----------------------------------
// ----------------------------------
// ----------------------------------

// Custom Post Type registration
function hero_slide_post_type()
{
    $labels = array(
        'name'               => _x('Hero Slides', 'post type general name'),
        'singular_name'      => _x('Hero Slide', 'post type singular name'),
        'menu_name'          => _x('Hero Slides', 'admin menu'),
        'name_admin_bar'     => _x('Hero Slide', 'add new on admin bar'),
        'add_new'            => _x('Add New', 'Hero Slide'),
        'add_new_item'       => __('Add New Hero Slide'),
        'new_item'           => __('New Hero Slide'),
        'edit_item'          => __('Edit Hero Slide'),
        'view_item'          => __('View Hero Slide'),
        'all_items'          => __('All Hero Slides'),
        'search_items'       => __('Search Hero Slides'),
        'parent_item_colon'  => __('Parent Hero Slides:'),
        'not_found'          => __('No hero slides found.'),
        'not_found_in_trash' => __('No hero slides found in Trash.'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'hero-slide'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-images-alt',
        'supports'           => array('title', 'thumbnail'),
    );

    register_post_type('hero_slide', $args);
}

// Hook functions to WordPress
add_action('init', 'hero_slide_post_type');

// -------------------------
// -------------------------
// -------------------------
// -------------------------

function custom_blogs_post_type()
{
    $labels = array(
        'name'               => _x('Blogs', 'post type general name'),
        'singular_name'      => _x('Blog', 'post type singular name'),
        'menu_name'          => _x('Blogs', 'admin menu'),
        'name_admin_bar'     => _x('Blog', 'add new on admin bar'),
        'add_new'            => _x('Add New', 'Blog'),
        'add_new_item'       => __('Add New Blog'),
        'new_item'           => __('New Blog'),
        'edit_item'          => __('Edit Blog'),
        'view_item'          => __('View Blog'),
        'all_items'          => __('All Blogs'),
        'search_items'       => __('Search Blogs'),
        'parent_item_colon'  => __('Parent Blogs:'),
        'not_found'          => __('No blogs found.'),
        'not_found_in_trash' => __('No blogs found in Trash.'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'blogs'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-welcome-write-blog', // You can change this to any Dashicon
        'supports'           => array('title', 'editor', 'thumbnail', 'author', 'comments', 'tags'),
        'taxonomies'         => array('category'), // Enable tags for this post type
    );

    register_post_type('blogs', $args);
}
add_action('init', 'custom_blogs_post_type');


// -----------------------
// -----------------------
// -----------------------
// -----------------------

function chefs_post_type()
{
    $labels = array(
        'name'               => _x('Chefs', 'post type general name'),
        'singular_name'      => _x('Chef', 'post type singular name'),
        'menu_name'          => _x('Chefs', 'admin menu'),
        'name_admin_bar'     => _x('Chef', 'add new on admin bar'),
        'add_new'            => _x('Add New', 'Chef'),
        'add_new_item'       => __('Add New Chef'),
        'new_item'           => __('New Chef'),
        'edit_item'          => __('Edit Chef'),
        'view_item'          => __('View Chef'),
        'all_items'          => __('All Chefs'),
        'search_items'       => __('Search Chefs'),
        'parent_item_colon'  => __('Parent Chefs:'),
        'not_found'          => __('No chefs found.'),
        'not_found_in_trash' => __('No chefs found in Trash.'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'chefs'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-groups', // You can change this to any Dashicon
        'supports'           => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('chefs', $args);
}

add_action('init', 'chefs_post_type');

// -----------------------
// -----------------------
// -----------------------
// -----------------------
// -----------------------


// Register Custom Post Type
function about_info_cpt()
{
    $labels = array(
        'name'                  => _x('About Info', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('About Info', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('About Info', 'text_domain'),
        'all_items'             => __('All About Info', 'text_domain'),
        'view_item'             => __('View About Info', 'text_domain'),
        'add_new_item'          => __('Add New About Info', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'edit_item'             => __('Edit About Info', 'text_domain'),
        'update_item'           => __('Update About Info', 'text_domain'),
        'search_items'          => __('Search About Info', 'text_domain'),
    );

    $args = array(
        'label'                 => __('About Info', 'text_domain'),
        'description'           => __('About Info Description', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'taxonomies'            => array('post_tag'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-businessman', // You can change the icon
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );

    register_post_type('about_info', $args);
}

// Hook into the 'init' action
add_action('init', 'about_info_cpt');



// -----------------------
// -----------------------
// -----------------------
// -----------------------

// function register_product_post_type()
// {
//     $labels = array(
//         'name'                  => _x('Products', 'Post Type General Name', 'text_domain'),
//         'singular_name'         => _x('Product', 'Post Type Singular Name', 'text_domain'),
//         'menu_name'             => __('Products', 'text_domain'),
//         'name_admin_bar'        => __('Product', 'text_domain'),
//         'archives'              => __('Product Archives', 'text_domain'),
//         'attributes'            => __('Product Attributes', 'text_domain'),
//         'parent_item_colon'     => __('Parent Product:', 'text_domain'),
//         'all_items'             => __('All Products', 'text_domain'),
//         'add_new_item'          => __('Add New Product', 'text_domain'),
//         'add_new'               => __('Add New', 'text_domain'),
//         'new_item'              => __('New Product', 'text_domain'),
//         'edit_item'             => __('Edit Product', 'text_domain'),
//         'update_item'           => __('Update Product', 'text_domain'),
//         'view_item'             => __('View Product', 'text_domain'),
//         'view_items'            => __('View Products', 'text_domain'),
//         'search_items'          => __('Search Product', 'text_domain'),
//         'not_found'             => __('Not found', 'text_domain'),
//         'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
//         'featured_image'        => __('Featured Image', 'text_domain'),
//         'set_featured_image'    => __('Set featured image', 'text_domain'),
//         'remove_featured_image' => __('Remove featured image', 'text_domain'),
//         'use_featured_image'    => __('Use as featured image', 'text_domain'),
//         'insert_into_item'      => __('Insert into item', 'text_domain'),
//         'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
//         'items_list'            => __('Items list', 'text_domain'),
//         'items_list_navigation' => __('Items list navigation', 'text_domain'),
//         'filter_items_list'     => __('Filter items list', 'text_domain'),
//     );
//     $args = array(
//         'label'                 => __('Product', 'text_domain'),
//         'description'           => __('Product Description', 'text_domain'),
//         'labels'                => $labels,
//         'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'),
//         'taxonomies'            => array('category', 'post_tag'),
//         'hierarchical'          => false,
//         'public'                => true,
//         'show_ui'               => true,
//         'show_in_menu'          => true,
//         'menu_position'         => 5,
//         'menu_icon'             => 'dashicons-products',
//         'show_in_admin_bar'     => true,
//         'show_in_nav_menus'     => true,
//         'can_export'            => true,
//         'has_archive'           => true,
//         'exclude_from_search'   => false,
//         'publicly_queryable'    => true,
//         'capability_type'       => 'post',
//     );
//     register_post_type('product', $args);
// }
// add_action('init', 'register_product_post_type', 0);


// -----------------------
// -----------------------
// -----------------------
// -----------------------

// Register Awards Custom Post Type
function register_awards_post_type()
{
    $labels = array(
        'name'               => 'Awards',
        'singular_name'      => 'Award',
        'menu_name'          => 'Awards',
        'all_items'          => 'All Awards',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Award',
        'edit_item'          => 'Edit Award',
        'new_item'           => 'New Award',
        'view_item'          => 'View Award',
        'search_items'       => 'Search Awards',
        'not_found'          => 'No awards found',
        'not_found_in_trash' => 'No awards found in Trash',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-awards', // You can choose a different dashicon
        'supports'            => array('title', 'editor', 'thumbnail'),
        'has_archive'         => true,
        'rewrite'             => array('slug' => 'awards'),
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
    );

    register_post_type('awards', $args);
}

// Hook into the 'init' action
add_action('init', 'register_awards_post_type');


// -----------------------
// -----------------------
// -----------------------
// -----------------------

function register_features_cards_cpt()
{
    $labels = array(
        'name'               => _x('Features Cards', 'Post Type General Name', 'text_domain'),
        'singular_name'      => _x('Features Card', 'Post Type Singular Name', 'text_domain'),
        'menu_name'          => __('Features Cards', 'text_domain'),
        'name_admin_bar'     => __('Features Card', 'text_domain'),
        'archives'           => __('Features Card Archives', 'text_domain'),
        'attributes'         => __('Features Card Attributes', 'text_domain'),
        'parent_item_colon'  => __('Parent Features Card:', 'text_domain'),
        'all_items'          => __('All Features Cards', 'text_domain'),
        'add_new_item'       => __('Add New Features Card', 'text_domain'),
        'add_new'            => __('Add New', 'text_domain'),
        'new_item'           => __('New Features Card', 'text_domain'),
        'edit_item'          => __('Edit Features Card', 'text_domain'),
        'update_item'        => __('Update Features Card', 'text_domain'),
        'view_item'          => __('View Features Card', 'text_domain'),
        'view_items'         => __('View Features Cards', 'text_domain'),
        'search_items'       => __('Search Features Card', 'text_domain'),
        'not_found'          => __('Not found', 'text_domain'),
        'not_found_in_trash' => __('Not found in Trash', 'text_domain'),
    );

    $args = array(
        'label'               => __('Features Card', 'text_domain'),
        'description'         => __('Features Card Description', 'text_domain'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'thumbnail'),
        'taxonomies'          => array(),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-welcome-widgets-menus',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );

    register_post_type('features_card', $args);
}
add_action('init', 'register_features_cards_cpt', 0);


// -----------------------
// -----------------------
// -----------------------
// -----------------------

// Register the custom post type
function register_opening_times_cpt()
{
    $labels = array(
        'name'               => _x('Opens and Closes', 'Post Type General Name', 'text_domain'),
        'singular_name'      => _x('Opens and Close', 'Post Type Singular Name', 'text_domain'),
        'menu_name'          => __('Opens and Closes', 'text_domain'),
        'name_admin_bar'     => __('Opens and Close', 'text_domain'),
        'archives'           => __('Opens and Close Archives', 'text_domain'),
        'attributes'         => __('Opens and Close Attributes', 'text_domain'),
        'parent_item_colon'  => __('Parent Opens and Close:', 'text_domain'),
        'all_items'          => __('All Opens and Closes', 'text_domain'),
        'add_new_item'       => __('Add New Opens and Close', 'text_domain'),
        'add_new'            => __('Add New', 'text_domain'),
        'new_item'           => __('New Opens and Close', 'text_domain'),
        'edit_item'          => __('Edit Opens and Close', 'text_domain'),
        'update_item'        => __('Update Opens and Close', 'text_domain'),
        'view_item'          => __('View Opens and Close', 'text_domain'),
        'view_items'         => __('View Opens and Closes', 'text_domain'),
        'search_items'       => __('Search Opens and Close', 'text_domain'),
        'not_found'          => __('Not found', 'text_domain'),
        'not_found_in_trash' => __('Not found in Trash', 'text_domain'),
        'featured_image'     => __('Featured Image', 'text_domain'),
        'set_featured_image' => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image' => __('Use as featured image', 'text_domain'),
        'insert_into_item'   => __('Insert into Opens and Close', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this Opens and Close', 'text_domain'),
        'items_list'         => __('Opens and Closes list', 'text_domain'),
        'items_list_navigation' => __('Opens and Closes list navigation', 'text_domain'),
        'filter_items_list'  => __('Filter Opens and Closes list', 'text_domain'),
    );

    $args = array(
        'label'               => __('Opens and Close', 'text_domain'),
        'description'         => __('Opens and Close Description', 'text_domain'),
        'labels'              => $labels,
        'supports'            => array('title'),
        'public'              => true,
        'menu_icon'           => 'dashicons-clock',
        'has_archive'         => true,
        'rewrite'             => array('slug' => 'opening-times'),
    );

    register_post_type('opening_time', $args);
}
add_action('init', 'register_opening_times_cpt', 0);

// -----------------------
// -----------------------
// -----------------------
// -----------------------
// -----------------------