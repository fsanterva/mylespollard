<?php seniman_header_choice(); ?>

<!-- CONTENT START
============================================= -->
<section id="content" class="search-page blog-content-wrap clearfix">

	<div class="page-title<?php if(!class_exists( 'Redux' )) { ?> no-option-page<?php } ?>">
		<div class="container">
	        <h3 ><span><?php esc_html_e( 'Search Results', 'seniman' ); ?></span>
	        <?php printf( __( '%s', 'seniman' ), get_search_query() ); ?></h3>
	    </div>
    </div><!-- .page-header -->

	<!-- BLOG START
	============================================= -->
	<div class="blog search-result clearfix">
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
					<?php get_template_part( 'inc/format/content-search', 'no-result' ); ?>

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