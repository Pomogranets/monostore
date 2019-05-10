<!DOCTYPE html>
<html>
	<head>
		<title>Monostore</title>
		<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('stylesheet_url'); ?>">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Raleway:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <?php wp_head(); ?>
  </head>

  <body>
    <header class="site-header">

      <?php
      if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
      };

      wp_nav_menu( array( 'theme_location' => 'header-menu' ) );

      ?>

    </header>

    <div class="site-container">
