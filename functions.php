<?php

//add custom post type for ART PAGE
function art_post_type() {

    $args = array(

        'public' => true,

        'menu_icon' => 'dashicons-portfolio',

        'hierarchical' => false,

        'has_archive' => true,

        'supports' => array('title','editor','author','thumbnail', 'custom-fields'),

        'taxonomies' => array( 'category', ' tag' ),

        'labels' => array(
          'name'               => __( 'Art',                   'project-textdomain' ),
          'singular_name'      => __( 'Art',                    'project-textdomain' ),
          'menu_name'          => __( 'Arts',                   'project-textdomain' ),
          'name_admin_bar'     => __( 'Arts',                   'project-textdomain' ),
          'add_new'            => __( 'Add New',                    'project-textdomain' ),
          'add_new_item'       => __( 'Add New Art',            'project-textdomain' ),
          'edit_item'          => __( 'Edit Art',               'project-textdomain' ),
          'new_item'           => __( 'New Art',                'project-textdomain' ),
          'view_item'          => __( 'View Art',               'project-textdomain' ),
          'search_items'       => __( 'Search Art',            'project-textdomain' ),
          'not_found'          => __( 'No Art found',          'project-textdomain' ),
          'not_found_in_trash' => __( 'No Art found in trash', 'project-textdomain' ),
          'all_items'          => __( 'All Art',               'project-textdomain' ),
        )
    );

    /* Register the post type. */
    register_post_type('Art', $args );
}
/* Register custom post types on the 'init' hook. */
add_action( 'init', 'art_post_type' );

//add custom post type for BRANDS
function brands_post_type() {

    $args = array(

        'public' => true,

        'menu_icon' => 'dashicons-portfolio',

        'hierarchical' => false,

        'has_archive' => true,

        'supports' => array('title','editor','author','thumbnail', 'custom-fields'),

        'taxonomies' => array( 'category', ' tag' ),

        'labels' => array(
          'name'               => __( 'Brand',                   'project-textdomain' ),
          'singular_name'      => __( 'Brand',                    'project-textdomain' ),
          'menu_name'          => __( 'Brands',                   'project-textdomain' ),
          'name_admin_bar'     => __( 'Brands',                   'project-textdomain' ),
          'add_new'            => __( 'Add New',                    'project-textdomain' ),
          'add_new_item'       => __( 'Add New Brand',            'project-textdomain' ),
          'edit_item'          => __( 'Edit Brand',               'project-textdomain' ),
          'new_item'           => __( 'New Brand',                'project-textdomain' ),
          'view_item'          => __( 'View Brand',               'project-textdomain' ),
          'search_items'       => __( 'Search Brand',            'project-textdomain' ),
          'not_found'          => __( 'No Brand found',          'project-textdomain' ),
          'not_found_in_trash' => __( 'No Brand found in trash', 'project-textdomain' ),
          'all_items'          => __( 'All Brand',               'project-textdomain' ),
        )
    );

    /* Register the post type. */
    register_post_type('Brand', $args );
}
/* Register custom post types on the 'init' hook. */
add_action( 'init', 'brands_post_type' );


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
add_image_size( 'extra_large', 700, 700, true );

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

//add google fonts
// function add_google_fonts() {
//       wp_enqueue_style( 'custom-google-fonts', '<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Raleway:400,700,800" rel="stylesheet">', false );
// }
//
// add_action( 'wp_enqueue_scripts', 'add_google_fonts' );


//Register our sidebars and widgetized areas.

function my_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer',
		'id'            => 'footer'
	) );

}
add_action( 'widgets_init', 'my_widgets_init' );

?>
