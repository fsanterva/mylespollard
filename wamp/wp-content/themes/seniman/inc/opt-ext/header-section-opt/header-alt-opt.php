<?php

function seniman_header_alt_ext_opt() {

	$seniman_header_alt_opt = array(		

		/* 1.4. Header Alternative Options */
		array(
			'id'        => 'header_scheme',
			'type'      => 'button_set',
			'title'     => esc_html__('Alternative Header Scheme', 'seniman'),
			'options' 	 => array(
				'enable' 	=> esc_html__('Enable','seniman'),
				'disable' => esc_html__('Disable','seniman'),
			),
			'default'  => 'enable'
		),
		array(
			'id'       => 'header_text_color',
			'type'     => 'color',
			'title'    => esc_html__('Header text color', 'seniman'),
			'subtitle' => esc_html__('Set header text color', 'seniman'),
			'default'  => '#ffffff',
			'validate' => 'color',
			'output'   => array('body .alt-head .main-menu ul.sm-clean>li>a, body .alt-head .search-wrap #btn-search i, body .alt-head .main-menu ul.sm-clean>li.current-menu-item>a, .alt-head .site-title a'),
			'required' => array('header_scheme','=','enable'),
		),
		array(
			'id' => 'header_alt_logo',
			'type' => 'media',
			'url' => true,
			'compiler' => 'true',
			'title' => esc_html__('Alternative Logo', 'seniman'), 
			'desc' => esc_html__('Upload your logo image here (any size).', 'seniman'),
			'required' => array('header_scheme','=','enable'),
		),
		array(
			'id' => 'header_alt_bg',
			'type' => 'background',
			'output' => array('header#header.inner-head-wrap.alt-head'),
			'title' => __('Header Alternative Background', 'seniman'),
			'subtitle' => __('Header background with image, color, etc.', 'seniman'),
			'default' => 'transparent',
			'required' => array('header_scheme','=','enable'),
		),
		/* end of header alternative options*/

		array(
			'id'        => 'space_fixed_alt',
			'type'      => 'button_set',
			'title'     => esc_html__('Header Fixed Space', 'seniman'),
			'options' 	 => array(
				'on' 	=> esc_html__('Enable','seniman'),
				'off' => esc_html__('Disable','seniman'),
			),
			'default'  => 'off'
		),

	);

return $seniman_header_alt_opt;
}