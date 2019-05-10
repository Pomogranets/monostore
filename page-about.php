<?php get_header();

if( have_posts() ) {

    while ( have_posts() ){
        the_post();
        ?>

        <h1 class="site-title"><?php the_title(); ?> </h1>

        <?php
        the_post_thumbnail('small_thumbnail',  array( 'class' => 'about-image' ));
        ?>

        <h2 class="subheadline"><?php the_field('subheadline'); ?></h2>

        <div class="site-parag"> <?php the_content(); ?> </div>

        <h2 class="site-title"> <?php the_field('second_title'); ?> </h2>

<?php

    }
};
//Custom Loop - show latest projects
$args = array(
    'post_type'              => 'varumarke',
    'post_status'            => 'publish',
    // 'posts_per_page'         => 3,
);

// The Query
$query = new WP_Query( $args );
?>
  <div class="all-brands">

<?php
if ( $query->have_posts() ) {

    while ( $query->have_posts() ) {

        $query->the_post();

    ?>

    <div class="grid-container">

        <a href=" <?php the_permalink(); ?>">
          <figure class="brand-thumbnail"> <?php the_post_thumbnail('small_thumbnail',  array( 'class' => 'brand-grid' )); ?> </figure>
          <figcaption class="brand-title"> <?php the_title(); ?> </figcaption>
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
