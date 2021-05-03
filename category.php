<?php seniman_header_choice(); ?>

<!-- CONTENT START
============================================= -->
<section id="content" class="blog-content-wrap clearfix">

	<?php
	if(class_exists( 'Redux' )) {
	$options 				= get_option('seniman_framework');
	$archive_hide_title 	= $options['archive_hide_title'];

	if($archive_hide_title == 'show_title') { ?>
	<div class="page-title">
		<div class="container">
			<h3 ><span><?php esc_html_e( 'Category', 'seniman' ); ?></span>
			<?php single_cat_title(); ?></h3>
		</div>
	</div><!-- .page-header -->
	<?php }
	}
	else { ?>
	<div class="page-title no-option-page">
		<div class="container">
			<h3 ><span><?php esc_html_e( 'Category', 'seniman' ); ?></span>
			<?php single_cat_title(); ?></h3>
		</div>
	</div><!-- .page-header -->
	<?php } ?>

	<!-- BLOG START
	============================================= -->
	<div class="blog category wrapper clearfix">
		<div class="container">
			<div class="row">

				<!-- BLOG LOOP START
				============================================= -->
				<div class="blog-section column column-2of3">

					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); 

						get_template_part( 'inc/format/loop', get_post_format() );

						endwhile; ?>
						
					<?php else : ?>

					<?php get_template_part( 'inc/format/content', 'no-result' ); ?>

					<?php endif; ?>

					<?php seniman_content_nav($pages = '', $range = 2); ?>
				
				</div>
				<!-- BLOG LOOP END -->

			<?php get_sidebar(); ?>

			</div><!-- row -->
		</div><!-- container -->
	</div><!-- search-result -->

</section>
<!-- CONTENT END -->

<?php seniman_footer_choice(); ?>
