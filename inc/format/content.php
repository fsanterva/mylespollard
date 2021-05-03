<article  id="post-<?php the_ID(); ?>" <?php post_class( 'blog-item hentry'); ?> itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">

	<div class="post-content-wrap">
		<div class="post-content">
			<?php if ( has_post_thumbnail()) { 
				$real_image = get_post_thumbnail_id();
				$image_url = wp_get_attachment_image_src( $real_image, 'full'); 
				$image_meta = wp_get_attachment_metadata( $real_image );
				$image_width = $image_meta["width"];
				$image_height = $image_meta["height"]; ?>
				<div class="post-thumb" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
					<?php the_post_thumbnail(); ?>
					<meta itemprop="url" content="<?php echo esc_url( $image_url[0] ); ?>">
					<?php echo '<meta itemprop="width" content="'.$image_width.'"><meta itemprop="height" content="'.$image_height.'">'; ?>
				</div><!-- thumbnail-->
			<?php } ?> 

			<div class="meta-wrapper clearfix">

				<span class="standard-post-categories">
					<?php the_category(', '); ?>
				</span>

				<h1 class="post-title entry-title" itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

				<div class="post-meta clearfix">
					<span class="author">
						<span class="vcard"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"> <?php echo get_the_author_meta( 'display_name' ); ?></a></span>
					</span>
					<span class="date">
						<span><?php esc_html_e( 'On', 'seniman' ); ?></span>
						<a href="<?php the_permalink(); ?>">
							<span><?php echo get_the_date('F'); ?></span> <span><?php echo get_the_date('d'); ?></span><?php esc_html_e( ',', 'seniman' ); ?> <span><?php echo get_the_date('Y'); ?></span>
						</a>
					</span>
				</div>
			</div>

			<div class="post-text entry-content clearfix" itemprop="text">
				<?php the_content(); ?>
				<?php wp_link_pages(); ?>
			</div>

			<div class="meta-bottom clearfix">
				<?php if(!empty(has_tag())) { ?>
					<div class="tag-wrapper">
						<span><?php esc_html_e( 'tags', 'seniman' ); ?></span>
						<?php the_tags('',', '); ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>

	<!-- Author Info -->
	<?php $author_desc = get_the_author_meta('description'); 
	if(!empty($author_desc)) { ?>
	<div class="post-author clearfix">
		
		<figure class="author-ava">
			<?php echo get_avatar( get_the_author_meta('ID'), '100' ); ?>
		</figure>

		<div class="author-desc">
			<div class="author-name">
				<span><?php esc_html_e( 'Written by', 'seniman' ); ?></span> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php echo get_the_author_meta( 'display_name' ); ?>" rel="author"><?php echo get_the_author_meta( 'display_name' ); ?></a>
			</div>
			<p><?php the_author_meta('description'); ?></p>
		</div>
	</div>
	<?php } ?>
	<!-- end of author -->

	<div class="next-prev-post clearfix">
		<div class="row">

			<?php $next_post = get_next_post();
			$previous_post = get_previous_post(); ?>
			
			<?php if ( get_previous_post() ) : ?>
			<div class="prev-post column column-2">
				<p><?php esc_html_e( 'Previous', 'seniman' ); ?></p>
				<h4 class="title">
					<a href="<?php echo get_permalink( $previous_post->ID ); ?>"><?php echo get_the_title( $previous_post->ID ); ?></a>
				</h4>
			</div>
			<?php endif; ?>
			
			<?php if ( get_next_post() ) : ?>
			<div class="next-post column column-2">
				<p><?php esc_html_e( 'Next', 'seniman' ); ?></p>
				<h4 class="title">
					<a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo get_the_title( $next_post->ID ); ?></a>
				</h4>
			</div>
			<?php endif; ?>

		</div>
	</div>
	<!-- pagination end -->

	<?php if ( !post_password_required()) {
		get_template_part( 'inc/part/related', 'post' ); 
	} ?>

</article><!-- #post-<?php the_ID(); ?> -->

<?php 
	if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 
	if ( comments_open() || '0' != get_comments_number() ) comments_template(); 
?>