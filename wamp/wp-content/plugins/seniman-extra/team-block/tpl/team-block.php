<div class="team-block-section clearfix">
	<div class="team-block-wrap">

		<?php 
			foreach ( $team_item as $team ) :
			$team_id = $team['team_image']['id'];
			$team_url = $team['team_image']['url'];
			$team_url = wp_get_attachment_image_src( get_post_thumbnail_id($team_url), 'full');
			if($team_image_crop == 'on') {
				$crop = true;
			}
			else {
				$crop = false;
			}

			$team_img = $team_url;
			$image1 = aq_resize($team_img, $width , $height, $crop, true, true);
			if($image1) {
			$image1 = $image1;
			}
			else {
			$image12 = wp_get_attachment_image_src($team_id, 'seniman-team'); 
            $image1 = $image12[0];
			}

			$team_name = $team['team_name'];
			$team_job = $team['team_job'];
			$seniman_team_facebook 		= $team['team_facebook']['url'];
			$seniman_team_twitter 		= $team['team_twitter']['url'];
			$seniman_team_instagram 		= $team['team_instagram']['url'];
			$seniman_team_google_plus 	= $team['team_googleplus']['url'];
		?>
		<div class="team-block column column-<?php echo esc_attr($choose_column); ?> <?php echo esc_attr($mobile_choose_column); ?> <?php echo esc_attr($tablet_choose_column); ?>">
			<div class="team-inner-block clearfix">
				<?php if(!empty($image1)) { ?>
				<img src="<?php echo esc_url( $image1 ); ?>" alt="<?php the_title(); ?>">
				<?php }
				if(empty($image1)) { ?>
				<img src="<?php echo esc_url( $team_img ); ?>" alt="<?php the_title(); ?>">
				<?php } ?>

				<div class="team-details">
					<?php if($use_title == 'on') { ?>
					<h3 class="team-name">
						<?php echo sanitize_text_field( $team_name ); ?>
					</h3>
					<?php }
					
					if(!empty($team_job) && $use_job == 'on'){ ?>
					<h5 class="team-job"><?php echo sanitize_text_field( $team_job ); ?></h5>
					<?php }

					if($use_social == 'on') { ?>
					<div class="team-socials clearfix">
						<ul>
							<?php if(!empty($seniman_team_facebook)){ ?>
								<li>
									<a href="<?php echo esc_url( $seniman_team_facebook ); ?>">
										<i class="icon icon-themify-17"></i>
									</a>
								</li>
							<?php }
							if(!empty($seniman_team_twitter)){ ?>
								<li>
									<a href="<?php echo esc_url( $seniman_team_twitter ); ?>">
										<i class="icon icon-themify-13"></i>
									</a>
								</li>
							<?php }
							if(!empty($seniman_team_instagram)){ ?>
								<li>
									<a href="<?php echo esc_url( $seniman_team_instagram ); ?>">
										<i class="icon icon-social-instagram-outline"></i>
									</a>
								</li>
							<?php }
							if(!empty($seniman_team_google_plus)){ ?>
								<li>
									<a href="<?php echo esc_url( $seniman_team_google_plus ); ?>">
										<i class="icon icon-themify-11"></i>
									</a>
								</li>
							<?php } ?>
						</ul>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>

		<?php endforeach; ?>

	</div>
</div>