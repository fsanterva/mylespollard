<?php

function seniman_header_general_ext_opt() {

	$seniman_header_general_opt = array(

		/* 1.2. Header Type */
		array(
			'id'       => 'header_type',
			'type'     => 'image_select',
			'class' => 'cau',
			'title'    => esc_html__( 'Header Type', 'seniman' ),
			'subtitle' => esc_html__( 'Select Your Header Type', 'seniman' ),
			'options' => array(
				'default' => array('alt' => 'default', 'img' => get_template_directory_uri() .'/img/header-1.png'),
				'style-4' => array('alt' => 'style-sec', 'img' => get_template_directory_uri() .'/img/header-4.png'),
				'style-6' => array('alt' => 'style-third', 'img' => get_template_directory_uri() .'/img/header-6.png'),
			),
			'default'  => 'default'
		),
		array(
			'id'       => 'header_animated',
			'type'     => 'switch',
			'title'    => __( 'Use Animated Header', 'seniman' ),
			'subtitle' => __( 'Make your header animated after page loaded', 'seniman' ),
			'default'  => true,
			'required' => array( 'header_type', '=', array( 'default', 'style-4', 'style-6' ) ),
		),
		array(
			'id'       => 'fixed_header',
			'type'     => 'switch',
			'title'    => __( 'Use Fixed Header', 'seniman' ),
			'subtitle' => __( 'Make your header as sticky header.', 'seniman' ),
			'default'  => false,
			'required' => array( 'header_type','=', array( 'default', 'style-4', 'style-6' ) ),
		),
		array(
			'id'       => 'header_fixed_type',
			'type'     => 'select',
			'title'    => esc_html__( 'Header Fixed Type', 'seniman' ),
			'options'  => array(
				'header_fixed_noscroll'     => esc_html__( 'Header Fixed No Scroll', 'seniman' ),
				'header_fixed_scroll'     => esc_html__( 'Header Fixed Scroll', 'seniman' ),
			),
			'default'  => 'header_fixed_noscroll',
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'fixed_header', '=', true ),
			),
		),
		array(
			'id'       => 'space_when_scroll',
			'type'     => 'spacing',
			'mode'     => 'padding',
			'all'      => false,
			'right'         => false,
			'left'         => false,
			'bottom'         => false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Header Space When Scroll', 'seniman' ),
			'default'  => array(
				'padding-top'    => '40px',
				'padding-right'  => '0',
				'padding-bottom' => '40px',
				'padding-left'   => '0'
			),
			'required' => array( 
				array( 'header_type', '=', array( 'default', 'style-4', 'style-6' ) ),
				array( 'header_fixed_type', '=', 'header_fixed_scroll' ),
			),
		),

		/* end of header type */

		/* logo dimensions tab */
		array(
			'id'       => 'header_general_opt_select',
			'type'     => 'button_set',
			'options'  => array(
				'header-logo'     => esc_html__( 'Header Logo', 'seniman' ),
				//'site-favicon' => 'Site Favicon',
				'header-dimension'   => esc_html__( 'Header Dimensions', 'seniman' ),
				'header-background'   => esc_html__( 'Header Background', 'seniman' ),
			),
			'default'  => 'header-logo'
		),
		/* end of header_general_opt_select */

		array(
			'id' 		=> 'logo_upload',
			'type' 		=> 'media',
			'url' 		=> true,
			'compiler' 	=> 'true',
			'title'    	=> esc_html__( 'Header Logo', 'seniman' ),
			'required' 	=> array( 'header_general_opt_select', '=', 'header-logo' ),
		),
		array(
			'id'       => 'logo_padding',
			'type'     => 'spacing',
			'mode'     => 'padding',
			'all'      => false,
			'right'    => false,
			'left'     => false, 
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Padding Logo', 'seniman' ),
			'subtitle' => __( 'A gap space for your logo image and title.', 'seniman' ),
			'default'  => array(
				'padding-top'    => '5px',
				'padding-bottom' => '0',
			),
			'required' 	=> array( 'header_general_opt_select', '=', 'header-logo' ),
		),

		/* header dimensions */
		array(
			'id'       => 'header_2_width',
			'type'     => 'dimensions',
			'units'    => array('px'),
			'title'    => esc_html__('Header Two Menus Width.', 'seniman'),
			'subtitle' => esc_html__('Define width for header with two menus (px)', 'seniman'),
			'height'   => false,
			'default'  => array(
				'Width'   => '145', 
				'Height'  => false
			),
			'required' => array(
				array( 'header_general_opt_select', '=', 'header-dimension' ),
				array( 'header_type', '=', array( 'style-2', 'style-3' ) ),
			),
		),

		array(
			'id'       => 'header_padding',
			'type'     => 'spacing',
			'mode'     => 'padding',
			'all'      => false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Padding Header', 'seniman' ),
			'subtitle' => __( 'Allow your users to choose the spacing or margin they want.', 'seniman' ),
			'desc'     => __( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'seniman' ),
			'default'  => array(
				'padding-top'    => '80px',
				'padding-right'  => '0',
				'padding-bottom' => '80px',
				'padding-left'   => '0'
			),
			'required' => array( 
				array( 'header_general_opt_select', '=', 'header-dimension' ),
				array( 'header_type', '=', array( 'default', 'style-4', 'style-6' ) ),
			),
		),

		/* header custom background */
		array(
			'id' => 'header_background',
			'type' => 'background',
			'title' => __('Header Custom Background', 'seniman'),
			'subtitle' => __('Header background with image, color, etc.', 'seniman'),
			'default' => array(
				'background-color'  => 'transparent',
				'background-repeat'  => 'no-repeat',
				'background-size'  => 'inherit',
				'background-attachment'  => 'inherit',
				'background-position'  => 'center center',
			),
			'required' => array(
				array('header_type','=', array( 'default', 'style-4', 'style-6' )),
				array( 'header_general_opt_select', '=', 'header-background' ),
			),
		),
		array(
			'id' => 'header_fixed_background',
			'type'     => 'color',
			'title' => __('Header Fixed When Scroll Background', 'seniman'),
			'subtitle' => __('Header fixed background with image, color, etc.', 'seniman'),
			'default' => '#ffffff',
			'validate' => 'color',
			'required' => array(
				array( 'header_type','=', 'default' ),
				array( 'header_general_opt_select', '=', 'header-background' ),
				array( 'fixed_header', '=', true ),
				array( 'header_fixed_type', '=', 'header_fixed_scroll' ),
			),
		),
		array(
			'id' => 'header_fixed_color',
			'type'     => 'color',
			'title' => __('Header Fixed When Scroll Color', 'seniman'),
			'subtitle' => __('Header fixed text color.', 'seniman'),
			'default' => '#000000',
			'validate' => 'color',
			'required' => array(
				array( 'header_type','=', 'default' ),
				array( 'header_general_opt_select', '=', 'header-background' ),
				array( 'fixed_header', '=', true ),
				array( 'header_fixed_type', '=', 'header_fixed_scroll' ),
			),
		),

		/* 1.3. Boxed Header Options */
		array(
			'id'       => 'header_boxed',
			'type'     => 'switch',
			'title'    => __( 'Use Boxed Header', 'seniman' ),
			'subtitle' => __( 'Make your header boxed', 'seniman' ),
			'default'  => false,
			'required' => array( 'header_type', '=', array( 'default', 'style-4', 'style-6' ) ),
		),
		array(
			'id'       => 'header_boxed_width',
			'type'     => 'dimensions',
			'units'    => array('px', '%'),
			'title'    => esc_html__('Header Boxed Width.', 'seniman'),
			'subtitle' => esc_html__('Define width for header box.', 'seniman'),
			'output'   => array('header#header.inner-head-wrap'),
			'height'   => false,
			'default'  => array(
				'Width'   => '1170', 
				'Height'  => false
			),
			'required' => array(
				array('header_boxed','=', true),
				array('header_type','=', array( 'default', 'style-4', 'style-6' ))
			),
		),
		array(
			'id'       => 'header_margin',
			'type'     => 'spacing',
			'output'   => array( 'header#header' ),
			'mode'     => 'margin',
			'all'      => false,
			'right'         => false,
			'left'          => false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Margin Header', 'seniman' ),
			'subtitle' => __( 'Allow your users to choose the spacing or margin they want.', 'seniman' ),
			'desc'     => __( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'seniman' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-right'  => 'auto',
				'margin-bottom' => '0',
				'margin-left'   => 'auto'
			),
			'required' => array(
				array('header_boxed','=', true),
				array('header_type','=', array( 'default', 'style-4', 'style-6' ))
			),
		),
		/* end of header boxed options */

	);

return $seniman_header_general_opt;
}