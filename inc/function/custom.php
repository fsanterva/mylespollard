<?php 

function seniman_social_profile() {
	if(class_exists('Redux')) {
		$options = get_option('seniman_framework');
		$twitter = $options['twitter_profile'];
		$facebook = $options['facebook_profile'];
		$linkedin = $options['linkedin_profile'];
		$google = $options['google_profile'];
		$pinterest = $options['pinterest_profile'];
		$dribble = $options['dribble_profile'];
		$flickr = $options['flickr_profile'];
		$behance = $options['behance_profile'];
		$youtube = $options['youtube_profile'];
		$soundcloud = $options['soundcloud_profile'];
		$codepen = $options['codepen_profile'];
		$deviantart = $options['deviantart_profile'];
		$digg = $options['digg_profile'];
		$dropbox = $options['dropbox_profile'];
		$github = $options['github_profile'];
		$instagram = $options['instagram_profile'];
		$skype = $options['skype_profile'];
		$spotify = $options['spotify_profile'];
		$steam = $options['steam_profile'];
		$trello = $options['trello_profile'];
		$tumblr = $options['tumblr_profile'];
		$vimeo = $options['vimeo_profile'];
		$wechat = $options['wechat_profile'];
		$weibo = $options['weibo_profile'];
		$wordpress = $options['wordpress_profile'];
		$xing = $options['xing_profile'];
		$yahoo = $options['yahoo_profile'];
		$yelp = $options['yelp_profile'];

		if (!empty($twitter)) { ?>
			<li class="twitter soc-icon"><a target="_blank" href="<?php echo esc_url( $twitter ); ?>" title="<?php esc_attr_e( 'Twitter', 'seniman' ); ?>" class="icon icon-themify-13"></a></li>
		<?php 
		} 

		if (!empty($facebook)) { ?>
			<li class="facebook soc-icon"><a target="_blank" href="<?php echo esc_url( $facebook ); ?>" title="<?php esc_attr_e( 'Facebook', 'seniman' ); ?>" class="icon icon-themify-17"></a></li>
		<?php 
		} 

		if (!empty($linkedin)) { ?>
			<li class="linkedin soc-icon"><a target="_blank" href="<?php echo esc_url( $linkedin ); ?>" title="<?php esc_attr_e( 'Linkedin', 'seniman' ); ?>" class="icon icon-themify-8"></a></li>
		<?php 
		} 

		if (!empty($google)) { ?>
			<li class="google soc-icon"><a target="_blank" href="<?php echo esc_url( $google ); ?>" title="<?php esc_attr_e( 'Google', 'seniman' ); ?>" class="icon icon-themify-11"></a></li>
		<?php 
		} 

		if (!empty($pinterest)) { ?>
			<li class="pinterest soc-icon"><a target="_blank" href="<?php echo esc_url( $pinterest ); ?>" title="<?php esc_attr_e( 'Pinterest', 'seniman' ); ?>" class="icon icon-themify-9"></a></li>
		<?php 
		} 

		if (!empty($dribble)) { ?>
			<li class="dribble soc-icon"><a target="_blank" href="<?php echo esc_url( $dribble ); ?>" title="<?php esc_attr_e( 'Dribbble', 'seniman' ); ?>" class="icon icon-social-dribbble"></a></li>
		<?php 
		}

		if (!empty($flickr)) { ?>
			<li class="flickr soc-icon"><a target="_blank" href="<?php echo esc_url( $flickr ); ?>" title="<?php esc_attr_e( 'Flickr', 'seniman' ); ?>" class="icon icon-themify-16"></a></li>
		<?php 
		}

		if (!empty($behance)) { ?>
			<li class="behance soc-icon"><a target="_blank" href="<?php echo esc_url( $behance ); ?>" title="<?php esc_attr_e( 'Behance', 'seniman' ); ?>" class="icon icon-behance-2"></a></li>
		<?php 
		}

		if (!empty($youtube)) { ?>
			<li class="youtube soc-icon"><a target="_blank" href="<?php echo esc_url( $youtube ); ?>" title="<?php esc_attr_e( 'Youtube', 'seniman' ); ?>" class="icon icon-themify-7"></a></li>
		<?php 
		}

		if (!empty($soundcloud)) { ?>
			<li class="soundcloud soc-icon"><a target="_blank" href="<?php echo esc_url( $soundcloud ); ?>" title="<?php esc_attr_e( 'Soundcloud', 'seniman' ); ?>" class="icon icon-themify-19"></a></li>
		<?php 
		}

		if (!empty($codepen)) { ?>
			<li class="codepen soc-icon"><a target="_blank" href="<?php echo esc_url( $codepen ); ?>" title="<?php esc_attr_e( 'Codepen', 'seniman' ); ?>" class="icon icon-social-codepen"></a></li>
		<?php 
		}

		if (!empty($deviantart)) { ?>
			<li class="deviantart soc-icon"><a target="_blank" href="<?php echo esc_url( $deviantart ); ?>" title="<?php esc_attr_e( 'Deviantart', 'seniman' ); ?>" class="icon icon-deviantart"></a></li>
		<?php 
		}

		if (!empty($digg)) { ?>
			<li class="digg soc-icon"><a target="_blank" href="<?php echo esc_url( $digg ); ?>" title="<?php esc_attr_e( 'Digg', 'seniman' ); ?>" class="icon icon-digg"></a></li>
		<?php 
		}

		if (!empty($dropbox)) { ?>
			<li class="dropbox soc-icon"><a target="_blank" href="<?php echo esc_url( $dropbox ); ?>" title="<?php esc_attr_e( 'Dropbox', 'seniman' ); ?>" class="icon icon-themify-23"></a></li>
		<?php 
		}

		if (!empty($github)) { ?>
			<li class="github soc-icon"><a target="_blank" href="<?php echo esc_url( $github ); ?>" title="<?php esc_attr_e( 'Github', 'seniman' ); ?>" class="icon icon-social-github"></a></li>
		<?php 
		}

		if (!empty($instagram)) { ?>
			<li class="instagram soc-icon"><a target="_blank" href="<?php echo esc_url( $instagram ); ?>" title="<?php esc_attr_e( 'Instagram', 'seniman' ); ?>" class="icon icon-social-instagram-outline"></a></li>
		<?php 
		}

		if (!empty($skype)) { ?>
			<li class="skype soc-icon"><a target="_blank" href="<?php echo esc_url( $skype ); ?>" title="<?php esc_attr_e( 'Skype', 'seniman' ); ?>" class="icon icon-skype"></a></li>
		<?php 
		}

		if (!empty($spotify)) { ?>
			<li class="spotify soc-icon"><a target="_blank" href="<?php echo esc_url( $spotify ); ?>" title="<?php esc_attr_e( 'Spotify', 'seniman' ); ?>" class="icon icon-spotify"></a></li>
		<?php 
		}

		if (!empty($steam)) { ?>
			<li class="steam soc-icon"><a target="_blank" href="<?php echo esc_url( $steam ); ?>" title="<?php esc_attr_e( 'Steam', 'seniman' ); ?>" class="icon icon-steam-square"></a></li>
		<?php 
		}

		if (!empty($trello)) { ?>
			<li class="trello soc-icon"><a target="_blank" href="<?php echo esc_url( $trello ); ?>" title="<?php esc_attr_e( 'Trello', 'seniman' ); ?>" class="icon icon-trello"></a></li>
		<?php 
		}

		if (!empty($tumblr)) { ?>
			<li class="tumblr soc-icon"><a target="_blank" href="<?php echo esc_url( $tumblr ); ?>" title="<?php esc_attr_e( 'Tumblr', 'seniman' ); ?>" class="icon icon-themify-10"></a></li>
		<?php 
		}

		if (!empty($vimeo)) { ?>
			<li class="vimeo soc-icon"><a target="_blank" href="<?php echo esc_url( $vimeo ); ?>" title="<?php esc_attr_e( 'Vimeo', 'seniman' ); ?>" class="fa fa-vimeo-square"></a></li>
		<?php 
		}

		if (!empty($wechat)) { ?>
			<li class="wechat soc-icon"><a target="_blank" href="<?php echo esc_url( $wechat ); ?>" title="<?php esc_attr_e( 'Wechat', 'seniman' ); ?>" class="icon icon-weixin"></a></li>
		<?php 
		}

		if (!empty($weibo)) { ?>
			<li class="weibo soc-icon"><a target="_blank" href="<?php echo esc_url( $weibo ); ?>" title="<?php esc_attr_e( 'Weibo', 'seniman' ); ?>" class="icon icon-weibo"></a></li>
		<?php 
		}

		if (!empty($wordpress)) { ?>
			<li class="wordpress soc-icon"><a target="_blank" href="<?php echo esc_url( $wordpress ); ?>" title="<?php esc_attr_e( 'WordPress', 'seniman' ); ?>" class="icon icon-themify-10"></a></li>
		<?php 
		}

		if (!empty($xing)) { ?>
			<li class="xing soc-icon"><a target="_blank" href="<?php echo esc_url( $xing ); ?>" title="<?php esc_attr_e( 'Xing', 'seniman' ); ?>" class="icon icon-xing"></a></li>
		<?php 
		}

		if (!empty($yahoo)) { ?>
			<li class="yahoo soc-icon"><a target="_blank" href="<?php echo esc_url( $yahoo ); ?>" title="<?php esc_attr_e( 'Yahoo', 'seniman' ); ?>" class="icon icon-yahoo"></a></li>
		<?php 
		}

		if (!empty($yelp)) { ?>
			<li class="yelp soc-icon"><a target="_blank" href="<?php echo esc_url( $yelp ); ?>" title="<?php esc_attr_e( 'Yelp', 'seniman' ); ?>" class="icon icon-yelp"></a></li>
		<?php 
		}
	}
}


