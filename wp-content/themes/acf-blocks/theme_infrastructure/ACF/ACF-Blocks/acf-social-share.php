<?php 
	if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5ee380247862e',
		'title' => 'Block: Social Platform',
		'fields' => array(
			array(
				'key' => 'field_5ee3b027ed202',
				'label' => 'Social Button Layout',
				'name' => 'social_style',
				'type' => 'radio',
				'instructions' => '',
				'required' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'horizontal' => 'Horizontal',
					'vertical' => 'Vertical',
				),
				'allow_null' => 0,
				'other_choice' => 0,
				'default_value' => '',
				'layout' => 'vertical',
				'return_format' => 'value',
				'save_other_choice' => 0,
			),
			array(
				'key' => 'field_5ee3802ea5e39',
				'label' => 'Headline',
				'name' => 'social_headline',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
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
			array(
				'key' => 'field_5ee3805da5e3a',
				'label' => 'Content',
				'name' => 'social_content',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
			array(
				'key' => 'field_5ee3806ea5e3b',
				'label' => 'Social Link',
				'name' => 'social_link',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 0,
				'layout' => 'block',
				'button_label' => 'Add Social Platform',
				'sub_fields' => array(
					array(
						'key' => 'field_5ee3838ca5e3c',
						'label' => 'Social Platform',
						'name' => 'social_platform',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							'fa-facebook-f' => 'Facebook',
							'fa-instagram' => 'Instagram',
							'fa-twitter' => 'Twitter',
							'fa-linkedin' => 'LinkedIn',
						),
						'default_value' => false,
						'allow_null' => 0,
						'multiple' => 0,
						'ui' => 1,
						'ajax' => 1,
						'return_format' => 'value',
						'placeholder' => '',
					),
					array(
						'key' => 'field_5ee384bd0ae2c',
						'label' => 'Social Link',
						'name' => 'social_link',
						'type' => 'link',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'array',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/social-share',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	endif;
?>