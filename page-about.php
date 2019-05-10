<?php get_header();

if( have_posts() ) {

    while ( have_posts() ){
        the_post();
        ?>

        <h1 class="site-title"><?php the_title(); ?> </h1>

        <?php
        the_post_thumbnail('single_large',  array( 'class' => 'about-image' ));
        ?>

      <div class="side-column">


          <?php if( get_field('subheadline') ): ?>
              <h2><?php the_field('subheadline'); ?></h2>
          <?php endif; ?>

          <p class="site-parag"> <?php the_content(); ?> </p>

      </div>

<?php

    }
};
//Custom Loop - show latest projects
$args = array(
    'post_type'              => 'brands',
    'post_status'            => 'publish',
    'posts_per_page'         => 3,
);

// The Query
$query = new WP_Query( $args );
?>
  <div class="all-grid">

    <h2 class="sub-title"> Varumärken </h2>

<?php
if ( $query->have_posts() ) {

    while ( $query->have_posts() ) {

        $query->the_post();

    ?>

    <div class="grid-container">

        <a href=" <?php the_permalink(); ?>">
          <figure class="project-thumbnail"> <?php the_post_thumbnail('grid_thumbnail',  array( 'class' => 'project-grid' )); ?> </figure>
          <figcaption class="project-title"> <?php the_title(); ?> </figcaption>
        </a>
      </div>

    <?php
    }

} else {

    echo "There are no posts to be shown";
}

wp_reset_postdata();
?>
    </div>
<?php
get_footer();
?>
