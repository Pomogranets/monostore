<!-- FRONTPAGE FILE -->

<?php get_header(); ?>
	<main class='front-page-body'>
		
	<!-- SLIDER PLUGIN ?? -->

	<?php
	//Welcome text
		echo '<h1>';
			the_title();
		echo '</h1>';

	//Content/Headers/Images
		echo '<div class="front-page-content">';				the_post();

			the_content();
		echo '</div>';
		
		?>

	</main>
<?php get_footer(); ?>