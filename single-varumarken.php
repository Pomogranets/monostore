<?php get_header();

if( have_posts() ) {

    while ( have_posts() ){

        the_post();
    echo "yes we have post";
        // the_post_thumbnail():
        //
        // the_title();
        //
        // the_content();
      }
    }


get_footer();
?>
