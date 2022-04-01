<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class seniman_portfolio_custom_fields extends Widget_Base {

	public function get_name() {
		return 'seniman-portfolio-custom-field';
	}

	public function get_title() {
		return __( 'Portfolio Custom Fields', 'seniman' );
	}

	public function get_icon() {
		return 'fa fa-plus-square';
	}

	public function get_categories() {
		return [ 'seniman-portfolio-category' ];
	}

	protected function _register_controls() {

		/*===========NEWS CONTROL=============*/

		$this->start_controls_section(
			'seniman_portfolio_custom_fields_control',
			[
				'label' => __( 'Details Setting', 'seniman' ),
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'label' => __( 'Detail Color', 'seniman' ),
				'name' => 'typography_detail1_block',
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} .detail-title',
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'label' => __( 'Detail Color', 'seniman' ),
				'name' => 'typography_detail2_block',
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} .detail-info',
			]
		);

		$this->add_control(
			'detail_title_color',
			[
				'label' => __( 'Detail Title Color', 'seniman' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .detail-title' => 'color: {{VALUE}};',
				],
				'default' => '#000000',
			]
		);

		$this->add_control(
			'detail_text_color',
			[
				'label' => __( 'Detail Text Color', 'seniman' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .detail-info' => 'color: {{VALUE}};',
				],
				'default' => '#000000',
			]
		);

		$gallery_columns = range( 1, 10 );
		$gallery_columns = array_combine( $gallery_columns, $gallery_columns );

		$this->add_control(
			'detail_columns',
			[
				'label' => __( 'Details Columns', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'default' => 4,
				'options' => $gallery_columns,
			]
		);

		$this->add_responsive_control(
			'detail_block_align',
			[
				'label' => __( 'Detail Alignment', 'seniman' ),
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
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$instance = $this->get_settings();

		//$custom_text 	= ! empty( $instance['custom_text'] ) ? $instance['custom_text'] : '';

		include ( plugin_dir_path(__FILE__).'tpl/custom-field-block.php' );

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {

	}

}

Plugin::instance()->widgets_manager->register_widget_type( new seniman_portfolio_custom_fields() );