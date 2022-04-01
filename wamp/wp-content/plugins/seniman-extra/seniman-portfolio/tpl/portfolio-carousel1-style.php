<?php global $post; $rand1 = rand(); ?>

<div class="porf-hidetitle-st feature-slider-<?php echo $rand1; ?> carousel-portfolio-slider clearfix">
	<div class="owl-carousel owl-theme">

	<?php
	$order1 = array(
		'posts_per_page' => $post_per_page,
		'post_type' => 'seniman-portfolio',
		'ignore_sticky_posts' => true,
		'cat' => $category,
		'offset' => $offset,
		'orderby' => $orderby
	);

	$sec_hook = new WP_Query( $order1 );

	if ($sec_hook->have_posts()) : while($sec_hook->have_posts()) : $sec_hook->the_post();

	if (has_post_thumbnail()) { 
		$img_url_porto = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
		if($width && $height) {
			$image_portores = aq_resize($img_url_porto[0],  $width , $height, true, true, true);
		}
		else {
			$image_portores = $img_url_porto[0];
		}
	}
	else {
		$image_portores = '';
	}

	$category_name = array();
	$category_terms = wp_get_object_terms($post->ID, 'portfolio-category');
	if(!empty($category_terms)){
		if(!is_wp_error( $category_terms )){
		$category_slugs = array();
			foreach($category_terms as $term){
				$category_name[] = $term->name;
				$category_slugs[] = $term->slug;
			}
		$seniman_porto_comas =  join( ", ", $category_name );
		$seniman_porto_space =  join( " ", $category_slugs );
		}
	}
	?>

	<article class="item portfolio-list-carousel">
		<div class="portfolio-block">

			<div class="portfolio-thumb-img">
				<img src="<?php echo esc_url($image_portores); ?>" alt="" />
				<div class="portfolio-bg-color"></div>

				
					<div class="category-name portfolio-category"><?php echo esc_html($seniman_porto_comas); ?></div>
				

				<a class="inside-img-link" href="<?php the_permalink(); ?>"></a>
			</div>

			<div class="inner-portfolio-content">
			
				<div class="portfolio-content">
					<h2 class="post-title portfolio-loop-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</div>
			
			<!-- end of post-content -->
			</div>
				
		</div>
	</article>
	<!-- owl item end -->
		
	<?php endwhile; wp_reset_postdata(); endif;  ?>
	</div>

	<?php if($navigation != 'none') {
		if($navigation == 'dots') { ?>
		<!-- Add Pagination -->
		<div class="porfo-dot swiper-pagination"></div>
		<?php }
		elseif($navigation == 'arrows') { ?>
		<!-- Add Arrows -->
		<div class="porfo-page post-car-arrow-wrap on-bottom clearfix">
		</div>
		<?php }
		else { ?>
		<!-- Add Pagination -->
		<div class="porfo-dot swiper-pagination"></div>
		<!-- Add Arrows -->
		<div class="porfo-page post-car-arrow-wrap on-bottom clearfix">
		</div>
		<?php }
	} ?>

<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('.carousel-portfolio-slider .owl-carousel').owlCarousel({
    <?php if($auto_loop == 'use') { ?>
		loop: true,
	<?php } ?>
	<?php if($navigation == 'dots' || $navigation == 'arrows-dots') { ?>
		dots: true,
		dotsContainer: '.porfo-dot',
	<?php }
	if($navigation == 'arrows' || $navigation == 'arrows-dots') { ?>
		navContainer: '.porfo-page',
		nav:true,
		navText: [
              '<div class="swiper-button-next post-carousel-arrow"></div>',
              '<div class="swiper-button-prev post-carousel-arrow"></div>'
              ],
	<?php } ?>
   /* margin:<?php echo $column_gap; ?>,*/
    <?php if($autoplay == 'use') { ?>
		autoplay:true,
		autoplayTimeout:<?php echo $autoplay_ms; ?>,
	<?php } ?>
	<?php if($centered_slide == 'use') { ?>
    	center:true,
    <?php } ?>
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:<?php echo $choose_column_mobile; ?>
        },
        1000:{
            items:<?php echo $choose_column_car; ?>
        }
    }
});
});
</script>

</div>