<?php global $post; $rand1 = rand(); ?>
<div class="feature-slider-<?php echo $rand1; ?> elementor-image-gallery custom-gallery clearfix">

	<div id="lightgallery" class="owl-carousel owl-theme gallery">
	<?php
	if($gallery_source == 'gallery_meta_box')  {
		$gal_images = get_field('seniman_gallery');
	}
	else {
		$gal_images = $settings['gallery_block_images'];
	}
	
	if($settings['gallery_rand'] == 'rand') {
		shuffle($gal_images);
	}
	
	foreach ($gal_images as $image ) {
	$image_to_page = get_attachment_link( $image['id'] );
	$img_name = basename( get_attached_file( $image['id'] ));
	if($gallery_image_crop == 'on') {
		$crop = true;
	}
	else {
		$crop = false;
	}
	$image1 = aq_resize($image['url'],  $width , $height, $crop, true, true);
	$attachment_meta = wp_get_attachment($image['id']);
	$image_caption = $attachment_meta['caption']; ?>

		<div data-src="<?php echo esc_url($image['url']); ?>" class="gallery-item" data-sub-html="<?php echo esc_attr( $image_caption ); ?>">
			<div class="item-wrap">
				<figure class="<?php echo sanitize_text_field ( $hover_effect ); ?>">
					<img src="<?php echo esc_url($image1); ?>" alt="<?php echo esc_attr( $img_name ); ?>">
					<figcaption>
						<div class="caption-inside">

							<div class="gallery-icon <?php echo sanitize_text_field ( $icon_hover_effect ); ?> <?php echo sanitize_text_field ( $icon_hover_delay ); ?>">
								<i <?php echo $this->get_render_attribute_string( 'i' ); ?>></i>
							</div>
							<!-- if use title -->
							<h3 class="gallery-caption <?php echo sanitize_text_field ( $title_hover_effect ); ?> <?php echo sanitize_text_field ( $title_hover_delay ); ?>">
								<?php echo esc_attr( $image_caption ); ?>
							</h3>
							<!-- if use title -->

						</div>
					</figcaption>
				</figure>
			</div>
		</div>
		
	<?php }
	?>
	</div>

	<?php if($navigation != 'none') {
		if($navigation == 'dots') { ?>
		<!-- Add Pagination -->
		<div class="post-dot owl-dots clearfix"></div>
		<?php }
		elseif($navigation == 'arrows') { ?>
		<!-- Add Arrows -->
		<div class="post-page-car car-arrow-wrap on-bottom clearfix">
		</div>
		<?php }
		else { ?>
		<!-- Add Pagination -->
		<div class="post-dot owl-dots clearfix"></div>
		<!-- Add Arrows -->
		<div class="post-page-car car-arrow-wrap on-bottom both-nav clearfix">
		</div>
		<?php }
	} ?>

	<script type="text/javascript">
	(function($) {
	'use strict';

		$(document).ready(function() {

			$("#lightgallery").lightGallery({
				mode: '<?php echo esc_attr($light_box_transition); ?>',
				download: true,
				<?php if($fullscreen_lightbox != 'on') { ?>
				fullScreen: false,
				<?php } ?>
			}); 

			$('.feature-slider-<?php echo $rand1; ?> .owl-carousel').owlCarousel({
			<?php if($auto_loop == 'use') { ?>
				loop: true,
			<?php } ?>
			<?php if($navigation == 'dots') { ?>
				dots: true,
				nav:false,
				dotsContainer: '.post-dot',
				dotsClass: 'owl-dots',
			<?php }
			if($navigation == 'arrows') { ?>
				navContainer: '.post-page-car',
				nav:true,
				dots: false,
				navText: [
						'<div class="swiper-button-prev car-page-arrow"></div>',
              			'<div class="swiper-button-next car-page-arrow"></div>'
					  ],
			<?php }
			if( $navigation == 'arrows-dots') { ?>
				dots: true,
				dotsContainer: '.post-dot',
				dotsClass: 'owl-dots',
				navContainer: '.post-page-car',
				nav:true,
				navText: [
						'<div class="swiper-button-prev car-page-arrow"></div>',
              			'<div class="swiper-button-next car-page-arrow"></div>'
					  ],
			<?php }
			if($navigation == 'none') { ?>
				nav:false,
				dots: false,
			<?php } ?>
			margin:<?php echo $column_gap; ?>,
			<?php if($autoplay == 'use') { ?>
				autoplay:true,
				autoplayTimeout:<?php echo $autoplay_ms; ?>,
			<?php } ?>
			<?php if($centered_slide == 'use') { ?>
				center:true,
			<?php } ?>
			responsive:{
				0:{
					items:<?php echo $choose_column_mobile; ?>
				},
				768:{
					items:<?php echo $choose_column_tablet; ?>
				},
				1024:{
					items:<?php echo $choose_column; ?>
				}
			}
		})

		});

	})( jQuery );
	</script>
</div>