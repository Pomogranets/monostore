<?php

//add custom post type for ART PAGE
function konst_post_type() {

    $args = array(

        'public' => true,

        'menu_icon' => 'dashicons-format-image',

        'hierarchical' => false,

        'has_archive' => true,

        'supports' => array('title','editor','author','thumbnail', 'custom-fields'),

        'taxonomies' => array( 'category', ' tag' ),

        'labels' => array(
          'name'               => __( 'Konst',                   'project-textdomain' ),
          'singular_name'      => __( 'Konst',                    'project-textdomain' ),
          'menu_name'          => __( 'Konst',                   'project-textdomain' ),
          'name_admin_bar'     => __( 'Konst',                   'project-textdomain' ),
          'add_new'            => __( 'Add New',                'project-textdomain' ),
          'add_new_item'       => __( 'Add New Konst',            'project-textdomain' ),
          'edit_item'          => __( 'Edit Konst',               'project-textdomain' ),
          'new_item'           => __( 'New Konst',                'project-textdomain' ),
          'view_item'          => __( 'View Konst',               'project-textdomain' ),
          'search_items'       => __( 'Search Konst',            'project-textdomain' ),
          'not_found'          => __( 'No Konst found',          'project-textdomain' ),
          'not_found_in_trash' => __( 'No Konst found in trash', 'project-textdomain' ),
          'all_items'          => __( 'All Konst',               'project-textdomain' ),
        )
    );

    /* Register the post type. */
    register_post_type('konst', $args );
}
/* Register custom post types on the 'init' hook. */
add_action( 'init', 'konst_post_type' );

//add custom post type for BRANDS
function varumarken_post_type() {

    $args = array(

        'public' => true,

        'menu_icon' => 'dashicons-store',

        'hierarchical' => false,

        'has_archive' => true,

        'supports' => array('title','editor','author','thumbnail', 'custom-fields'),

        'taxonomies' => array( 'category', ' tag' ),

        'labels' => array(
          'name'               => __( 'Varumarken',                   'project-textdomain' ),
          'singular_name'      => __( 'Varumarken',                    'project-textdomain' ),
          'menu_name'          => __( 'Varumarken',                   'project-textdomain' ),
          'name_admin_bar'     => __( 'Varumarken',                   'project-textdomain' ),
          'add_new'            => __( 'Add New',                    'project-textdomain' ),
          'add_new_item'       => __( 'Add New Varumarken',            'project-textdomain' ),
          'edit_item'          => __( 'Edit Varumarken',               'project-textdomain' ),
          'new_item'           => __( 'New Varumarken',                'project-textdomain' ),
          'view_item'          => __( 'View Varumarken',               'project-textdomain' ),
          'search_items'       => __( 'Search Varumarken',            'project-textdomain' ),
          'not_found'          => __( 'No Varumarken found',          'project-textdomain' ),
          'not_found_in_trash' => __( 'No Varumarken found in trash', 'project-textdomain' ),
          'all_items'          => __( 'All Varumarken',               'project-textdomain' ),
        )
    );

    /* Register the post type. */
    register_post_type('varumarken', $args );
}
/* Register custom post types on the 'init' hook. */
add_action( 'init', 'varumarken_post_type' );


//this creates the custom menu items
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


//This just adds the theme support
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats' );

//this adds image size rules
add_image_size( 'header_logo', 100, 100, true );
add_image_size( 'small_thumbnail', 300, 300, true );
add_image_size( 'single_art', 420, 420, true );
add_image_size( 'thumbnail_large', 750, 250, true);

//Adding a custom logo
function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 50,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

//changing the class of the custom logo
add_filter('get_custom_logo','change_logo_class');

function change_logo_class($html) {
	$html = str_replace('class="custom-logo"', 'class="main-logo"', $html);
  $html = str_replace('class="custom-logo-link"', 'class="main-logo-link"', $html);
	return $html;
}

//Register our sidebars and widgetized areas.

function my_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer',
		'id'            => 'footer'
	) );

//woocommerce support
function customtheme_add_woocommerce_support()
 {
add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );
}

add_action( 'widgets_init', 'my_widgets_init' );

function my_contact_init() {

  register_sidebar( array(
    'name'          => 'Contact',
    'id'            => 'contact'
  ) );

}
add_action( 'widgets_init', 'my_contact_init' );
