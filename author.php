<?php seniman_header_choice(); ?>
<?php
	$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>

<!-- CONTENT START
============================================= -->
<section id="content" class="blog-content-wrap clearfix">

	<!-- BLOG START
	============================================= -->
	<div class="blog archives clearfix">
		<div class="container">
			<div class="author-box clearfix">
				<figure class="author-ava">
					<?php if ( class_exists( 'acf' ) ) {
					$author_id1 						= $curauth->ID;
					$seniman_select_your_profile_image 	= get_field('select_your_profile_image', 'user_'. $author_id1);
					$seniman_upload_profile_image 		= get_field('upload_profile_image', 'user_'. $author_id1);
						$seniman_author_img = aq_resize($seniman_upload_profile_image,  200 , 200, true, true, true);

						if( $seniman_select_your_profile_image == 'upload' ) { ?>
							<img src="<?php echo esc_url( $seniman_author_img ); ?>" alt="<?php esc_attr_e( 'Author', 'seniman' ); ?>">
						<?php }
						else { ?>
							<?php echo get_avatar( $curauth->user_email, '200' ); ?>
						<?php } ?>
					<?php }
					else { ?>
							<?php echo get_avatar( $curauth->user_email, '200' ); ?>
					<?php } ?>
				</figure>

				<div class="author-desc">
					<h2><?php echo sanitize_text_field( $curauth->display_name ); ?></h2>
					<p><?php echo sanitize_text_field( $curauth->user_description ); ?></p>

					<?php if ( class_exists( 'acf' ) ) { ?>
					<div class="social-profile">
						<ul>
							<?php 

							$user_email 	= $curauth->user_email;
							$author_id 		= $curauth->ID;
							$facebook 		= get_field('facebook', 'user_'. $author_id);
							$twitter 		= get_field('twitter', 'user_'. $author_id); 
							$pinterest 		= get_field('pinterest', 'user_'. $author_id);  
							$instagram 		= get_field('instagram', 'user_'. $author_id); 
							$google_plus 	= get_field('google_plus', 'user_'. $author_id); 
							$linkedin 		= get_field('linkedin', 'user_'. $author_id); 

							?>

							<li><a href="mailto:<?php echo sanitize_text_field($user_email); ?>"><i class="icon-simple-line-icons-133"></i></a></li>

							<?php if(!empty($facebook)){ ?> 
							<li><a href="<?php echo esc_url($facebook); ?>"><i class="icon-themify-6"></i></a></li>
							<?php } ?>

							<?php if(!empty($twitter)){ ?> 
							<li><a href="<?php echo esc_url($twitter); ?>"><i class="icon-themify-9"></i></a></li>
							<?php } ?>

							<?php if(!empty($pinterest)){ ?> 
							<li><a href="<?php echo esc_url($pinterest); ?>"><i class="icon-themify-1"></i></a></li>
							<?php } ?>

							<?php if(!empty($instagram)){ ?> 
							<li><a href="<?php echo esc_url($instagram); ?>"><i class="icon-themify-2"></i></a></li>
							<?php } ?>

							<?php if(!empty($google_plus)){ ?> 
							<li><a href="<?php echo esc_url($google_plus); ?>"><i class="icon-themify-3"></i></a></li>
							<?php } ?>

							<?php if(!empty($linkedin)){ ?> 
							<li><a href="<?php echo esc_url($linkedin); ?>"><i class="icon-themify"></i></a></li>
							<?php } ?>
						</ul>
					</div>
					<?php } ?>
				</div>
			</div>

			<div class="row">

				<!-- BLOG LOOP START
				============================================= -->
				<div class="blog-section author-post column column-2of3">

					<h3 class="post-by"><?php esc_html_e( 'Stories by', 'seniman' ); ?> <?php echo sanitize_text_field( $curauth->display_name ); ?></h3>

					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); 

							get_template_part( 'inc/format/loop', get_post_format() );

						endwhile; ?>
						
					<?php else : ?>

					<p><?php esc_html_e('No posts by this author.', 'seniman'); ?></p>

					<?php endif; ?>

					<?php seniman_content_nav($pages = '', $range = 2); ?>
				
				</div>
				<!-- BLOG LOOP END -->

			<?php get_sidebar(); ?>

			</div><!-- row -->
		</div><!-- container -->
	</div><!-- search-result -->

</section>
<!-- CONTENT END -->

<?php seniman_footer_choice(); ?>