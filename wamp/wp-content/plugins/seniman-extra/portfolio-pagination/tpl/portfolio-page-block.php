<div class="portfolio-pagination row clearfix">
	<?php $next_post = get_next_post();
	$previous_post = get_previous_post(); ?>

	<div class="prev-portfolio column column-3">
		<h3>
		<?php if ( get_previous_post() ) : ?>
			<a href="<?php echo get_permalink( $previous_post->ID ); ?>"><?php esc_html_e( 'Prev', 'seniman' ); ?></a>
		</h3>
		<?php endif; ?>
	</div>

	<div class="all-portfolio column column-3">
		<h3>
		<?php if(class_exists( 'Redux' )) {
		$options						= get_option('seniman_framework');
		$seniman_portfolio_back_link	= $options['portfolio_back_link']; 
		if(!empty($seniman_portfolio_back_link)) { 

			$page_back = new WP_Query( array( 'page_id' => $seniman_portfolio_back_link ) );
			if ($page_back->have_posts()) : while($page_back->have_posts()) : $page_back->the_post();
			?>
			<a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Back', 'seniman' ); ?></a>
		<?php 
			endwhile; endif; wp_reset_postdata();
			}
		} ?>
		</h3>
	</div>

	<div class="next-portfolio column column-3">
		<h3>
		<?php if ( get_next_post() ) : ?>
			<a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php esc_html_e( 'Next', 'seniman' ); ?></a>
		</h3>
		<?php endif; ?>
	</div>

</div>