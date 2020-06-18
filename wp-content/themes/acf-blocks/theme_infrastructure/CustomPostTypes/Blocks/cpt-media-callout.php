<?php 

    add_action('acf/init', 'acf_init_fifty_fifty_media');
    function acf_init_fifty_fifty_media() {

        // Check function exists.
        if( function_exists('acf_register_block_type') ) {

            // register a testimonial block.
            acf_register_block_type(array(
                'name'              => 'fifty-fifty-media',
                'title'             => __('Media Callout'),
                'description'       => __('A block for a a media callout'),
                'render_template'   => 'template-parts/blocks/media-callout.php',
                'category'          => 'common',
                'icon'              => 'editor-video',
                'keywords'          => array( 'image', 'video', 'callout', 'section' ),
            ));
        }
    }

?>