<?php


// ACTIVATE THUMBNAIL
add_theme_support('post-thumbnails');


// HEADER IMG
add_theme_support('custom-header');

add_action('after_setup_theme', 'custom_image_sizes');

function custom_image_sizes() {
    
    add_image_size('thumbnail_post', 200, 100, true); 
}

// ACF OPTIONS
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
    'page_title' => 'Options',
    'menu_title' => '',
    'menu_slug' => 'theme-general-settings',
    'capability' => 'edit_posts',
    'redirect' => false
    ));
    acf_add_options_sub_page(array(
    'page_title' => 'Paramètres en tête accueil',
    'menu_title' => 'En tête accueil',
    'parent_slug' => 'theme-general-settings',
));


acf_add_options_sub_page(array(
    'page_title' => '',
    'menu_title' => '',
    'parent_slug' => 'theme-general-settings',
));


acf_add_options_sub_page(array(
    'page_title' => ' ',
    'menu_title' => '',
    'parent_slug' => 'theme-general-settings',
));
}


// NAVIGATION
function register_my_menu() {
    register_nav_menu('menu-principal',__( 'Menu principal' ));
    }
    add_action( 'init', 'register_my_menu' );


    // Register Custom Post Type Testimonial
function create_testimonial_cpt() {

	$labels = array(
		'name' => _x( 'Testimonials', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Testimonial', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Testimonials', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Testimonial', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Testimonial Archives', 'textdomain' ),
		'attributes' => __( 'Testimonial Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Testimonial:', 'textdomain' ),
		'all_items' => __( 'All testimonials', 'textdomain' ),
		'add_new_item' => __( 'Add New Testimonial', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Testimonial', 'textdomain' ),
		'edit_item' => __( 'Edit Testimonial', 'textdomain' ),
		'update_item' => __( 'Update Testimonial', 'textdomain' ),
		'view_item' => __( 'View Testimonial', 'textdomain' ),
		'view_items' => __( 'View testimonials', 'textdomain' ),
		'search_items' => __( 'Search Testimonial', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Testimonial', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'textdomain' ),
		'items_list' => __( 'testimonials list', 'textdomain' ),
		'items_list_navigation' => __( 'testimonials list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter testimonials list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Testimonial', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-universal-access',
		'supports' => array('title', 'editor', 'thumbnail', 'author'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'create_testimonial_cpt', 0 );

// Register Custom Post Type Work
function create_work_cpt() {

	$labels = array(
		'name' => _x( 'Works', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Work', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Works', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Work', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Work Archives', 'textdomain' ),
		'attributes' => __( 'Work Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Work:', 'textdomain' ),
		'all_items' => __( 'All Works', 'textdomain' ),
		'add_new_item' => __( 'Add New Work', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Work', 'textdomain' ),
		'edit_item' => __( 'Edit Work', 'textdomain' ),
		'update_item' => __( 'Update Work', 'textdomain' ),
		'view_item' => __( 'View Work', 'textdomain' ),
		'view_items' => __( 'View Works', 'textdomain' ),
		'search_items' => __( 'Search Work', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Work', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Work', 'textdomain' ),
		'items_list' => __( 'Works list', 'textdomain' ),
		'items_list_navigation' => __( 'Works list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Works list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Work', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-hammer',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'work', $args );

}
add_action( 'init', 'create_work_cpt', 0 );


function create_work_categories_taxonomy() {
    $labels = array(
        'name' => 'Work Categories',
        'singular_name' => 'Work Category',
        'menu_name' => 'Work Categories',
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'rewrite' => array( 'slug' => 'workcategories' ), // Lo slug personalizzato per la tassonomia
    );

    register_taxonomy( 'workcategories', 'work', $args );
}
add_action( 'init', 'create_work_categories_taxonomy' );
