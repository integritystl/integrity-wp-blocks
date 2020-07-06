<?php
	if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5ee3c4f6a922d',
		'title' => 'Block: Blog Post List',
		'fields' => array(
			array(
					'key' => 'field_5efb9da1f941d',
					'label' => 'Add Filters',
					'name' => 'add_filters',
					'type' => 'select',
					'instructions' => 'Filters are controlled by the Search and Filter Plugin. Go to Search and Filter > Settings to make additional changes.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'no-filter' => 'No Filter',
						'search-only' => 'Search Only',
						'search-cat' => 'Search & Categories',
						'search-cat-tag' => 'Search, Categories & Tags',
					),
					'default_value' => 'no-filter',
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 1,
					'ajax' => 1,
					'return_format' => 'value',
					'placeholder' => '',
				),
				array(
					'key' => 'field_5efb9e4bf941e',
					'label' => 'Choose Category',
					'name' => 'choose_category',
					'type' => 'taxonomy',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5efb9da1f941d',
								'operator' => '==contains',
								'value' => 'no-filter',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'taxonomy' => 'category',
					'field_type' => 'multi_select',
					'allow_null' => 1,
					'add_term' => 0,
					'save_terms' => 0,
					'load_terms' => 0,
					'return_format' => 'id',
					'multiple' => 0,
				),

			array(
				'key' => 'field_5efb9ea7f941f',
				'label' => 'Posts Per Page',
				'name' => 'posts_per_page',
				'type' => 'range',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_5efb9da1f941d',
							'operator' => '==contains',
							'value' => 'no-filter',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 36,
				'min' => 1,
				'max' => '',
				'step' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_5ee3c53b63b90',
				'label' => 'Post List Layout',
				'name' => 'post_list_layout',
				'type' => 'radio',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'stacked-card' => 'Card',
					'side-card' => 'Inline Card',
				),
				'allow_null' => 0,
				'other_choice' => 0,
				'default_value' => '',
				'layout' => 'vertical',
				'return_format' => 'value',
				'save_other_choice' => 0,
			),
			array(
			'key' => 'field_5ef26b426f672',
			'label' => 'Featured Image',
			'name' => 'featured_image',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5ef26b7f6f673',
			'label' => 'Date',
			'name' => 'date',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5ef26ba96f675',
			'label' => 'Author',
			'name' => 'author',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5ef26b936f674',
			'label' => 'Category',
			'name' => 'category',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5ef26bc26f677',
			'label' => 'Excerpt',
			'name' => 'excerpt',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5ef26bc26asff77',
			'label' => 'Read More Link',
			'name' => 'read_more',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
	),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/blog-post-list',
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
