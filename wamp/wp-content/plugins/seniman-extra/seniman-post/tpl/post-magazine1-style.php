<?php global $post;
$postList1 = get_the_ID(); ?>

<div class="post-list-1<?php if($use_infinite_scroll == 'use') { ?> list1-wrap-<?php echo esc_attr($loop_infinite_class); } ?> post-magazine-style-block clearfix">
	
	<?php 

	$ishome = get_option('page_on_front');
	$postList1 = get_the_ID();

	if($ishome == $postList1) {
		$paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1; 
	}
	else {
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; 
	} 

	$order1 = array(
		'posts_per_page' => $post_per_page,
		'paged' => $paged,
		'post_type' => 'post',
		'ignore_sticky_posts' => true,
		'cat' => $category,
		'offset' => $offset,
		'orderby' => $orderby
	);

	$sec_hook = new WP_Query( $order1 );
	if ($sec_hook->have_posts()) : while($sec_hook->have_posts()) : $sec_hook->the_post();

	?>

	<article class="post-item magazine-post-style magazine-1-post-style clearfix selector-padding selected-for-margin-bottom post-list-post-selector <?php echo sanitize_text_field($horizontal_col_select); ?> clearfix" data-file="<?php the_permalink(); ?>" data-target="article">

		<?php //if($use_shadow == 'use') { ?>
		<div class="use-shadow">
		<?php //} ?>

		<div class="post-thumb">
			<?php if(has_post_thumbnail()) { 
				$img_url_blog = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
				if($horizontal_use == 'left') {
					$image_blogblog = aq_resize($img_url_blog[0],  $width, $height, true, true, true);
				}
				else {
					$image_blogblog = $img_url_blog[0];
				} ?>
			
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo esc_url( $image_blogblog ); ?>" alt="<?php the_title(); ?>"></a>
			<?php }  
			
			else {  ?>
				
			<?php } ?>
		</div>
			
		<div class="story-content">
			<?php if($use_meta == 'on') { ?>
			<div class="standard-post-categories">
				<?php the_category(''); ?>
			</div>
			<?php }

			if($use_title == 'on') { ?>
			<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
			<?php }

			if($use_meta == 'on') { ?>
			<div class="post-meta clearfix">
				<span class="author">
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
						<span class="author-name">
							<?php seniman_get_author_30(); ?>
							<span class="author-separator"><?php esc_html_e( 'by', 'seniman' ); ?></span><span class="vcard"> <?php echo get_the_author_meta( 'display_name' ); ?></span>
						</span>
					</a>
				</span>
				<span class="date">
					<a href="<?php the_permalink(); ?>">
						<span><?php echo get_the_date('F'); ?></span> <span><?php echo get_the_date('d'); ?></span><?php esc_html_e( ',', 'seniman' ); ?> <span><?php echo get_the_date('Y'); ?></span>
					</a>
				</span>
				<span class="time-read">
					<span class="eta"></span> <?php esc_html_e( ' read', 'seniman' ); ?>
				</span>
			</div>
			<?php }

			if($use_excerpt == 'on') { ?>
			<div class="post-text">
				<p><?php echo seniman_excerpt($excerpt_word); ?></p>
			</div>
			<?php }

			if($use_read_more == 'on') { ?>
				<a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e( 'Continue Reading', 'seniman' ); ?></a>
			<?php } ?>
		</div>

		<?php //if($use_shadow == 'use') { ?>
		</div>
		<?php //} ?>
	</article> 

	<?php endwhile; endif;  ?>

</div>

<?php wp_reset_postdata(); ?>