<?php

function seniman_header_search_ext_opt() {

	$seniman_header_search_opt = array(

		/* 1.5. Search*/
		array(
			'id'       => 'search_bar_style',
			'type'     => 'select',
			'title'    => esc_html__('Search Bar Style', 'seniman'),
			'options'  => array(
				'default'		=> esc_html__('Default Search Bar', 'seniman'),
				'expand'		=> esc_html__('Expanded Search Content', 'seniman'),
			),
			'default'  => 'expand',
		),
		array(
			'id'		=>'search_bar_title',
			'type' 		=> 'text',
			'title' 	=> esc_html__('Search Bar Title', 'seniman'),
			'default' 	=> '',
			'required' => array('search_bar_style','=','expand'),
		),
		array(
			'id'		=>'search_sug_title',
			'type' 		=> 'text',
			'title' 	=> esc_html__('Search Suggestion Title', 'seniman'),
			'default' 	=> '',
			'required' => array('search_bar_style','=','expand'),
		),
		array(
			'id'       => 'search_sug_text',
			'type'     => 'textarea',
			'title'    => esc_html__('Search Suggestion Description', 'seniman'), 
			'default' 	=> '',
			'required' => array('search_bar_style','=','expand'),
		),
	);

return $seniman_header_search_opt;
}