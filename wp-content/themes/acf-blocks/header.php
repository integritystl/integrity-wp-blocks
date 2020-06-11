<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACF_Blocks
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'acf-flex-fields' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="utility-bar">
            <div class="container">
                <nav class="utility-bar_menu">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'utility-menu',
                        'menu_id' => 'utility-menu',
                    ) );
                    ?>
                </nav>
                <?php get_search_form(); ?>
            </div>
        </div>

        <div id="stickyHeader" class="main-header">
            <div class="container">
                <div class="main-header">
                    <div class="site-branding">
                        <?php the_custom_logo(); ?>
                    </div><!-- .site-branding -->

                    <nav id="site-navigation" class="main-navigation">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'primary-menu',
                            'menu_id'        => 'primary-menu',
                        ) );
                        ?>
                    </nav><!-- #site-navigation -->

                    <div class="mobile-navigation">
                        <div class="menu">
                            <div id="mobile-menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div><!-- .mobile-navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->

	<div id="content" class="site-content">
