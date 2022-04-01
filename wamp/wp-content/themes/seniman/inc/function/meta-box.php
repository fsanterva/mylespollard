<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_gallery-meta',
		'title' => 'Gallery Meta',
		'fields' => array (
			array (
				'key' => 'field_52ddeb8a1f132',
				'label' => 'Seniman Gallery',
				'name' => 'seniman_gallery',
				'type' => 'gallery',
				'preview_size' => 'thumbnail',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_format',
					'operator' => '==',
					'value' => 'gallery',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));

	register_field_group(array (
		'id' => 'acf_video-format',
		'title' => 'Video Format',
		'fields' => array (
			array (
				'key' => 'field_531178e127a32',
				'label' => 'Video Url',
				'name' => 'video_url',
				'type' => 'text',
				'instructions' => 'For Vimeo/Youtube and Some Of Video Provider that support oEmbed. Just add the url here',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_531178b427a31',
				'label' => 'Video Embed',
				'name' => 'video_embed',
				'type' => 'textarea',
				'instructions' => 'If you\'re more comfortable with just embed code. Paste in here',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'formatting' => 'none',
			),
			array (
				'key' => 'field_5311797127a33',
				'label' => 'Video File',
				'name' => 'video_file',
				'type' => 'file',
				'instructions' => 'If You prefer to upload your own video file. Upload Here',
				'save_format' => 'url',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_format',
					'operator' => '==',
					'value' => 'video',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_586f5d44b5bb6',
	'title' => 'User Social Links',
	'fields' => array (
		array (
			'default_value' => '',
			'placeholder' => '',
			'key' => 'field_586f5e2397340',
			'label' => 'Facebook',
			'name' => 'facebook',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'placeholder' => '',
			'key' => 'field_586f5e3297342',
			'label' => 'Twitter',
			'name' => 'twitter',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'placeholder' => '',
			'key' => 'field_586f5e3397343',
			'label' => 'Pinterest',
			'name' => 'pinterest',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'placeholder' => '',
			'key' => 'field_586f5e3597344',
			'label' => 'Instagram',
			'name' => 'instagram',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'placeholder' => '',
			'key' => 'field_586f5e3797345',
			'label' => 'Google+',
			'name' => 'google_plus',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'placeholder' => '',
			'key' => 'field_586f5ea797346',
			'label' => 'LinkedIn',
			'name' => 'linkedin',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'user_role',
				'operator' => '==',
				'value' => 'all',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

/* Masonry Setting */
acf_add_local_field_group(array (
	'key' => 'group_587f052388007',
	'title' => 'Masonry Setting',
	'fields' => array (
		array (
			'layout' => 'horizontal',
			'choices' => array (
				'default' => 'Default',
				'wider' => 'Wider',
			),
			'default_value' => 'default',
			'other_choice' => 0,
			'save_other_choice' => 0,
			'allow_null' => 0,
			'return_format' => 'value',
			'key' => 'field_587f0532ec099',
			'label' => 'Masonry Size Item',
			'name' => 'masonry_size_item',
			'type' => 'radio',
			'instructions' => 'This option is useful when You use Masonry. Choose one of this option if You want the size different.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'seniman-portfolio',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

/* Portfolio Features */
acf_add_local_field_group(array (
	'key' => 'group_5948b3bfaff22',
	'title' => 'Portfolio Features',
	'fields' => array (
		/*array (
			'key' => 'field_5948b7ea6b7d0',
			'label' => 'Detail Column',
			'name' => 'detail_column',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'column-1' => 'Column 1',
				'column-2' => 'Column 2',
				'column-3' => 'Column 3',
				'column-4' => 'Column 4',
				'column-5' => 'Column 5',
			),
			'default_value' => array (
				0 => 'column-3',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),*/
		array (
			'key' => 'field_595ddf511b398',
			'label' => 'Portfolio Alternative Image',
			'name' => 'portfolio_alternative_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_5948b3e180ed9',
			'label' => 'Portfolio Details',
			'name' => 'portfolio_details',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => 'Add Detail',
			'sub_fields' => array (
				array (
					'key' => 'field_5948b43280eda',
					'label' => 'Detail Name',
					'name' => 'detail_name',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_5948b43b80edb',
					'label' => 'Detail Text',
					'name' => 'detail_text',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'seniman-portfolio',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_58c7b9c7c54ac',
	'title' => 'Header Choice',
	'fields' => array (
		array (
			'key' => 'field_58c7b9d20beeb',
			'label' => 'Header Style Choice',
			'name' => 'header_style_choice',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'default' => 'Default Header',
				'alternative' => 'Alternative Header',
			),
			'default_value' => array (
				0 => 'default',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'seniman-portfolio',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'side',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;