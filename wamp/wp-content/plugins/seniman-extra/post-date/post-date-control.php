<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class seniman_post_date extends Widget_Base {

	public function get_name() {
		return 'seniman-post-date';
	}

	public function get_title() {
		return __( 'Post Date', 'seniman' );
	}

	public function get_icon() {
		return 'fa fa-clock-o';
	}

	public function get_categories() {
		return [ 'seniman-portfolio-category' ];
	}

	protected function _register_controls() {

		/*===========NEWS CONTROL=============*/

		$this->start_controls_section(
			'seniman_post_date_control',
			[
				'label' => __( 'Date Setting', 'seniman' ),
			]
		);

		$this->add_control(
			'date_type',
			[
				'label' => __( 'Date Type', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'publish',
				'options' => [
					'publish' => __( 'Publish Date', 'seniman' ),
					'modify' => __( 'Modify Date', 'seniman' ),
				]
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography_date_block',
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} .post-date',
			]
		);

		$this->add_control(
			'color_text_block',
			[
				'label' => __( 'Date Color', 'seniman' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .post-date' => 'color: {{VALUE}};',
				],
				'default' => '#000000',
			]
		);

		$this->add_responsive_control(
			'text_block_align',
			[
				'label' => __( 'Title Alignment', 'seniman' ),
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
					'justify' => [
						'title' => __( 'Justified', 'seniman' ),
						'icon' => 'fa fa-align-justify',
					],
				],
				'default' => 'left',
				'selectors' => [
					'{{WRAPPER}}' => 'text-align: {{VALUE}};',
				],
				'separator' => 'before',
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$instance = $this->get_settings();

		$date_type 	= ! empty( $instance['date_type'] ) ? $instance['date_type'] : 'publish';

		include ( plugin_dir_path(__FILE__).'tpl/post-date-block.php' );

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {

	}

}

Plugin::instance()->widgets_manager->register_widget_type( new seniman_post_date() );