<?php 

    add_action('acf/init', 'acf_init_tabs');
    function acf_init_tabs() {

        // Check function exists.
        if( function_exists('acf_register_block_type') ) {

            // register a testimonial block.
            acf_register_block_type(array(
                'name'              => 'tabs',
                'title'             => __('Tabs'),
                'description'       => __('A block for Tabs.'),
                'render_template'   => 'template-parts/blocks/tabs.php',
                'category'          => 'layout',
                'icon'              => 'category',
                'keywords'          => array( 'tabs' ),
            ));
        }
    }

?>