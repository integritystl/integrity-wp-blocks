<?php 

    add_action('acf/init', 'acf_init_social');
    function acf_init_social() {

        // Check function exists.
        if( function_exists('acf_register_block_type') ) {

            // register a testimonial block.
            acf_register_block_type(array(
                'name'              => 'social_share',
                'title'             => __('Social Share'),
                'description'       => __('A block for social sharing with icons.'),
                'render_template'   => 'template-parts/blocks/social-share.php',
                'category'          => 'common',
                'icon'              => 'share',
                'keywords'          => array( 'share', 'social', 'icons' ),
            ));
        }
    }

?>