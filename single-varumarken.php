<?php get_header();

if( have_posts() ) {

    while ( have_posts() ){

        the_post();
    echo "yes we have many many post";
        the_post_thumbnail('small_thumbnail',  array( 'class' => 'varu-image' )):
        //
        the_title();
        //
        // the_content();
      }
    }


get_footer();
?>
