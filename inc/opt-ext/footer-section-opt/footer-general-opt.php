<?php

function seniman_footer_general_ext_opt() {

	$seniman_footer_general_opt = array(

		/* 3.1. Footer Style Type */
		array(
			'id'       => 'footer_style_type',
			'type'     => 'select',
			'title'    => esc_html__('Footer Style Type', 'seniman'),
			'options'  => array(
				'bottom-footer'		=> esc_html__('Always on Bottom of desktop.', 'seniman'),
				'fixed-footer'		=> esc_html__('Fixed Footer.', 'seniman'),
			),
			'default'  => 'bottom-footer'
		),
		array(
			'id'    => 'footer_fixed_info',
			'type'  => 'info',
			'notice' => true,
			'title' => __( 'You are currently using Header 4, 5, or 6.', 'seniman' ),
			'desc'  => __( 'This header type does not allow you to use fixed footer.', 'seniman' ),
			'required' => array(
				array( 'footer_style_type', '=', 'fixed-footer' ),
				array( 'header_type', '=', array( 'style-4', 'style-5', 'style-6' )),
			),
		),
		/* end of footer style type*/

		/* 3.2. Footer Type */
		array(
			'id'       => 'footer_type',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Footer Type', 'seniman' ),
			'subtitle' => esc_html__( 'Select Your Footer Type', 'seniman' ),
			'options' => array(
				'no-footer' => array('alt' => 'no-footer', 'img' => get_template_directory_uri() .'/img/footer-no.png'),
				'default' => array('alt' => 'default', 'img' => get_template_directory_uri() .'/img/footer-1.png'),
			),
			'default'  => 'default'
		),
		
		array(
			'id'       => 'footer_general_opt_select',
			'type'     => 'button_set',
			'options'  => array(
				'footer-dimensions'		=> esc_html__('Footer Dimensions', 'seniman'),
				'footer-background' 	=> esc_html__('Footer Background', 'seniman'),
				'footer-features'		=> esc_html__('Footer Features', 'seniman'),
			),
			'default'  => 'footer-dimensions'
		),

		/* 3.3. Footer Container */
		/* end of footer container */

		/* 3.4. Footer Padding */
		array(
			'id'       => 'footer_padding',
			'type'     => 'spacing',
			'mode'     => 'padding',
			'all'      => false,
			'right'         => false,
			'left'          => false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Padding Footer', 'seniman' ),
			'subtitle' => __( 'Allow your users to choose the spacing or padding they want.', 'seniman' ),
			'desc'     => __( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'seniman' ),
			'default'  => array(
				'padding-top'    => '40px',
				'padding-right'  => '0',
				'padding-bottom' => '40px',
				'padding-left'   => '0'
			),
			'required' => array( 
				array( 'footer_type', '=', array('default')),
				array( 'footer_general_opt_select', '=', 'footer-dimensions' ),
			),
		),

		/* footer fatures */
		array(
			'id' => 'foot_logo',
			'type' => 'media',
			'url' => true,
			'compiler' => 'true',
			'title' => esc_html__('Footer Logo', 'seniman'), 
			'desc' => esc_html__('Upload your logo image here (any size).', 'seniman'),
			'required' => array( 
				array( 'footer_type', '=', array('default')),
				array( 'footer_general_opt_select', '=', 'footer-features' ),
			),
		),

		array(
			'id' => 'foot_address',
			'type' => 'textarea',
			'title' => esc_html__('Footer Address', 'seniman'), 
			'required' => array( 
				array( 'footer_type', '=', array('default')),
				array( 'footer_general_opt_select', '=', 'footer-features' ),
			),
		),

		array(
			'id'=>'footer-text',
			'type' => 'editor',
			'title' => esc_html__('Footer Copyright', 'seniman'), 
			'subtitle' => esc_html__('Add Your Copyright Here', 'seniman'),
			'default' => esc_html__('Built by Themes Awesome', 'seniman'),
			'required' => array(
				array( 'footer_type', '=', array('default') ),
				array( 'footer_general_opt_select', '=', 'footer-features' ),
			),
		),

		/* 3.5. Boxed Footer */
		array(
			'id' => 'footer_background',
			'type' => 'background',
			'title' => __('Footer Custom Background', 'seniman'),
			'subtitle' => __('Footer background with image, color, etc.', 'seniman'),
			'default' => '',
			'required' => array(
				array('header_type','=', array( 'default', 'style-4', 'style-5', 'style-6' )),
				array( 'footer_general_opt_select', '=', 'footer-background' ),
			),
		),
		array(
			'id'       => 'footer_boxed',
			'type'     => 'switch',
			'title'    => __( 'Use Boxed Footer', 'seniman' ),
			'subtitle' => __( 'Make your footer boxed', 'seniman' ),
			'default'  => false,
			'required' => array(
				array( 'footer_type', '=', array('default')),
				array( 'header_type','=', array( 'default', 'style-4', 'style-5', 'style-6' )),
			),
		),
		array(
			'id'       => 'footer_boxed_width',
			'type'     => 'dimensions',
			'units'    => array('px', '%'),
			'title'    => esc_html__('Content Boxed Width.', 'seniman'),
			'subtitle' => esc_html__('Define width for footer box.', 'seniman'),
			'output'   => array('#footer'),
			'height'   => false,
			'default'  => array(
				'Width'   => '1170', 
				'Height'  => false
			),
			'required' => array(
				array('footer_boxed','=', true),
				array('header_type','=', array( 'default', 'style-4', 'style-5', 'style-6' ))
			),
		),
		array(
			'id'       => 'footer_margin',
			'type'     => 'spacing',
			'output'   => array( '#footer' ),
			'mode'     => 'margin',
			'all'      => false,
			'right'         => false,
			'left'          => false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Margin Boxed Footer', 'seniman' ),
			'subtitle' => __( 'Allow your users to choose the spacing or margin they want.', 'seniman' ),
			'desc'     => __( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'seniman' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-right'  => 'auto',
				'margin-bottom' => '0',
				'margin-left'   => 'auto'
			),
			'required' => array(
				array('footer_boxed','=', true),
				array('header_type','=', array( 'default', 'style-4', 'style-5', 'style-6' ))
			),
		),
		
		/* 3.6. Footer 2 Options */
		

	);

return $seniman_footer_general_opt;
}