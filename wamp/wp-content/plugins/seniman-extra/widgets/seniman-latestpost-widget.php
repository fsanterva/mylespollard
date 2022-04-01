<?php
class seniman_recentpost_thumb_Widget extends WP_Widget {
	
	function __construct()
	{
		$widget_ops = array('classname' => 'widget_seniman_news', 'description' => '');

		$control_ops = array('id_base' => 'seniman_recentpost_thumb-widget');

		parent::__construct('seniman_recentpost_thumb-widget', 'Seniman News Widget', $widget_ops, $control_ops);
	}

	public function seniman_recentpost_thumb_Widget()
    {
        self::__construct();
    }
	
	function widget($args, $instance)
	{
		extract($args, EXTR_SKIP);
		$title = apply_filters('widget_title', $instance['title']);

		echo htmlspecialchars_decode( esc_html( $before_widget ) );

		if($title) {
			echo htmlspecialchars_decode( esc_html( $before_title ) ) . sanitize_text_field( $title ) . htmlspecialchars_decode( esc_html( $after_title ) );
		} ?>

			<ul class="nav nav-tabs clearfix" role="tablist" id="newsTabs">
				<li role="presentation"><a href="#default" aria-controls="default" role="tab" data-toggle="tab"><?php esc_html_e( 'Latest', 'seniman' ); ?></a></li>
				<li role="presentation"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab"><?php esc_html_e( 'Popular', 'seniman' ); ?></a></li>
			</ul>

			<div class="tab-content clearfix">
				<div role="tabpanel" class="recent-news tab-pane" id="default">
					<?php
						$latest_post_wid = array(
							'post_type'         => 'post',
							'posts_per_page'	=> $instance['amount'],
							'ignore_sticky_posts' => 1,
							'order'	=> 'DESC',
						);
						
						$latest_thumb = new WP_Query($latest_post_wid); 
						if ($latest_thumb->have_posts()) : while($latest_thumb->have_posts()) : $latest_thumb->the_post();
						$img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
							$blogwidimg = aq_resize($img_url[0],  350 , 150, true, true, true);
							if ($blogwidimg) {
		 					 $blogwidimg = $blogwidimg;
							}
							else {
							$blogwidimg = wp_get_attachment_image_src( get_post_thumbnail_id(), 'seniman-post-widget' );
							$blogwidimg = $blogwidimg[0];
					}
					?>
					
						<!-- widget-news -->
						<div class="post-item clearfix">
							<?php if ( has_post_thumbnail()) { ?>
							<a href="<?php the_permalink(); ?>">
								<div class="post-thumb">
									<img src="<?php echo esc_url( $blogwidimg ); ?>" alt="<?php esc_html_e( 'latestwid-img', 'seniman' ); ?>">
									<div class="overlay"></div>
								</div>
							</a>
							<?php }

							else {
								echo '<a href="<?php the_permalink(); ?>">';
								echo '<div class="post-thumb">';
								echo '<img src="'. get_template_directory_uri() .'/img/placeholder-latestpost-widget.jpg" />';
								echo '<div class="overlay"></div></div></a>';
							}

							?>
							<div class="post-content">
								<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
							</div>
						</div>
						<!-- widget-news end -->

					<?php 
						endwhile; wp_reset_postdata(); endif;
					?>
				</div>

				<div role="tabpanel" class="popular-news tab-pane" id="popular">
					<?php
						$popular_post_wid = array(
							'post_type'         => 'post',
							'posts_per_page'	=> $instance['amount'],
							'ignore_sticky_posts' => 1,
							'orderby' => 'comment_count',
							'order'	=> 'DESC',
						);
						
						$popular_thumb = new WP_Query($popular_post_wid); 
						if ($popular_thumb->have_posts()) : while($popular_thumb->have_posts()) : $popular_thumb->the_post();
						$img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
							$blogwidimg = aq_resize($img_url[0],  350 , 150, true, true, true);
							if ($blogwidimg) {
		 					 $blogwidimg = $blogwidimg;
							}
							else {
							$blogwidimg = wp_get_attachment_image_src( get_post_thumbnail_id(), 'seniman-post-widget' );
							$blogwidimg = $blogwidimg[0];
					}
					?>
					
						<!-- widget-news -->
						<div class="post-item clearfix">
							<?php if ( has_post_thumbnail()) { ?>
							<a href="<?php the_permalink(); ?>">
								<div class="post-thumb">
									<img src="<?php echo esc_url( $blogwidimg ); ?>" alt="<?php esc_html_e( 'latestwid-img', 'seniman' ); ?>">
									<div class="overlay"></div>
								</div>
							</a>
							<?php }

							else {
								echo '<a href="<?php the_permalink(); ?>">';
								echo '<div class="post-thumb">';
								echo '<img src="'. get_template_directory_uri() .'/img/placeholder-latestpost-widget.jpg" />';
								echo '<div class="overlay"></div></div></a>';
							}

							?>
							<div class="post-content">
								<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
							</div>
						</div>
						<!-- widget-news end -->

					<?php 
						endwhile; wp_reset_postdata(); endif;
					?>
				</div>
			</div>

			<?php wp_reset_query(); ?>
		
		<?php echo htmlspecialchars_decode( esc_html( $after_widget ) );
	}
	
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		if( is_numeric($new_instance['amount']) ){
			$instance['amount'] = $new_instance['amount'];
		} else {
			$new_instance['amount'] = '3';
		}

		return $instance;
	}

	function form($instance)
	{
		$instance = wp_parse_args( (array) $instance, array( 'title' => 'Seniman News', 'amount' => '3', 'sort_type' => 'post_views_count' ) );
		$title      = !empty($instance['title']) ? $instance['title'] : 'Seniman News';
		$amount      = !empty($instance['amount']) ? $instance['amount'] : '3'; ?>
		
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id('title') ); ?>"><?php esc_html_e( 'Title', 'seniman' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id('amount') ); ?>"><?php esc_html_e( 'Amount of Posts', 'seniman' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo esc_attr( $this->get_field_id('amount') ); ?>" name="<?php echo esc_attr( $this->get_field_name('amount') ); ?>" value="<?php echo esc_attr( $instance['amount'] ); ?>" />
		</p>
	<?php
	}
}

function seniman_recentpost_thumb_widget_init ()
{
	return register_widget('seniman_recentpost_thumb_Widget');
}
add_action ('widgets_init', 'seniman_recentpost_thumb_widget_init');