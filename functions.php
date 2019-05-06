<?php

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
add_image_size( 'grid_thumbnail', 300, 300, true );
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
function add_google_fonts() {
      wp_enqueue_style( 'custom-google-fonts', '<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Raleway:400,700,800" rel="stylesheet">', false );
}

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );



?>
