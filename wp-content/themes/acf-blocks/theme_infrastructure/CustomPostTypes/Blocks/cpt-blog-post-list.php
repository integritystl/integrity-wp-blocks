<?php

    add_action('acf/init', 'acf_init_blog_post_list');
    function acf_init_blog_post_list() {

        // Check function exists.
        if( function_exists('acf_register_block_type') ) {

            // register a testimonial block.
            acf_register_block_type(array(
                'name'              => 'blog-post-list',
                'title'             => __('Blog Post List'),
                'description'       => __('A block for a list of blog posts'),
                'render_template'   => 'template-parts/blocks/blog-post-list.php',
                'category'          => 'common',
                'icon'              => 'list-view',
                'keywords'          => array( 'posts', 'blog', 'list' ),
            ));
        }
    }

?>
