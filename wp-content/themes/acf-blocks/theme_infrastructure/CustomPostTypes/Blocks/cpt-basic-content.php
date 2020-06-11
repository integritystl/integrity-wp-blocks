<?php 

    add_action('acf/init', 'my_acf_init_block_types');
    function my_acf_init_block_types() {

        // Check function exists.
        if( function_exists('acf_register_block_type') ) {

            // register a testimonial block.
            acf_register_block_type(array(
                'name'              => 'basic-content',
                'title'             => __('Basic Content'),
                'description'       => __('A block for a basic content editor.'),
                'render_template'   => 'template-parts/blocks/basic-content.php',
                'category'          => 'common',
                'icon'              => 'editor-paragraph',
                'keywords'          => array( 'paragraph', 'content', 'basic', 'text' ),
            ));
        }
    }

?>