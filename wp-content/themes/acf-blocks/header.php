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

    <header id="masthead" class="site-header">
        <?php if(get_field('header_layout', 'option') == "basic-layout"): ?>
        <div id="stickyHeader" class="main-header">
            <div class="container">
               
                
                <div class="nav-wrapper basic-layout">       
                    <div class="site-branding">
                       <img src="<?php the_field('logo', 'option'); ?>"> 
                    </div><!-- .site-branding -->

                    <nav id="site-navigation" class="main-navigation">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'main-nav',
                            'menu_id'        => 'main-nav',
                        ) );
                        ?>
                    </nav><!-- #site-navigation -->

                    <div class="mobile-navigation">
                        <div class="menu">
                            <div class="menu-toggle">
                                <div class="toggle-button" aria-controls="primary-menu" aria-expanded="false">
                                     <div class="menu-bar menu-bar-top"></div>
                                     <div class="menu-bar menu-bar-middle"></div>
                                     <div class="menu-bar menu-bar-bottom"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php endif; ?>
        <?php if(get_field('header_layout', 'option') == "full-screen"): ?>
        <div id="stickyHeader" class="full-screen main-header">
            <div class="nav-wrapper container">       
                <div class="site-branding">
                   <img src="<?php the_field('logo', 'option'); ?>"> 
                </div><!-- .site-branding -->

                <div class="menu-toggle">
                    <div class="toggle-button" aria-controls="primary-menu" aria-expanded="false">
                         <div class="menu-bar menu-bar-top"></div>
                         <div class="menu-bar menu-bar-middle"></div>
                         <div class="menu-bar menu-bar-bottom"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-screen">
            <div class="container">
                <nav id="site-navigation" class="main-navigation">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'main-nav',
                        'menu_id'        => 'main-nav',
                    ) );
                    ?>
                </nav><!-- #site-navigation -->
            </div>
        </div>
        <?php endif; ?>

         <?php if(get_field('header_layout', 'option') == "stripped"): 
            $phone = get_field('phone_number', 'option');
        ?>
        <div id="stickyHeader" class="stripped main-header">
            <div class="nav-wrapper container">       
                <div class="site-branding">
                   <img src="<?php the_field('logo', 'option'); ?>"> 
                </div><!-- .site-branding -->
                <?php if ($phone): ?>
                    <div class="phone-nav">
                         <a href="tel:<?php echo($phone); ?>"><h1><?php echo ($phone); ?></h1></a> 
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
                
            
    </header><!-- #masthead -->

	<div id="content" class="site-content">
