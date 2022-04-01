<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-item'); ?>>

	<?php
	if ( class_exists( 'acf' ) ) {
	$images = get_field('seniman_gallery');
	if( $images){ ?>

	<div class="slider-wrapper">
		<div class="standard-carousel-slider post-gallery carousel-container">
			<div class="carousel-wrapper owl-carousel owl-theme">
				<?php foreach( $images as $image ): ?>
				<div class="carousel-slide">
					<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />  
				</div>
				<?php endforeach; ?>
			</div>

			<div class="post-car-arrow-wrap on-bottom clearfix">
			</div>
		</div>
	</div>
	<?php } 
	}
	else { 
		if ( has_post_thumbnail()) { ?>
		<div class="post-thumb">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>

				<div class="sakola-overlay"></div>
			</a>
		</div><!-- thumbnail-->
		<?php }
	} ?>

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