//EXCERPT

function seniman_excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	} 
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt;
}
 
function seniman_content($limit) {
	$content = explode(' ', get_the_content(), $limit);
	if (count($content)>=$limit) {
		array_pop($content);
		$content = implode(" ",$content).'...';
	} else {
		$content = implode(" ",$content);
	} 
	$content = preg_replace('/\[.+\]/','', $content);
	$content = apply_filters('the_content', $content); 
	$content = str_replace(']]>', ']]&gt;', $content);
	return $content;
}


function seniman_custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'seniman_custom_excerpt_length', 999 );

function seniman_new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'seniman_new_excerpt_more');


/* ======== porfo get avatar ======= */
function seniman_get_author_50() {
	echo get_avatar( get_the_author_meta('ID'), '60' );
}

function seniman_get_author_30() {
	echo get_avatar( get_the_author_meta('ID'), '30' );
}

/*=========*   HEADER TYPE   *=========*/

function seniman_header_choice() {

if ( class_exists( 'Redux' ) ) {
	$options = get_option('seniman_framework');
	$seniman_header_type = $options['header_type'];

	if( $seniman_header_type == 'default' ) {
		get_header();
	}
	elseif( $seniman_header_type == 'style-4' ) {
		get_header('sec');
	}
	elseif( $seniman_header_type == 'style-6' ) {
		get_header('third');
	}
}
else {
	get_header();
}

}

