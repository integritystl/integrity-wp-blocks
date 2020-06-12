<?php 

    add_action('acf/init', 'acf_init_callout_slider');
    function acf_init_callout_slider() {

        // Check function exists.
        if( function_exists('acf_register_block_type') ) {

            // register a testimonial block.
            acf_register_block_type(array(
                'name'              => 'callout_slider',
                'title'             => __('Callout Slider'),
                'description'       => __('A block with a content slider.'),
                'render_template'   => 'template-parts/blocks/callout-slider.php',
                'category'          => 'common',
                'icon'              => 'slides',
                'keywords'          => array( 'content', 'slide', 'carousel', 'callout' ),
            ));
        }
    }

?>