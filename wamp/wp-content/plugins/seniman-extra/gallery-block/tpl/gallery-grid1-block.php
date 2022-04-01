<div class="elementor-image-gallery custom-gallery clearfix">

	<div id="lightgallery" class="gallery gallery-columns-<?php echo $settings['gallery_columns']; ?>">
	<?php

	if($gallery_source == 'gallery_meta_box')  {
		$gal_images = get_field('seniman_gallery');
	}
	else {
		$gal_images = $settings['gallery_block_images'];
	}
	//var_dump($gal_images);

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
			if($image1){
			$image1 = $image1;
			}
			else {
           $image12 = wp_get_attachment_image_src($image['id'], 'seniman-gallery'); 
            $image1 = $image12[0];
		}

	$attachment_meta = wp_get_attachment($image['id']);
	$image_caption = $attachment_meta['caption']; ?>

		<div data-src="<?php echo esc_url($image['url']); ?>" class="<?php echo esc_attr($mobile_choose_column); ?> <?php echo esc_attr($tablet_choose_column); ?> gallery-item" data-sub-html="<?php echo esc_attr( $image_caption ); ?>">
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
		});

	})( jQuery );
	</script>
</div>