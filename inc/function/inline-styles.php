<?php
function seniman_styles_method() {	

	wp_enqueue_style(
	'seniman-custom-style',
	get_template_directory_uri() . '/css/custom-style.css'
	);

	/*acf hero page*/
	if(class_exists('acf')) {
	$seniman_hero_width_type = get_field('hero_width_type');
	$seniman_hero_width = get_field('hero_width');
	$seniman_hero_height = get_field('hero_height');
	$seniman_hero_margin_top = get_field('hero_margin_top');
	$seniman_hero_margin_bottom = get_field('hero_margin_bottom');
	$seniman_hero_image = get_field('hero_image');
	$seniman_hero_image_vertical_position = get_field('hero_image_vertical_position');
	$seniman_hero_image_horizontal_position = get_field('hero_image_horizontal_position');
	$seniman_hero_image_background_repeat = get_field('hero_image_background_repeat');
	$seniman_hero_image_background_attachment = get_field('hero_image_background_attachment');
	$seniman_hero_image_background_size = get_field('hero_image_background_size');
	$seniman_hero_title_size = get_field('hero_title_size');
	$seniman_hero_title_line_height = get_field('hero_title_line_height');
	$seniman_hero_title_color = get_field('hero_title_color');
	$seniman_hero_description_color = get_field('hero_description_color');

	/* hero content padding */
	$seniman_hero_content_padding_top = get_field('hero_content_padding_top');
	$seniman_hero_content_padding_bottom = get_field('hero_content_padding_bottom');

	$seniman_hover_primary_color = get_field('hover_primary_color');
	$seniman_hover_secondary_color = get_field('hover_secondary_color');

	$seniman_separator_type = get_field('separator_type');
	$seniman_separator_color = get_field('separator_color');
	$seniman_separator_image = get_field('separator_image');

		if($seniman_separator_type == 'border') {
			$seniman_sep_img = '';
			$seniman_sep_bord = $seniman_separator_color;
		}
		else{
			$seniman_sep_img = $seniman_separator_image;
			$seniman_sep_bord = '';
		}

	$seniman_scroll_text_color = get_field('scroll_text_color');
	}

	/*theme options*/
	if ( class_exists( 'Redux' )) {
	$options				= get_option('seniman_framework');
	$seniman_bordered_title	= $options['bordered_title'];

	$seniman_header_2_width	= $options['header_2_width'];
	$seniman_calc_header2 = '';
	if(!empty($seniman_header_2_width["width"])){
		$seniman_calc_header2 	= $seniman_header_2_width["width"];
	}

	$seniman_header_mob_bg_def	= $options['header_mob_bg_def'];
	$seniman_header_mob_bg_alt	= $options['header_mob_bg_alt'];

	$seniman_bordered_width = '0px';
	$seniman_bordered_width_c	= $options['bordered_width'];
	if(!empty($seniman_bordered_width_c["width"])){
		$seniman_bordered_width 	= $seniman_bordered_width_c["width"];
	}

	/* header area content */
	$logo_padding	= $options['logo_padding'];
	$logo_padd_top = '0px';
	$logo_padd_bot = '0px';
	if(!empty($logo_padding["padding-top"])){
		$logo_padd_top = $logo_padding["padding-top"];
	}
	if(!empty($logo_padding["padding-bottom"])){
		$logo_padd_bot = $logo_padding["padding-bottom"];
	}

	$mobile_padding_head	= $options['mobile_padding_head'];
	$mobile_padding_head_left = '0px';
	$mobile_padding_head_right = '0px';
	if(!empty($mobile_padding_head["padding-left"])){
		$mobile_padding_head_left = $mobile_padding_head["padding-left"];
	}
	if(!empty($mobile_padding_head["padding-right"])){
		$mobile_padding_head_right = $mobile_padding_head["padding-right"];
	}

	$mobile_margin_logo	= $options['mobile_margin_logo'];
	$mobile_margin_logo_top = '0px';
	$mobile_margin_logo_bottom = '0px';
	if(!empty($mobile_margin_logo["margin-top"])){
		$mobile_margin_logo_top = $mobile_margin_logo["margin-top"];
	}
	if(!empty($mobile_margin_logo["margin-bottom"])){
		$mobile_margin_logo_bottom = $mobile_margin_logo["margin-bottom"];
	}

	$mobile_margin_menu	= $options['mobile_margin_menu'];
	$mobile_margin_menu_top = '0px';
	$mobile_margin_menu_bottom = '0px';
	if(!empty($mobile_margin_menu["margin-top"])){
		$mobile_margin_menu_top = $mobile_margin_menu["margin-top"];
	}
	if(!empty($mobile_margin_menu["margin-bottom"])){
		$mobile_margin_menu_bottom = $mobile_margin_menu["margin-bottom"];
	}

	$header_2_width	= $options['header_2_width'];
	$header2_contain_width	= 'auto';
	if(!empty($header_2_width["width"])){
		$header2_contain_width = $header_2_width["width"];
	}

	$header_padding	= $options['header_padding'];
	$header_padding_top = '0px';
	$header_padding_bot = '0px';
	$header_padding_left = '0px';
	$header_padding_right = '0px';
	if(!empty($header_padding["padding-top"])){
		$header_padding_top = $header_padding["padding-top"];
	}
	if(!empty($header_padding["padding-bottom"])){
		$header_padding_bot = $header_padding["padding-bottom"];
	}
	if(!empty($header_padding["padding-left"])){
		$header_padding_left = $header_padding["padding-left"];
	}
	if(!empty($header_padding["padding-right"])){
		$header_padding_right = $header_padding["padding-right"];
	}

	$header_background	= $options['header_background'];
	$header_background_img = 'background-image: none';
	if(!empty($header_background["background-image"])){
		$header_background_img_url = $header_background["background-image"];
		$header_background_img = 'background-image: url('.$header_background_img_url.');';
	}

	$header_fixed_background	= $options['header_fixed_background'];
	$header_fixed_color			= $options['header_fixed_color'];
	$space_when_scroll	= $options['space_when_scroll'];
	$space_when_scroll_top = '30px';
	$space_when_scroll_bot = '30px';
	$space_when_scroll_left = '0px';
	$space_when_scroll_right = '0px';
	if(!empty($header_fixed_color["padding-top"])){
		$space_when_scroll_top = $header_fixed_color["padding-top"];
	}
	if(!empty($header_fixed_color["padding-bottom"])){
		$space_when_scroll_bot = $header_fixed_color["padding-bottom"];
	}
	if(!empty($header_fixed_color["padding-left"])){
		$space_when_scroll_left = $header_fixed_color["padding-left"];
	}
	if(!empty($header_fixed_color["padding-right"])){
		$space_when_scroll_right = $header_fixed_color["padding-right"];
	}

	$header_left_item_ver_margin	= $options['header_left_item_ver_margin'];
	$header_left_item_ver_margin_top = '0px';
	$header_left_item_ver_margin_bot = '0px';
	if(!empty($header_left_item_ver_margin["margin-top"])){
		$header_left_item_ver_margin_top = $header_left_item_ver_margin["margin-top"];
	}
	if(!empty($header_left_item_ver_margin["margin-bottom"])){
		$header_left_item_ver_margin_bot = $header_left_item_ver_margin["margin-bottom"];
	}

	$header_right_item_ver_padding	= $options['header_right_item_ver_padding'];
	$header_right_item_ver_pad_top = '0px';
	$header_right_item_ver_pad_bot = '0px';
	if(!empty($header_right_item_ver_padding["padding-top"])){
		$header_right_item_ver_pad_top = $header_right_item_ver_padding["padding-top"];
	}
	if(!empty($header_right_item_ver_padding["padding-bottom"])){
		$header_right_item_ver_pad_bot = $header_right_item_ver_padding["padding-bottom"];
	}

	$header_right_item_ver_bord	= $options['header_right_item_ver_bord'];
	$header_right_item_ver_bord_top = '1px solid #efefef';
	$header_right_item_ver_bord_bot = '1px solid #efefef';
	if(!empty($header_right_item_ver_bord["border-top"])){
		$header_right_item_bord_style = $header_right_item_ver_bord["border-style"];
		$header_right_item_bord_color = $header_right_item_ver_bord["border-color"];
		$header_right_item_ver_bord_top_val = $header_right_item_ver_bord["border-top"];
		$header_right_item_ver_bord_top = $header_right_item_ver_bord_top_val .' '. $header_right_item_bord_style .' '. $header_right_item_bord_color;
	}
	if(!empty($header_right_item_ver_bord["border-bottom"])){
		$header_right_item_bord_style = $header_right_item_ver_bord["border-style"];
		$header_right_item_bord_color = $header_right_item_ver_bord["border-color"];
		$header_right_item_ver_bord_bot_val = $header_right_item_ver_bord["border-bottom"];
		$header_right_item_ver_bord_bot = $header_right_item_ver_bord_bot_val .' '. $header_right_item_bord_style .' '. $header_right_item_bord_color;
	}

	$header_left_item_margin	= $options['header_left_item_margin'];
	$header_left_item_margin_left = '0px';
	$header_left_item_margin_right = '0px';
	if(!empty($header_left_item_margin["margin-left"])){
		$header_left_item_margin_left = $header_left_item_margin["margin-left"];
	}
	if(!empty($header_left_item_margin["margin-right"])){
		$header_left_item_margin_right = $header_left_item_margin["margin-right"];
	}

	$header_right_item_margin	= $options['header_right_item_margin'];
	$header_right_item_margin_left = '0px';
	$header_right_item_margin_right = '20px';
	if(!empty($header_right_item_margin["margin-left"])){
		$header_right_item_margin_left = $header_right_item_margin["margin-left"];
	}
	if(!empty($header_right_item_margin["margin-right"])){
		$header_right_item_margin_right = $header_right_item_margin["margin-right"];
	}

	$header_text_color = $options['header_text_color'];

	/* footer area content */

	$footer_padding	= $options['footer_padding'];
	$footwrap_padd_top = '0px';
	$footwrap_padd_bot = '0px';
	if(!empty($footer_padding["padding-top"])){
		$footwrap_padd_top = $footer_padding["padding-top"];
	}
	if(!empty($footer_padding["padding-bottom"])){
		$footwrap_padd_bot = $footer_padding["padding-bottom"];
	}

	$footer_background	= $options['footer_background'];
	if(empty($footer_background)) {
		$footer_bg_color = 'transparent';
		$footer_bg_repeat = 'no-repeat';
		$footer_bg_attach = 'inherit';
		$footer_bg_position = 'center center';
		$footer_bg_size = 'inherit';
	}
	else {
		$footer_bg_color = $footer_background["background-color"];
		$footer_bg_repeat = $footer_background["background-repeat"];
		$footer_bg_attach = $footer_background["background-attachment"];
		$footer_bg_position = $footer_background["background-position"];
		$footer_bg_size = $footer_background["background-size"];
	}
	$footer_background_img = 'background-image: none';
	if(!empty($footer_background["background-image"])){
		$footer_background_img_url = $footer_background["background-image"];
		$footer_background_img = 'background-image: url('.$footer_background_img_url.');';
	}

	$foot_col1_martop = '0px';
	$foot_col1_marleft = '0px';
	$foot_col1_marbot = '0px';
	$foot_col1_marright = '0px';
	$foot_col1_margin	= $options['foot_col1_margin'];
	if(!empty($foot_col1_margin["margin-top"])){
		$foot_col1_martop = $foot_col1_margin["margin-top"];
	}
	if(!empty($foot_col1_margin["margin-left"])){
		$foot_col1_marleft = $foot_col1_margin["margin-left"];
	}
	if(!empty($foot_col1_margin["margin-bottom"])){
		$foot_col1_marbot = $foot_col1_margin["margin-bottom"];
	}
	if(!empty($foot_col1_margin["margin-right"])){
		$foot_col1_marright = $foot_col1_margin["margin-right"];
	}

	$foot_col2_martop = '0px';
	$foot_col2_marleft = '0px';
	$foot_col2_marbot = '0px';
	$foot_col2_marright = '0px';
	$foot_col2_margin	= $options['foot_col2_margin'];
	if(!empty($foot_col2_margin["margin-top"])){
		$foot_col2_martop = $foot_col2_margin["margin-top"];
	}
	if(!empty($foot_col2_margin["margin-left"])){
		$foot_col2_marleft = $foot_col2_margin["margin-left"];
	}
	if(!empty($foot_col2_margin["margin-bottom"])){
		$foot_col2_marbot = $foot_col2_margin["margin-bottom"];
	}
	if(!empty($foot_col2_margin["margin-right"])){
		$foot_col2_marright = $foot_col2_margin["margin-right"];
	}

	$foot_col3_martop = '0px';
	$foot_col3_marleft = '0px';
	$foot_col3_marbot = '0px';
	$foot_col3_marright = '0px';
	$foot_col3_margin	= $options['foot_col3_margin'];
	if(!empty($foot_col3_margin["margin-top"])){
		$foot_col3_martop = $foot_col3_margin["margin-top"];
	}
	if(!empty($foot_col3_margin["margin-left"])){
		$foot_col3_marleft = $foot_col3_margin["margin-left"];
	}
	if(!empty($foot_col3_margin["margin-bottom"])){
		$foot_col3_marbot = $foot_col3_margin["margin-bottom"];
	}
	if(!empty($foot_col3_margin["margin-right"])){
		$foot_col3_marright = $foot_col3_margin["margin-right"];
	}

	$foot_col4_martop = '0px';
	$foot_col4_marleft = '0px';
	$foot_col4_marbot = '0px';
	$foot_col4_marright = '0px';
	$foot_col4_margin	= $options['foot_col4_margin'];
	if(!empty($foot_col4_margin["margin-top"])){
		$foot_col4_martop = $foot_col4_margin["margin-top"];
	}
	if(!empty($foot_col4_margin["margin-left"])){
		$foot_col4_marleft = $foot_col4_margin["margin-left"];
	}
	if(!empty($foot_col4_margin["margin-bottom"])){
		$foot_col4_marbot = $foot_col4_margin["margin-bottom"];
	}
	if(!empty($foot_col4_margin["margin-right"])){
		$foot_col4_marright = $foot_col4_margin["margin-right"];
	}

	/*the fonts*/
	$header1_menu_typography	= $options['header1-menu-typography'];
	$content_body_font			= $options['content-body-font'];
	if(!empty($content_body_font["font-weight"])) {
		$content_body_font_weight = $content_body_font["font-weight"];
	}
	else {
		$content_body_font_weight = $content_body_font["font-style"];
	}
	$content_heading_font		= $options['content-heading-font'];
	if(!empty($content_heading_font["font-weight"])) {
		$content_heading_font_weight = $content_heading_font["font-weight"];
	}
	else {
		$content_heading_font_weight = $content_heading_font["font-style"];
	}
	$header_mobile_typography	= $options['header-mobile-typography'];
	$header2_mobile_typography	= $options['header2-mobile-typography'];
	$header4_mobile_typography	= $options['header4-mobile-typography'];

	$heading1_typo	= $options['heading1_typo'];
	$heading2_typo	= $options['heading2_typo'];
	$heading3_typo	= $options['heading3_typo'];
	$heading4_typo	= $options['heading4_typo'];
	$heading5_typo	= $options['heading5_typo'];
	$heading6_typo	= $options['heading6_typo'];

	}

	/* container */
	$seniman_custom_background				= get_theme_mod( 'custom-background' );



	/* HEADER SECTION
	================================================== */


	//header default styling

	$menu_header	   							=	get_option('menu_header', '#000000');
	$menu_hover_header	   						=	get_option('menu_hover_header', '#111111');
	$menu_border	   							=	get_option('menu_border', '#000000');
	$sub_bg	   									=	get_option('sub_bg', '#000000');
	$sub_menu   								=	get_option('sub_menu', '#ffffff');
	$search_close   							=	get_option('search_close', '#ffffff');
	$search_bar_title   						=	get_option('search_bar_title', '#ffffff');
	$search_sugges   							=	get_option('search_sugges', '#ffffff');
	$search_desc_sugges   						=	get_option('search_desc_sugges', '#ffffff');
	$search_bord   								=	get_option('search_bord', '#ffffff');

	//header alternative styling

	$alt_menu_hover	   							=	get_option('alt_menu_hover', '#dddddd');
	$alt_menu_border	  						=	get_option('alt_menu_border', '#ceac00');

	//header style 2 & 3

	$icon_burger	   							=	get_option('icon_burger', '#000000');
	$menu_style45	   							=	get_option('menu_style45', '#fefb02');
	$menu_hov_style45	   						=	get_option('menu_hov_style45', '#ef173b');

	//header Top

	$bg_top	   									=	get_option('bg_top', '#111111');
	$top_menu	   								=	get_option('top_menu', '#ffffff');
	$top_menu_hover	   							=	get_option('top_menu_hover', '#aaaaaa');
	$top_search_bg	   							=	get_option('top_search_bg', '#ffffff');
	$top_search_bord	   						=	get_option('top_search_bord', '#e7e7e7');
	$top_search_icon	   						=	get_option('top_search_icon', '#999999');
	$top_search_input	   						=	get_option('top_search_input', '#000000');


	/* CONTENT SECTION
	================================================== */

	//blog

	$post_format_bg	   							=	get_option('post_format_bg', '#000000');
	$post_format_border	   						=	get_option('post_format_border', '#000000');
	$post_format_icon	   						=	get_option('post_format_icon', '#ffffff');
	$post_meta	   								=	get_option('post_meta', '#000000');
	$post_meta_hover	   						=	get_option('post_meta_hover', '#666666');
	$post_meta_border	   						=	get_option('post_meta_border', '#000000');
	$post_title			   						=	get_option('post_title', '#000000');
	$post_hover_title			   				=	get_option('post_hover_title', '#666666');
	$post_desc			  		 				=	get_option('post_desc', '#000000');
	$read_more			  		 				=	get_option('read_more', '#000000');
	$read_more_border			  		 		=	get_option('read_more_border', '#000000');
	$read_hover_more			  		 		=	get_option('read_hover_more', '#ffffff');
	$read_hover_bg			  		 			=	get_option('read_hover_bg', '#000000');
	$read_hover_border			  		 		=	get_option('read_hover_border', '#000000');
	$social_post			  		 			=	get_option('social_post', '#000000');
	$social_hover_post			  		 		=	get_option('social_hover_post', '#ffffff');
	$quote_border				  		 		=	get_option('quote_border', '#000000');
	$tag_icon				  		 			=	get_option('tag_icon', '#000000');
	$tag_text				  		 			=	get_option('tag_text', '#000000');
	$tag_hover				  		 			=	get_option('tag_hover', '#666666');
	$prev_bord				  		 			=	get_option('prev_bord', '#f2f2f2');
	$prev_text				  		 			=	get_option('prev_text', '#ffffff');
	$prev_link				  		 			=	get_option('prev_link', '#000000');
	$prev_hover_link				  		 	=	get_option('prev_hover_link', '#cccccc');
	$comment_title				  		 		=	get_option('comment_title', '#000000');
	$comment_link				  		 		=	get_option('comment_link', '#000000');
	$comment_hover_link				  		 	=	get_option('comment_hover_link', '#999999');
	$btn_comment_bg				  		 		=	get_option('btn_comment_bg', '#000000');
	$btn_comment_text				  		 	=	get_option('btn_comment_text', '#ffffff');
	$next_archive				  			 	=	get_option('next_archive', '#ffffff');

	//blog style 2

	$title_black	   							=	get_option('title_black', '#000000');
	$title_active	   							=	get_option('title_active', '#ffffff');
	$blog_meta	   								=	get_option('blog_meta', '#000000');
	$border_meta	   							=	get_option('border_meta', '#000000');
	$hover_meta	   								=	get_option('hover_meta', '#666666');
	$hover_active	   							=	get_option('hover_active', '#ffffff');

	//single post magazine 2 & 3

	$title_post	   								=	get_option('title_post', '#ffffff');
	$title_post_hover	   						=	get_option('title_post_hover', '#dddddd');
	$category_text	   							=	get_option('category_text', '#ffffff');
	$category_text_hover	   					=	get_option('category_text_hover', '#ffffff');
	$category_bg	   							=	get_option('category_bg', '#000000');
	$category_bg_hover	   						=	get_option('category_bg_hover', '#111111');
	$meta_post	   								=	get_option('meta_post', '#000000');
	$meta_post_style3	   						=	get_option('meta_post_style3', '#000000');
	$author_text	   							=	get_option('author_text', '#000000');
	$author_hover	   							=	get_option('author_hover', '#f8035d');
	$icon_comment	   							=	get_option('icon_comment', '#111111');
	$span_text	   								=	get_option('span_text', '#999999');
	$icon_love		   							=	get_option('icon_love', '#f8035d');
	$icon_arrow		   							=	get_option('icon_arrow', '#f8035d');
	$icon_share		   							=	get_option('icon_share', '#ffffff');
	$icon_share_hover		   					=	get_option('icon_share_hover', '#ffffff');

	//sidebar & widget

	$sidebar_search_bg	   						=	get_option('sidebar_search_bg', '#ffffff');
	$sidebar_search_btn	   						=	get_option('sidebar_search_btn', '#000000');
	$sidebar_search_icon	   					=	get_option('sidebar_search_icon', '#ffffff');
	$sidebar_bg	   								=	get_option('sidebar_bg', '#ffffff');
	$seniman_widget_title	   					=	get_option('seniman_widget_title', '#000000');
	$border_widget_title	   					=	get_option('border_widget_title', '#000000');
	$link_text_sidebar	   						=	get_option('link_text_sidebar', '#000000');
	$link_hover_sidebar	   						=	get_option('link_hover_sidebar', '#666666');
	$bg_tabs	   								=	get_option('bg_tabs', '#000000');
	$text_tabs	   								=	get_option('text_tabs', '#ffffff');
	$bg_tabs2	   								=	get_option('bg_tabs2', '#ffffff');
	$text_tabs2	   								=	get_option('text_tabs2', '#000000');
	$text_tabs2_hover	   						=	get_option('text_tabs2_hover', '#666666');
	$border_tabs	   							=	get_option('border_tabs', '#000000');

	//Contact

	$form_bord	   								=	get_option('form_bord', '#cdcdcc');
	$form_bord_hover	   						=	get_option('form_bord_hover', '#000000');
	$text_input	   								=	get_option('text_input', '#000000');
	$btn_send	   								=	get_option('btn_send', '#000000');
	$btn_send_text	   							=	get_option('btn_send_text', '#ffffff');
	$btn_send_hover	   							=	get_option('btn_send_hover', '#333333');
	$btn_send_text_hover	   					=	get_option('btn_send_text_hover', '#ffffff');
	$btn_send_border	   						=	get_option('btn_send_border', '#ffffff');
	$btn_bord_hov	   							=	get_option('btn_bord_hov', '#0d0d0d');
	$btn_send_bg	   							=	get_option('btn_send_bg', '#0d0d0d');
	$btn_bg_hov	   								=	get_option('btn_bg_hov', '#ffffff');
	$send_text	   								=	get_option('send_text', '#ffffff');
	$send_text_hov	   							=	get_option('send_text_hov', '#0d0d0d');


	/* PORTFOLIO SECTION
	================================================== */

	//portfolio template

	$page_title	   								=	get_option('page_title', '#000000');
	$page_subtitle	   							=	get_option('page_subtitle', '#000000');
	$caption_portfolio	   						=	get_option('caption_portfolio', '#000000');
	$category_portfolio	   						=	get_option('category_portfolio', '#000000');
	$filter_style1	   							=	get_option('filter_style1', '#000000');
	$filter_style1_hover	   					=	get_option('filter_style1_hover', '#d23600');
	$filter_style2	   							=	get_option('filter_style2', '#000000');
	$filter_style2_border	   					=	get_option('filter_style2_border', '#000000');
	$filter_style3	   							=	get_option('filter_style3', '#000000');
	$filter_style3_hover	   					=	get_option('filter_style3_hover', '#ffffff');
	$filter_style3_border	   					=	get_option('filter_style3_border', '#111111');
	$filter_style3_bordhov	   					=	get_option('filter_style3_bordhov', '#111111');
	$filter_style3_bg	   						=	get_option('filter_style3_bg', '#111111');
	$load_bord1	   								=	get_option('load_bord1', '#cccccc');
	$load_bg1	   								=	get_option('load_bg1', '#000000');
	$load_text1	   								=	get_option('load_text1', '#ffffff');
	$load_bord2	   								=	get_option('load_bord2', '#000000');
	$load_text2	   								=	get_option('load_text2', '#000000');
	$load_text2_hover	   						=	get_option('load_text2_hover', '#ffffff');
	$load_bg2_hover	   							=	get_option('load_bg2_hover', '#000000');
	$load_text3	   								=	get_option('load_text3', '#000000');
	$load_bord3	   								=	get_option('load_bord3', '#000000');

	//portfolio single

	$detail1_title	   							=	get_option('detail1_title', '#000000');
	$detail1_p	   								=	get_option('detail1_p', '#000000');
	$detail1_desc	   							=	get_option('detail1_desc', '#555555');
	$detail1_pagination	   						=	get_option('detail1_pagination', '#000000');
	$detail1_hov_pagination	   					=	get_option('detail1_hov_pagination', '#666666');
	$single_title	   							=	get_option('single_title', '#000000');
	$single_border	   							=	get_option('single_border', '#f8035d');
	$detail2_title	   							=	get_option('detail2_title', '#000000');
	$detail2_p	   								=	get_option('detail2_p', '#000000');


	/* FOOTER
	================================================== */

	//footer

	$border_footer	   							=	get_option('border_footer', '#f2f2f2');
	$footer_text	   							=	get_option('footer_text', '#ffffff');
	$footer_link	   							=	get_option('footer_link', '#ffffff');
	$footer_hover_link	   						=	get_option('footer_hover_link', '#fefb02');
	$footer_social	   							=	get_option('footer_social', '#000000');
	$footer_hover_social	   					=	get_option('footer_hover_social', '#fefb02');
	$footer_widget_bg							=	get_option('footer_widget_bg', '#ffffff');
	$footer_widget_title	   					=	get_option('footer_widget_title', '#000000');
	$link_text_widget	   						=	get_option('link_text_widget', '#000000');
	$link_hover_widget	   						=	get_option('link_hover_widget', '#666666');
	$text_widget	   							=	get_option('text_widget', '#000000');
	$border_widget	   							=	get_option('border_widget', '#dddddd');



	/* Inline Styles Function */
	if(class_exists('acf')){
	$acf_css = "
	.hero-section{
		width: {$seniman_hero_width}{$seniman_hero_width_type};
		height: {$seniman_hero_height}px;
		margin-top: {$seniman_hero_margin_top}px;
		margin-bottom: {$seniman_hero_margin_bottom}px;
	}
	.hero-section.hero-video iframe{
		min-height: {$seniman_hero_height}px;
		width: 100%;
		max-width: 100%;
	}
	.hero-image{
		background-image: url({$seniman_hero_image});
		background-position-y: {$seniman_hero_image_vertical_position}px;
		background-position-x: {$seniman_hero_image_horizontal_position}px;
		background-repeat: {$seniman_hero_image_background_repeat};
		background-attachment: {$seniman_hero_image_background_attachment};
		background-size: {$seniman_hero_image_background_size};
	}
	.hero-title {
		font-size: {$seniman_hero_title_size};
		line-height: {$seniman_hero_title_line_height};
		color: {$seniman_hero_title_color};
	}
	.hero-description, .hero-description p {
		color: {$seniman_hero_description_color};
	}
	.hero-content.separator-on .hero-title:after {
		background-image: url({$seniman_sep_img});
		background-color: {$seniman_sep_bord};
	}
	.hero-content {
		padding-top: {$seniman_hero_content_padding_top}px;
		padding-bottom: {$seniman_hero_content_padding_bottom}px;
	}

	/* hover portfolio figure */
	.masonry-item .item-wrap figure, .masonry-item .item-wrap figcaption, .grid-item .item-wrap figure, .grid-item .item-wrap figcaption {
		background-color: {$seniman_hover_primary_color};
	}
	.masonry-item .item-wrap figure:before, .masonry-item .item-wrap figure:after, .masonry-item .item-wrap figcaption:before, .masonry-item .item-wrap figcaption:after, .grid-item .item-wrap figure:before, .grid-item .item-wrap figure:after, .grid-item .item-wrap figcaption:before, .grid-item .item-wrap figcaption:after {
		background-color: {$seniman_hover_secondary_color};
	}
	.scroll-to-content h5 {
		color: {$seniman_scroll_text_color};
	}
	";

	wp_add_inline_style( 'seniman-custom-style', $acf_css );
	}

	if(class_exists('Redux')){
	$redux_css = "
	/* theme options */
	.bordered{
	  background-color: {$seniman_bordered_title};
	}
	.header-style-2-wrap #content .container{
		max-width: calc(100% - $seniman_calc_header2);
	}

	/* container */
	.bordered-main-wrap {
		padding-left: {$seniman_bordered_width};
		padding-right: {$seniman_bordered_width};
	}

	@media only screen and (max-width: 768px) {
		header#header.inner-head-wrap.header-expanded {
			background-color: {$seniman_header_mob_bg_def};
		}
		header#header.inner-head-wrap.header-expanded.alt-head {
			background-color: {$seniman_header_mob_bg_alt};
		}
	}

	/* header area contents */
	#header .logo-image, #header .logo-title {
		padding-top: {$logo_padd_top};
		padding-bottom: {$logo_padd_bot};
	}
	header#header.inner-head-wrap {
		padding-top: {$header_padding_top};
		padding-bottom: {$header_padding_bot};
		padding-right: {$header_padding_right};
		padding-left: {$header_padding_left};
		-webkit-transition: all 0.5s ease 0s;
	    -moz-transition: all 0.5s ease 0s;
	    transition: all 0.5s ease 0s;

		background-color: {$header_background["background-color"]};
		background-repeat: {$header_background["background-repeat"]};
		background-attachment: {$header_background["background-attachment"]};
		background-position: {$header_background["background-position"]};
		background-size: {$header_background["background-size"]};
		{$header_background_img};
	}
	.sticky-header-wrap.scrolled header#header.inner-head-wrap {
		padding-top: {$space_when_scroll_top};
		padding-bottom: {$space_when_scroll_bot};
		padding-right: {$space_when_scroll_right};
		padding-left: {$space_when_scroll_left};
		webkit-transition: all 0.6s ease 0s;
	    -moz-transition: all 0.6s ease 0s;
	    -ms-transition: all 0.6s ease 0s;
	    -o-transition: all 0.6s ease 0s;
	    transition: all 0.6s ease 0s;
	}
	.sticky-header-wrap.scrolled {
		background-color: {$header_fixed_background};
		webkit-transition: all 0.6s ease 0s;
	    -moz-transition: all 0.6s ease 0s;
	    -ms-transition: all 0.6s ease 0s;
	    -o-transition: all 0.6s ease 0s;
	    transition: all 0.6s ease 0s;
	}
	.sticky-header-wrap.scrolled a, .sticky-header-wrap.scrolled i {
		color: {$header_fixed_color} !important;
		webkit-transition: all 0.6s ease 0s;
	    -moz-transition: all 0.6s ease 0s;
	    -ms-transition: all 0.6s ease 0s;
	    -o-transition: all 0.6s ease 0s;
	    transition: all 0.6s ease 0s;
	}
	#header.alt-head #showMenu span {
		background-color: {$header_text_color};
	}

	.fl.vertical.header_left_nofloat {
		margin-top: {$header_left_item_ver_margin_top};
		margin-bottom: {$header_left_item_ver_margin_bot};
	}

	.fr.vertical.header_right_nofloat {
		padding-top: {$header_right_item_ver_pad_top};
		padding-bottom: {$header_right_item_ver_pad_bot};
		border-top: {$header_right_item_ver_bord_top};
		border-bottom: {$header_right_item_ver_bord_bot};
	}

	.fl.horizontal .head-item {
		margin-left: {$header_left_item_margin_left};
		margin-right: {$header_left_item_margin_right};
	}

	.fr.horizontal .head-item {
		margin-left: {$header_right_item_margin_left} !important;
		margin-right: {$header_right_item_margin_right} !important;
	}
	
	@media only screen and (max-width: 768px) {
		header#header.inner-head-wrap {
			padding-left: {$mobile_padding_head_left};
			padding-right: {$mobile_padding_head_right};
		}
		header#header .logo.head-item {
			margin-top: {$mobile_margin_logo_top};
			margin-bottom: {$mobile_margin_logo_bottom};
		}
		header#header .search-wrap, header#header .main-menu-btn {
			margin-top: {$mobile_margin_menu_top};
			margin-bottom: {$mobile_margin_menu_bottom};
		}
	}

	/* footer area content */

	#footer .footer-wrap {
		padding-top: {$footwrap_padd_top};
		padding-bottom: {$footwrap_padd_bot};
	}
	#footer {
		background-color: {$footer_bg_color};
		background-repeat: {$footer_bg_repeat};
		background-attachment: {$footer_bg_attach};
		background-position: {$footer_bg_position};
		background-size: {$footer_bg_size};
		{$footer_background_img};
	}
	.foot-col.item-col-1 .foot-col-item {
		margin-top: {$foot_col1_martop};
		margin-left: {$foot_col1_marleft};
		margin-bottom: {$foot_col1_marbot};
		margin-right: {$foot_col1_marright};
	}
	.foot-col.item-col-1 .foot-col-item:first-child {
		margin-left: 0;
	}
	.foot-col.item-col-1 .foot-col-item:last-child {
		margin-right: 0;
	}

	.foot-col.item-col-2 .foot-col-item {
		margin-top: {$foot_col2_martop};
		margin-left: {$foot_col2_marleft};
		margin-bottom: {$foot_col2_marbot};
		margin-right: {$foot_col2_marright};
	}
	.foot-col.item-col-2 .foot-col-item:first-child {
		margin-left: 0;
	}
	.foot-col.item-col-2 .foot-col-item:last-child {
		margin-right: 0;
	}

	.foot-col.item-col-3 .foot-col-item {
		margin-top: {$foot_col3_martop};
		margin-left: {$foot_col3_marleft};
		margin-bottom: {$foot_col3_marbot};
		margin-right: {$foot_col3_marright};
	}
	.foot-col.item-col-3 .foot-col-item:first-child {
		margin-left: 0;
	}
	.foot-col.item-col-3 .foot-col-item:last-child {
		margin-right: 0;
	}

	.foot-col.item-col-4 .foot-col-item {
		margin-top: {$foot_col4_martop};
		margin-left: {$foot_col4_marleft};
		margin-bottom: {$foot_col4_marbot};
		margin-right: {$foot_col4_marright};
	}
	.foot-col.item-col-4 .foot-col-item:first-child {
		margin-left: 0;
	}
	.foot-col.item-col-4 .foot-col-item:last-child {
		margin-right: 0;
	}	

	/*fonts*/
	body, body p {
		font-family: {$content_body_font["font-family"]};
		font-weight: {$content_body_font_weight};
		text-align: {$content_body_font["text-align"]};
		font-size: {$content_body_font["font-size"]};
		line-height: {$content_body_font["line-height"]};
		word-spacing: {$content_body_font["word-spacing"]};
		letter-spacing: {$content_body_font["letter-spacing"]};
	}
	h1, h2, h3, h4, h5, h6 {
		font-family: {$content_heading_font["font-family"]};
		font-weight: {$content_heading_font_weight};
		text-align: {$content_heading_font["text-align"]};
	}

	.meta.meta-comments .comments {
		font-family: {$content_heading_font["font-family"]};
	}

	h1 {
		text-align: inherit;
		font-size: {$heading1_typo["font-size"]};
		line-height: {$heading1_typo["line-height"]};
		word-spacing: {$heading1_typo["word-spacing"]};
		letter-spacing: {$heading1_typo["letter-spacing"]};
	}
	h2 {
		text-align: inherit;
		font-size: {$heading2_typo["font-size"]};
		line-height: {$heading2_typo["line-height"]};
		word-spacing: {$heading2_typo["word-spacing"]};
		letter-spacing: {$heading2_typo["letter-spacing"]};
	}
	h3 {
		text-align: inherit;
		font-size: {$heading3_typo["font-size"]};
		line-height: {$heading3_typo["line-height"]};
		word-spacing: {$heading3_typo["word-spacing"]};
		letter-spacing: {$heading3_typo["letter-spacing"]};
	}
	h4 {
		text-align: inherit;
		font-size: {$heading4_typo["font-size"]};
		line-height: {$heading4_typo["line-height"]};
		word-spacing: {$heading4_typo["word-spacing"]};
		letter-spacing: {$heading4_typo["letter-spacing"]};
	}
	h5 {
		text-align: inherit;
		font-size: {$heading5_typo["font-size"]};
		line-height: {$heading5_typo["line-height"]};
		word-spacing: {$heading5_typo["word-spacing"]};
		letter-spacing: {$heading5_typo["letter-spacing"]};
	}
	h6 {
		text-align: inherit;
		font-size: {$heading6_typo["font-size"]};
		line-height: {$heading6_typo["line-height"]};
		word-spacing: {$heading6_typo["word-spacing"]};
		letter-spacing: {$heading6_typo["letter-spacing"]};
	}

	@media only screen and (max-width: 768px) {
		#main-wrapper #header #primary-menu li a {
			font-weight: {$header_mobile_typography["font-weight"]};
			text-align: {$header_mobile_typography["text-align"]};
			font-size: {$header_mobile_typography["font-size"]};
			line-height: {$header_mobile_typography["line-height"]};
			word-spacing: {$header_mobile_typography["word-spacing"]};
			letter-spacing: {$header_mobile_typography["letter-spacing"]};
		}

		#main-wrapper.header-style-2-wrap .main-menu ul li a, 
		#main-wrapper.header-style-3-wrap .main-menu ul li a {
			font-weight: {$header2_mobile_typography["font-weight"]};
			text-align: {$header2_mobile_typography["text-align"]};
			font-size: {$header2_mobile_typography["font-size"]};
			line-height: {$header2_mobile_typography["line-height"]};
			word-spacing: {$header2_mobile_typography["word-spacing"]};
			letter-spacing: {$header2_mobile_typography["letter-spacing"]};
		}
		#main-wrapper .effect-airbnb .outer-nav a, #main-wrapper .effect-moveleft .outer-nav a, #main-wrapper .effect-movedown .outer-nav a {
			font-weight: {$header4_mobile_typography["font-weight"]};
			text-align: {$header4_mobile_typography["text-align"]};
			font-size: {$header4_mobile_typography["font-size"]};
			line-height: {$header4_mobile_typography["line-height"]};
			word-spacing: {$header4_mobile_typography["word-spacing"]};
			letter-spacing: {$header4_mobile_typography["letter-spacing"]};
		}
	}
	";

	wp_add_inline_style( 'seniman-custom-style', $redux_css );
	}

	$custom_css = "


	/* HEADER SECTION
	================================================================ */

	/* Header Default Styling --- */

	.header-style-1-wrap .main-menu ul.sm-clean>li>a, .header-style-1-wrap .main-menu ul.sm-clean>li>a:active, .header-style-1-wrap .search-wrap #btn-search i, .header-style-1-wrap .main-menu ul.sm-clean>li.current-menu-item>a, .header-style-1-wrap .main-menu ul.sm-clean>li>a:hover{
		color: {$menu_header};
	}
	.sm-clean a span.sub-arrow{
		border-top-color: {$menu_header};
	}
	.header-style-1-wrap .main-menu ul.sm-clean>li>a:hover, .header-style-1-wrap .menu__item:hover .menu__link{
		color: {$menu_hover_header};
	}
	.header-style-1-wrap .main-menu ul.sm-clean>li>a::before, .header-style-1-wrap .main-menu ul.sm-clean>li.current-menu-item>a::before,
	.header-style-1-wrap .main-menu ul.sm-clean>li>a::after, .header-style-1-wrap .main-menu ul.sm-clean>li.current-menu-item>a::after,
	.header-style-1-wrap .main-menu ul.sm-clean>li::before,
	.header-style-1-wrap .main-menu ul.sm-clean>li::after{
		background-color: {$menu_border};
		border-color: {$menu_border};
	}
	.header-style-1-wrap ul.sm-clean ul{
		background-color: {$sub_bg};
	}
	.header-style-1-wrap ul.sm-clean ul li a{
		color: {$sub_menu};
	}
	.header-style-1 .btn--search-close{
		color: {$search_close};
	}
	.header-style-1 .search__info{
		color: {$search_bar_title};
	}
	.header-style-1 .search__suggestion h4{
		color: {$search_sugges};
	}
	.header-style-1 .search__suggestion h4::before{
		background-color: {$search_sugges};
	}
	.header-style-1 .search__suggestion p{
		color: {$search_desc_sugges};
	}
	.header-style-1 .search__input{
		color: {$search_bord};
	}


	/* Header Alternative Styling --- */

	body .alt-head .main-menu ul.sm-clean>li>a:hover,
	.header-style-1-wrap.alt-head .main-menu ul.sm-clean>li>a:hover, 
	.header-style-1-wrap.alt-head .menu__item:hover .menu__link{
		color: {$alt_menu_hover};
	}
	body .alt-head .main-menu ul.sm-clean>li>a::before, body .alt-head .main-menu ul.sm-clean>li.current-menu-item>a::before{
		background-color: {$alt_menu_border};
	}


	/* Header Style 2 & 3 --- */

	.header-style-5 #showMenu span, .header-style-4 #showMenu span, .header-style-6 #showMenu span{
		background-color: {$icon_burger};
	}
	.effect-moveleft .outer-nav a, .effect-airbnb .outer-nav a, .effect-movedown.animate .outer-nav a{
		color: {$menu_style45};
	}
	.effect-moveleft .outer-nav a:hover, .effect-airbnb .outer-nav a:hover, .effect-movedown.animate .outer-nav a:hover{
		color: {$menu_hov_style45};
	}


	/* Header Top --- */

	.top-bar{
		background-color: {$bg_top};
	}
	.top-bar a, .top-bar ul.sm-clean li a{
		color: {$top_menu};
	}
	.top-bar a:hover, .top-bar ul.sm-clean li a:hover{
		color: {$top_menu_hover};
	}
	.top-bar .search-form.default-search .searchform input.field{
		background-color: {$top_search_bg};
	}
	.top-bar .search-form.default-search .searchform input.field{
		border-color: {$top_search_bord};
	}
	.top-bar .default-search .search-button{
		color: {$top_search_icon};
	}
	.top-bar .search-form.default-search .searchform input.field{
		color: {$top_search_input};
	}




	/* CONTENT SECTION
	================================================================ */

	/* Blog --- */

	.category-icon .category-icon-gallery i, .category-icon .category-icon-video i{
		background-color: {$post_format_bg};
	}
	.category-icon .category-icon-gallery i, .category-icon .category-icon-video i{
		border-color: {$post_format_border};
	}
	.category-icon .category-icon-gallery i, .category-icon .category-icon-video i{
		color: {$post_format_icon};
	}
	.blog-style-2 .post-content-style-2, .blog-item .meta-wrapper .author a, .author-separator, .blog-item .meta-wrapper .date a, .date span, .blog-item .meta-wrapper .standard-post-categories a, .social-share-wrapper span{
		color: {$post_meta};
	}
	.blog-item .meta-wrapper .author a:hover, .blog-item .meta-wrapper .date a:hover, .blog-item .meta-wrapper .date span:hover, .blog-item .meta-wrapper .standard-post-categories a:hover{
		color: {$post_meta_hover};
	}
	.blog-item .meta-wrapper span.date:before, .blog-item .meta-wrapper span.standard-post-categories:before, .social-share-wrapper span:after{
		color: {$post_meta_border};
	}
	.post-content h2.post-title a, .post-content h1.post-title a{
		color: {$post_title};
	}
	.post-content h2.post-title a:hover, .post-content h1.post-title a:hover{
		color: {$post_hover_title};
	}
	.post-content .post-text p, .comment-content p{
		color: {$post_desc};
	}
	.post-content a.read-more{
		color: {$read_more};
	}
	.blog-item .read-more{
		border-color: {$read_more_border};
	}
	.post-content a.read-more:hover{
		color: {$read_hover_more};
	}
	.blog-item .read-more:hover{
		background-color: {$read_hover_bg};
	}
	.blog-item .read-more:hover{
		border-color: {$read_hover_border};
	}
	.share-section .social-share-wrapper .share-item a{
		color: {$social_post};
	}
	.share-section .social-share-wrapper .share-item a:hover{
		color: {$social_hover_post};
	}
	blockquote{
		border-left-color: {$quote_border};
	}
	.tag-wrapper span{
		color: {$tag_icon};
	}
	.tag-wrapper a{
		color: {$tag_text};
	}
	.tag-wrapper a:hover{
		color: {$tag_hover};
	}
	.blog-single .next-prev-post, .comment-list, .magazine-1-post-style .post-content{
		border-top-color: {$prev_bord};
		border-bottom-color: {$prev_bord};
	}
	.next-prev-post .prev-post p, .next-prev-post .next-post p, .post-navigation .btn{
		color: {$prev_text};
	}
	.next-prev-post h4.title a, .comments-title .leave-reply-link a{
		color: {$prev_link};
	}
	.next-prev-post h4.title a:hover{
		color: {$prev_hover_link};
	}
	.comment-respond h3.comment-reply-title, .comments-title h3{
		color: {$comment_title};
	}
	.comment-respond form p.logged-in-as a, .comment-respond form p.logged-in-as, .comment-action a{
		color: {$comment_link};
	}
	.comment-respond form p.logged-in-as a:hover, .comment-action a:hover{
		color: {$comment_hover_link};
	}
	.comment-respond form p.form-submit input, .contact-form-style-1 .wpcf7-submit, .contact-form-style-2 .wpcf7-submit{
		background-color: {$btn_comment_bg};
	}
	.comment-respond form p.form-submit input, .contact-form-style-1 .wpcf7-submit, .contact-form-style-2 .wpcf7-submit{
		color: {$btn_comment_text};
	}
	.archive .post-navigation .btn, .search-page .post-navigation .btn{
		color: {$next_archive};
	}


	/* Blog Style 2 --- */

	.blog-style-2 article.blog-item .post-content-style-2 h2.post-title a{
		color: {$title_black};
	}
	.blog-style-2 article.blog-item:hover .post-content-style-2 h2.post-title a{
		color: {$title_active};
	}
	.blog-style-2 .post-content-style-2, .blog-item .meta-wrapper .author a, .author-separator, .blog-item .meta-wrapper .date a, .date span, .blog-item .meta-wrapper .standard-post-categories a, .social-share-wrapper span{
		color: {$blog_meta};
	}
	.blog-item .meta-wrapper span.date:before, .blog-item .meta-wrapper span.standard-post-categories:before, .social-share-wrapper span:after{
		color: {$border_meta};
	}
	.blog-item .meta-wrapper .author a:hover, .blog-item .meta-wrapper .date a:hover, .blog-item .meta-wrapper .date span:hover, .blog-item .meta-wrapper .standard-post-categories a:hover{
		color: {$hover_meta};
	}
	.blog-style-2 article.blog-item:hover span, .blog-style-2 article.blog-item:hover .meta-wrapper span.author a, .blog-style-2 article.blog-item:hover .meta-wrapper span.date a, .blog-style-2 article.blog-item:hover .meta-wrapper span.standard-post-categories a{
		color: {$hover_active};
	}
	.blog-style-2 article.blog-item:hover .meta-wrapper span.date::before, .blog-style-2 article.blog-item:hover .meta-wrapper span.standard-post-categories::before{
		color: {$hover_active};
	}

	/* Single Post Style 2 & 3 --- */

	.magazine-2-post-style .single-post-style-2-inner-content h1.post-title a{
		color: {$title_post};
	}
	.magazine-2-post-style .single-post-style-2-inner-content h1.post-title a:hover{
		color: {$title_post_hover};
	}
	.magazine-post-style .standard-post-categories .post-categories a{
		color: {$category_text};
	}
	.magazine-post-style .standard-post-categories .post-categories a:hover{
		color: {$category_text_hover};
	}
	.magazine-post-style .standard-post-categories .post-categories a{
		background-color: {$category_bg};
	}
	.magazine-post-style .standard-post-categories .post-categories a:hover{
		background-color: {$category_bg_hover};
	}
	.magazine-post-style .post-meta span.author-separator, .blog-single .magazine-post-style p.date, .blog-single .magazine-post-style span.eta:before, .comment-author time{
		color: {$meta_post};
	}
	.single-post-style-3-inner-content .post-meta span.author-separator, .single-post-style-3-inner-content .post-meta a span.vcard, .blog-single .single-post-style-3-inner-content p.date, .blog-single .single-post-style-3-inner-content .post-meta i:before, .single-post-style-3-inner-content .love-it-wrapper a:before, .blog-single .single-post-style-3-inner-content .post-meta span.right-section span, .single-post-style-3-inner-content .post-meta span.eta:before{
		color: {$meta_post_style3};
	}
	.magazine-post-style .post-meta span.vcard, .comment-author cite, .magazine-post-style .author-desc a{
		color: {$author_text};
	}
	.magazine-post-style .post-meta span.vcard:hover, .magazine-post-style .post-meta a:hover{
		color: {$author_hover};
	}
	.blog-single .magazine-post-style .post-meta i{
		color: {$icon_comment};
	}
	.magazine-post-style .post-meta a, .love-count{
		color: {$span_text};
	}
	.magazine-post-style .has-been-loved:before, .magazine-post-style .love-it-wrapper a:before{
		color: {$icon_love};
	}
	.magazine-post-style .next-prev-post .column p i{
		color: {$icon_arrow};
	}
	.magazine-post-style .share-section .social-share-wrapper .share-item a{
		color: {$icon_share};
	}
	.magazine-post-style .share-section .social-share-wrapper .share-item a:hover{
		color: {$icon_share_hover};
	}


	/* Sidebar & Widget --- */

	.sidebar .widget.widget_search input{
		background-color: {$sidebar_search_bg};
	}
	.sidebar .widget.widget_search button{
		background-color: {$sidebar_search_btn};
	}
	.sidebar .widget.widget_search button i{
		color: {$sidebar_search_icon};
	}
	.sidebar .widget{
		background-color: {$sidebar_bg};
	}
	.sidebar .widget h4.widget-title{
		color: {$seniman_widget_title};
	}
	.sidebar .widget h4.widget-title:after{
		background-color: {$border_widget_title};
	}
	.sidebar #recent-posts-2 ul li a, .sidebar .widget .recent-news .post-content h5 a, .sidebar #recent-comments-2 ul li a, li.recentcomments, .sidebar #archives-2 ul li a, .sidebar #categories-2 ul li a, .sidebar #meta-2 ul li a{
		color: {$link_text_sidebar};
	}
	.sidebar .widget .widget_recent_entries ul li a:hover, .sidebar .widget .recent-news .post-content h5 a:hover, .sidebar .widget .widget_recent_comments ul li a:hover, .sidebar #archives-2 ul li a:hover, .sidebar #categories-2 ul li a:hover, .sidebar #meta-2 ul li a:hover{
		color: {$link_hover_sidebar};
	}
	.widget.widget_seniman_news .nav-tabs li.active, .widget.widget_seniman_news .post-item:before{
		background-color: {$bg_tabs};
	}
	.widget.widget_seniman_news .nav-tabs li.active a, .widget.widget_seniman_news .post-item:before{
		color: {$text_tabs};
	}
	.widget.widget_seniman_news .nav-tabs li{
		background-color: {$bg_tabs2};
	}
	.widget.widget_seniman_news .nav-tabs li a{
		color: {$text_tabs2};
	}
	.widget.widget_seniman_news .nav-tabs li a:hover{
		color: {$text_tabs2_hover};
	}
	.widget.widget_seniman_news .nav-tabs{
		border-bottom-color: {$border_tabs};
	}


	/* Contact --- */

	.contact-form-style-2 .contact-item2:before, .contact-ef .border-form-top, .contact-ef{
		background-color: {$form_bord}
	}
	.contact-form-style-2 .contact-item2:after{
		background-color: {$form_bord_hover}
	}
	.contact-form-style-1 .contact-bordered input, .contact-form-style-2 .contact-item2 input, .contact-bordered.text-area textarea, .contact-form-style-2 .contact-item2 textarea{
		color: {$text_input}
	}
	.contact-form-style-1 input.wpcf7-submit, .contact-form-style-2 input.wpcf7-submit{
		background-color: {$btn_send}
	}
	.contact-form-style-1 input.wpcf7-submit, .contact-form-style-2 input.wpcf7-submit{
		color: {$btn_send_text}
	}
	.contact-form-style-1 input.wpcf7-submit:hover, .contact-form-style-2 input.wpcf7-submit:hover{
		background-color: {$btn_send_hover}
	}
	.contact-form-style-1 input.wpcf7-submit:hover, .contact-form-style-2 input.wpcf7-submit:hover{
		color: {$btn_send_text_hover}
	}
	.custom-form .bordered-button input.wpcf7-submit{
		border-color: {$btn_send_border}
	}
	.custom-form .bordered-button input.wpcf7-submit:hover{
		border-color: {$btn_bord_hov}
	}
	.custom-form .bordered-button input.wpcf7-submit{
		background-color: {$btn_send_bg}
	}
	.custom-form .bordered-button input.wpcf7-submit:hover{
		background-color: {$btn_bg_hov}
	}
	.custom-form .bordered-button input.wpcf7-submit{
		color: {$send_text}
	}
	.custom-form .bordered-button input.wpcf7-submit:hover{
		color: {$send_text_hov}
	}


	/* PORTFOLIO SECTION
	================================================================ */

	/* Portfolio Template --- */

	.page-title h2{
		color: {$page_title};
	}
	p.subtitle{
		color: {$page_subtitle};
	}
	figcaption .caption-inside h3.portfolio-loop-title{
		color: {$caption_portfolio};
	}
	.grid-item .portfolio-category, .masonry-item .portfolio-category{
		color: {$category_portfolio};
	}
	.filters.style-1 .filter-btn{
		color: {$filter_style1};
	}
	.filters.style-1 .filter-btn:hover{
		color: {$filter_style1_hover};
		border-color: {$filter_style1_hover};
	}
	.filters.style-2 .filter-btn{
		color: {$filter_style2};
	}
	.filters.style-2 .filter-btn::before{
		background-color: {$filter_style2_border};
	}
	.filters.style-3 .filter-btn{
		color: {$filter_style3};
	}
	.filters.style-3 .filter-btn:hover{
		color: {$filter_style3_hover};
	}
	.filters.style-3 .filter-btn{
		border-color: {$filter_style3_border};
	}
	.filters.style-3 .filter-btn:hover{
		border-color: {$filter_style3_bordhov};
	}
	.filters.style-3 .filter-btn:hover{
		background-color: {$filter_style3_bg};
	}
	.navigation-paging{
		border-top-color: {$load_bord1};
	}
	.navigation-paging{
		border-bottom-color: {$load_bord1};
	}
	.btn{
		background-color: {$load_bg1};
	}
	.btn{
		color: {$load_text1};
	}
	.infinite-wrap.style-2 .btn{
		border-color: {$load_bord2};
	}
	.infinite-wrap.style-2 .btn{
		color: {$load_text2};
	}
	.infinite-wrap.style-2 .btn:hover{
		color: {$load_text2_hover};
	}
	.infinite-wrap.style-2 .btn:hover{
		background-color: {$load_bg2_hover};
	}
	.infinite-wrap.style-2 .btn:hover{
		border-color: {$load_bg2_hover};
	}
	.infinite-wrap.style-3 .btn{
		color: {$load_text3};
	}
	.infinite-wrap.style-3 .btn:before{
		background-color: {$load_bord3};
	}


	/* Portfolio Single --- */

	.portfolio-style1 .project-details ul li span{
		color: {$detail1_title};
	}
	.portfolio-style1 .project-details ul li p, .portfolio-style1 .project-details ul li a{
		color: {$detail1_p};
	}
	.portfolio-content p{
		color: {$detail1_desc};
	}
	.portfolio-style1 .portfolio-pagination .prev-portfolio a, .portfolio-style1 .portfolio-pagination .all-portfolio a, .portfolio-style1 .portfolio-pagination .next-portfolio a{
		color: {$detail1_pagination};
	}
	.portfolio-style1 .portfolio-pagination a:hover{
		color: {$detail1_hov_pagination};
	}
	.post-title-porto-2 span{
		color: {$single_title};
	}
	.back-portfo2:after, .portfolio-style1 .page-title h2:after, .post-title-porto-2 span:after{
		background-color: {$single_border};
	}
	.porto2-detail-wrap .portfolio-details .detail-title, .share-portfolio .social-share-wrapper span{
		color: {$detail2_title};
	}
	.portfolio-content .portfolio-details .detail-info, .portfolio-content .portfolio-details .detail-info a{
		color: {$detail2_p};
	}


	/* FOOTER SECTION
	================================================================ */

	/* Footer --- */

	.copyright-text, .footer-text-area{
		color: {$footer_text};
	}
	.copyright-text a, .footer-menu li a{
		color: {$footer_link};
	}
	.copyright-text a:hover, .footer-menu li a:hover{
		color: {$footer_hover_link};
	}
	.footer-bottom .social-footer ul li a{
		color: {$footer_social};
	}
	.footer-bottom .social-footer ul li a:hover{
		color: {$footer_hover_social};
	}
	.footer-widget-wrapper{
		background-color: {$footer_widget_bg};
	}
	.footer-widget .widget-footer h4.widget-title{
		color: {$footer_widget_title};
	}
	.footer-widget .widget-footer .latest-post-widget a, .latest-post-wrap h5, .footer-widget .widget_nav_menu ul li a, .footer-widget .widget-footer a{
		color: {$link_text_widget};
	}
	.footer-widget .widget-footer .latest-post-widget a:hover, .footer-widget .widget_nav_menu ul li a:hover, .footer-widget .widget-footer a:hover{
		color: {$link_hover_widget};
	}
	.footer-widget .textwidget{
		color: {$text_widget};
	}
	.latest-post-wrap h5, .footer-widget .widget_nav_menu ul li a:before{
		border-bottom-color: {$border_widget};
	}

	
	";

	wp_add_inline_style( 'seniman-custom-style', $custom_css );

}
add_action( 'wp_enqueue_scripts', 'seniman_styles_method');