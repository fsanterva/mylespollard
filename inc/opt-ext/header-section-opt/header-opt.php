<?php

function seniman_header_ext_opt() {

	$seniman_header_opt = array(

		/* 1.2.1. Header 1 Options */
		array(
			'id'=>'header_1_layout',
			'type' => 'image_select',
			'compiler'=> true,
			'title' => esc_html__('Header 1 Layout', 'seniman'), 
			'subtitle' => esc_html__('Select header between 1, 2 or 3 column layout.', 'seniman'),
			'options' => array(
					'1column-header' => array('alt' => '1column-header', 'img' => get_template_directory_uri() .'/img/col-opt1.png'),
					'2column-header' => array('alt' => '2column-header', 'img' => get_template_directory_uri() .'/img/col-opt2.png'),
					'3column-header' => array('alt' => '3column-header', 'img' => get_template_directory_uri() .'/img/col-opt3.png'),
				),
			'default' => '2column-header',
			'required' => array( 'header_type', '=', 'default' ),
		),
		array(
			'id'       => 'header_col_3',
			'type'     => 'button_set',
			'title'    => '',
			'subtitle' => '',
			'options'  => array(
				'header_3_col_1'     => esc_html__('Header Left Column', 'seniman'),
				'header_3_col_2'     => esc_html__('Header Center Column', 'seniman'),
				'header_3_col_3'     => esc_html__('Header Right Column', 'seniman'),
			),
			'default'  => 'header_3_col_1',
			'required' => array( 'header_1_layout', '=', array( '1column-header', '2column-header', '3column-header' ) ),
		),
		array(
			'id'       => 'header_3_centered',
			'type'     => 'button_set',
			'title'    => esc_html__('Header Column 3 Item Position', 'seniman'),
			'subtitle' => '',
			'options'  => array(
				'header3_centered'	=> esc_html__('Centered Item', 'seniman'),
				'normal_header3'	=> esc_html__('Normal', 'seniman'),
			),
			'default'  => 'normal_header3',
			'required' => array( 'header_1_layout', '=', '3column-header' ),
		),
		array(
			'id'       => 'header_col3_side',
			'type'     => 'dimensions',
			'units'    => array('px', '%'),
			'title'    => esc_html__('Header Column 3 Side Item Width.', 'seniman'),
			'height'   => false,
			'output' => array('#header .header3_centered .fl, #header .header3_centered .fr'),
			'default'  => array(
				'width'   => '20', 
				'Height'  => false
			),
			'required' => array(
				array( 'header_1_layout', '=', '3column-header' ),
				array( 'header_3_centered', '=', 'header3_centered' ),
			),
		),
		array(
			'id'       => 'header_col3_center',
			'type'     => 'dimensions',
			'units'    => array('px', '%'),
			'title'    => esc_html__('Header Column 3 Center Item Width.', 'seniman'),
			'height'   => false,
			'output' => array('#header .header3_centered .fc'),
			'default'  => array(
				'width'   => '60', 
				'Height'  => false
			),
			'required' => array(
				array( 'header_1_layout', '=', '3column-header' ),
				array( 'header_3_centered', '=', 'header3_centered' ),
			),
		),
		/* column setting end */

		/*left section*/
		array(
			'id'       => 'header_left_set',
			'type'     => 'button_set',
			'title'    => esc_html__('Header Left Setting', 'seniman'),
			'subtitle' => '',
			'options'  => array(
				'header_left_content'     => esc_html__('Header Left Content', 'seniman'),
				'header_left_display'     => esc_html__('Header Left Display', 'seniman'),
			),
			'default'  => 'header_left_content',
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_1' ),
			),
		),
		array(
			'id'      => 'header_customize_left',
			'type'    => 'sorter',
			'title'   => esc_html__( 'Header Left Content', 'seniman' ),
			'desc'    => esc_html__( 'Organize how you want the layout to appear on the header left', 'seniman' ),
			'options' => array(
				'enabled'  => array(
					'seniman-logo' => esc_html__('Logo','seniman'),
				),
				'disabled' => array(
					'seniman-menus'   => esc_html__('Menus','seniman'),
					'seniman-sec-menus'   => esc_html__('Secondary Menus','seniman'),
					//'seniman-social'   => esc_html__('Social Links','seniman'),
					'seniman-search' => esc_html__('Search Button','seniman'),
				)
			),
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_1' ),
				array( 'header_left_set', '=', 'header_left_content' ),
			),
		),
		array(
			'id'       => 'header_left_display',
			'type'     => 'select',
			'title'    => esc_html__('Header Left Display', 'seniman'),
			'options'  => array(
				'horizontal'	=> esc_html__('Horizontal Item', 'seniman'),
				'vertical'		=> esc_html__('Vertical Item', 'seniman'),
			),
			'default'  => 'horizontal',
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_1' ),
				array( 'header_left_set', '=', 'header_left_display' ),
			),
		),
		array(
			'id'       => 'header_left_align',
			'type'     => 'button_set',
			'title'    => __( 'Header Left Align', 'seniman' ),
			'options'  => array(
				'text-left'		=> esc_html__('Text Left', 'seniman'),
				'text-center'	=> esc_html__('Text Center', 'seniman'),
				'text-right'	=> esc_html__('Text Right', 'seniman')
			),
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_1' ),
				array( 'header_left_set', '=', 'header_left_display' ),
				array( 'header_1_layout', '=', '3column-header' ),
			),
			'default'  => 'text-center'
		),
		array(
			'id'       => 'header_left_item_margin',
			'type'     => 'spacing',
			'mode'     => 'margin',
			'all'      => false,
			'left'          => true,
			'right'         => true,
			'top'			=> false,
			'bottom'		=> false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Margin Header Item', 'seniman' ),
			'default'  => array(
				'margin-top'    => 'auto',
				'margin-left'   => '0',
				'margin-bottom' => 'auto',
				'margin-right'  => '0',
			),
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_1' ),
				array( 'header_left_set', '=', 'header_left_display' ),
				array( 'header_left_display', '=', 'horizontal' ),
			),
		),
		array(
			'id'       => 'header_left_float',
			'type'     => 'button_set',
			'title'    => '',
			'subtitle' => '',
			'options'  => array(
				'header_left_nofloat'	=> esc_html__('Make Full Width', 'seniman'),
				'header_left_float'		=> esc_html__('Make Column', 'seniman'),
			),
			'default'  => 'header_left_float',
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_1' ),
				array( 'header_left_set', '=', 'header_left_display' ),
				array( 'header_left_display', '=', 'vertical' ),
			),
		),
		array(
			'id'       => 'header_left_item_ver_margin',
			'type'     => 'spacing',
			'mode'     => 'margin',
			'all'      => false,
			'left'          => false,
			'right'         => false,
			'top'			=> true,
			'bottom'		=> true,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Margin Header Item', 'seniman' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-left'   => 'auto',
				'margin-bottom' => '0',
				'margin-right'  => 'auto',
			),
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_1' ),
				array( 'header_left_set', '=', 'header_left_display' ),
				array( 'header_left_display', '=', 'vertical' ),
				array( 'header_left_float', '=', 'header_left_nofloat' ),
			),
		),
		array(
			'id'    => 'header_left_notif',
			'type'  => 'info',
			'notice' => false,
			'title' => __( 'Left column section not available for this option setting.', 'seniman' ),
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_1_layout', '=', '1column-header' ),
				array( 'header_col_3', '=', 'header_3_col_1' ),
			),
		),
		/*left section end*/

		/*center section*/
		array(
			'id'       => 'header_center_set',
			'type'     => 'button_set',
			'title'    => esc_html__('Header Center Setting', 'seniman'),
			'subtitle' => '',
			'options'  => array(
				'header_center_content'     => esc_html__('Header Center Content', 'seniman'),
				'header_center_display'     => esc_html__('Header Center Display', 'seniman'),
			),
			'default'  => 'header_center_content',
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_1_layout', '=', array( '1column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_2' ),
			),
		),
		array(
			'id'      => 'header_customize_center',
			'type'    => 'sorter',
			'title'   => esc_html__( 'Header Center Content', 'seniman' ),
			'desc'    => esc_html__( 'Organize how you want the layout to appear on the header center', 'seniman' ),
			'options' => array(
				'enabled'  => array(
					
				),
				'disabled' => array(
					'seniman-menus'   => esc_html__('Menus','seniman'),
					'seniman-sec-menus'   => esc_html__('Secondary Menus','seniman'),
					//'seniman-social'   => esc_html__('Social Links','seniman'),
					'seniman-search' => esc_html__('Search Button','seniman'),
					'seniman-logo' => esc_html__('Logo','seniman'),
				)
			),
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_1_layout', '=', array( '1column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_2' ),
				array( 'header_center_set', '=', 'header_center_content' ),
			),
		),
		array(
			'id'       => 'header_center_align',
			'type'     => 'button_set',
			'title'    => __( 'Header Center Align', 'seniman' ),
			'options'  => array(
				'text-left' 	=> esc_html__('Text Left','seniman'),
				'text-center' 	=> esc_html__('Text Center','seniman'),
				'text-right' 	=> esc_html__('Text Right','seniman')
			),
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_1_layout', '=', array( '1column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_2' ),
				array( 'header_center_set', '=', 'header_center_display' ),
				array( 'header_1_layout', '=', '3column-header' ),
			),
			'default'  => 'text-center'
		),
		array(
			'id'       => 'header_center_display',
			'type'     => 'select',
			'title'    => esc_html__('Header Center Display', 'seniman'),
			'options'  => array(
				'horizontal'	=> esc_html__('Horizontal Item', 'seniman'),
				'vertical'		=> esc_html__('Vertical Item', 'seniman'),
			),
			'default'  => 'horizontal',
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_1_layout', '=', array( '1column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_2' ),
				array( 'header_center_set', '=', 'header_center_display' ),
			),
		),
		array(
			'id'       => 'header_center_float',
			'type'     => 'button_set',
			'title'    => '',
			'subtitle' => '',
			'options'  => array(
				'header_center_nofloat'		=> esc_html__('Make Full Width', 'seniman'),
				'header_center_float'		=> esc_html__('Make Column', 'seniman'),
			),
			'default'  => 'header_center_float',
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_1_layout', '=', array( '1column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_2' ),
				array( 'header_center_set', '=', 'header_center_display' ),
				array( 'header_center_display', '=', 'vertical' ),
			),
		),
		array(
			'id'    => 'header_center_notif',
			'type'  => 'info',
			'notice' => false,
			'title' => __( 'Center column section not available for this option setting.', 'seniman' ),
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_1_layout', '=', '2column-header' ),
				array( 'header_col_3', '=', 'header_3_col_2' ),
			),
		),
		/*center section end*/

		/*right section*/
		array(
			'id'       => 'header_right_set',
			'type'     => 'button_set',
			'title'    => esc_html__('Header Right Setting', 'seniman'),
			'subtitle' => '',
			'options'  => array(
				'header_right_content'     => esc_html__('Header Right Content', 'seniman'),
				'header_right_display'     => esc_html__('Header Right Display', 'seniman'),
			),
			'default'  => 'header_right_content',
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_3' ),
			),
		),
		array(
			'id'      => 'header_customize_right',
			'type'    => 'sorter',
			'title'   => esc_html__( 'Header Right Content', 'seniman' ),
			'desc'    => esc_html__( 'Organize how you want the layout to appear on the header right', 'seniman' ),
			'options' => array(
				'enabled'  => array(
					'seniman-menus'   => esc_html__('Menus','seniman'),
					'seniman-search' => esc_html__('Search Button','seniman'),
				),
				'disabled' => array(
					'seniman-sec-menus'   => esc_html__('Secondary Menus','seniman'),
					'seniman-logo' => esc_html__('Logo','seniman'),
					//'seniman-social'   => esc_html__('Social Links','seniman'),
				)
			),
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_3' ),
				array( 'header_right_set', '=', 'header_right_content' ),
			),
		),
		array(
			'id'       => 'header_right_align',
			'type'     => 'button_set',
			'title'    => __( 'Header Right Align', 'seniman' ),
			'options'  => array(
				'text-left' 	=> esc_html__('Text Left', 'seniman'),
				'text-center' 	=> esc_html__('Text Center', 'seniman'),
				'text-right' 	=> esc_html__('Text Right', 'seniman')
			),
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_3' ),
				array( 'header_right_set', '=', 'header_right_display' ),
				array( 'header_1_layout', '=', '3column-header' ),
			),
			'default'  => 'text-center'
		),
		array(
			'id'       => 'header_right_display',
			'type'     => 'select',
			'title'    => esc_html__('Header Right Display', 'seniman'),
			'options'  => array(
				'horizontal'	=> esc_html__('Horizontal Item', 'seniman'),
				'vertical'		=> esc_html__('Vertical Item', 'seniman'),
			),
			'default'  => 'vertical',
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_3' ),
				array( 'header_right_set', '=', 'header_right_display' ),
			),
		),
		array(
			'id'       => 'header_right_item_margin',
			'type'     => 'spacing',
			'mode'     => 'margin',
			'all'      => false,
			'left'          => true,
			'right'         => true,
			'top'			=> false,
			'bottom'		=> false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Margin Header Item', 'seniman' ),
			'default'  => array(
				'margin-top'    => 'auto',
				'margin-left'   => '0',
				'margin-bottom' => 'auto',
				'margin-right'  => '20',
			),
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_3' ),
				array( 'header_right_set', '=', 'header_right_display' ),
				array( 'header_right_display', '=', 'horizontal' ),
			),
		),
		array(
			'id'       => 'header_right_float',
			'type'     => 'button_set',
			'title'    => '',
			'subtitle' => '',
			'options'  => array(
				'header_right_nofloat'   => esc_html__('Make Full Width', 'seniman'),
				'header_right_float'     => esc_html__('Make Column', 'seniman'),
			),
			'default'  => 'header_right_float',
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_3' ),
				array( 'header_right_set', '=', 'header_right_display' ),
				array( 'header_right_display', '=', 'vertical' ),
			),
		),
		array(
			'id'       => 'header_right_item_ver_padding',
			'type'     => 'spacing',
			'mode'     => 'padding',
			'all'      => false,
			'left'          => false,
			'right'         => false,
			'top'			=> true,
			'bottom'		=> true,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Padding Vertical Row', 'seniman' ),
			'default'  => array(
				'padding-top'    => '0',
				'padding-left'   => 'auto',
				'padding-bottom' => '0',
				'padding-right'  => 'auto',
			),
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_3' ),
				array( 'header_right_set', '=', 'header_right_display' ),
				array( 'header_right_display', '=', 'vertical' ),
				array( 'header_right_float', '=', 'header_right_nofloat' ),
			),
		),
		array(
			'id'       => 'header_right_item_ver_bord',
			'type'     => 'border',
			'title'    => __( 'Header Right Border', 'seniman' ),
			'all'      => false,
			'default'  => array(
				'border-color'  => '#efefef',
				'border-style'  => 'solid',
				'border-top'    => '1px',
				'border-right'  => false,
				'border-bottom' => '1px',
				'border-left'   => false,
			),
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_1_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_col_3', '=', 'header_3_col_3' ),
				array( 'header_right_set', '=', 'header_right_display' ),
				array( 'header_right_display', '=', 'vertical' ),
				array( 'header_right_float', '=', 'header_right_nofloat' ),
			),
		),
		array(
			'id'    => 'header_right_notif',
			'type'  => 'info',
			'notice' => false,
			'title' => __( 'Right column section not available for this option setting.', 'seniman' ),
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_1_layout', '=', '1column-header' ),
				array( 'header_col_3', '=', 'header_3_col_3' ),
			),
		),
		/*right section end */

		/* 1.2.2. Header 2 & 3 Options */
		array(
			'id'    => 'header2_notif',
			'type'  => 'info',
			'notice' => false,
			'title' => __( 'You are be able to set the main wrapper type.', 'seniman' ),
			'desc'  => __( 'Header 2 and 3 have different options, if you want to make it as boxed. You need to set main wrapper only width to make it boxed. Try it in <strong>Page Options</strong> tab.', 'seniman' ),
			'required' => array( 'header_type', '=', array( 'style-2', 'style-3' ) ),
		),
		array(
			'id'=>'header_2_title',
			'type' => 'text',
			'title' => esc_html__('Header 2 Headline', 'seniman'),
			'default' => '',
			'required' => array( 'header_type', '=', array( 'style-2', 'style-3' ) ),
		),
		array(
			'id'       => 'header_2_text',
			'type'	   => 'editor',
			'default'  => esc_html__('Built your own with Seniman.', 'seniman'),
			'title'    => esc_html__('Header 2 HTML Description', 'seniman'), 
			'required' => array( 'header_type', '=', array( 'style-2', 'style-3' ) ),
		),

		/* 1.2.3. Header 4, 5, 6 Options */
		array(
			'id' => 'header_4_background',
			'type' => 'background',
			'output' => array('.perspective.modalview'),
			'title' => __('Content Custom Background', 'seniman'),
			'subtitle' => __('Content background with image, color, etc.', 'seniman'),
			'default' => '',
			'required' => array(
				array('header_type','=', array( 'style-4', 'style-5', 'style-6' ))
			),
		),

	);

return $seniman_header_opt;
}