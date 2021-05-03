<?php while ( have_posts() ) : the_post();

	$seniman_client_name 	= get_field('client_name');
	$seniman_portfolio_year = get_field('portfolio_year');
	$seniman_project_url 	= get_field('project_url');
	$seniman_portfolio_gallery = get_field('seniman_gallery');

	$category_name = array();
	$category_slugs = array();
	$category_terms = wp_get_object_terms($post->ID, 'portfolio-category');
	if(!empty($category_terms)){
		if(!is_wp_error( $category_terms )){
			foreach($category_terms as $term){
				$category_name[] = $term->name;
				$category_slugs[] = $term->slug;
			}
		}
	}
	$seniman_porto_comas =  join( ", ", $category_name );
	$seniman_porto_space =  join( " ", $category_slugs );
?>

<div class="single-porto-inner-wrap portfolio-chocolat portfolio-style-2-wrap clearfix">
	<div class="container clearfix">

		<div class="portfolio-thumbnail-wrap column column-2of3 clearfix">
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
				else {
					foreach ( $seniman_portfolio_gallery as $porto_gal ) :
					$attachment_id = $porto_gal['ID'];
					$foto_name = $porto_gal['title']; ?>
					<a class="chocolat-image" title="<?php echo sanitize_text_field( $foto_name ); ?>" href="<?php echo esc_url( $porto_gal['url'] ); ?>">
						<img src="<?php echo esc_url($porto_gal['url']); ?>" alt="<?php esc_attr_e( 'gallery', 'seniman' ); ?>">
					</a>
				<?php endforeach;
				}
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
		</div>

		<div class="porto2-detail-wrap column column-3 clearfix">
			<div class="post-title-porto-2 clearfix">
				<h1 class="clearfix">
					<span><?php the_title(); ?></span>
				</h1>
			</div>

			<div class="portfolio-content clearfix">
				<?php the_content(); ?>

				<?php if(have_rows('portfolio_details')): ?>
				<div class="portfolio-details">
					<?php while(have_rows('portfolio_details')):the_row(); 
						$detail_name	= get_sub_field('detail_name');
						$detail_text	= get_sub_field('detail_text');
					?>
					<div class="detail-item">
						<span class="detail-title"><?php echo sanitize_text_field( $detail_name ); ?></span>
						<h5 class="detail-info"><?php echo sanitize_text_field( $detail_text ); ?></h5>
					</div>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>
			</div>
		</div>

	</div>
</div>

<?php endwhile; // end of the loop. ?>

<?php if(class_exists( 'Redux' )) {
	$options						= get_option('seniman_framework');
	$seniman_portfolio_back_link	= $options['portfolio_back_link']; 
	if(!empty($seniman_portfolio_back_link)) { ?>

		<div class="container">
			<div class="back-portfo2">
				<?php $page_back = new WP_Query( array( 'page_id' => $seniman_portfolio_back_link ) );
				if ($page_back->have_posts()) : while($page_back->have_posts()) : $page_back->the_post();
				?>
				<a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Back', 'seniman' ); ?></a>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>
		</div>
	<?php }
} ?>