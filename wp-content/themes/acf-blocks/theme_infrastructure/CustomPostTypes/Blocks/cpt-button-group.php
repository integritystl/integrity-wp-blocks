<?php 

    add_action('acf/init', 'acf_init_button_group');
    function acf_init_button_group() {

        // Check function exists.
        if( function_exists('acf_register_block_type') ) {

            // register a testimonial block.
            acf_register_block_type(array(
                'name'              => 'button-group',
                'title'             => __('Button Group'),
                'description'       => __('A block to add as many blocks as you would like.'),
                'render_template'   => 'template-parts/blocks/button-group.php',
                'category'          => 'common',
                'icon'              => 'admin-links',
                'keywords'          => array( 'link', 'button', 'buttons', 'group' ),
            ));
        }
    }

?>