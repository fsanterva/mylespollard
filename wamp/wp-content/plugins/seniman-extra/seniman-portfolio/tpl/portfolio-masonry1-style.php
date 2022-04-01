<?php $rand_mason_porfo = rand(); ?>

<div id="some-<?php echo esc_attr($rand_mason_porfo); ?>" class="portfolio-masonry-block porf-hidetitle-st clearfix">

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

	<ul id="target-effect" class="grid effect-3 portfolio-block-wrap masonry-template<?php if($portfolio_pagination_type == 'portfolio_pagination_infinite') { ?> porto-masonry-wrap-<?php echo esc_attr($loop_infinite_class); } ?> column-<?php echo sanitize_text_field($choose_column); ?> clearfix">

		<?php 
			if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
			elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
			else { $paged = 1; }
			if(empty($category)) {
				$seniman_masonry_args = array(
				'post_type'			=> 'seniman-portfolio',
				'posts_per_page'	=> $post_per_page,
				'paged'          	=> $paged,
				'ignore_sticky_posts' => true,
				'offset' => $offset,
				'orderby' => $orderby
				);
			}
			else {
				$seniman_masonry_args = array(
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

			$seniman_masonry = new WP_Query($seniman_masonry_args);
			if ($seniman_masonry->have_posts()) : while($seniman_masonry->have_posts()) : $seniman_masonry->the_post(); 

			$masonry_size_item = get_field('masonry_size_item');
			$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
			$portfolio_alternative_image = get_field('portfolio_alternative_image');

			global $post;
			$category_name = array();
			$category_slugs = array();
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

		<li class="portfo-block-item masonry-item <?php echo esc_attr($mobile_choose_column); ?> <?php echo esc_attr($tablet_choose_column); ?> <?php echo sanitize_text_field( $masonry_size_item ); ?> <?php echo sanitize_text_field($seniman_porto_space); ?>">
			<div class="item-wrap">

				<a href="<?php the_permalink(); ?>">
					<figure class="<?php echo sanitize_text_field( $hover_effect ); ?>">
						<img src="<?php echo esc_url( $image[0] ); ?>" alt="<?php the_title(); ?>">
						<figcaption style="background-image: url(<?php echo esc_url($portfolio_alternative_image); ?>);">
							<div class="caption-inside">
								
								<!-- if use title -->
								<h3 class="portfolio-loop-title <?php echo sanitize_text_field ( $title_hover_effect ); ?> <?php echo sanitize_text_field ( $title_hover_delay ); ?>">
									<?php the_title(); ?>
								</h3>
								<!-- if use title -->

								<!-- if use category -->
								<h5 class="portfolio-category <?php echo sanitize_text_field ( $category_hover_effect ); ?> <?php echo sanitize_text_field ( $category_hover_delay ); ?>"><?php echo sanitize_text_field($seniman_porto_comas); ?></h5>
								<!-- if use category -->

							</div>
						</figcaption>
					</figure>
				</a>

				<div class="portfolio-details clearfix">
					<?php if($use_excerpt == 'use') { ?>
					<div class="portfolio-excerpt">
						<p><?php echo seniman_excerpt($excerpt_word); ?></p>
					</div>
					<?php }
					if($use_read_more == 'use') { ?>
					<div class="button-continue clearfix">
						<a href="<?php echo the_permalink(); ?>" class="button read-more"><?php echo sanitize_text_field($read_more_text); ?></a>
					</div>
					<?php } ?>
				</div>

			</div>
		</li>

	<?php endwhile; endif; ?>

	</ul><!-- Masonry Template -->

	<?php
	$pages = '';
	$range = 2;
	$showitems = ($range * 2)+1;
	if($pages == '')
	{
		$pages = $seniman_masonry->max_num_pages;
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
		if(1 != $pages) {  ?>
		<nav class="navigation-paging pagination pagination-page-template clearfix">
			<div class="container">
				<div class="post-navigation nav-previous pull-left">
					<?php next_posts_link( $pagination_prev_text, $seniman_masonry->max_num_pages ); ?>
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
			<div id="load-more-loop-masonry-1-<?php echo esc_attr( $loop_infinite_class ); ?>" class="infinite-button">
				<?php next_posts_link( '', $seniman_masonry->max_num_pages ); ?>
			</div>
			<button id="load-infinite-loop-masonry11" class="btn"><?php echo sanitize_text_field( $loop_infinite_text ); ?></button>
		</div>
	</div>
	<?php } ?>

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
	$ver_un = $caption_vertical["unit"];?>
	<script type="text/javascript">
	(function($) {
	'use strict';

		$(document).ready(function(){

			$('#some-<?php echo esc_attr($rand_mason_porfo); ?> figcaption .caption-inside').css('transform', 'translate(-<?php echo esc_attr($ver_si); echo esc_attr($ver_un); ?>, -<?php echo esc_attr($hor_si); echo esc_attr($hor_un); ?>)');

			var $grid = $('.masonry-template').imagesLoaded( function() {
				// init Masonry after all images have loaded
				$grid.isotope({
					transitionDuration: '0.65s',
					initLayout: true,
					columnWidth: '.masonry-item',
					itemSelector: '.masonry-item',
					fitWidth: true,
					stagger: 30,
				});
			});
		
			<?php if($portfolio_pagination_type == 'portfolio_pagination_infinite') { ?>
			var masonryContainer = $('.masonry-template');
			var $container = $('.porto-masonry-wrap-<?php echo esc_attr($loop_infinite_class); ?>');
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
				navSelector  : '#load-more-loop-masonry-1-<?php echo esc_attr( $loop_infinite_class ); ?>', 
				nextSelector : '#load-more-loop-masonry-1-<?php echo esc_attr( $loop_infinite_class ); ?> a', 
				itemSelector : '.porto-masonry-wrap-<?php echo esc_attr($loop_infinite_class); ?> .masonry-item',

			},
			function( newElements ) {
				/*$container.isotope( 'appended', jQuery( newElements ) );
				var t = setTimeout( function(){ $container.isotope('layout'); }, 100 );*/
				var $newElems = $( newElements ).css({ opacity: 0 });
				$newElems.imagesLoaded(function(){
					$newElems.animate({ opacity: 1 });
					$container.isotope( 'appended', $newElems, true );
				});
				$('.masonry-template').css('margin-bottom', 0);
			});

			$container.infinitescroll('unbind');
			  $("#load-infinite-loop-masonry11").click(function(){
					$container.infinitescroll('retrieve');
					 $('.masonry-template').css('margin-bottom', 120);
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

				$(window).resize(function() {
					$grid.isotope('layout');
				});
			<?php } ?>
		});

	})( jQuery );
	</script><!-- Portfolio Script End -->
<?php wp_reset_postdata(); ?>

</div><!-- Masonry Block -->