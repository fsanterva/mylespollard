<!-- STYLE 8 START
============================================= -->
<div class="blog clearfix">
<div class="post-grid-style3 blog-section main-news-5 clearfix">

	<?php
	if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
	elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
	else { $paged = 1; }
	$order1 = array(
		'posts_per_page' => $post_per_page,
		'post_type' => 'post',
		'post_status' => 'publish',
		'ignore_sticky_posts' => true,
		'paged'	=> $paged,
		'cat' => $category,
		'offset' => $offset,
		'orderby' => $orderby
	);

	$sec_hook = new WP_Query( $order1 );
	if ($sec_hook->have_posts()) : while($sec_hook->have_posts()) : $sec_hook->the_post();

	if (has_post_thumbnail()) { 
		$img_url_blog = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
		
		if($horizontal_use_left_def == 'left') {
			if($post_image_crop == 'on') {
				$crop = true;
			}
			else {
				$crop = false;
			}
			$image_blogblog = aq_resize($img_url_blog[0],  $width, $height, $crop, true, true);
		}
		else {
			$image_blogblog = $img_url_blog[0];
		}
		
	} ?>
			
	<article class="post-list main-news-post-selector blog-item selector-padding <?php echo esc_attr($horizontal_col_select_col2); ?> <?php echo esc_attr($horizontal_col_select_col2_tablet); ?> <?php echo esc_attr($horizontal_col_select_col2_mobile); ?> <?php echo sanitize_text_field( $main_news_5_layout ); ?>" data-file="<?php the_permalink(); ?>" data-target="article">
		<div class="post-block">
			<div class="post-block-inner">
				<div class="post-thumb">
					<?php //if($use_shadow == 'use') { ?>
					<div class="use-shadow">
					<?php //} ?>
						<a href="<?php the_permalink(); ?>">
							<?php if (has_post_thumbnail()) { ?>
							<img src="<?php echo esc_url( $image_blogblog ); ?>" alt="<?php the_title(); ?>" />
							<div class="post-bg-color"></div>
							<?php } ?>
						</a>
					<?php //if($use_shadow == 'use') { ?>
					</div>
					<?php //} ?>
				</div>

				<div class="post-content">
					<?php if($use_category == 'on') { ?>
						<div class="standard-post-categories">
							<?php the_category(''); ?>
						</div>
					<?php }

					if($use_title == 'on') { ?>
						<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php }
					
					if($use_author == 'on') { ?>
						<div class="post-author-name">
							<span><?php esc_html_e( 'by', 'seniman' ); ?></span> <?php echo get_the_author_meta( 'display_name' ); ?>
						</div>
					<?php }

					if($use_date == 'on') { ?>
						<div class="post-date">
							<span><?php echo get_the_date('d'); ?></span>
							<span><?php echo get_the_date('m'); ?></span>
							<span><?php echo get_the_date('Y'); ?></span>
						</div>
					<?php }

					if($use_read_more == 'on') { ?>
						<div class="read-more-button">
							<a href="<?php the_permalink(); ?>">
								<?php echo sanitize_text_field($read_more_text); ?>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</article>

	<?php endwhile; wp_reset_postdata(); endif; ?>

</div>
</div>
<!-- STYLE 8 END -->