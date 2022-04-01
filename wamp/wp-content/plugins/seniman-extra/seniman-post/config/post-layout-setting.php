<?php

add_action( 'elementor/element/seniman-post-block/section_seniman_post_block_layout_setting/after_section_start', function( $element, $args ) {
	/** @var \Elementor\Element_Base $element */

	$element->add_responsive_control(
		'main_news_5_layout',
		[
			'label' => __( 'Post Layout', 'seniman' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			'default' => 'creative',
			'options' => [
				'standard' => __( 'Standard Layout', 'seniman' ),
				'creative' => __( 'Creative Layout', 'seniman' ),
			],
			'condition' => [
				'post_grid_style' => 'post_grid_style3',
			],
		]
	);

	$element->add_responsive_control(
		'vertical_position_style5',
		[
			'label' => __( 'Vertical Position', 'magzma' ),
			'type' => \Elementor\Controls_Manager::SLIDER,
			'default' => [
				'size' => 50,
				'unit' => '%',
			],
			'range' => [
				'%' => [
					'min' => 0,
					'max' => 100,
				],
			],
			'selectors' => [
				'{{WRAPPER}} .main-news-1 .blog-desc' => 'top: {{SIZE}}{{UNIT}};',
			],
			'description' => __( 'Drag the slider to change vertical align of post text inside image.', 'magzma' ),
			'condition' => [
				'post_grid_style' => 'post_grid_style5',
			],
		]
	);

	$element->add_control(
		'main_news_5_bg',
		[
			'label' => __( 'Post Background Color', 'seniman' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#61c436',
			'selectors' => [
				'{{WRAPPER}} .main-news-5 .post-block' => 'background-color: {{VALUE}};',
			],
			'condition' => [
				'post_grid_style' => 'post_grid_style3',
			],
		]
	);

	$element->add_responsive_control(
		'vertical_position_style4',
		[
			'label' => __( 'Text Vertical Position', 'seniman' ),
			'type' => \Elementor\Controls_Manager::SLIDER,
			'default' => [
				'size' => 0,
				'unit' => 'px',
			],
			'range' => [
				'px' => [
					'min' => 0,
					'max' => 100,
				],
			],
			'selectors' => [
				'{{WRAPPER}} .post-list-3 .item-detail' => 'top: {{SIZE}}{{UNIT}};',
			],
			'description' => __( 'Drag the slider to change vertical align of post text.', 'seniman' ),
			'condition' => [
				'post_grid_style' => 'post_grid_style4',
			],
		]
	);
	
	$element->add_control(
		'post_margin_bottom',
		[
			'label' => __( 'Margin Bottom', 'seniman' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => '0',
			'title' => __( 'Enter some text', 'seniman' ),
			'selectors' => [
				'{{WRAPPER}} .blog-item, .selected-for-margin-bottom, {{WRAPPER}} .post-masonry-style #grid li.post' => 'margin-bottom: {{VALUE}}px;',
			],
		]
	);

	$element->add_control(
		'horizontal_use',
		[
			'label' => __( 'Make it Horizontal', 'seniman' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'default' => '',
			'prefix_class' => 'horizontal-item-',
			'label_on' => 'Use',
			'label_off' => 'No',
			'return_value' => 'left',
			'selectors' => [
				'{{WRAPPER}} .blog-item' => 'float: {{VALUE}};',
			],
			'description' => __( 'You can make it horizontal inline and will displayed as grid', 'seniman' ),
			'condition' => [
				'post_pilih_layout!' => 'post_masonry_layout',
				'post_grid_style!' => ['post_grid_style1', 'post_grid_style4', 'post_grid_style5'],
			],
		]
	);

	$element->add_control(
		'horizontal_use_left_def',
		[
			'label' => __( 'Make it Horizontal', 'seniman' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'default' => 'left',
			'prefix_class' => 'horizontal-item-',
			'label_on' => 'Use',
			'label_off' => 'No',
			'return_value' => 'left',
			'selectors' => [
				'{{WRAPPER}} .blog-item' => 'float: {{VALUE}};',
			],
			'description' => __( 'You can make it horizontal inline and will displayed as grid', 'seniman' ),
			'condition' => [
				'post_pilih_layout!' => 'post_masonry_layout',
				'post_grid_style' => ['post_grid_style1', 'post_grid_style4', 'post_grid_style5'],
			],
		]
	);

	$element->add_control(
		'horizontal_col_select',
		[
			'label' => __( 'Post Column', 'seniman' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			'default' => 'column-1',
			'options' => [
				'column-1' => __( '1 Column', 'seniman' ),
				'column-2' => __( '2 Column', 'seniman' ),
				'column-3' => __( '3 Column', 'seniman' ),
				'column-4' => __( '4 Column', 'seniman' ),
				'column-5' => __( '5 Column', 'seniman' ),
			],
			'description' => __( 'You can give your post list column to display how much item show per row.', 'seniman' ),
			'condition' => [
				'post_pilih_layout!' => 'post_masonry_layout',
				'post_grid_style!' => ['post_grid_style1', 'post_grid_style3', 'post_grid_style4', 'post_grid_style5'],
			],
		]
	);
	$element->add_control(
		'horizontal_col_select_tablet',
		[
			'label' => __( 'Post Column Tablet', 'seniman' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			'default' => 'tablet-column-1',
			'options' => [
				'tablet-column-1' => __( '1 Column', 'seniman' ),
				'tablet-column-2' => __( '2 Column', 'seniman' ),
				'tablet-column-3' => __( '3 Column', 'seniman' ),
				'tablet-column-4' => __( '4 Column', 'seniman' ),
				'tablet-column-5' => __( '5 Column', 'seniman' ),
			],
			'description' => __( 'You can give your post list column to display how much item show per row.', 'seniman' ),
			'condition' => [
				'post_pilih_layout!' => 'post_masonry_layout',
				'post_grid_style!' => ['post_grid_style1', 'post_grid_style3', 'post_grid_style4', 'post_grid_style5'],
			],
		]
	);
	$element->add_control(
		'horizontal_col_select_mobile',
		[
			'label' => __( 'Post Column Mobile', 'seniman' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			'default' => 'mobile-column-1',
			'options' => [
				'mobile-column-1' => __( '1 Column', 'seniman' ),
				'mobile-column-2' => __( '2 Column', 'seniman' ),
				'mobile-column-3' => __( '3 Column', 'seniman' ),
				'mobile-column-4' => __( '4 Column', 'seniman' ),
				'mobile-column-5' => __( '5 Column', 'seniman' ),
			],
			'description' => __( 'You can give your post list column to display how much item show per row.', 'seniman' ),
			'condition' => [
				'post_pilih_layout!' => 'post_masonry_layout',
				'post_grid_style!' => ['post_grid_style1', 'post_grid_style3', 'post_grid_style4', 'post_grid_style5'],
			],
		]
	);
	$element->add_control(
		'horizontal_col_select_col2',
		[
			'label' => __( 'Post Column', 'seniman' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			'default' => 'column-2',
			'options' => [
				'column-1' => __( '1 Column', 'seniman' ),
				'column-2' => __( '2 Column', 'seniman' ),
				'column-3' => __( '3 Column', 'seniman' ),
				'column-4' => __( '4 Column', 'seniman' ),
				'column-5' => __( '5 Column', 'seniman' ),
			],
			'description' => __( 'You can give your post list column to display how much item show per row.', 'seniman' ),
			'condition' => [
				'post_pilih_layout!' => 'post_masonry_layout',
				'post_grid_style' => ['post_grid_style1', 'post_grid_style3', 'post_grid_style4']
			],
		]
	);
	$element->add_control(
		'horizontal_col_select_col2_tablet',
		[
			'label' => __( 'Post Column Tablet', 'seniman' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			'default' => 'tablet-column-2',
			'options' => [
				'tablet-column-1' => __( '1 Column', 'seniman' ),
				'tablet-column-2' => __( '2 Column', 'seniman' ),
				'tablet-column-3' => __( '3 Column', 'seniman' ),
				'tablet-column-4' => __( '4 Column', 'seniman' ),
				'tablet-column-5' => __( '5 Column', 'seniman' ),
			],
			'description' => __( 'You can give your post list column to display how much item show per row.', 'seniman' ),
			'condition' => [
				'post_pilih_layout!' => 'post_masonry_layout',
				'post_grid_style' => ['post_grid_style1', 'post_grid_style3', 'post_grid_style4']
			],
		]
	);
	$element->add_control(
		'horizontal_col_select_col2_mobile',
		[
			'label' => __( 'Post Column Mobile', 'seniman' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			'default' => 'mobile-column-1',
			'options' => [
				'mobile-column-1' => __( '1 Column', 'seniman' ),
				'mobile-column-2' => __( '2 Column', 'seniman' ),
				'mobile-column-3' => __( '3 Column', 'seniman' ),
				'mobile-column-4' => __( '4 Column', 'seniman' ),
				'mobile-column-5' => __( '5 Column', 'seniman' ),
			],
			'description' => __( 'You can give your post list column to display how much item show per row.', 'seniman' ),
			'condition' => [
				'post_pilih_layout!' => 'post_masonry_layout',
				'post_grid_style' => ['post_grid_style1', 'post_grid_style3', 'post_grid_style4']
			],
		]
	);
	$element->add_control(
		'horizontal_col_select2',
		[
			'label' => __( 'Post Column', 'seniman' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			'default' => 'column-3',
			'options' => [
				'column-1' => __( '1 Column', 'seniman' ),
				'column-2' => __( '2 Column', 'seniman' ),
				'column-3' => __( '3 Column', 'seniman' ),
				'column-4' => __( '4 Column', 'seniman' ),
				'column-5' => __( '5 Column', 'seniman' ),
			],
			'description' => __( 'You can give your post list column to display how much item show per row.', 'seniman' ),
			'condition' => [
				'post_masonry_style' => 'post_masonry_style1',
				'post_grid_style!' => ['post_grid_style1', 'post_grid_style2', 'post_grid_style3', 'post_grid_style4']
			],
		]
	);
	$element->add_control(
		'horizontal_col_select2_tablet',
		[
			'label' => __( 'Post Column Tablet', 'seniman' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			'default' => 'tablet-column-2',
			'options' => [
				'tablet-column-1' => __( '1 Column', 'seniman' ),
				'tablet-column-2' => __( '2 Column', 'seniman' ),
				'tablet-column-3' => __( '3 Column', 'seniman' ),
				'tablet-column-4' => __( '4 Column', 'seniman' ),
				'tablet-column-5' => __( '5 Column', 'seniman' ),
			],
			'description' => __( 'You can give your post list column to display how much item show per row.', 'seniman' ),
			'condition' => [
				'post_masonry_style' => 'post_masonry_style1',
				'post_grid_style!' => ['post_grid_style1', 'post_grid_style2', 'post_grid_style3', 'post_grid_style4']
			],
		]
	);
	$element->add_control(
		'horizontal_col_select2_mobile',
		[
			'label' => __( 'Post Column Mobile', 'seniman' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			'default' => 'mobile-column-1',
			'options' => [
				'mobile-column-1' => __( '1 Column', 'seniman' ),
				'mobile-column-2' => __( '2 Column', 'seniman' ),
				'mobile-column-3' => __( '3 Column', 'seniman' ),
				'mobile-column-4' => __( '4 Column', 'seniman' ),
				'mobile-column-5' => __( '5 Column', 'seniman' ),
			],
			'description' => __( 'You can give your post list column to display how much item show per row.', 'seniman' ),
			'condition' => [
				'post_masonry_style' => 'post_masonry_style1',
				'post_grid_style!' => ['post_grid_style1', 'post_grid_style2', 'post_grid_style3', 'post_grid_style4']
			],
		]
	);

	$element->add_control(
		'use_padding',
		[
			'label' => __( 'Use Padding', 'seniman' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'default' => '',
			'prefix_class' => 'extra-padding-',
			'label_on' => 'Use',
			'label_off' => 'No',
			'return_value' => 'use',
			'description' => __( 'Add a gap for each post item with padding.', 'seniman' ),
			'condition' => [
				'post_grid_style!' => ['post_grid_style1', 'post_grid_style4', 'post_grid_style5'],
			],
		]
	);

	$element->add_control(
		'use_padding_def',
		[
			'label' => __( 'Use Padding', 'seniman' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'default' => 'use',
			'prefix_class' => 'extra-padding-',
			'label_on' => 'Use',
			'label_off' => 'No',
			'return_value' => 'use',
			'description' => __( 'Add a gap for each post item with padding.', 'seniman' ),
			'condition' => [
				'post_grid_style' => ['post_grid_style1', 'post_grid_style4', 'post_grid_style5'],
			],
		]
	);

	$element->add_responsive_control(
		'padding_size',
		[
			'label' => __( 'Padding Size', 'seniman' ),
			'type' => \Elementor\Controls_Manager::SLIDER,
			'default' => [
				'size' => 25,
				'unit' => 'px',
			],
			'range' => [
				'px' => [
					'min' => 1,
					'max' => 50,
				],
			],
			'size_units' => [ 'px', 'em' ],
			'selectors' => [
				'{{WRAPPER}} .selector-padding' => 'padding-right: calc( {{SIZE}}{{UNIT}}/2 ); padding-left: calc( {{SIZE}}{{UNIT}}/2 );',
			],
			'condition' => [
				'post_grid_style!' => ['post_grid_style1', 'post_grid_style4', 'post_grid_style5'],
				'use_padding' => 'use',
			],
		]
	);

	$element->add_responsive_control(
		'padding_size_grid1',
		[
			'label' => __( 'Padding Size', 'seniman' ),
			'type' => \Elementor\Controls_Manager::SLIDER,
			'default' => [
				'size' => 25,
				'unit' => 'px',
			],
			'range' => [
				'px' => [
					'min' => 1,
					'max' => 50,
				],
			],
			'size_units' => [ 'px', 'em' ],
			'selectors' => [
				'{{WRAPPER}} .selector-padding' => 'padding-right: calc( {{SIZE}}{{UNIT}}/2 ); padding-left: calc( {{SIZE}}{{UNIT}}/2 );',
			],
			'condition' => [
				'post_grid_style' => ['post_grid_style1', 'post_grid_style4', 'post_grid_style5'],
				'use_padding_def' => 'use',
			],
		]
	);

	/* masonry layout conditional */
	$element->add_control(
		'post_masonry_style1_bg',
		[
			'label' => __( 'Masonry Background', 'seniman' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#ffffff',
			'selectors' => [
				'{{WRAPPER}} .post-masonry-style .loop-content' => 'background-color: {{VALUE}};',
			],
			'condition' => [
				'post_pilih_layout' => 'post_masonry_layout',
				'post_masonry_style' => 'post_masonry_style1',
			],
		]
	);
	$element->add_control(
		'post_masonry_style1_border',
		[
			'label' => __( 'Masonry Border', 'seniman' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#e7e7e7',
			'selectors' => [
				'{{WRAPPER}} .post-masonry-style .loop-content' => 'border-bottom: 1px solid {{VALUE}};',
			],
			'condition' => [
				'post_pilih_layout' => 'post_masonry_layout',
				'post_masonry_style' => 'post_masonry_style1',
			],
		]
	);
	$element->add_control(
		'post_masonry_style1_border_hov',
		[
			'label' => __( 'Masonry Border Hover', 'seniman' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#000000',
			'selectors' => [
				'{{WRAPPER}} .post-masonry-style li.post:hover .loop-content' => 'border-bottom: 1px solid {{VALUE}};',
			],
			'condition' => [
				'post_pilih_layout' => 'post_masonry_layout',
				'post_masonry_style' => 'post_masonry_style1',
			],
		]
	);

	$element->add_control(
		'post_masonry_style2_bg',
		[
			'label' => __( 'Masonry Background', 'seniman' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#ffffff',
			'selectors' => [
				'{{WRAPPER}} .post-masonry-style .post-style-9 .post-block-inner' => 'background-color: {{VALUE}};',
			],
			'condition' => [
				'post_pilih_layout' => 'post_masonry_layout',
				'post_masonry_style' => 'post_masonry_style2',
			],
		]
	);
	$element->add_control(
		'post_masonry_style2_border',
		[
			'label' => __( 'Masonry Border', 'seniman' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#f1f2f2',
			'selectors' => [
				'{{WRAPPER}} .post-masonry-style .loop-content' => 'border: 3px solid {{VALUE}};',
			],
			'condition' => [
				'post_pilih_layout' => 'post_masonry_layout',
				'post_masonry_style' => 'post_masonry_style2',
			],
		]
	);
	$element->add_control(
		'post_masonry_style2_border_hov',
		[
			'label' => __( 'Masonry Border Hover', 'seniman' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#6f43d6',
			'selectors' => [
				'{{WRAPPER}} .post-masonry-style .post-style-9 .post-block:hover' => 'border: 3px solid {{VALUE}};',
			],
			'condition' => [
				'post_pilih_layout' => 'post_masonry_layout',
				'post_masonry_style' => 'post_masonry_style2',
			],
		]
	);

}, 10, 2 );