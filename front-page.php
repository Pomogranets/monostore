<!-- FRONTPAGE FILE -->

<?php get_header(); ?>
	
	<main class='front-page-body'>

		<?php
		//Content/Headers/Images
			echo '<div class="front-page-content">';
		
				the_post();

				the_content();
			echo '</div>';

			?>

	</main>

<?php get_footer(); ?>