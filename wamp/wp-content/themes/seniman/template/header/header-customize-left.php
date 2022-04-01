<?php
$options   = get_option('seniman_framework');
$prefix = 'seniman_';
$layout    = $options['header_customize_left']['enabled'];

global $post;
 
if ($layout): foreach ($layout as $key=>$value) {
	switch ($key) {
		case 'seniman-logo':
			if ( is_front_page() && is_home() ) {
				seniman_header_part('header/logo-standard');
			}
			elseif ( is_home() ) {
				seniman_header_part('header/logo-standard');
			}
			elseif ( is_front_page() ) {
				seniman_header_part('header/logos');
			}
			elseif(is_single('post')) {
				seniman_header_part('header/logo-standard');
			}
			elseif(is_singular( 'post' )) {
				seniman_header_part('header/logo-standard');
			}
			elseif('seniman-portfolio' == get_post_type()) {
				seniman_header_part('header/logos');
			}
			elseif( is_page_template() ) {
				seniman_header_part('header/logos');
			}
			elseif( is_page() ) {
				seniman_header_part('header/logos');
			}
			elseif( is_archive() || is_search() || is_404() ) {
				seniman_header_part('header/logo-standard');
			}
			elseif( is_archive() && is_shop()) {
				seniman_header_part('header/logos');
			}
			break;
		case 'seniman-menus':
			seniman_header_part('header/menus');
			break;
		case 'seniman-sec-menus':
			seniman_header_part('header/menus-sec');
			break;
		case 'seniman-search':
			seniman_header_part('header/search-btn');
			break;
		}
	}
endif;