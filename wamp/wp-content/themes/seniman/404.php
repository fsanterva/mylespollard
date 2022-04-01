<?php seniman_header_choice(); ?>

<div id="content-wrapper" class="wrapper">
	<div class="container">
		<article class="single-post post no-result not-found outer clearfix">
			<div class="inner">
				<h1><?php esc_html_e( '404', 'seniman' ); ?></h1>
				<h3>
				  <?php esc_html_e( 'The page you were looking for doesn&rsquo;t exist.', 'seniman' ); ?> <span><?php esc_html_e( 'You may have mistyped the address or the page may have moved.', 'seniman' ); ?></span>
				</h3>

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Go back to the homepage ', 'seniman' ); ?></a>
			</div>
		</article><!-- #post-0 .post .no-result .not-found -->
	</div>
</div><!-- wrapper -->

<?php get_footer('no-footer'); ?>