<?php

function seniman_header_menus_ext_opt() {

	$seniman_header_menus_opt = array(

		/* 1.5. Search*/
		array(
			'id'       => 'menus_choose_style',
			'type'     => 'select',
			'title'    => esc_html__('Menu Style Choices', 'seniman'),
			'options'  => array(
				'style-1'		=> esc_html__('Style 1', 'seniman'),
				'style-2'		=> esc_html__('Style 2', 'seniman'),
				'style-3'		=> esc_html__('Style 3', 'seniman'),
				'style-4'		=> esc_html__('Style 4', 'seniman'),
				'style-5'		=> esc_html__('Style 5', 'seniman'),
				'style-6'		=> esc_html__('Style 6', 'seniman'),
				'style-7'		=> esc_html__('Style 7', 'seniman'),
				'style-8'		=> esc_html__('Style 8', 'seniman'),
				'style-9'		=> esc_html__('Style 9', 'seniman'),
				'style-10'		=> esc_html__('Style 10', 'seniman'),
				'style-11'		=> esc_html__('Style 11', 'seniman'),
				'style-12'		=> esc_html__('Style 12', 'seniman'),
				'style-13'		=> esc_html__('Style 13', 'seniman'),
				'style-14'		=> esc_html__('Style 14', 'seniman'),
			),
			'default'  => 'style-1',
			'required' => array( 'header_type', '=', 'default' ),
		),
	);

return $seniman_header_menus_opt;
}