<?php 
	if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5f05f24714268',
		'title' => 'Block: Shape Divider',
		'fields' => array(
			array(
				'key' => 'field_5f05f2519706a',
				'label' => 'Divider Shape',
				'name' => 'divider_shape',
				'type' => 'radio',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'slant' => 'Slant',
					'slant-up' => 'Slant Indent',
					'sharp-slant' => 'Geometric Slants',
					'faded-slant' => 'Faded Slant',
					'wave-loop' => 'Wave Loop',
					'basic-triangle' => 'Basic Triangle',
					'side-triangle' => 'Side Triangle',
					'faded-triangle' => 'Faded Triangle',
					'fancy-triangle' => 'Fancy Triangle',
					'round' => 'Rounded',
					'clouds' => 'Clouds',
					'faded-clouds' => 'Faded Clouds',
					'shred-paper' => 'Shredded Paper',
				),
				'allow_null' => 0,
				'other_choice' => 0,
				'default_value' => '',
				'layout' => 'vertical',
				'return_format' => 'value',
				'save_other_choice' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/shape-divider',
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