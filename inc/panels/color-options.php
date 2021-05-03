<?php

	/*=====================================================================================================*/
	// Set Panel ID
	/*=====================================================================================================*/
	$panel_id_1 = 'seniman_header_section';

	$wp_customize->add_panel( $panel_id_1,
	    array(
	        'priority'          => 199,
	        'capability'        => 'edit_theme_options',
	        'theme_supports'    => '',
	        'title'             => esc_html__( 'Header Section Color', 'seniman' ),
	        'description'       => esc_html__( 'Edit your header color here.', 'seniman' ),
	    )
	);

	/* HEADER DEFAULT STYLING
	================================================== */
	
	$wp_customize->add_section( 'header_default_styling', array(
		'title'		=>	esc_html__( 'Header Style 1', 'seniman' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'menu_header', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'menu_hover_header', array(
		'default'		=> 	'#111111',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'menu_border', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sub_bg', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sub_menu', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'search_close', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'search_bar_title', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'search_sugges', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'search_desc_sugges', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'search_bord', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_header', array(
		'label'		=>	esc_html__( 'Menu & Search Icon Header Color', 'seniman' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'menu_header',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_hover_header', array(
		'label'		=>	esc_html__( 'Menu Header Hover Color', 'seniman' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'menu_hover_header',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_border', array(
		'label'		=>	esc_html__( 'Menu Header Border Hover Color', 'seniman' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'menu_border',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sub_bg', array(
		'label'		=>	esc_html__( 'Submenu Background Color', 'seniman' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'sub_bg',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sub_menu', array(
		'label'		=>	esc_html__( 'Submenu Text Color', 'seniman' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'sub_menu',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_close', array(
		'label'		=>	esc_html__( 'Button Search Close Color', 'seniman' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'search_close',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_bar_title', array(
		'label'		=>	esc_html__( 'Search Bar Title Color', 'seniman' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'search_bar_title',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_sugges', array(
		'label'		=>	esc_html__( 'Search Suggestion Title Color', 'seniman' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'search_sugges',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_desc_sugges', array(
		'label'		=>	esc_html__( 'Search Suggestion Description Color', 'seniman' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'search_desc_sugges',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_bord', array(
		'label'		=>	esc_html__( 'Search Border Color', 'seniman' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'search_bord',
		'priority'	=>	11,
	) ) );


	/* HEADER ALTERNATIVE STYLING
	================================================== */
	
	$wp_customize->add_section( 'header_alt_styling', array(
		'title'		=>	esc_html__( 'Header Alternative', 'seniman' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'alt_menu_hover', array(
		'default'		=> 	'#dddddd',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'alt_menu_border', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'alt_menu_hover', array(
		'label'		=>	esc_html__( 'Menu Hover Color', 'seniman' ),
		'section'	=>	'header_alt_styling',
		'settings'	=>	'alt_menu_hover',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'alt_menu_border', array(
		'label'		=>	esc_html__( 'Menu Border Color', 'seniman' ),
		'section'	=>	'header_alt_styling',
		'settings'	=>	'alt_menu_border',
		'priority'	=>	2,
	) ) );


	/* HEADER STYLE 2 & 3
	================================================== */
	
	$wp_customize->add_section( 'header_style_456', array(
		'title'		=>	esc_html__( 'Header Style 2 & 3', 'seniman' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'icon_burger', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'menu_style45', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'menu_hov_style45', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'icon_burger', array(
		'label'		=>	esc_html__( 'Burger Icon Header Color', 'seniman' ),
		'section'	=>	'header_style_456',
		'settings'	=>	'icon_burger',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_style45', array(
		'label'		=>	esc_html__( 'Menu List Color', 'seniman' ),
		'section'	=>	'header_style_456',
		'settings'	=>	'menu_style45',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_hov_style45', array(
		'label'		=>	esc_html__( 'Menu List Hover Color', 'seniman' ),
		'section'	=>	'header_style_456',
		'settings'	=>	'menu_hov_style45',
		'priority'	=>	3,
	) ) );


	/* HEADER TOP STYLE
	================================================== */
	
	$wp_customize->add_section( 'header_top', array(
		'title'		=>	esc_html__( 'Header Top', 'seniman' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'bg_top', array(
		'default'		=> 	'#111111',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'top_menu', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'top_menu_hover', array(
		'default'		=> 	'#aaaaaa',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'top_search_bg', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'top_search_bord', array(
		'default'		=> 	'#e7e7e7',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'top_search_icon', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'top_search_input', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_top', array(
		'label'		=>	esc_html__( 'Header Top Background Color', 'seniman' ),
		'section'	=>	'header_top',
		'settings'	=>	'bg_top',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_menu', array(
		'label'		=>	esc_html__( 'Header Top Menu & Social Icon Color', 'seniman' ),
		'section'	=>	'header_top',
		'settings'	=>	'top_menu',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_menu_hover', array(
		'label'		=>	esc_html__( 'Header Top Menu & Social Icon Hover Color', 'seniman' ),
		'section'	=>	'header_top',
		'settings'	=>	'top_menu_hover',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_search_bg', array(
		'label'		=>	esc_html__( 'Header Top Search Form Background Color', 'seniman' ),
		'section'	=>	'header_top',
		'settings'	=>	'top_search_bg',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_search_bord', array(
		'label'		=>	esc_html__( 'Header Top Search Form Border Color', 'seniman' ),
		'section'	=>	'header_top',
		'settings'	=>	'top_search_bord',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_search_icon', array(
		'label'		=>	esc_html__( 'Header Top Search Form Icon Color', 'seniman' ),
		'section'	=>	'header_top',
		'settings'	=>	'top_search_icon',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_search_input', array(
		'label'		=>	esc_html__( 'Header Top Search Form Text Input Color', 'seniman' ),
		'section'	=>	'header_top',
		'settings'	=>	'top_search_input',
		'priority'	=>	7,
	) ) );




	/*=====================================================================================================*/
	// Set Panel ID
	/*=====================================================================================================*/
	$panel_id_1 = 'seniman_content_section';

	$wp_customize->add_panel( $panel_id_1,
	    array(
	        'priority'          => 199,
	        'capability'        => 'edit_theme_options',
	        'theme_supports'    => '',
	        'title'             => esc_html__( 'Content Section Color', 'seniman' ),
	        'description'       => esc_html__( 'Edit your content color here.', 'seniman' ),
	    )
	);

	/* BLOG STYLING
	================================================== */
	
	$wp_customize->add_section( 'blog_styling', array(
		'title'		=>	esc_html__( 'Blog Loop & Single Blog Portfolio Style & Magazine Style 1', 'seniman' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'post_format_bg', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_format_border', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_format_icon', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_meta', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_meta_hover', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_meta_border', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_hover_title', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_desc', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'read_more', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'read_more_border', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'read_hover_more', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'read_hover_bg', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'read_hover_border', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'social_post', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'social_hover_post', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'quote_border', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'tag_icon', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'tag_text', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'tag_hover', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'prev_bord', array(
		'default'		=> 	'#f2f2f2',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'prev_text', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'prev_link', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'prev_hover_link', array(
		'default'		=> 	'#cccccc',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'comment_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'comment_link', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'comment_hover_link', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_comment_bg', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_comment_text', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'next_archive', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_format_bg', array(
		'label'		=>	esc_html__( 'Post Format Background Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_format_bg',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_format_border', array(
		'label'		=>	esc_html__( 'Post Format Border Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_format_border',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_format_icon', array(
		'label'		=>	esc_html__( 'Post Format Icon Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_format_icon',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_meta', array(
		'label'		=>	esc_html__( 'Post Meta Color (All Blog Style)', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_meta',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_meta_hover', array(
		'label'		=>	esc_html__( 'Post Meta Link Hover Color (All Blog Style)', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_meta_hover',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_meta_border', array(
		'label'		=>	esc_html__( 'Post Meta Border Color (All Blog Style)', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_meta_border',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_title', array(
		'label'		=>	esc_html__( 'Post Title Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_title',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_hover_title', array(
		'label'		=>	esc_html__( 'Post Title Hover Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_hover_title',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_desc', array(
		'label'		=>	esc_html__( 'Post Text Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_desc',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'read_more', array(
		'label'		=>	esc_html__( 'Post Read More Button Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'read_more',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'read_more_border', array(
		'label'		=>	esc_html__( 'Post Read More Button Border Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'read_more_border',
		'priority'	=>	11,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'read_hover_more', array(
		'label'		=>	esc_html__( 'Post Read More Button Hover Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'read_hover_more',
		'priority'	=>	12,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'read_hover_bg', array(
		'label'		=>	esc_html__( 'Post Read More Button Hover Background Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'read_hover_bg',
		'priority'	=>	13,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'read_hover_border', array(
		'label'		=>	esc_html__( 'Post Read More Button Hover Border Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'read_hover_border',
		'priority'	=>	14,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_post', array(
		'label'		=>	esc_html__( 'Post Social Share Icon Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'social_post',
		'priority'	=>	15,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_hover_post', array(
		'label'		=>	esc_html__( 'Post Social Share Icon Hover Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'social_hover_post',
		'priority'	=>	16,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'quote_border', array(
		'label'		=>	esc_html__( 'Quote Border Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'quote_border',
		'priority'	=>	17,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tag_icon', array(
		'label'		=>	esc_html__( 'Tag Label Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'tag_icon',
		'priority'	=>	18,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tag_text', array(
		'label'		=>	esc_html__( 'Tag Text Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'tag_text',
		'priority'	=>	19,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tag_hover', array(
		'label'		=>	esc_html__( 'Tag Text Hover Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'tag_hover',
		'priority'	=>	20,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prev_bord', array(
		'label'		=>	esc_html__( 'Next & Previous Post Border Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'prev_bord',
		'priority'	=>	21,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prev_text', array(
		'label'		=>	esc_html__( 'Next & Previous Post Text Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'prev_text',
		'priority'	=>	22,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prev_link', array(
		'label'		=>	esc_html__( 'Next & Previous Post Text Link Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'prev_link',
		'priority'	=>	23,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prev_hover_link', array(
		'label'		=>	esc_html__( 'Next & Previous Post Text Link Hover Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'prev_hover_link',
		'priority'	=>	24,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comment_title', array(
		'label'		=>	esc_html__( 'Comment Reply Title Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'comment_title',
		'priority'	=>	25,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comment_link', array(
		'label'		=>	esc_html__( 'Comment Link Log in & Log Out Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'comment_link',
		'priority'	=>	26,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comment_hover_link', array(
		'label'		=>	esc_html__( 'Comment Link Log in & Log Out Hover Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'comment_hover_link',
		'priority'	=>	27,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_comment_bg', array(
		'label'		=>	esc_html__( 'Post Comment Button Background Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'btn_comment_bg',
		'priority'	=>	28,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_comment_text', array(
		'label'		=>	esc_html__( 'Post Comment Button Text Color', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'btn_comment_text',
		'priority'	=>	29,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'next_archive', array(
		'label'		=>	esc_html__( 'Next & Previous Post Text Color (Archive)', 'seniman' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'next_archive',
		'priority'	=>	30,
	) ) );


	/* BLOG STYLING 2
	================================================== */
	
	$wp_customize->add_section( 'blog_styling_2', array(
		'title'		=>	esc_html__( 'Blog Full Background Template', 'seniman' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'title_black', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'title_active', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'blog_meta', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_meta', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'hover_meta', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'hover_active', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_black', array(
		'label'		=>	esc_html__( 'Post Title Color', 'seniman' ),
		'section'	=>	'blog_styling_2',
		'settings'	=>	'title_black',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_active', array(
		'label'		=>	esc_html__( 'Post Title Hover/Active Color', 'seniman' ),
		'section'	=>	'blog_styling_2',
		'settings'	=>	'title_active',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog_meta', array(
		'label'		=>	esc_html__( 'Post Meta Color (All Blog Style)', 'seniman' ),
		'section'	=>	'blog_styling_2',
		'settings'	=>	'blog_meta',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_meta', array(
		'label'		=>	esc_html__( 'Post Meta Border Color (All Blog Style)', 'seniman' ),
		'section'	=>	'blog_styling_2',
		'settings'	=>	'border_meta',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hover_meta', array(
		'label'		=>	esc_html__( 'Post Meta Link Hover Color (All Blog Style)', 'seniman' ),
		'section'	=>	'blog_styling_2',
		'settings'	=>	'hover_meta',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hover_active', array(
		'label'		=>	esc_html__( 'Post Meta Hover Active Color', 'seniman' ),
		'section'	=>	'blog_styling_2',
		'settings'	=>	'hover_active',
		'priority'	=>	6,
	) ) );



	/* SINGLE POST MAGAZINE 2 STYLING
	================================================== */
	
	$wp_customize->add_section( 'single_magazine_2', array(
		'title'		=>	esc_html__( 'Single Post Magazine Style 2 & 3', 'seniman' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );

	//SECTION

	$wp_customize->add_setting( 'title_post', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'title_post_hover', array(
		'default'		=> 	'#dddddd',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_text', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_text_hover', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_bg', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_bg_hover', array(
		'default'		=> 	'#111111',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'meta_post', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'meta_post_style3', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'author_text', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'author_hover', array(
		'default'		=> 	'#61c436',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'icon_comment', array(
		'default'		=> 	'#111111',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'span_text', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'icon_love', array(
		'default'		=> 	'#61c436',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'icon_arrow', array(
		'default'		=> 	'#61c436',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'icon_share', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'icon_share_hover', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_post', array(
		'label'		=>	esc_html__( 'Titile Post Color', 'seniman' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'title_post',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_post_hover', array(
		'label'		=>	esc_html__( 'Titile Post Hover Color', 'seniman' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'title_post_hover',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_text', array(
		'label'		=>	esc_html__( 'Category Text Color', 'seniman' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'category_text',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_text_hover', array(
		'label'		=>	esc_html__( 'Category Text Hover Color', 'seniman' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'category_text_hover',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_bg', array(
		'label'		=>	esc_html__( 'Category Background Color', 'seniman' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'category_bg',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_bg_hover', array(
		'label'		=>	esc_html__( 'Category Background Hover Color', 'seniman' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'category_bg_hover',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'meta_post', array(
		'label'		=>	esc_html__( 'Post Meta Color', 'seniman' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'meta_post',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'meta_post_style3', array(
		'label'		=>	esc_html__( 'Post Meta Magazine Style 3 Color', 'seniman' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'meta_post_style3',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'author_text', array(
		'label'		=>	esc_html__( 'Author Text Color', 'seniman' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'author_text',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'author_hover', array(
		'label'		=>	esc_html__( 'Author Text Hover Color', 'seniman' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'author_hover',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'icon_comment', array(
		'label'		=>	esc_html__( 'Icon Comment Color', 'seniman' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'icon_comment',
		'priority'	=>	11,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'span_text', array(
		'label'		=>	esc_html__( 'Post Meta Right Section Text Color', 'seniman' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'span_text',
		'priority'	=>	12,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'icon_love', array(
		'label'		=>	esc_html__( 'Icon Love Color', 'seniman' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'icon_love',
		'priority'	=>	13,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'icon_arrow', array(
		'label'		=>	esc_html__( 'Icon Arrow Next & Previous Post Color', 'seniman' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'icon_arrow',
		'priority'	=>	14,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'icon_share', array(
		'label'		=>	esc_html__( 'Icon Share Post Magazine Style Color', 'seniman' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'icon_share',
		'priority'	=>	15,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'icon_share_hover', array(
		'label'		=>	esc_html__( 'Icon Share Post Magazine Style Color', 'seniman' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'icon_share_hover',
		'priority'	=>	16,
	) ) );



	/* SIDEBAR STYLING
	================================================== */
	
	$wp_customize->add_section( 'sidebar_styling', array(
		'title'		=>	esc_html__( 'Sidebar & Widget', 'seniman' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'sidebar_search_bg', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sidebar_search_btn', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sidebar_search_icon', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sidebar_bg', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'seniman_widget_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_widget_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'link_text_sidebar', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'link_hover_sidebar', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'bg_tabs', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_tabs', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'bg_tabs2', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_tabs2', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_tabs2_hover', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_tabs', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_search_bg', array(
		'label'		=>	esc_html__( 'Search Widget Background Color', 'seniman' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'sidebar_search_bg',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_search_btn', array(
		'label'		=>	esc_html__( 'Search Widget Button Background Color', 'seniman' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'sidebar_search_btn',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_search_icon', array(
		'label'		=>	esc_html__( 'Search Widget Button Icon Color', 'seniman' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'sidebar_search_icon',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_bg', array(
		'label'		=>	esc_html__( 'Widget Background Color', 'seniman' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'sidebar_bg',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'seniman_widget_title', array(
		'label'		=>	esc_html__( 'Widget Titlte Color', 'seniman' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'seniman_widget_title',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_widget_title', array(
		'label'		=>	esc_html__( 'Widget Titlte Border Color', 'seniman' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'border_widget_title',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_text_sidebar', array(
		'label'		=>	esc_html__( 'Sidebar Widget Link Text Color', 'seniman' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'link_text_sidebar',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_hover_sidebar', array(
		'label'		=>	esc_html__( 'Sidebar Widget Link Text Hover Color', 'seniman' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'link_hover_sidebar',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_tabs', array(
		'label'		=>	esc_html__( 'Seniman News Widget Tabs Active Background Color', 'seniman' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'bg_tabs',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_tabs', array(
		'label'		=>	esc_html__( 'Seniman News Widget Tabs Text Active Color', 'seniman' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'text_tabs',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_tabs2', array(
		'label'		=>	esc_html__( 'Seniman News Widget Tabs Background Color', 'seniman' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'bg_tabs2',
		'priority'	=>	11,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_tabs2', array(
		'label'		=>	esc_html__( 'Seniman News Widget Tabs Text Color', 'seniman' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'text_tabs2',
		'priority'	=>	12,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_tabs2_hover', array(
		'label'		=>	esc_html__( 'Seniman News Widget Tabs Text Hover Color', 'seniman' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'text_tabs2_hover',
		'priority'	=>	13,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_tabs', array(
		'label'		=>	esc_html__( 'Seniman News Widget Tabs Border Bottom Color', 'seniman' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'border_tabs',
		'priority'	=>	14,
	) ) );
	

	/* CONTACT STYLING
	================================================== */
	
	$wp_customize->add_section( 'contact_styling', array(
		'title'		=>	esc_html__( 'Contact Form', 'seniman' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'form_bord', array(
		'default'		=> 	'#cdcdcc',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'form_bord_hover', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_input', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_send', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_send_text', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_send_hover', array(
		'default'		=> 	'#333333',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_send_text_hover', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_send_border', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_bord_hov', array(
		'default'		=> 	'#0d0d0d',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_send_bg', array(
		'default'		=> 	'#0d0d0d',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_bg_hov', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'send_text', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'send_text_hov', array(
		'default'		=> 	'#0d0d0d',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'form_bord', array(
		'label'		=>	esc_html__( 'Contact Form Style 1&2 Border Color', 'seniman' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'form_bord',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'form_bord_hover', array(
		'label'		=>	esc_html__( 'Contact Form Style 2 Border Hover Color', 'seniman' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'form_bord_hover',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_input', array(
		'label'		=>	esc_html__( 'Text Input Color', 'seniman' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'text_input',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_send', array(
		'label'		=>	esc_html__( 'Contact Form Style 1&2 Button Background Color', 'seniman' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_send',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_send_text', array(
		'label'		=>	esc_html__( 'Contact Form Style 1&2 Button Text Color', 'seniman' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_send_text',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_send_hover', array(
		'label'		=>	esc_html__( 'Contact Form Style 1&2 Button Background Hover Color', 'seniman' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_send_hover',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_send_text_hover', array(
		'label'		=>	esc_html__( 'Contact Form Style 1&2 Button Text Hover Color', 'seniman' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_send_text_hover',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_send_border', array(
		'label'		=>	esc_html__( 'Contact Form Style 3 Button Border Color', 'seniman' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_send_border',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_bord_hov', array(
		'label'		=>	esc_html__( 'Contact Form Style 3 Button Border Hover Color', 'seniman' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_bord_hov',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_send_bg', array(
		'label'		=>	esc_html__( 'Contact Form Style 3 Button Background Color', 'seniman' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_send_bg',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_bg_hov', array(
		'label'		=>	esc_html__( 'Contact Form Style 3 Button Background Hover Color', 'seniman' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_bg_hov',
		'priority'	=>	11,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'send_text', array(
		'label'		=>	esc_html__( 'Contact Form Style 3 Button Text Color', 'seniman' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'send_text',
		'priority'	=>	12,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'send_text_hov', array(
		'label'		=>	esc_html__( 'Contact Form Style 3 Button Text Hover Color', 'seniman' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'send_text_hov',
		'priority'	=>	13,
	) ) );


	/*=====================================================================================================*/
	// Set Panel ID
	/*=====================================================================================================*/
	$panel_id_1 = 'seniman_page_template_section';

	$wp_customize->add_panel( $panel_id_1,
	    array(
	        'priority'          => 199,
	        'capability'        => 'edit_theme_options',
	        'theme_supports'    => '',
	        'title'             => esc_html__( 'Portfolio Section Color', 'seniman' ),
	        'description'       => esc_html__( 'Edit Your Page Template Color Here.', 'seniman' ),
	    )
	);

	/* PORTFOLIO TEMPLATE STYLING
	================================================== */
	
	$wp_customize->add_section( 'portfolio_template_styling', array(
		'title'		=>	esc_html__( 'Portfolio Template', 'seniman' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'page_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'page_subtitle', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'caption_portfolio', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_portfolio', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'filter_style1', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'filter_style1_hover', array(
		'default'		=> 	'#d23600',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'filter_style2', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'filter_style2_border', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'filter_style3', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'filter_style3_hover', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'filter_style3_border', array(
		'default'		=> 	'#111111',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'filter_style3_bordhov', array(
		'default'		=> 	'#111111',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'filter_style3_bg', array(
		'default'		=> 	'#111111',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'load_bord1', array(
		'default'		=> 	'#cccccc',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'load_bg1', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'load_text1', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'load_bord2', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'load_text2', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'load_text2_hover', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'load_bg2_hover', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'load_text3', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'load_bord3', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'page_title', array(
		'label'		=>	esc_html__( 'Page Title Color', 'seniman' ),
		'section'	=>	'portfolio_template_styling',
		'settings'	=>	'page_title',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'page_subtitle', array(
		'label'		=>	esc_html__( 'Page Subtitle Color', 'seniman' ),
		'section'	=>	'portfolio_template_styling',
		'settings'	=>	'page_subtitle',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'caption_portfolio', array(
		'label'		=>	esc_html__( 'Portfolio Loop Title In Hover Color', 'seniman' ),
		'section'	=>	'portfolio_template_styling',
		'settings'	=>	'caption_portfolio',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_portfolio', array(
		'label'		=>	esc_html__( 'Portfolio Loop Category In Hover Color', 'seniman' ),
		'section'	=>	'portfolio_template_styling',
		'settings'	=>	'category_portfolio',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'filter_style1', array(
		'label'		=>	esc_html__( 'Portfolio Filter Style 1 Text Color', 'seniman' ),
		'section'	=>	'portfolio_template_styling',
		'settings'	=>	'filter_style1',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'filter_style1_hover', array(
		'label'		=>	esc_html__( 'Portfolio Filter Style 1 Text & Border Hover Color', 'seniman' ),
		'section'	=>	'portfolio_template_styling',
		'settings'	=>	'filter_style1_hover',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'filter_style2', array(
		'label'		=>	esc_html__( 'Portfolio Filter Style 2 Text Color', 'seniman' ),
		'section'	=>	'portfolio_template_styling',
		'settings'	=>	'filter_style2',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'filter_style2_border', array(
		'label'		=>	esc_html__( 'Portfolio Filter Style 2 Border Color', 'seniman' ),
		'section'	=>	'portfolio_template_styling',
		'settings'	=>	'filter_style2_border',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'filter_style3', array(
		'label'		=>	esc_html__( 'Portfolio Filter Style 3 Text Color', 'seniman' ),
		'section'	=>	'portfolio_template_styling',
		'settings'	=>	'filter_style3',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'filter_style3_hover', array(
		'label'		=>	esc_html__( 'Portfolio Filter Style 3 Text Hover Color', 'seniman' ),
		'section'	=>	'portfolio_template_styling',
		'settings'	=>	'filter_style3_hover',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'filter_style3_border', array(
		'label'		=>	esc_html__( 'Portfolio Filter Style 3 Border Color', 'seniman' ),
		'section'	=>	'portfolio_template_styling',
		'settings'	=>	'filter_style3_border',
		'priority'	=>	11,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'filter_style3_bordhov', array(
		'label'		=>	esc_html__( 'Portfolio Filter Style 3 Border Hover Color', 'seniman' ),
		'section'	=>	'portfolio_template_styling',
		'settings'	=>	'filter_style3_bordhov',
		'priority'	=>	12,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'filter_style3_bg', array(
		'label'		=>	esc_html__( 'Portfolio Filter Style 3 Background Hover Color', 'seniman' ),
		'section'	=>	'portfolio_template_styling',
		'settings'	=>	'filter_style3_bg',
		'priority'	=>	13,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'load_bord1', array(
		'label'		=>	esc_html__( 'Portfolio Load More Style 1 and Button Pagination in Archive Border Color', 'seniman' ),
		'section'	=>	'portfolio_template_styling',
		'settings'	=>	'load_bord1',
		'priority'	=>	14,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'load_bg1', array(
		'label'		=>	esc_html__( 'Portfolio Load More Style 1 and Button Pagination in Archive Background Button Color', 'seniman' ),
		'section'	=>	'portfolio_template_styling',
		'settings'	=>	'load_bg1',
		'priority'	=>	15,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'load_text1', array(
		'label'		=>	esc_html__( 'Portfolio Load More Style 1 Text Button Color', 'seniman' ),
		'section'	=>	'portfolio_template_styling',
		'settings'	=>	'load_text1',
		'priority'	=>	16,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'load_bord2', array(
		'label'		=>	esc_html__( 'Portfolio Load More Style 2 Border Button Color', 'seniman' ),
		'section'	=>	'portfolio_template_styling',
		'settings'	=>	'load_bord2',
		'priority'	=>	17,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'load_text2', array(
		'label'		=>	esc_html__( 'Portfolio Load More Style 2 Text Button Color', 'seniman' ),
		'section'	=>	'portfolio_template_styling',
		'settings'	=>	'load_text2',
		'priority'	=>	18,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'load_text2_hover', array(
		'label'		=>	esc_html__( 'Portfolio Load More Style 2 Text Button Hover Color', 'seniman' ),
		'section'	=>	'portfolio_template_styling',
		'settings'	=>	'load_text2_hover',
		'priority'	=>	19,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'load_bg2_hover', array(
		'label'		=>	esc_html__( 'Portfolio Load More Style 2 Background Button Hover Color', 'seniman' ),
		'section'	=>	'portfolio_template_styling',
		'settings'	=>	'load_bg2_hover',
		'priority'	=>	20,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'load_text3', array(
		'label'		=>	esc_html__( 'Portfolio Load More Style 3 Text Button Color', 'seniman' ),
		'section'	=>	'portfolio_template_styling',
		'settings'	=>	'load_text3',
		'priority'	=>	21,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'load_bord3', array(
		'label'		=>	esc_html__( 'Portfolio Load More Style 3 Border Button Color', 'seniman' ),
		'section'	=>	'portfolio_template_styling',
		'settings'	=>	'load_bord3',
		'priority'	=>	22,
	) ) );


	/* PORTFOLIO SINGLE STYLING
	================================================== */
	
	$wp_customize->add_section( 'portfolio_single_styling', array(
		'title'		=>	esc_html__( 'Portfolio Single', 'seniman' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'detail1_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'detail1_p', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'detail1_desc', array(
		'default'		=> 	'#555555',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'detail1_pagination', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'detail1_hov_pagination', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'single_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'single_border', array(
		'default'		=> 	'#f8035d',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'detail2_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'detail2_p', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail1_title', array(
		'label'		=>	esc_html__( 'Project Style 1 Details Title Color', 'seniman' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'detail1_title',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail1_p', array(
		'label'		=>	esc_html__( 'Project Style 1 Details Color', 'seniman' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'detail1_p',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail1_desc', array(
		'label'		=>	esc_html__( 'Project Details All Style Description Color', 'seniman' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'detail1_desc',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail1_pagination', array(
		'label'		=>	esc_html__( 'Project Style 1 Pagination Color', 'seniman' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'detail1_pagination',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail1_hov_pagination', array(
		'label'		=>	esc_html__( 'Project Style 1 Pagination Hover Color', 'seniman' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'detail1_hov_pagination',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_title', array(
		'label'		=>	esc_html__( 'Project Style 2 Details Title Color', 'seniman' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'single_title',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_border', array(
		'label'		=>	esc_html__( 'Project Style 2 Details Title Sparator Color', 'seniman' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'single_border',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail2_title', array(
		'label'		=>	esc_html__( 'Project Style 2 Details Title Color', 'seniman' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'detail2_title',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail2_p', array(
		'label'		=>	esc_html__( 'Project Style 2 Details Color', 'seniman' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'detail2_p',
		'priority'	=>	9,
	) ) );




	/*=====================================================================================================*/
	// Set Panel ID
	/*=====================================================================================================*/
	$panel_id_1 = 'seniman_footer_section';

	$wp_customize->add_panel( $panel_id_1,
	    array(
	        'priority'          => 199,
	        'capability'        => 'edit_theme_options',
	        'theme_supports'    => '',
	        'title'             => esc_html__( 'Footer Section Color', 'seniman' ),
	        'description'       => esc_html__( 'Edit your Footer color here.', 'seniman' ),
	    )
	);

	/* Footer STYLING
	================================================== */
	
	$wp_customize->add_section( 'footer_styling', array(
		'title'		=>	esc_html__( 'Footer', 'seniman' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'footer_text', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_link', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_hover_link', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_social', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_hover_social', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_widget_bg', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_widget_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'link_text_widget', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'link_hover_widget', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_widget', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_widget', array(
		'default'		=> 	'#dddddd',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text', array(
		'label'		=>	esc_html__( 'Footer Copyright & Address Text Color', 'seniman' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_text',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_link', array(
		'label'		=>	esc_html__( 'Footer Copyright Link Color', 'seniman' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_link',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_hover_link', array(
		'label'		=>	esc_html__( 'Footer Copyright Link Hover Color', 'seniman' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_hover_link',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_social', array(
		'label'		=>	esc_html__( 'Footer Social Icon Color', 'seniman' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_social',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_hover_social', array(
		'label'		=>	esc_html__( 'Footer Social Icon Hover Color', 'seniman' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_hover_social',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_bg', array(
		'label'		=>	esc_html__( 'Footer Widget Background Color', 'seniman' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_widget_bg',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_title', array(
		'label'		=>	esc_html__( 'Footer Widget Title Color', 'seniman' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_widget_title',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_text_widget', array(
		'label'		=>	esc_html__( 'Footer Widget Link Text Color', 'seniman' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'link_text_widget',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_hover_widget', array(
		'label'		=>	esc_html__( 'Footer Widget Link Text Hover Color', 'seniman' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'link_hover_widget',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_widget', array(
		'label'		=>	esc_html__( 'Footer Widget Text Color', 'seniman' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'text_widget',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_widget', array(
		'label'		=>	esc_html__( 'Footer Widget Border Color', 'seniman' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'border_widget',
		'priority'	=>	11,
	) ) );

	