<?php 

    add_action('acf/init', 'acf_init_image_slider');
    function acf_init_image_slider() {

        // Check function exists.
        if( function_exists('acf_register_block_type') ) {

            // register a testimonial block.
            acf_register_block_type(array(
                'name'              => 'image-slider',
                'title'             => __('Image Slider'),
                'description'       => __('A block with a an image slider.'),
                'render_template'   => 'template-parts/blocks/image-slider.php',
                'category'          => 'common',
                'icon'              => 'images-alt2',
                'keywords'          => array( 'Image', 'slide', 'carousel' ),
            ));
        }
    }

?>