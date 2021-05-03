<?php
$options   = get_option('seniman_framework');
$prefix = 'seniman_';
$layout    = $options['footer_customize_second']['enabled'];

global $post;
 
if ($layout): foreach ($layout as $key=>$value) {
	switch ($key) {
		case 'seniman-copyright':
			seniman_footer_part('footer/seniman-copyright');
			break;
		case 'seniman-social':
			seniman_footer_part('footer/seniman-footsocial');
			break;
		case 'seniman-foot-text':
			seniman_footer_part('footer/seniman-foottext');
			break;
		case 'seniman-foot-logo':
			seniman_footer_part('footer/seniman-footlogo');
			break;
		case 'seniman-foot-menu':
			seniman_footer_part('footer/seniman-footmenu');
			break;
		}
	}
endif;