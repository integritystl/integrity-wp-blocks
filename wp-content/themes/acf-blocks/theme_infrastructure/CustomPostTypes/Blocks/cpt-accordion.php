<?php 

    add_action('acf/init', 'acf_init_accordion');
    function acf_init_accordion() {

        // Check function exists.
        if( function_exists('acf_register_block_type') ) {

            // register a testimonial block.
            acf_register_block_type(array(
                'name'              => 'accordion',
                'title'             => __('Accordion'),
                'description'       => __('A block for accordion.'),
                'render_template'   => 'template-parts/blocks/accordion.php',
                'category'          => 'common',
                'icon'              => 'slides',
                'keywords'          => array( 'accordion' ),
            ));
        }
    }

?>