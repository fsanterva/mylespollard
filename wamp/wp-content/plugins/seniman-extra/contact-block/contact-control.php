<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class seniman_contact_form extends Widget_Base {

	public function get_name() {
		return 'seniman-contact-form';
	}

	public function get_title() {
		return __( 'Form Builder', 'seniman' );
	}

	public function get_icon() {
		return 'eicon-form-horizontal';
	}

	public function get_categories() {
		return [ 'seniman-general-category' ];
	}

	protected function _register_controls() {

		/*===========FORM GENERAL SETTING=============*/

		$this->start_controls_section(
			'section_seniman_contact_form_general_control',
			[
				'label' => __( 'Form Setting', 'seniman' ),
			]
		);

		$this->add_control(
			'form_select',
			[
				'label' => __( 'Contact Form', 'seniman' ),
				'type' => Controls_Manager::SELECT,
				'default' => [],
				'options' => seniman_contactform_temp(),
				'description' => __( 'List of your available contact form template.', 'seniman' ),
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$instance = $this->get_settings();

		include ( plugin_dir_path(__FILE__).'tpl/contact-block.php' );

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {

	}

}

Plugin::instance()->widgets_manager->register_widget_type( new seniman_contact_form() );