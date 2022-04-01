<?php $rand_grid_porfo = rand(); ?>

<div id="some-<?php echo esc_attr($rand_grid_porfo); ?>" class="portfolio-grid-block porf-hidetitle-st clearfix">

	<?php if($use_filter == 'use') { ?>
	<div class="filter-wraper">
		<div id="mobile-filter-id" class="mobile-filter container clearfix">
			<button id="filter-icon">
			<span class="bar bar-1"></span>
			<span class="bar bar-2"></span>
			<span class="bar bar-3"></span>
			<span class="bar bar-4"></span>
			</button>
		</div>
		<?php echo '<ul id="portfolio-filter" class="filters container '. esc_attr($filter_style) .' clearfix">';
		echo '<li class="activeFilter"><a data-filter="*" href="#" class="filter-btn">All</a></li>';
		$args = array( 'taxonomy' => 'portfolio-category' );
		$cat_lists = get_categories( $args );

		foreach ( $cat_lists as $cat_list ) {
			$category_name = $cat_list->name;
			$category_slug = $cat_list->slug;
			echo '<li><a data-filter=".'. sanitize_text_field( $category_slug ) .'" href="#"  class="filter-btn">' . sanitize_text_field( $category_name ) . '</a></li>';
		}  

		echo '</ul>'; ?>
	</div>
	<?php } ?><!-- #portfolio-filter end -->

	<div class="portfolio-block-wrap grid-template<?php if($portfolio_pagination_type == 'portfolio_pagination_infinite') { ?> porto-grid-wrap-<?php echo esc_attr($loop_infinite_class); } ?> column-<?php echo sanitize_text_field($choose_column); ?> clearfix">

		<?php 

			//var_dump($category);
			if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
			elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
			else { $paged = 1; }
			if(empty($category)) {
				$seniman_grid_args = array(
				'post_type'			=> 'seniman-portfolio',
				'posts_per_page'	=> $post_per_page,
				'paged'          	=> $paged,
				'ignore_sticky_posts' => true,
				'offset' => $offset,
				'orderby' => $orderby
				);
			}
			else {
				$seniman_grid_args = array(
				'post_type'			=> 'seniman-portfolio',
				'posts_per_page'	=> $post_per_page,
				'paged'          	=> $paged,
				'ignore_sticky_posts' => true,
				'tax_query' => array(
					array(
						'taxonomy' => 'portfolio-category',
						'terms'    => $category,
					),
				),
				'offset' => $offset,
				'orderby' => $orderby
				);
			}
			$seniman_grid = new WP_Query($seniman_grid_args);
			if ($seniman_grid->have_posts()) : while($seniman_grid->have_posts()) : $seniman_grid->the_post(); 
			$img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
			if($hover_alt_image == 'use') {
				$portfolio_alternative_image = get_field('portfolio_alternative_image');
			}
			if($portfolio_image_crop == 'on') {
				$crop = true;
			}
			else {
				$crop = false;
			}
			$image1 = aq_resize($img_url[0],  $width, $height, $crop, true, true);
			if($image1){
			$image1 = $image1;
			}
			else {
            $image1 = wp_get_attachment_image_src( get_post_thumbnail_id(), 'seniman-portfolio' );
            $image1 = $image1[0];
			}
			if($hover_alt_image == 'use') {
				$image2 = aq_resize($portfolio_alternative_image,  $width , $height, $crop, true, true);
			}

			global $post;
			$category_name = array();
			$category_terms = get_the_terms($post->ID, 'portfolio-category');
			if(!empty($category_terms)){
				if(!is_wp_error( $category_terms )){
				$category_slugs = array();
					foreach($category_terms as $term){
						$category_name[] = $term->name;
						$category_slugs[] = $term->slug;
					}
			$porto_comas =  join( ", ", $category_name );
			$porto_space =  join( " ", $category_slugs );
				}
			}
		?>

		<div class="portfo-block-item grid-item <?php echo esc_attr($mobile_choose_column); ?> <?php echo esc_attr($tablet_choose_column); ?> <?php echo sanitize_text_field($porto_space); ?>">
			<div class="item-wrap">
				<a href="<?php the_permalink(); ?>">
				<figure class="<?php echo sanitize_text_field ( $hover_effect ); ?>">
					<img src="<?php echo esc_url( $image1 ); ?>" alt="<?php the_title(); ?>" width="<?php echo sanitize_text_field( $width ); ?>" height="<?php echo sanitize_text_field( $height ); ?>">
					<figcaption <?php if($hover_alt_image == 'use') { ?>style="background-image: url(<?php echo esc_url($image2); ?>);"<?php } ?>>
						<div class="caption-inside">

							<!-- if use title -->
							<h3 class="portfolio-loop-title <?php echo sanitize_text_field ( $title_hover_effect ); ?> <?php echo sanitize_text_field ( $title_hover_delay ); ?>">
								<?php the_title(); ?>
							</h3>
							<!-- if use title -->

							<!-- if use category -->
							<h5 class="portfolio-category <?php echo sanitize_text_field ( $category_hover_effect ); ?> <?php echo sanitize_text_field ( $category_hover_delay ); ?>"><?php echo sanitize_text_field($porto_comas); ?></h5>
							<!-- if use category -->

						</div>
					</figcaption>
				</figure>
				</a>
			</div>
		</div>

		<?php endwhile;  endif; ?>
	
	</div>

	<?php
	$pages = '';
	$range = 2;
	$showitems = ($range * 2)+1;
	if($pages == '')
	{
		$pages = $seniman_grid->max_num_pages;
		if(!$pages)
		{
			$pages = 1;
		}
	}
	if($portfolio_pagination_type == 'portfolio_pagination_number') {				 
		if(1 != $pages)
		{
			if($use_shadow_pagination != 'on') { 
			echo "<div class='navigation-paging pagination-num no-shadow clearfix'>";
			}
			else {
			echo "<div class='navigation-paging pagination-num clearfix'>";
			}
				echo "<div class='container'>";
					if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>First</a>";
					if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

					for ($i=1; $i <= $pages; $i++)
					{
						if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
						{
							echo ($paged == $i)? "<span class='btn current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='btn inactive' >".$i."</a>";
						}
					}

					if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
					if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last</a>";
				echo "</div>\n";
			echo "</div>\n";
		 }
	}
	elseif($portfolio_pagination_type == 'portfolio_pagination_nexprev') {
		if(1 != $pages) { ?>
		<nav class="navigation-paging pagination pagination-page-template clearfix">
			<div class="container">
				<div class="post-navigation nav-previous pull-left">
					<?php next_posts_link( $pagination_prev_text, $seniman_grid->max_num_pages ); ?>
				</div>
				<?php if ( get_previous_posts_link() ) : ?>
				<div class="post-navigation nav-next pull-right">
					<?php echo get_previous_posts_link( esc_html__( $pagination_next_text, 'mandala' ) ); ?>
				</div>
				<?php endif; ?>
			</div>
		</nav>
	<?php }
	}
	elseif ($portfolio_pagination_type == 'portfolio_pagination_none') {
		echo '';
	} ?>

	<?php if($portfolio_pagination_type == 'portfolio_pagination_infinite') { ?>
	<div class="container clearfix">
		<?php
		if($use_shadow_pagination != 'on') { ?>
		<div class="navigation-paging infinite-wrap no-shadow <?php echo esc_attr($load_style); ?> clearfix">
		<?php }
		else { ?>
		<div class="navigation-paging infinite-wrap <?php echo esc_attr($load_style); ?> clearfix">
		<?php } ?>
			<div id="load-more-loop-grid-1-<?php echo esc_attr( $loop_infinite_class ); ?>" class="infinite-button">
				<?php next_posts_link( '', $seniman_grid->max_num_pages ); ?>
			</div>
			<button id="load-infinite-loop-grid11" class="btn"><?php echo sanitize_text_field( $loop_infinite_text ); ?></button>
		</div>
	</div>
	<?php } ?>

