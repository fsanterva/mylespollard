<?php while ( have_posts() ) : the_post(); 

$seniman_client_name 	= get_field('client_name');
$seniman_portfolio_year = get_field('portfolio_year');
$seniman_project_url 	= get_field('project_url');

$seniman_portfolio_gallery = get_field('seniman_gallery'); ?>

<div class="single-porto-inner-wrap portfolio-chocolat portfolio-style1">

	<div class="container">

		<?php
		if ( has_post_format('gallery') ) {
			if($seniman_portfolio_gallery == 0){ ?>
			<div class="portfolio-thumbnail">
				<?php $seniman_porto_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
				<a class="chocolat-image" title="<?php the_title(); ?>" href="<?php echo esc_url( $seniman_porto_thumb[0] ); ?>">
					<img src="<?php echo esc_url( $seniman_porto_thumb[0] ); ?>" alt="<?php the_title(); ?>">
				</a>
			</div>
			<?php }
			else { ?>
			<div class="standard-carousel-slider portfolio-thumbnail carousel-container">
				<div class="carousel-wrapper owl-carousel owl-theme">
					<?php foreach( $seniman_portfolio_gallery as $porto_gal2 ):
					$attachment_id = $porto_gal2['ID'];
					$foto_name = $porto_gal2['title']; ?>
					<div class="carousel-slide item">
						<a class="chocolat-image" title="<?php echo sanitize_text_field( $foto_name ); ?>" href="<?php echo esc_url( $porto_gal2['url'] ); ?>">
							<img src="<?php echo esc_url( $porto_gal2['url'] ); ?>" alt="<?php echo esc_attr( $porto_gal2['alt'] ); ?>" /> 
						</a> 
					</div>
					<?php endforeach; ?>
				</div>

				<div class="post-car-arrow-wrap on-bottom clearfix">
				</div>
			</div>
			<?php }
		}
		if ( has_post_format('video') ) { ?>
			<div class="featured-video clearfix">
				<?php 
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
				<?php } ?>
			</div>
		<?php }
		if ( !get_post_format() ) { ?>
			<div class="portfolio-thumbnail">
				<?php $seniman_porto_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
				<a class="chocolat-image" title="<?php the_title(); ?>" href="<?php echo esc_url( $seniman_porto_thumb[0] ); ?>">
					<img src="<?php echo esc_url( $seniman_porto_thumb[0] ); ?>" alt="<?php the_title(); ?>">
				</a>
			</div>
		<?php } ?>

		<div class="porfolio-content-wrap clearfix">
			<?php if(have_rows('portfolio_details')) { ?>
				<div class="project-details column column-3 clearfix">
					<div class="page-title">
						<h2><?php the_title(); ?></h2>
					</div>

					<ul>
						<?php while(have_rows('portfolio_details')):the_row(); 
							$detail_name	= get_sub_field('detail_name');
							$detail_text	= get_sub_field('detail_text');
						?>
						<li>
							<p><span><?php echo sanitize_text_field( $detail_name ); ?></span><?php echo sanitize_text_field( $detail_text ); ?></p>
						</li>
						<?php endwhile; ?>
					</ul>
				</div>

				<div class="portfolio-content column column-2of3 clearfix">
					<?php the_content(); ?>
				</div>
			<?php }
			else { ?>
				<div class="page-title clearfix">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="portfolio-content clearfix">
					<?php the_content(); ?>
				</div>
			<?php } ?>
		</div>

		<div class="portfolio-pagination row">
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
		
	</div>
</div>

<?php endwhile; // end of the loop. ?>