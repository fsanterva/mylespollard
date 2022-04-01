<div class="client-wrap carousel-container clearfix">
	<div class="carousel-wrapper client-inner-content owl-carousel owl-theme">

	<?php foreach ( $clients as $client ) : 
	$client_id = $client['client_img']['id'];

	$client_url = $client['client_img']['url'];

	$client_url = wp_get_attachment_image_src( get_post_thumbnail_id($client_url), 'full');

	$img_url_blog = $client_url;

	$client_img = aq_resize($img_url_blog,  80, 80, true, true, true);	
	if ($client_img) {
 	$client_img = $client_img;
	}
	else {
	$client_id2 = wp_get_attachment_image_src($client_id, 'seniman-client'); 
	$client_img = $client_id2[0];
		}
?>

	<div class="carousel-slide client-content">
		<a href="<?php echo esc_url($client['client_link']['url']); ?>">
			<img src="<?php echo esc_url($client_img); ?>" alt="<?php echo sanitize_text_field($client['client_author']); ?>">
		</a>
	</div>

	<?php endforeach; ?>

	</div>

	<?php if($navigation != 'none') {
		if($navigation == 'dots') { ?>
		<!-- Add Pagination -->
		<div class="client-dot owl-dots carousel-pagination"></div>
		<?php }
		elseif($navigation == 'arrows') { ?>
		<!-- Add Arrows -->
		<div class="client-page client-arrow-nav post-car-arrow-wrap on-bottom clearfix">
		</div>
		<?php }
		else { ?>
		<!-- Add Pagination -->
		<div class="client-dot owl-dots carousel-pagination"></div>
		<!-- Add Arrows -->
		<div class="client-page client-arrow-nav post-car-arrow-wrap on-bottom both-nav clearfix">
		</div>
		<?php }
	} ?>
</div>

<script type="text/javascript">
(function($) {
	'use strict';
	$(document).ready(function() {
		$('.client-wrap .owl-carousel').owlCarousel({
			<?php if($navigation == 'dots') { ?>
				dots: true,
				nav:false,
				dotsContainer: '.client-dot',
				dotsClass: 'owl-dots',
			<?php }
			if($navigation == 'arrows') { ?>
				navContainer: '.client-arrow-nav',
				nav:true,
				dots: false,
				navText: [
					'<div class="carousel-button-prev car-page-arrow"><i class="post-carousel-arrow icon-themify-4"></i></div>',
					'<div class="carousel-button-next car-page-arrow"><i class="post-carousel-arrow icon-themify-3"></i></div>'
					  ],
			<?php }
			if( $navigation == 'arrows-dots') { ?>
				dots: true,
				dotsContainer: '.client-dot',
				dotsClass: 'owl-dots',
				navContainer: '.client-arrow-nav',
				nav:true,
				navText: [
					'<div class="carousel-button-prev car-page-arrow"><i class="post-carousel-arrow icon-themify-4"></i></div>',
					'<div class="carousel-button-next car-page-arrow"><i class="post-carousel-arrow icon-themify-3"></i></div>'
					  ],
			<?php }
			if($navigation == 'none') { ?>
				nav:false,
				dots: false,
			<?php } ?>
				margin: <?php echo $column_gap; ?>,
			<?php if($autoplay == 'use') { ?>
				autoplay: true,
				autoplaySpeed: <?php echo $autoplay_ms; ?>,
				autoplayHoverPause: true,
			<?php } ?>
			<?php if($auto_loop == 'use') { ?>
				loop: true,
			<?php } ?>
				responsive:{
				0:{
					items:<?php echo $choose_column_mobile; ?>
				},
				768:{
					items:<?php echo $choose_column_tablet; ?>
				},
				1025:{
					items:<?php echo $choose_column; ?>
				}
			},
			<?php if($centered_slide == 'use') { ?>
				center: true,
			<?php } ?>
		});
	});
})( jQuery );
</script>