function seniman_header_to_footer() {

if ( class_exists( 'Redux' ) ) {
	$options = get_option('seniman_framework');
	$seniman_header_type = $options['header_type'];

	if( $seniman_header_type == 'style-4' ) {

		echo '</div><!-- wrapper -->';
		echo '</div><!-- /container -->';
		echo '<nav class="outer-nav left vertical menu-style-perspective">';			
		seniman_main_nav_menu_header_4();
		echo '</nav>';
		echo '</div><!-- /perspective -->';			

	}

	elseif( $seniman_header_type == 'style-6' ) {

		echo '</div><!-- wrapper -->';
		echo '</div><!-- /container -->';
		echo '<nav class="outer-nav top horizontal menu-style-perspective">';			
		seniman_main_nav_menu_header_4();
		echo '</nav>';
		echo '</div><!-- /perspective -->';			

	}

}

}

/*=========*   FOOTER TYPE   *=========*/
function seniman_footer_choice() {

if ( class_exists( 'Redux' ) ) {
	$options = get_option('seniman_framework');
	$seniman_footer_type = $options['footer_type'];

	if( $seniman_footer_type == 'default' ) {

		get_footer();
	}
	elseif( $seniman_footer_type == 'no-footer' ) {

		get_footer('no-footer');
	}
}
else {
	get_footer();
}

}


function wp_get_attachment( $attachment_id ) {

    $attachment = get_post( $attachment_id );
    return array(
        'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
        'caption' => $attachment->post_excerpt,
        'description' => $attachment->post_content,
        'href' => get_permalink( $attachment->ID ),
        'src' => $attachment->guid,
        'title' => $attachment->post_title
    );
}

function seniman_post_type() { ?>
	<div class="category-icon">
	<?php if ( has_post_format('gallery') ) {
		echo '<span class="category-icon-gallery"><i class="icon-simple-line-icons-126"></i></span>';
	}

	if ( has_post_format('video') ) {
		echo '<span class="category-icon-video"><i class="icon-simple-line-icons-125"></i></span>';
	}

	if ( !get_post_format() && is_sticky() ) {
		echo '<span class="category-icon-gallery"><i class="icon-simple-line-icons-48"></i></span>';
	}

	if ( !get_post_format() && !is_sticky() ) {
		echo '<span class="category-icon-gallery"><i class="icon-simple-line-icons-94"></i></span>';
	} ?>
	</div>
<?php }