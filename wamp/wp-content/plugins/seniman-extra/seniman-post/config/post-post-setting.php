<?php

add_action( 'elementor/element/seniman-post-block/section_seniman_post_block_post_setting/after_section_start', function( $element, $args ) {
	/** @var \Elementor\Element_Base $element */
	
	$element->add_control(
		'posts_per_page',
		[
			'label' => __( 'Post per Block', 'seniman' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => '6',
			'title' => __( 'Enter some text', 'seniman' ),
			'description' => __( 'This option allow you to set how much post display in this block.', 'seniman' ),	
		]
	);

	$element->add_control(
		'offset',
		[
			'label' => __( 'Offset', 'seniman' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => '',
			'title' => __( 'Enter some text', 'seniman' ),
			'description' => __( 'Set the first post to display (start from 0 as the latest post in each order).', 'seniman' ),
		]
	);

	$element->add_control(
		'category',
		[
			'label' => __( 'Category', 'seniman' ),
			'type'    => \Elementor\Controls_Manager::SELECT2,
			'label_block' => true,
			'multiple'    => true,
			'default' => [],				
			'options' => seniman_get_category(),
			'description' => __( 'Select category to display (default to All).', 'seniman' ),
		]
	);

	$element->add_control(
		'orderby',
		[
			'label' => __( 'Order By', 'seniman' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			'default' => 'date',
			'options' => seniman_order_by(),
			'description' => __( 'Select post order by (default to latest post).', 'seniman' ),
		]
	);

}, 10, 2 );