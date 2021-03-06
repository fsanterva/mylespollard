<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class seniman_gallery extends Widget_Base {

	public function get_name() {
		return 'seniman-gallery';
	}

	public function get_title() {
		return __( 'Gallery', 'seniman' );
	}

	public function get_icon() {
		return 'eicon-gallery-grid';
	}

	public function get_categories() {
		return [ 'seniman-general-category' ];
	}

	protected function _register_controls() {

		/*-----------------------------------------------------------------------------------
			GALLERY BLOCK INDEX
			1. GALLERY SOURCE
			2. UPLOAD GALLERY
			3. ELEMENT SETTING
			4. IMAGE SETTING
			5. HOVER SETTING
			6. LIGHTBOX SETTING
			7. IMAGE STYLE SETTING
			8. TITLE SETTING
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  1. GALLERY SOURCE
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_seniman_gallery_block_gallery_source',
			[
				'label' => __( 'Gallery Sources', 'seniman' ),
			]
		);

		$this->add_control(
			'gallery_source',
			[
				'label' => __( 'Select Source', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'gallery_from_upload',
				'options' => seniman_gallery_source(),
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of gallery block element setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  2. UPLOAD GALLERY
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_gallery_block_upload_gallery',
			[
				'label' => __( 'Upload Gallery', 'seniman' ),
			]
		);

		$this->add_control(
			'gallery_block_images',
			[
				'label' => __( 'Add Images', 'seniman' ),
				'type' => Controls_Manager::GALLERY,
				'condition' => [
					'gallery_source' => 'gallery_from_upload',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of gallery block image gallery
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  3. ELEMENT SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_seniman_gallery_block_element_setting',
			[
				'label' => __( 'Element Setting', 'seniman' ),
			]
		);

		$this->add_control(
			'gallery_pilih_layout',
			[
				'label' => __( 'Gallery Layouts', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'gallery_grid_layout',
				'options' => [
					'gallery_grid_layout' => __( 'Grid Layout', 'seniman' ),
					'gallery_masonry_layout'=> __( 'Masonry Layout', 'seniman' ),
					'gallery_carousel_layout'=> __( 'Carousel Layout', 'seniman' ),
				],
			]
		);

		/*if gallery layout grid*/
		$this->add_control(
			'gallery_grid_style',
			[
				'label' => __( 'Gallery Grid Styles', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'gallery_grid_style1',
				'options' => [
					'gallery_grid_style1' => __( 'Grid 1', 'seniman' ),
					//'gallery_grid_style2' => __( 'Grid 2', 'seniman' ),
				],
				'condition' => [
					'gallery_pilih_layout' => 'gallery_grid_layout',
				],
			]
		);

		/*if gallery layout masonry*/
		$this->add_control(
			'gallery_masonry_style',
			[
				'label' => __( 'Gallery Masonry Styles', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'gallery_masonry_style1',
				'options' => [
					'gallery_masonry_style1' => __( 'Masonry 1', 'seniman' ),
					//'gallery_masonry_style2' => __( 'Masonry 2', 'seniman' ),
					//'gallery_masonry_style3' => __( 'Masonry 3', 'seniman' ),
				],
				'condition' => [
					'gallery_pilih_layout' => 'gallery_masonry_layout',
				],
			]
		);

		/*if gallery layout is carousel*/
		$this->add_control(
			'gallery_carousel_style',
			[
				'label' => __( 'Gallery Carousel Styles', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'gallery_carousel_style1',
				'options' => [
					'gallery_carousel_style1' => __( 'Carousel 1', 'seniman' ),
					/*'gallery_carousel_style2' => __( 'Carousel 2', 'seniman' ),
					'gallery_carousel_style3' => __( 'Carousel 3', 'seniman' ),*/
				],
				'condition' => [
					'gallery_pilih_layout' => 'gallery_carousel_layout',
				],
			]
		);

		$gallery_columns = range( 1, 10 );
		$gallery_columns = array_combine( $gallery_columns, $gallery_columns );

		$this->add_control(
			'gallery_columns',
			[
				'label' => __( 'Columns', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'default' => 4,
				'options' => $gallery_columns,
				'condition' => [
					'gallery_pilih_layout' => [ 'gallery_grid_layout', 'gallery_masonry_layout' ],
				],
			]
		);

		$this->add_control(
			'tablet_choose_column',
			[
				'label' => __( 'Tablet Column', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'tablet-column-2',
				'options' => [
					'tablet-column-1' => __( '1', 'seniman' ),
					'tablet-column-2' => __( '2', 'seniman' ),
					'tablet-column-3' => __( '3', 'seniman' ),
					'tablet-column-4' => __( '4', 'seniman' ),
					'tablet-column-5' => __( '5', 'seniman' ),
				],
				'condition' => [
					'gallery_pilih_layout' => [ 'gallery_grid_layout', 'gallery_masonry_layout' ],
				],
			]
		);

		$this->add_control(
			'mobile_choose_column',
			[
				'label' => __( 'Mobile Column', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'mobile-column-1',
				'options' => [
					'mobile-column-1' => __( '1', 'seniman' ),
					'mobile-column-2' => __( '2', 'seniman' ),
					'mobile-column-3' => __( '3', 'seniman' ),
					'mobile-column-4' => __( '4', 'seniman' ),
					'mobile-column-5' => __( '5', 'seniman' ),
				],
				'condition' => [
					'gallery_pilih_layout' => [ 'gallery_grid_layout', 'gallery_masonry_layout' ],
				],
			]
		);

		$this->add_control(
			'gallery_rand',
			[
				'label' => __( 'Ordering', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'' => __( 'Default', 'seniman' ),
					'rand' => __( 'Random', 'seniman' ),
				],
				'default' => '',
			]
		);

		$this->add_control(
			'view',
			[
				'label' => __( 'View', 'seniman' ),
				'type' => Controls_Manager::HIDDEN,
				'default' => 'traditional',
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of gallery block element setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  4. IMAGE SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_seniman_gallery_image_setting',
			[
				'label' => __( 'Image Setting', 'seniman' ),
				'condition' => [
					'gallery_pilih_layout' => 'gallery_grid_layout',
				],
			]
		);

		$this->add_control(
			'width',
			[
				'label' => __( 'Width', 'seniman' ),
				'type' => Controls_Manager::TEXT,
				'default' => '400',
				'title' => __( 'Enter some text', 'seniman' ),
				'description' => __( 'Crop your image width.', 'seniman' ),
				'condition' => [
					'gallery_pilih_layout' => 'gallery_grid_layout',
				],
			]
		);

		$this->add_control(
			'height',
			[
				'label' => __( 'Height', 'seniman' ),
				'type' => Controls_Manager::TEXT,
				'default' => '400',
				'title' => __( 'Enter some text', 'seniman' ),
				'description' => __( 'Crop your image height and also your post height.', 'seniman' ),
				'condition' => [
					'gallery_pilih_layout' => 'gallery_grid_layout',
				],
			]
		);

		$this->add_control(
			'gallery_image_crop',
			[
				'label' => __( 'Force to Crop Image', 'seniman' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'on',
				'default' => 'on',
				'condition' => [
					'gallery_pilih_layout' => 'gallery_grid_layout',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of gallery block image setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  5. HOVER SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
		'section_seniman_gallery_block_hover_setting',
			[
				'label' => __( 'Hover Setting', 'seniman' ),
			]
		);

		$this->add_control(
			'hover_effect',
			[
				'label' => __( 'Item Hover Effect', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'imghvr-zoom-in',
				'description' => __( 'Select hover type.', 'seniman' ),
				'options' => seniman_hover_effect(),
			]
		);

		$this->add_control(
			'gallery_item_bg',
			[
				'label' => __( 'Item Background Color', 'seniman' ),
				'type' => Controls_Manager::COLOR,
				'default' => 'rgba(0,0,0,0.46)',
				'selectors' => [
					'{{WRAPPER}} .item-wrap figure, {{WRAPPER}} .item-wrap figcaption' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'gallery_item_bg2',
			[
				'label' => __( 'Item Background Color 2', 'seniman' ),
				'type' => Controls_Manager::COLOR,
				'default' => 'rgba(0, 0, 0, 0.47)',
				'selectors' => [
					'{{WRAPPER}} .item-wrap figure:before, {{WRAPPER}} .item-wrap figure:after, {{WRAPPER}} .item-wrap figcaption:before, {{WRAPPER}} .item-wrap figcaption:after' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of gallery block hover setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  6. LIGHTBOX SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_gallery_block_light_box_setting',
			[
				'label' => __( 'Light Box Setting', 'seniman' ),
			]
		);

		$this->add_control(
			'light_box_transition',
			[
				'label' => __( 'Light Box Transition', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'lg-slide',
				'description' => __( 'Select transition type.', 'seniman' ),
				'options' => seniman_lightbox_transition(),
			]
		);

		$this->add_control(
			'fullscreen_lightbox',
			[
				'label' => __( 'Allow Fullscreen', 'seniman' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'on',
				'default' => 'on',
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of gallery block light box setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  7. CAROUSEL STYLE SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_seniman_gallery_block_carousel_options',
			[
				'label' => __( 'Carousel Setting', 'seniman' ),
				'condition' => [
					'gallery_pilih_layout' => 'gallery_carousel_layout',
				],
			]
		);

		$this->add_control(
			'image_overlay',
			[
				'label' => __( 'Overlay Color', 'seniman' ),
				'type' => Controls_Manager::COLOR,	
				'default' => 'rgba(0, 0, 0, 0.4)',
				'selectors' => [
					'{{WRAPPER}} .post-list-carousel .post-thumb-img:hover .post-bg-color' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'gallery_pilih_layout' => 'gallery_carousel_layout',
				],
			]
		);

		$this->add_control(
			'gallery_vertical_position',
			[
				'label' => __( 'Vertical Position', 'seniman' ),
				'type' => Controls_Manager::CHOOSE,
				'label_block' => false,
				'default' => 'middle',
				'options' => [
					'top' => [
						'title' => __( 'Top', 'seniman' ),
						'icon' => 'eicon-v-align-top',
					],
					'middle' => [
						'title' => __( 'Middle', 'seniman' ),
						'icon' => 'eicon-v-align-middle',
					],
					'bottom' => [
						'title' => __( 'Bottom', 'seniman' ),
						'icon' => 'eicon-v-align-bottom',
					],
				],
				'prefix_class' => 'elementor--v-position-',
				'condition' => [
					'gallery_pilih_layout' => 'gallery_carousel_layout',
				],
			]
		);

		$this->add_responsive_control(
			'text_align_carousel',
			[
				'label' => __( 'Carousel Content Align', 'seniman' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'seniman' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'seniman' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'seniman' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .post-list-carousel .post-content' => 'text-align: {{VALUE}};',
				],
				'default' => 'center',
				'condition' => [
					'gallery_pilih_layout' => 'gallery_carousel_layout',
				],
			]
		);

		$this->add_control(
			'choose_column',
			[
				'label' => __( 'Column (on deskstop)', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'default' => 3,
				'options' => [
					'auto' => __( 'auto', 'seniman' ),
					1 => __( '1', 'seniman' ),
					2 => __( '2', 'seniman' ),
					3 => __( '3', 'seniman' ),
					4 => __( '4', 'seniman' ),
					5 => __( '5', 'seniman' ),
				],
				'description' => __( 'Number of slides per view (slides visible at the same time on slider&#39;s container)', 'seniman' ),
				'condition' => [
					'gallery_pilih_layout' => 'gallery_carousel_layout',
				],
			]
		);

		$this->add_control(
			'choose_column_tablet',
			[
				'label' => __( 'Column (on tablet)', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'default' => 2,
				'options' => [
					1 => __( '1', 'seniman' ),
					2 => __( '2', 'seniman' ),
					3 => __( '3', 'seniman' ),
					4 => __( '4', 'seniman' ),
					5 => __( '5', 'seniman' ),
				],
				'description' => __( 'Number of slides per view (slides visible at the same time on slider&#39;s container)', 'seniman' ),
				'condition' => [
					'gallery_pilih_layout' => 'gallery_carousel_layout',
				],
			]
		);

		$this->add_control(
			'choose_column_mobile',
			[
				'label' => __( 'Column (on mobile)', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'default' => 1,
				'options' => [
					1 => __( '1', 'seniman' ),
					2 => __( '2', 'seniman' ),
					3 => __( '3', 'seniman' ),
					4 => __( '4', 'seniman' ),
					5 => __( '5', 'seniman' ),
				],
				'description' => __( 'Number of slides per view (slides visible at the same time on slider&#39;s container)', 'seniman' ),
				'condition' => [
					'gallery_pilih_layout' => 'gallery_carousel_layout',
				],
			]
		);

		$this->add_control(
			'column_gap',
			[
				'label' => __( 'Carousel Column Gap', 'seniman' ),
				'description' => __( 'Space between carousel items.', 'seniman' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '0',
				'condition' => [
					'gallery_pilih_layout' => 'gallery_carousel_layout',
				],		
			]
		);

		/* navigation */
		$this->add_control(
			'navigation',
			[
				'label' => __( 'Navigation', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'none',
				'options' => [
					'none' => __( 'None', 'seniman' ),
					'arrows-dots' => __( 'Arrows and Dots', 'seniman' ),
					'arrows' => __( 'Arrows', 'seniman' ),
					'dots' => __( 'Dots', 'seniman' ),
				],
				'description' => __( 'Select your navigation type.', 'seniman' ),
				'condition' => [
					'gallery_pilih_layout' => 'gallery_carousel_layout',
				],
			]
		);

		$this->add_control(
			'navigation_arrows_color',
			[
				'label' => __( 'Navigation Arrows Color', 'seniman' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .swiper-button-next:before, {{WRAPPER}} .swiper-button-prev:before' => 'color: {{VALUE}};',
				],
				'condition' => [
					'navigation' => [ 'arrows-dots', 'arrows' ],
				],
			]
		);

		$this->add_control(
			'navigation_dots_color',
			[
				'label' => __( 'Navigation Dots Color', 'seniman' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .owl-dot' => 'background: {{VALUE}};',
				],
				'condition' => [
					'navigation' => [ 'arrows-dots', 'dots' ],
				],
			]
		);

		/* auto opt */
		$this->add_control(
			'autoplay',
			[
				'label' => __( 'Autoplay', 'seniman' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'prefix_class' => 'slide-autoplay-',
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'use',
				'description' => __( 'Make your slider auto play.', 'seniman' ),
				'condition' => [
					'gallery_pilih_layout' => 'gallery_carousel_layout',
				],
			]
		);

		$this->add_control(
			'autoplay_ms',
			[
				'label' => __( 'Next Slide On', 'seniman' ),
				'description' => __( 'Delay between transitions (in ms). If this parameter is not specified, auto play will be disabled.', 'seniman' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '1500',
				'condition' => [
					'autoplay' => 'use',
				],			
			]
		);

		$this->add_control(
			'auto_loop',
			[
				'label' => __( 'Slides Loop', 'seniman' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'prefix_class' => 'slide-loop-',
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'use',
				'description' => __( 'Make your slider loop your items.', 'seniman' ),
				'condition' => [
					'gallery_pilih_layout' => 'gallery_carousel_layout',
				],
			]
		);

		/* misc */
		$this->add_control(
			'centered_slide',
			[
				'label' => __( 'Centered Slides', 'seniman' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'prefix_class' => 'slide-centered-',
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'use',
				'description' => __( 'Allow to make centered slides.', 'seniman' ),
				'condition' => [
					'gallery_pilih_layout' => 'gallery_carousel_layout',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of post block carousel style setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  8. IMAGE STYLE SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_gallery_block_images',
			[
				'label' => __( 'Images', 'seniman' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'image_spacing',
			[
				'label' => __( 'Spacing', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'' => __( 'Default', 'seniman' ),
					'custom' => __( 'Custom', 'seniman' ),
				],
				'prefix_class' => 'gallery-spacing-',
				'default' => '',
			]
		);

		$columns_margin = is_rtl() ? '0 0 -{{SIZE}}{{UNIT}} -{{SIZE}}{{UNIT}};' : '0 -{{SIZE}}{{UNIT}} -{{SIZE}}{{UNIT}} 0;';
		$columns_padding = is_rtl() ? '0 0 {{SIZE}}{{UNIT}} {{SIZE}}{{UNIT}};' : '0 {{SIZE}}{{UNIT}} {{SIZE}}{{UNIT}} 0;';

		$this->add_responsive_control(
			'image_spacing_custom',
			[
				'label' => __( 'Image Spacing', 'seniman' ),
				'type' => Controls_Manager::SLIDER,
				'show_label' => false,
				'range' => [
					'px' => [
						'max' => 100,
					],
				],
				'default' => [
					'size' => 15,
				],
				'selectors' => [
					'{{WRAPPER}} .gallery-item' => 'padding:' . $columns_padding,
					'{{WRAPPER}} .gallery' => 'margin: ' . $columns_margin,
				],
				'condition' => [
					'image_spacing' => 'custom',
				],
			]
		);

		$this->add_responsive_control(
			'image_margin_bot_custom',
			[
				'label' => __( 'Image Margin Bottom', 'seniman' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 100,
					],
				],
				'default' => [
					'size' => 0,
				],
				'selectors' => [
					'{{WRAPPER}} .gallery-item' => 'margin-bottom: {{SIZE}}{{UNIT}}',
				],
				'condition' => [
					'image_spacing' => 'custom',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' => 'image_border',
				'label' => __( 'Image Border', 'seniman' ),
				'selector' => '{{WRAPPER}} .gallery-item img',
			]
		);

		$this->add_control(
			'image_border_radius',
			[
				'label' => __( 'Border Radius', 'seniman' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .gallery-item img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of gallery block image style setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  9. ICON SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_gallery_block_icon_setting',
			[
				'label' => __( 'Icon Setting', 'seniman' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'use_gallery_icon',
			[
				'label' => __( 'Use Icon', 'seniman' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'use',
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'use',
				'selectors' => [
					'{{WRAPPER}} .custom-gallery .gallery-icon' => 'display: block',
				],
			]
		);

		$this->add_control(
			'icon_gallery',
			[
				'label' => __( 'Icon', 'elementor' ),
				'type' => Controls_Manager::ICON,
				'label_block' => true,
				'default' => 'fa fa-search',
				'condition' => [
					'use_gallery_icon' => 'use',
				],
			]
		);

		$this->add_control(
			'typhography_icon_color',
			[
				'label' => __( 'Icon Color', 'seniman' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} figcaption .gallery-icon' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_gallery_icon' => 'use',
				],
			]
		);

		$this->add_control(
			'icon_gallery_size',
			[
				'label' => __( 'Icon Size', 'elementor' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 6,
						'max' => 300,
					],
				],
				'default' => [
					'size' => 25,
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} figcaption .gallery-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'use_gallery_icon' => 'use',
				],
			]
		);

		$this->add_control(
			'icon_gallery_padding',
			[
				'label' => __( 'Icon Padding', 'elementor' ),
				'type' => Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} figcaption .gallery-icon' => 'padding: {{SIZE}}{{UNIT}};',
				],
				'range' => [
					'em' => [
						'min' => 0,
						'max' => 5,
					],
				],
				'condition' => [
					'view!' => 'default',
				],
				'condition' => [
					'use_gallery_icon' => 'use',
				],
			]
		);

		$this->add_control(
			'icon_gallery_rotate',
			[
				'label' => __( 'Icon Rotate', 'elementor' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 0,
					'unit' => 'deg',
				],
				'selectors' => [
					'{{WRAPPER}} figcaption .gallery-icon i' => 'transform: rotate({{SIZE}}{{UNIT}});',
				],
				'condition' => [
					'use_gallery_icon' => 'use',
				],
			]
		);

		$this->add_control(
			'icon_hover_effect',
			[
				'label' => __( 'Icon Hover Effect', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'ih-fade',
				'description' => __( 'Select hover type.', 'seniman' ),
				'options' => seniman_text_hover_effect(),
				'condition' => [
					'use_gallery_icon' => 'use',
				],
			]
		);

		$this->add_control(
			'icon_hover_delay',
			[
				'label' => __( 'Icon Delay Type', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'ih-delay-xs',
				'description' => __( 'Select delay type.', 'seniman' ),
				'options' => seniman_delay_effect(),
				'condition' => [
					'use_gallery_icon' => 'use',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of gallery block icon setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  10. CAPTION SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_gallery_block_caption_setting',
			[
				'label' => __( 'Caption Setting', 'seniman' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'use_gallery_caption',
			[
				'label' => __( 'Use Caption', 'seniman' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'use',
				'selectors' => [
					'{{WRAPPER}} .custom-gallery .gallery-caption' => 'display: block',
				],
			]
		);

		$this->add_control(
			'typhography_caption_color',
			[
				'label' => __( 'Caption Color', 'seniman' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} figcaption .gallery-caption' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_gallery_caption' => 'use',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography_gallery_title',
				'label' => __( 'Title Font Setting', 'seniman' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} figcaption .gallery-caption',
				'condition' => [
					'use_gallery_caption' => 'use',
				],
			]
		);

		$this->add_control(
			'title_hover_effect',
			[
				'label' => __( 'Title Hover Effect', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'ih-fade',
				'description' => __( 'Select hover type.', 'seniman' ),
				'options' => seniman_text_hover_effect(),
				'condition' => [
					'use_gallery_caption' => 'use',
				],
			]
		);

		$this->add_control(
			'title_hover_delay',
			[
				'label' => __( 'Title Delay Type', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'ih-delay-sm',
				'description' => __( 'Select delay type.', 'seniman' ),
				'options' => seniman_delay_effect(),
				'condition' => [
					'use_gallery_caption' => 'use',
				],
			]
		);

		$this->end_controls_section();
		
	}

	protected function render() {
		$settings = $this->get_settings();

		$gallery_source 		= ! empty( $settings['gallery_source'] ) ? $settings['gallery_source'] : 'gallery_from_upload';

		$gallery_pilih_layout 	= ! empty( $settings['gallery_pilih_layout'] ) ? $settings['gallery_pilih_layout'] : '';
		$gallery_grid_style 	= ! empty( $settings['gallery_grid_style'] ) ? $settings['gallery_grid_style'] : '';
		$gallery_masonry_style 	= ! empty( $settings['gallery_masonry_style'] ) ? $settings['gallery_masonry_style'] : '';
		$gallery_carousel_style = ! empty( $settings['gallery_carousel_style'] ) ? $settings['gallery_carousel_style'] : '';

		$width 					= ! empty( $settings['width'] ) ? (int)$settings['width'] : 400;
		$height 				= ! empty( $settings['height'] ) ? (int)$settings['height'] : 400;
		$gallery_image_crop 	= $settings['gallery_image_crop'];

		$hover_effect 			= ! empty( $settings['hover_effect'] ) ? $settings['hover_effect'] : '';

		$icon_gallery 			= ! empty( $settings['icon_gallery'] );
		$icon_hover_effect 		= ! empty( $settings['icon_hover_effect'] ) ? $settings['icon_hover_effect'] : '';
		$icon_hover_delay 		= ! empty( $settings['icon_hover_delay'] ) ? $settings['icon_hover_delay'] : '';
		$title_hover_effect 	= ! empty( $settings['title_hover_effect'] ) ? $settings['title_hover_effect'] : '';
		$title_hover_delay 		= ! empty( $settings['title_hover_delay'] ) ? $settings['title_hover_delay'] : '';

		$light_box_transition 	= ! empty( $settings['light_box_transition'] ) ? $settings['light_box_transition'] : '';
		$fullscreen_lightbox 	= $settings['fullscreen_lightbox'];
		$tablet_choose_column 		= ! empty( $settings['tablet_choose_column'] ) ? $settings['tablet_choose_column'] : 'tablet-column-2';
		$mobile_choose_column 		= ! empty( $settings['mobile_choose_column'] ) ? $settings['mobile_choose_column'] : 'mobile-column-1';

		/* carousel setting */
		$choose_column 			= ! empty( $settings['choose_column'] ) ? $settings['choose_column'] : 3;
		$choose_column_tablet 	= ! empty( $settings['choose_column_tablet'] ) ? $settings['choose_column_tablet'] : 2;	
		$choose_column_mobile 	= ! empty( $settings['choose_column_mobile'] ) ? $settings['choose_column_mobile'] : 1;	
		$column_gap 			= ! empty( $settings['column_gap'] ) ? $settings['column_gap'] : '0';
		$navigation 			=  $settings['navigation'];
		$autoplay 				=  $settings['autoplay'];
		$autoplay_ms 			= ! empty( $settings['autoplay_ms'] ) ? (int)$settings['autoplay_ms'] : 1500;
		$auto_loop 				=  $settings['auto_loop'];
		$centered_slide			=  $settings['centered_slide'];

		

		$this->add_render_attribute( 'i', 'class', $settings['icon_gallery'] );

		$icon_attributes = $this->get_render_attribute_string( 'icon_gallery' );

		if($gallery_pilih_layout == 'gallery_grid_layout') {
			if($gallery_grid_style == 'gallery_grid_style1') {
				include ( plugin_dir_path(__FILE__).'tpl/gallery-grid1-block.php' );
			}
		}
		elseif($gallery_pilih_layout == 'gallery_masonry_layout') {
			if($gallery_masonry_style == 'gallery_masonry_style1') {
				include ( plugin_dir_path(__FILE__).'tpl/gallery-masonry1-block.php' );
			}
		}
		elseif($gallery_pilih_layout == 'gallery_carousel_layout') {
			if($gallery_carousel_style == 'gallery_carousel_style1') {
				include ( plugin_dir_path(__FILE__).'tpl/gallery-carousel1-block.php' );
			}
		}
		
		//include ( plugin_dir_path(__FILE__).'tpl/gallery-block.php' );
	}

	protected function _content_template() {}
}

Plugin::instance()->widgets_manager->register_widget_type( new seniman_gallery() );