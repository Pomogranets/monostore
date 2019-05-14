<?php get_header();

if( have_posts() ) {

    while ( have_posts() ){

        the_post();

        the_post_thumbnail('large',  array( 'class' => 'brand-image' ));

        ?>

        <h1 class="brand-title"><?php the_title(); ?> </h1>

        <div class="brand-parag"> <?php the_content(); ?> </div>

        <a class="brand-btn" href=" <?php the_field('link'); ?>"> Till Hemsida </a>

<?php
      }
    }

get_footer();
?>
