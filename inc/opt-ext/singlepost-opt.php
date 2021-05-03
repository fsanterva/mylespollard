<?php

function seniman_single_post_ext_opt() {

	$seniman_single_post_opt = array(

		/* 5.1. Single Post Layout */
		array(
			'id'       => 'single_post_style',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Single Post Style Type', 'seniman' ),
			'subtitle' => esc_html__( 'Select your single post style type', 'seniman' ),
			'options'  => array(
				'default' => array('alt' => 'single-post-style1', 'img' => get_template_directory_uri() .'/img/post-style-porfo.jpg'),
				'style-2' => array('alt' => 'single-post-style2', 'img' => get_template_directory_uri() .'/img/post-style-1.jpg'),
			),
			'default'  => 'default'
		),
		array(
			'id'       => 'blog_type',
			'type'     => 'select',
			'title'    => esc_html__( 'Single Post Layout Type', 'seniman' ),
			'subtitle' => esc_html__( 'Select Your Single Post Layout Type', 'seniman' ),
			'options'  => array(
				'fullwidth' => esc_html__( 'Full Width', 'seniman' ),
				'sidebar' => esc_html__( 'Sidebar', 'seniman' ),
			),
			'default'  => 'sidebar'
		),
		/* end of single post layout */

		/* 5.2. Single Post Padding */
		array(
			'id'       => 'single_blog_padding',
			'type'     => 'spacing',
			'output'   => array( '.single-post-wrap .blog' ),
			'mode'     => 'padding',
			'all'      => false,
			'top'           => true,
			'bottom'        => true,
			'right'         => false,
			'left'          => false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Padding Single Post', 'seniman' ),
			'subtitle' => __( 'Padding top and bottom for Single Post.', 'seniman' ),
			'default'  => array(
				'padding-top'    => '60',
				'padding-right'  => '0',
				'padding-bottom' => '60',
				'padding-left'   => '0'
			),
		),
		/* end of single post padding */
	);

	return $seniman_single_post_opt;
}