<?php seniman_header_choice(); ?>

<!-- CONTENT WRAPPER
    ============================================= -->

<div id="content" class="<?php echo ($post->post_name == 'blog')? 'clearfix custom-blog-content' : 'clearfix'; ?>">
	
	<?php while ( have_posts() ) : the_post(); 
	
		get_template_part( 'inc/format/content', 'page' );
				
	endwhile; // end of the loop. ?>

</div>
<!-- #content-wrapper end -->
<?php seniman_footer_choice(); ?>
