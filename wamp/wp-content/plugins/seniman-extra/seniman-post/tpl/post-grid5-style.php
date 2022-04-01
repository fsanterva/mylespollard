<div class="blog main-news-1 <?php if($post_pagination_type == 'post_pagination_infinite') { ?>post-list-wrap-<?php echo esc_attr($loop_infinite_class); } ?> clearfix">
<?php

	if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
	elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
	else { $paged = 1; }
	$order1 = array(
		'posts_per_page' => $post_per_page,
		'ignore_sticky_posts' => true,
		'paged' => $paged,
		'post_type' => 'post',
		'cat' => $category,
		'offset' => $offset,
		'orderby' => $orderby 
	); 
	$sec_hook = new WP_Query( $order1 );
	if ($sec_hook->have_posts()) : while($sec_hook->have_posts()) : $sec_hook->the_post();

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
	} ?>
	
	<div class="article-wrap blog-item selector-padding blog-item selector-padding <?php echo esc_attr($horizontal_col_select2); ?> <?php echo esc_attr($horizontal_col_select2_tablet); ?> <?php echo esc_attr($horizontal_col_select2_mobile); ?> clearfix">
	<article class="main-news-post-selector block <?php if(has_post_thumbnail()) { echo 'has-post-thumbnail'; } ?>" data-file="<?php the_permalink(); ?>" data-target="article">

		<a href="<?php the_permalink(); ?>">
			<div class="blog-wrap" <?php if(has_post_thumbnail()) { ?> style="background-image:url(<?php echo esc_url( $image_blogblog ); ?>)" <?php } ?>>
				<div class="blog-overlay"> </div>
			</div>
		</a>
		
		<div class="blog-desc post-content">
			<?php 
			if($use_category == 'on') { ?>
				<div class="category-main-news-1"><?php the_category(); ?></div>
			<?php } 

			if($use_title == 'on') { ?>
				<h3 class="blog-title post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php } ?>

			<div class="main-news-post-meta">
				<?php
				if($use_date == 'on') { ?>
					<div class="blog-date date"><a href="<?php the_permalink(); ?>"><?php echo get_the_date('M'); ?> <?php echo get_the_date('d'); ?> </a></div>
				<?php } ?>
			</div>
		</div>
	</article>
	</div>

	<?php endwhile; endif; ?>

<?php
	$pages = '';
	$range = 2;
	$showitems = ($range * 2)+1;
	if($pages == '')
	{
		$pages = $sec_hook->max_num_pages;
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
					<?php next_posts_link( $pagination_prev_text, $sec_hook->max_num_pages ); ?>
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
		<div id="load-more-post-list-4-<?php echo esc_attr( $loop_infinite_class ); ?>" class="infinite-button"><?php next_posts_link( '', $sec_hook->max_num_pages ); ?></div>
		<button id="load-infinite4" class="btn"><?php echo sanitize_text_field( $loop_infinite_text ); ?></button>
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

		var jQuerycontainer = jQuery('.post-list-wrap-<?php echo esc_attr($loop_infinite_class); ?>');

		// Infinite Scroll
		jQuerycontainer.infinitescroll({
		loading: {
		finishedMsg: 'There is no more',
		img: "<?php echo $loader_img; ?>",
		msgText: 'loading',
		speed: 'normal'
			},

		state: {
		isDone: false
		},
			navSelector  : '#load-more-post-list-4-<?php echo esc_attr( $loop_infinite_class ); ?>', 
			nextSelector : '#load-more-post-list-4-<?php echo esc_attr( $loop_infinite_class ); ?> a', 
			itemSelector : '.post-list-wrap-<?php echo esc_attr($loop_infinite_class); ?> article.post-list-3',

		},
		function( post4Block ) {
			jQuery('.blog-grid-style-4-block').css('margin-bottom', 0);
		});

		jQuerycontainer.infinitescroll('unbind');
		  jQuery("#load-infinite4").click(function(){
				jQuerycontainer.infinitescroll('retrieve');
				jQuery('.blog-grid-style-4-block').css('margin-bottom', 120);
				 return false;

		});
	});
</script><!-- Portfolio Script End -->
<?php } wp_reset_postdata();  ?>