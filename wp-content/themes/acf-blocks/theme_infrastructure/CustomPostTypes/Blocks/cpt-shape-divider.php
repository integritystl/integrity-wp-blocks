<?php

    add_action('acf/init', 'acf_init_shape_divider');
    function acf_init_shape_divider() {

        // Check function exists.
        if( function_exists('acf_register_block_type') ) {

            // register a testimonial block.
            acf_register_block_type(array(
                'name'              => 'shape-divider',
                'title'             => __('Shape Divider'),
                'description'       => __('A way to add a fancy spin on your site'),
                'render_template'   => 'template-parts/blocks/shape-divider.php',
                'category'          => 'layout',
                'icon'              => 'tide',
                'keywords'          => array( 'shape', 'divide', 'divider', 'fancy' ),
            ));
        }
    }

?>
