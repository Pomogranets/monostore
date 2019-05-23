<!-- 404 PAGE -->


<?php get_header(); /* Template Name: 404-page */ ?>

	<main class="error-page-body">
		<h1 class="error-header">404</h1>
		
		<?php
		
		echo '<div class="error-page-content">';
		
				the_post();

				the_content();
		
		echo '</div>';
		
		?>
		
		<!-- <p>
			Tyvärr hittade vi inte den sidan du sökte efter. Du kan antingen gå tillbaka till sidan du kom ifrån, gå till vår startsida eller passa på att kolla in vår fina webbshop!
		</p> -->
		<a href=" <?php get_site_url();?> / "><button class="error-btn" type="button" name="button">Startsida</button></a>
		<a href=" <?php get_site_url();?> ./shop/"><button class="error-btn" type="button" name="button">Webbshop</button></a>
	</main>

<?php get_footer(); ?>