<?php
/**
 * The template for displaying all pages
 *
 * Template Name: Flex Fields
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ACF_Blocks
 */

 get_header();
	 if(have_posts()): while(have_posts()): the_post();
 ?>


	 <div id="primary" class="content-area">
		 <?php
			 if(have_rows('flexible_content', get_the_ID())):
				 while(have_rows('flexible_content')): the_row();
					 include(locate_template('template-parts/flex-fields/content-' . get_row_layout() . '.php')); ?>
				 <?php endwhile;
			 endif;
		 ?>
	 </div>




 <?php
 endwhile;
 endif;

 get_footer();
