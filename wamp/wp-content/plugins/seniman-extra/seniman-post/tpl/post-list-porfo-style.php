<div class="blog clearfix">
	<div class="blog-section blog-style-1-block content-section<?php if($post_pagination_type == 'post_pagination_infinite') { ?> list1-wrap-<?php echo esc_attr($loop_infinite_class); } ?> clearfix">

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

	$sec_hook1 = new WP_Query( $order1 );
	if ($sec_hook1->have_posts()) : while($sec_hook1->have_posts()) : $sec_hook1->the_post();

	?>

	<article class="blog-item selector-padding <?php echo esc_attr($horizontal_col_select_col2); ?> <?php echo esc_attr($horizontal_col_select_col2_tablet); ?> <?php echo esc_attr($horizontal_col_select_col2_mobile); ?>">

		<?php if(has_post_thumbnail()) { 
			$img_url_blog = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
				if($post_image_crop == 'on') {
					$crop = true;
				}
				else {
					$crop = false;
				}
				$image_blogblog = aq_resize($img_url_blog[0],  $width, $height, $crop, true, true); 
				if($image_blogblog){
			$image_blogblog = $image_blogblog;
			}
			else {
            $image_blogblog = wp_get_attachment_image_src( get_post_thumbnail_id(), 'seniman-post' );
            $image_blogblog = $image_blogblog[0];
			}?>
			<div class="post-thumb">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<img src="<?php echo esc_url( $image_blogblog ); ?>" alt="<?php the_title(); ?>">
				<div class="seniman-overlay"></div>
			</a>
			</div><!-- thumbnail-->
		<?php } ?>

		<div class="post-content-wrap">
			<div class="post-content">

				<!-- if use title -->
				<?php if($use_title == 'on') { ?>
				<h2 class="post-title">
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>
				<?php } ?>
				<!-- if use title -->

				<!-- if use meta -->
				<div class="meta-wrapper clearfix">
					<?php if($use_author == 'on') { ?>
					<span class="author">
						<span class="author-separator"><?php esc_html_e( 'by', 'seniman' ); ?></span>
						<span class="vcard"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"> <?php echo get_the_author_meta( 'display_name' ); ?></a></span>
					</span>
					<?php } ?>
					<?php if($use_date == 'on') { ?>
					<span class="date<?php if($use_author != 'on') { ?> no-author<?php } ?>">
						<span><?php esc_html_e( 'posted on', 'seniman' ); ?></span>
						<a href="<?php the_permalink(); ?>">
							<span><?php echo get_the_date('F'); ?></span> <span><?php echo get_the_date('d'); ?></span><?php esc_html_e( ',', 'seniman' ); ?> <span><?php echo get_the_date('Y'); ?></span>
						</a>
					</span>
					<?php } ?>
					<?php if($use_category == 'on') { ?>
					<span class="standard-post-categories<?php if($use_author != 'on' && $use_date != 'on') { ?> no-other<?php } ?>">
						<?php the_category(', '); ?>
					</span>
					<?php } ?>
				</div>
				<!-- if use meta -->

				<!-- if use excerpt -->
				<?php if($use_excerpt == 'on') { ?>
				<div class="post-text">
					<p><?php echo seniman_excerpt($excerpt_word); ?></p>
				</div>
				<?php } ?>
				<!-- if use excerpt -->

				<!-- if use read_more -->
				<?php if($use_read_more == 'on') { ?>
				<a href="<?php the_permalink(); ?>" class="read-more">
					<?php echo sanitize_text_field($read_more_text); ?>
				</a>
				<?php } ?>
				<!-- if use read_more -->
			</div>
		</div>
	</article>

	<?php endwhile; endif;  ?>

	</div>

	<?php
	$pages = '';
	$range = 2;
	$showitems = ($range * 2)+1;
	if($pages == '')
	{
		$pages = $sec_hook1->max_num_pages;
		if(!$pages)
		{
			$pages = 1;
		}
	}
	if($post_pagination_type == 'post_pagination_number') {				 
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
	elseif($post_pagination_type == 'post_pagination_nexprev') {
		if(1 != $pages) {  ?>
		<nav class="navigation-paging pagination pagination-page-template clearfix">
			<div class="container">
				<div class="post-navigation nav-previous pull-left">
					<?php next_posts_link( $pagination_prev_text, $sec_hook1->max_num_pages ); ?>
				</div>
				<?php if ( get_previous_posts_link() ) : ?>
				<div class="post-navigation nav-next pull-right">
					<?php echo get_previous_posts_link( esc_html__( $pagination_next_text, 'seniman' ) ); ?>
				</div>
				<?php endif; ?>
			</div>
		</nav>
	<?php }
	}
	elseif ($post_pagination_type == 'post_pagination_none') {
	 	echo '';
	} ?>

	<?php if($post_pagination_type == 'post_pagination_infinite') {
	if($use_shadow_pagination != 'on') { ?>
	<div class="navigation-paging infinite-wrap no-shadow <?php echo esc_attr($load_style); ?> clearfix">
	<?php }
	else { ?>
	<div class="navigation-paging infinite-wrap <?php echo esc_attr($load_style); ?> clearfix">
	<?php } ?>
		<div id="load-more-post-list-1-<?php echo esc_attr( $loop_infinite_class ); ?>" class="infinite-button"><?php next_posts_link( '', $sec_hook1->max_num_pages ); ?></div>
		<button id="load-infinite1" class="btn"><?php echo sanitize_text_field( $loop_infinite_text ); ?></button>
	</div>
	<?php } ?>
</div>

<?php if($post_pagination_type == 'post_pagination_infinite') {
	if(!empty($loop_infinite_load_img['url'])) {
		$loader_img = esc_url( $loop_infinite_load_img['url'] );
	}
	else {
		$loader_img = get_template_directory_uri() . '/img/loader.gif';
	} ?>
<script type="text/javascript">

	jQuery(window).load(function(){

		var jQuerycontainer = jQuery('.list1-wrap-<?php echo esc_attr($loop_infinite_class); ?>');

		// Infinite Scroll
		jQuerycontainer.infinitescroll({
		loading: {
		finishedMsg: "There is no more",
		img: "<?php echo $loader_img; ?>",
		msgText: 'loading',
		speed: 'normal'
			},

		state: {
		isDone: false
		},
			navSelector  : '#load-more-post-list-1-<?php echo esc_attr( $loop_infinite_class ); ?>', 
			nextSelector : '#load-more-post-list-1-<?php echo esc_attr( $loop_infinite_class ); ?> a', 
			itemSelector : '.list1-wrap-<?php echo esc_attr($loop_infinite_class); ?> .blog-item',

		},
		function( post1Block ) {
			jQuery('.blog-style-1-block').css('margin-bottom', 0);
		});

		jQuerycontainer.infinitescroll('unbind');
		  jQuery("#load-infinite1").click(function(){
				jQuerycontainer.infinitescroll('retrieve');
				jQuery('.blog-style-1-block').css('margin-bottom', 120);
				 return false;

		});
	});
</script><!-- Portfolio Script End -->
<?php } ?>

<?php wp_reset_postdata(); wp_reset_query(); ?>