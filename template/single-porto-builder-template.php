<?php seniman_header_choice();
while ( have_posts() ) : the_post();

/*
Template Name: Portfolio Builder Post
Template Post Type: seniman-portfolio, elementor_library
*/
 ?>

<div class="portfolio-content">
	<?php the_content(); ?>
</div>

<?php endwhile; // end of the loop.
seniman_footer_choice(); ?>