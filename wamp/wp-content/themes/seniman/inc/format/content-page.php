<article id="page-<?php the_ID(); ?>" <?php post_class( 'page'); ?>>

	
	<div class="container page-title-wrap">
		<h1><?php the_title(); ?></h1>
	</div>

	<div class="page-content wrapper clearfix">
		 <div class="container">
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
			     
			<div class="page-comment  clearfix">
				<?php 
					if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 
					if ( comments_open() || '0' != get_comments_number() ) comments_template(); 
				?>
			</div>
		</div> 
	</div><!-- page-content --> 

</article><!-- #page<?php the_ID(); ?> -->