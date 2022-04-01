<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-item'); ?>>

	<div class="featured-video clearfix">
		<?php 
		if ( class_exists( 'acf' ) ) {
			$video_url = get_field('video_url');
			$video_embed = get_field('video_embed');
			$video_file = get_field('video_file');
			
			if($video_url !== ''){ 
				echo wp_oembed_get( esc_url( $video_url ));
			} 

			elseif($video_embed !== '') { 
				echo wp_specialchars_decode( esc_html( $video_embed ) );
			}

			elseif($video_file !== '') {  ?>
			<?php echo do_shortcode( '[video src="'. sanitize_text_field( $video_file ).'"]' ) ?>  
		<?php }
		} ?>
	</div>

	<div class="post-content-wrap">
		<div class="post-content">

			<?php seniman_post_type(); ?>
			
			<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			<div class="meta-wrapper clearfix">
				<span class="author">
					<span class="author-separator"><?php esc_html_e( 'by', 'seniman' ); ?></span>
					<span class="vcard"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"> <?php echo get_the_author_meta( 'display_name' ); ?></a></span>
				</span>
				<span class="date">
					<span><?php esc_html_e( 'posted on', 'seniman' ); ?></span>
					<a href="<?php the_permalink(); ?>">
						<span><?php echo get_the_date('F'); ?></span> <span><?php echo get_the_date('d'); ?></span><?php esc_html_e( ',', 'seniman' ); ?> <span><?php echo get_the_date('Y'); ?></span>
					</a>
				</span>
				<span class="standard-post-categories">
					<?php the_category(', '); ?>
				</span>
			</div>

			<div class="post-text">
				<?php the_excerpt(); ?>
			</div>

			<a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e( 'Continue Reading', 'seniman' ); ?></a>
		</div>
	</div>
</article>