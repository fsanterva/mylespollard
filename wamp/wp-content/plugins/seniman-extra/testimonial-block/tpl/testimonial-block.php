<div class="testimonial-wrap carousel-container clearfix">
	<div class="carousel-wrapper testimonial-inner-content owl-carousel owl-theme<?php if($navigation == 'arrows' || $navigation == 'arrows-dots') { ?> on-arrow<?php } ?>">

<?php foreach ( $testimonials as $testimonial ) :

	$testi_id = $testimonial['testi_img']['id'];
	$testi_img = $testimonial['testi_img']['url'];
	$testi_img = wp_get_attachment_image_src( get_post_thumbnail_id($testi_img), 'full');
	$testi_img_res = aq_resize($testi_img, $width , $height, true, true, true);

		if(($testi_img_res)) {
			$testi_img_res = $testi_img;
		}
		else {
		$image12 = wp_get_attachment_image_src($testi_id, 'seniman-testi'); 
         $testi_img_res = $image12[0];
		}

 ?>
	<div class="carousel-slide testimonial-content">
		<p><?php echo balancetags($testimonial['testi_text']); ?></p>

		<div class="testimonial-details clearfix">

			<div class="testimonial-image">
				<img src="<?php echo esc_url($testi_img_res); ?>" alt="<?php echo sanitize_text_field($testimonial['testi_author']); ?>">
			</div>

			<div class="testimonial-detail-inner">
			<h5 class="testi-author"><?php echo sanitize_text_field($testimonial['testi_author']); ?></h5>
			<?php if(!empty($testimonial['testi_author_job'])){ ?>
			<cite class="testi-job">
			<?php echo sanitize_text_field( $testimonial['testi_author_job'] ); ?>
			</cite>
			<?php } ?>
			</div>
		</div>
	
	</div>

	<?php endforeach; ?>

	</div>

	<?php if($navigation != 'none') {
		if($navigation == 'dots') { ?>
		<!-- Add Pagination -->
		<div class="testi-dot owl-dots carousel-pagination"></div>
		<?php }
		elseif($navigation == 'arrows') { ?>
		<!-- Add Arrows -->
		<div class="testi-page testi-arrow-nav post-car-arrow-wrap on-side clearfix">
		</div>
		<?php }
		else { ?>
		<!-- Add Pagination -->
		<div class="testi-dot owl-dots carousel-pagination"></div>
		<!-- Add Arrows -->
		<div class="testi-page testi-arrow-nav post-car-arrow-wrap on-side both-nav clearfix">
		</div>
		<?php }
	} ?>
</div>

<script type="text/javascript">
(function($) {
	'use strict';
	$(document).ready(function() {
		$('.testimonial-wrap .owl-carousel').owlCarousel({
			<?php if($navigation == 'dots') { ?>
				dots: true,
				nav:false,
				dotsContainer: '.testi-dot',
				dotsClass: 'owl-dots',
			<?php }
			if($navigation == 'arrows') { ?>
				navContainer: '.testi-arrow-nav',
				nav:true,
				dots: false,
				navText: [
					'<div class="carousel-button-prev car-page-arrow"><i class="post-carousel-arrow icon-themify-4"></i></div>',
					'<div class="carousel-button-next car-page-arrow"><i class="post-carousel-arrow icon-themify-3"></i></div>'
					  ],
			<?php }
			if( $navigation == 'arrows-dots') { ?>
				dots: true,
				dotsContainer: '.testi-dot',
				dotsClass: 'owl-dots',
				navContainer: '.testi-arrow-nav',
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