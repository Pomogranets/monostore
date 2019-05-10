<?php get_header();

if( have_posts() ) {

    while ( have_posts() ){
        the_post();
        ?>

        <h1 class="site-title"><?php the_title(); ?> </h1>

        <div class="site-parag"> <?php the_content(); ?> </div>

<?php
    }
};

get_footer();
?>
