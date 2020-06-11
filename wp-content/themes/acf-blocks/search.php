<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ACF_Blocks
 */

global $wp_query;

get_header();
?>

    <div class="container">
        <section id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

            <?php if ( have_posts() ) : ?>

                    <h1 class="page-title">
                        <?php
                        $result_title="";
                        if( $wp_query->post_count == 1 ) {
                            $result_title .= '1 search result found';
                        } else {
                            $result_title .= $wp_query->found_posts . ' results found';
                        }
                        $result_title .= " for “" . esc_html($wp_query->query_vars['s'], 1) . "”";
                        echo $result_title;
                        ?>
                    </h1>

                <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content', 'search' );
                endwhile;
            else :
                get_template_part( 'template-parts/content', 'none' );
            endif;
            ?>

            </main><!-- #main -->
        </section><!-- #primary -->
    </div>

<?php
get_sidebar();
get_footer();
