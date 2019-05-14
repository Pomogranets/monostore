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
//Custom Loop - show latest projects
$args = array(
    'post_type'              => 'konst',
    'post_status'            => 'publish',
    'posts_per_page'         => -1,
);

// The Query
$query = new WP_Query( $args );
?>
  <div class="all-art">

<?php
if ( $query->have_posts() ) {

    while ( $query->have_posts() ) {

        $query->the_post();

    ?>

    <div class="grid-container">

          <figure class="art-thumbnail"> <?php the_post_thumbnail('single_art',  array( 'class' => 'art-grid' )); ?> </figure>
          <figcaption class="art-title"> <?php the_field('material') echo " | " the_field('size')?>  </figcaption>
          <figcaption class="art-title"> <?php the_field('name') ?>  </figcaption>
          <figcaption class="art-title"> <?php the_field('author') echo " | " the_field('year')?>  </figcaption>
    </div>

    <?php
    }

} else {

    echo "There are no posts to be shown";
}

wp_reset_postdata();
?>
    </div>

    <a href="<?php the_permalink(); ?>"><i class="fas fa-arrow-up arrow icon"></i></a>

<?php
get_footer();
?>
