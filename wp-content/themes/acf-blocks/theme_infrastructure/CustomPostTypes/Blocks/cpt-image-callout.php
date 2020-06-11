<?php 

    add_action('acf/init', 'acf_init_image_callout');
    function acf_init_image_callout() {

        // Check function exists.
        if( function_exists('acf_register_block_type') ) {

            // register a testimonial block.
            acf_register_block_type(array(
                'name'              => 'image-callout',
                'title'             => __('Image Callout'),
                'description'       => __('A block with a an image/icon callout.'),
                'render_template'   => 'template-parts/blocks/image-callout.php',
                'category'          => 'common',
                'icon'              => 'id-alt',
                'keywords'          => array( 'Image', 'Columns', 'Callout' ),
            ));
        }
    }

?>