<?php 

    add_action('acf/init', 'acf_init_team');
    function acf_init_team() {

        // Check function exists.
        if( function_exists('acf_register_block_type') ) {

            // register a testimonial block.
            acf_register_block_type(array(
                'name'              => 'team-card',
                'title'             => __('Team'),
                'description'       => __('A block for a team member'),
                'render_template'   => 'template-parts/blocks/team-card.php',
                'category'          => 'common',
                'icon'              => 'groups',
                'keywords'          => array( 'team', 'profile', 'cards' ),
            ));
        }
    }

?>