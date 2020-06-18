<?php 

    add_action('acf/init', 'acf_init_flip_card');
    function acf_init_flip_card() {

        // Check function exists.
        if( function_exists('acf_register_block_type') ) {

            // register a testimonial block.
            acf_register_block_type(array(
                'name'              => 'flip-card',
                'title'             => __('Flip Card'),
                'description'       => __('A block with a clip card in columns.'),
                'render_template'   => 'template-parts/blocks/flip-card.php',
                'category'          => 'common',
                'icon'              => 'format-aside',
                'keywords'          => array( 'Image', 'flip', 'rotate', 'card' ),
            ));
        }
    }

?>