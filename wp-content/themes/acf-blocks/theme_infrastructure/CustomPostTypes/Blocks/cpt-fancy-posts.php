<?php 

    add_action('acf/init', 'acf_init_fancy_post');
    function acf_init_fancy_post() {

        // Check function exists.
        if( function_exists('acf_register_block_type') ) {

            // register a testimonial block.
            acf_register_block_type(array(
                'name'              => 'fancy-posts',
                'title'             => __('Fancy Posts'),
                'description'       => __('A block for fancier options for post list/ related posts.'),
                'render_template'   => 'template-parts/blocks/fancy-posts.php',
                'category'          => 'common',
                'icon'              => 'list-view',
                'keywords'          => array( 'posts', 'featured', 'fancy' ),
            ));
        }
    }

?>