<?php
namespace Elementor;

function seniman_general_elementor_init(){
	Plugin::instance()->elements_manager->add_category(
		'seniman-general-category',
		[
			'title'  => 'Main Elements',
			'icon' => 'font'
		],
		1
	);
}
add_action('elementor/init','Elementor\seniman_general_elementor_init');

function seniman_portfolio_elementor_init(){
	Plugin::instance()->elements_manager->add_category(
		'seniman-portfolio-category',
		[
			'title'  => 'Portfolio Elements',
			'icon' => 'font'
		],
		2
	);
}
add_action('elementor/init','Elementor\seniman_portfolio_elementor_init');