</div>
	<?php if($portfolio_pagination_type == 'portfolio_pagination_infinite') {
	if(!empty($loop_infinite_load_img['url'])) {
		$loader_img = esc_url( $loop_infinite_load_img['url'] );
	}
	else {
		$loader_img = get_template_directory_uri() . '/img/loader.gif';
	}
	}

	$hor_si = $caption_horizontal["size"];
	$hor_un = $caption_horizontal["unit"]; 

	$ver_si = $caption_vertical["size"];
	$ver_un = $caption_vertical["unit"]; ?>
	<script type="text/javascript">
	(function($) {
	'use strict';

		$(document).ready(function(){

				$('#some-<?php echo esc_attr($rand_grid_porfo); ?> figcaption .caption-inside').css('transform', 'translate(-<?php echo esc_attr($ver_si); echo esc_attr($ver_un); ?>, -<?php echo esc_attr($hor_si); echo esc_attr($hor_un); ?>)');

				var $grid = $('.grid-template').imagesLoaded( function() {
					// init Masonry after all images have loaded
					$grid.isotope({
						transitionDuration: '0.65s',
						initLayout: true,
						columnWidth: '.grid-item',
						itemSelector: '.grid-item',
						fitWidth: true,
						stagger: 30,
					});
				});

				<?php if($portfolio_pagination_type == 'portfolio_pagination_infinite') { ?>
				var $container = $('.porto-grid-wrap-<?php echo esc_attr($loop_infinite_class); ?>');

				// Infinite Scroll
				$container.infinitescroll({
				loading: {
				finishedMsg: 'There is no more',
				img: "<?php echo $loader_img; ?>",
				msgText: 'loading',
				speed: 'normal'
					},

				state: {
				isDone: false
				},
					navSelector  : '#load-more-loop-grid-1-<?php echo esc_attr( $loop_infinite_class ); ?>', 
					nextSelector : '#load-more-loop-grid-1-<?php echo esc_attr( $loop_infinite_class ); ?> a', 
					itemSelector : '.porto-grid-wrap-<?php echo esc_attr($loop_infinite_class); ?> .grid-item',

				},
				function( newElements ) {
					var $newElems = $( newElements ).css({ opacity: 0 });
					$newElems.imagesLoaded(function(){
						$newElems.animate({ opacity: 1 });
						$container.isotope( 'appended', $newElems, true );
					});
					$('.grid-template').css('margin-bottom', 0);
				});

				$container.infinitescroll('unbind');
				  $("#load-infinite-loop-grid11").click(function(){
						$container.infinitescroll('retrieve');
						$('.grid-template').css('margin-bottom', 120);
						 return false;

				});
				<?php } ?>


				<?php if($use_filter == 'use') { ?>
				$('#portfolio-filter a').click(function(){
					$('#portfolio-filter li').removeClass('activeFilter');
					$(this).parent('li').addClass('activeFilter');
					var selector = $(this).attr('data-filter');
					$grid.isotope({ filter: selector });
					return false;
				});
				<?php } ?>
		});

	})( jQuery );
	</script><!-- Portfolio Script End -->

<?php wp_reset_postdata(); ?>