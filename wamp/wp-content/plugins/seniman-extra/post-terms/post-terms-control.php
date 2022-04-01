<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class seniman_post_terms extends Widget_Base {

	public function get_name() {
		return 'seniman-terms-title';
	}

	public function get_title() {
		return __( 'Post Terms', 'seniman' );
	}

	public function get_icon() {
		return 'fa fa-sitemap';
	}

	public function get_categories() {
		return [ 'seniman-portfolio-category' ];
	}

	protected function _register_controls() {

		/*===========NEWS CONTROL=============*/

		$this->start_controls_section(
			'seniman_post_terms_control',
			[
				'label' => __( 'Terms Setting', 'seniman' ),
			]
		);

		$this->add_control(
			'terms_type',
			[
				'label' => __( 'Terms Type', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'post_category',
				'options' => [
					'post_category' => __( 'Post Category', 'seniman' ),
					//'post_tags' => __( 'Post Tags', 'seniman' ),
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography_terms_block',
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} .terms-item',
			]
		);

		$this->add_control(
			'color_term_block',
			[
				'label' => __( 'Terms Text Color', 'seniman' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .terms-item' => 'color: {{VALUE}};',
				],
				'default' => '#000000',
			]
		);

		$this->add_responsive_control(
			'terms_block_align',
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
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$instance = $this->get_settings();

		//$custom_text 	= ! empty( $instance['custom_text'] ) ? $instance['custom_text'] : '';

		include ( plugin_dir_path(__FILE__).'tpl/post-terms-block.php' );

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {

	}

}

Plugin::instance()->widgets_manager->register_widget_type( new seniman_post_terms() );