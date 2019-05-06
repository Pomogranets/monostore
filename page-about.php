<?php get_header();

if( have_posts() ) {

    while ( have_posts() ){
        the_post();

        the_post_thumbnail('small_thumbnail',  array( 'class' => 'about-image' ));
?>

          <h1 class="site-title"><?php the_title(); ?> </h1>

          <p class="site-parag"> <?php the_content(); ?> </p>

      </div>

<?php
    } //end of while

} //end of if

wp_reset_postdata();
?>
    </div>
<?php
get_footer(); 
?>
