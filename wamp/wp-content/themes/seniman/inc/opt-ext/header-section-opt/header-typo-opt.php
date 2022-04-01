<?php

function seniman_header_typography_ext_opt() {

	$seniman_header_typo_opt = array(

		/*menu typography*/
		array(
			'id'=>'header1-menu-typography',
			'type' => 'typography',
			'title' => esc_html__('Menu Typography', 'seniman'),
			'compiler'=>true, // Use if you want to hook in your own CSS compiler
			'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'=>true, // Select a backup non-google font in addition to a google font
			'font-style'=>true, // Includes font-style and weight. Can use font-style or font-weight to declare
			'subsets'=>false, // Only appears if google is true and subsets not set to false
			'font-size'=>true,
			'line-height'=>true,
			'word-spacing'=>true, // Defaults to false
			'letter-spacing'=>true, // Defaults to false
			'color'=>false,
			'preview'=>true, // Disable the previewer
			'output' => array('#header #primary-menu li a, #header #secondary-menu li a'), // An array of CSS selectors to apply this font style to dynamically
			'units'=>'px', 'em', // Defaults to px
			'subtitle'=> esc_html__('Typography just available for header type default.', 'seniman'),
			'required' 	=> array( 'header_type', '=', 'default' ),
			'default'=> array(

				'font-weight' => '500',
				'font-family' => 'Poppins',
				'google' => true,
				'font-backup' => 'Georgia, serif',
				'font-size'   => '16px',
				'line-height' => '25.6px',
				'letter-spacing'=> '0',
				'word-spacing'=> '0',
				'text-align' => 'inherit',
			)
		),
		array(
			'id'=>'header2-menu-typography',
			'type' => 'typography',
			'title' => esc_html__('Menu Typography', 'seniman'),
			'compiler'=>true, // Use if you want to hook in your own CSS compiler
			'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'=>true, // Select a backup non-google font in addition to a google font
			'font-style'=>true, // Includes font-style and weight. Can use font-style or font-weight to declare
			'subsets'=>false, // Only appears if google is true and subsets not set to false
			'font-size'=>true,
			'line-height'=>true,
			'word-spacing'=>true, // Defaults to false
			'letter-spacing'=>true, // Defaults to false
			'color'=>false,
			'preview'=>true, // Disable the previewer
			'output' => array('.header-style-2-wrap .main-menu ul li a, .header-style-3-wrap .main-menu ul li a'), // An array of CSS selectors to apply this font style to dynamically
			'units'=>'px', 'em', // Defaults to px
			'subtitle'=> esc_html__('Typography just available for header type 2 and 3.', 'seniman'),
			'required' 	=> array( 'header_type', '=', array( 'style-2', 'style-3' )),
			'default'=> array(

				'font-weight' => '500',
				'font-family' => 'Poppins',
				'google' => true,
				'font-backup' => 'Georgia, serif',
				'font-size'   => '38px',
				'line-height' => '50px',
				'letter-spacing'=> '0',
				'word-spacing'=> '0',
				'text-align' => 'inherit',
			)
		),
		array(
			'id'=>'header4-menu-typography',
			'type' => 'typography',
			'title' => esc_html__('Menu Typography', 'seniman'),
			'compiler'=>true, // Use if you want to hook in your own CSS compiler
			'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'=>true, // Select a backup non-google font in addition to a google font
			'font-style'=>true, // Includes font-style and weight. Can use font-style or font-weight to declare
			'subsets'=>false, // Only appears if google is true and subsets not set to false
			'font-size'=>true,
			'line-height'=>true,
			'word-spacing'=>true, // Defaults to false
			'letter-spacing'=>true, // Defaults to false
			'color'=>false,
			'preview'=>true, // Disable the previewer
			'output' => array('.effect-airbnb .outer-nav a, .effect-moveleft .outer-nav a, .effect-movedown .outer-nav a'), // An array of CSS selectors to apply this font style to dynamically
			'units'=>'px', 'em', // Defaults to px
			'subtitle'=> esc_html__('Typography just available for header type 4, 5 and 6.', 'seniman'),
			'required' 	=> array( 'header_type', '=', array( 'style-4', 'style-5', 'style-6' )),
			'default'=> array(

				'font-weight' => '600',
				'font-family' => 'Poppins',
				'google' => true,
				'font-backup' => 'Georgia, serif',
				'font-size'   => '38px',
				'line-height' => '50px',
				'letter-spacing'=> '0',
				'word-spacing'=> '0',
				'text-align' => 'inherit',
			)
		),

		/* header mobile typography */
		array(
			'id'=>'header-mobile-typography',
			'type' => 'typography', 
			'title' => esc_html__('Header Mobile Typography', 'seniman'),
			'compiler'=>true, // Use if you want to hook in your own CSS compiler
			'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-family'=>false,
			'font-backup'=>false, // Select a backup non-google font in addition to a google font
			'font-style'=>true, // Includes font-style and weight. Can use font-style or font-weight to declare
			'subsets'=>false, // Only appears if google is true and subsets not set to false
			'font-size'=>true,
			'line-height'=>true,
			'word-spacing'=>true, // Defaults to false
			'letter-spacing'=>true, // Defaults to false
			'color'=>false,
			'preview'=>true, // Disable the previewer
			'units'=>'px', 'em', // Defaults to px
			'subtitle'=> esc_html__('Set website menu font (leave form empty if you want to use default)', 'seniman'),
			'required' 	=> array( 'header_type', '=', 'default' ),
			'default'=> array(

				'font-weight' => '500',
				'google' => true,
				'font-size'   => '16px',
				'line-height' => '25.6px',
				'letter-spacing'=> '0',
				'word-spacing'=> '0',
				'text-align' => 'center',
			)
		),

		array(
			'id'=>'header2-mobile-typography',
			'type' => 'typography', 
			'title' => esc_html__('Header 2 & 3 Mobile Typography', 'seniman'),
			'compiler'=>true, // Use if you want to hook in your own CSS compiler
			'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-family'=>false,
			'font-backup'=>false, // Select a backup non-google font in addition to a google font
			'font-style'=>true, // Includes font-style and weight. Can use font-style or font-weight to declare
			'subsets'=>false, // Only appears if google is true and subsets not set to false
			'font-size'=>true,
			'line-height'=>true,
			'word-spacing'=>true, // Defaults to false
			'letter-spacing'=>true, // Defaults to false
			'color'=>false,
			'preview'=>true, // Disable the previewer
			'units'=>'px', 'em', // Defaults to px
			'subtitle'=> esc_html__('Set website menu font (leave form empty if you want to use default)', 'seniman'),
			'required' 	=> array( 'header_type', '=', array( 'style-2', 'style-3' )),
			'default'=> array(

				'font-weight' => '500',
				'google' => true,
				'font-size'   => '16px',
				'line-height' => '25.6px',
				'letter-spacing'=> '0',
				'word-spacing'=> '0',
				'text-align' => 'center',
			)
		),

		array(
			'id'=>'header4-mobile-typography',
			'type' => 'typography', 
			'title' => esc_html__('Header 4, 5 & 6 Mobile Typography', 'seniman'),
			'compiler'=>true, // Use if you want to hook in your own CSS compiler
			'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-family'=>false,
			'font-backup'=>false, // Select a backup non-google font in addition to a google font
			'font-style'=>true, // Includes font-style and weight. Can use font-style or font-weight to declare
			'subsets'=>false, // Only appears if google is true and subsets not set to false
			'font-size'=>true,
			'line-height'=>true,
			'word-spacing'=>true, // Defaults to false
			'letter-spacing'=>true, // Defaults to false
			'color'=>false,
			'preview'=>true, // Disable the previewer
			'units'=>'px', 'em', // Defaults to px
			'subtitle'=> esc_html__('Set website menu font (leave form empty if you want to use default)', 'seniman'),
			'required' 	=> array( 'header_type', '=', array( 'style-4', 'style-5', 'style-6' )),
			'default'=> array(

				'font-weight' => '500',
				'google' => true,
				'font-size'   => '16px',
				'line-height' => '25.6px',
				'letter-spacing'=> '0',
				'word-spacing'=> '0',
				'text-align' => 'center',
			)
		),
		
	);

return $seniman_header_typo_opt;
}