<!-- FRONTPAGE FILE -->

<?php get_header(); ?>
	
	<main class='front-page-body'>

		<?php
		if(have_posts()) {

    		while ( have_posts() ){
		//Content/Headers/Images
				echo '<div class="front-page-content">';

					the_post();

					the_content();
				echo '</div>';
			 }

		}else {
			
			echo 'Informationen saknas för tillfället.';
			
		}
		?>

	</main>

<?php get_footer(); ?>