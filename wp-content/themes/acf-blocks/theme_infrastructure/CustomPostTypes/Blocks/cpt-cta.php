<?php 

    add_action('acf/init', 'acf_init_cta');
    function acf_init_cta() {

        // Check function exists.
        if( function_exists('acf_register_block_type') ) {

            // register a testimonial block.
            acf_register_block_type(array(
                'name'              => 'cta',
                'title'             => __('Call to Action'),
                'description'       => __('A block for a call to action'),
                'render_template'   => 'template-parts/blocks/cta.php',
                'category'          => 'common',
                'icon'              => 'megaphone',
                'keywords'          => array( 'callout', 'CTA', 'action' ),
            ));
        }
    }

?>