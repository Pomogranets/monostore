<?php get_header();

if( have_posts() ) {

    while ( have_posts() ){

        the_post();
    echo "yeah many posts";

    the_post_thumbnail('small_thumbnail',  array( 'class' => 'about-image' ));

        the_title();

        the_content();
      }
    }


get_footer();
?>
