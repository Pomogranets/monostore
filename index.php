<!-- This is your mandatory theme template file. It normally contains a combination of WP function calls (to insert content from the database) and HTML to structure the content -->

<?php /* Template Name: Contact-page */
get_header();

echo '<div id="page">';

if(have_posts()) {

    while ( have_posts() ){

    	echo '<div>';

    	the_post();
    	
    	the_title('<h1>', '</h1><br>');

    	the_content('<p>', '</p>');

        echo '</div>';
    }

} else {
	echo 'Informationen saknas för tillfället.';
}

	wp_reset_postdata();
	get_footer(); 
?>