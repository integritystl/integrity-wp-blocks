

.container {
 	max-width: <?php the_field('content_width', 'option');?>px;
}

/*//////////////////////
	     Typography
 ///////////////////////*/

body,
button,
input,
select,
optgroup,
textarea {
	color: <?php the_typography_field('body_copy', 'text_color', 'option');?>;
	font-family: <?php the_typography_field('body_copy', 'font_family', 'option');?>;
	line-height: <?php the_typography_field('body_copy', 'line_height', 'option');?>;
	font-size: <?php the_typography_field('body_copy', 'font_size', 'option');?>px;
	font-weight: <?php the_typography_field('body_copy', 'font_weight', 'option');?>;
	font-style: <?php the_typography_field('body_copy', 'font_style', 'option');?>;
	letter-spacing: <?php the_typography_field('body_copy', 'letter_spacing', 'option');?>px;
	text-decoration: <?php the_typography_field('body_copy', 'text_decoration', 'option');?>;
	text-transform: <?php the_typography_field('body_copy', 'text_transform', 'option');?>;
}

h1 {
	color: <?php the_typography_field('header_1', 'text_color', 'option');?>;
	font-family: <?php the_typography_field('header_1', 'font_family', 'option');?>;
	line-height: <?php the_typography_field('header_1', 'line_height', 'option');?>;
	font-size: <?php the_typography_field('header_1', 'font_size', 'option');?>px;
	font-weight: <?php the_typography_field('header_1', 'font_weight', 'option');?>;
	font-style: <?php the_typography_field('header_1', 'font_style', 'option');?>;
	letter-spacing: <?php the_typography_field('header_1', 'letter_spacing', 'option');?>px;
	text-decoration: <?php the_typography_field('header_1', 'text_decoration', 'option');?>;
	text-transform: <?php the_typography_field('header_1', 'text_transform', 'option');?>;
}

h2 {
	color: <?php the_typography_field('header_2', 'text_color', 'option');?>;
	font-family: <?php the_typography_field('header_2', 'font_family', 'option');?>;
	line-height: <?php the_typography_field('header_2', 'line_height', 'option');?>;
	font-size: <?php the_typography_field('header_2', 'font_size', 'option');?>px;
	font-weight: <?php the_typography_field('header_2', 'font_weight', 'option');?>;
	font-style: <?php the_typography_field('header_2', 'font_style', 'option');?>;
	letter-spacing: <?php the_typography_field('header_2', 'letter_spacing', 'option');?>px;
	text-decoration: <?php the_typography_field('header_2', 'text_decoration', 'option');?>;
	text-transform: <?php the_typography_field('header_2', 'text_transform', 'option');?>;
}

h3 {
	color: <?php the_typography_field('header_3', 'text_color', 'option');?>;
	font-family: <?php the_typography_field('header_3', 'font_family', 'option');?>;
	line-height: <?php the_typography_field('header_3', 'line_height', 'option');?>;
	font-size: <?php the_typography_field('header_3', 'font_size', 'option');?>px;
	font-weight: <?php the_typography_field('header_3', 'font_weight', 'option');?>;
	font-style: <?php the_typography_field('header_3', 'font_style', 'option');?>;
	letter-spacing: <?php the_typography_field('header_3', 'letter_spacing', 'option');?>px;
	text-decoration: <?php the_typography_field('header_3', 'text_decoration', 'option');?>;
	text-transform: <?php the_typography_field('header_3', 'text_transform', 'option');?>;
}

h4 {
	color: <?php the_typography_field('header_4', 'text_color', 'option');?>;
	font-family: <?php the_typography_field('header_4', 'font_family', 'option');?>;
	line-height: <?php the_typography_field('header_4', 'line_height', 'option');?>;
	font-size: <?php the_typography_field('header_4', 'font_size', 'option');?>px;
	font-weight: <?php the_typography_field('header_4', 'font_weight', 'option');?>;
	font-style: <?php the_typography_field('header_4', 'font_style', 'option');?>;
	letter-spacing: <?php the_typography_field('header_4', 'letter_spacing', 'option');?>px;
	text-decoration: <?php the_typography_field('header_4', 'text_decoration', 'option');?>;
	text-transform: <?php the_typography_field('header_4', 'text_transform', 'option');?>;
}

h5 {
	color: <?php the_typography_field('header_5', 'text_color', 'option');?>;
	font-family: <?php the_typography_field('header_5', 'font_family', 'option');?>;
	line-height: <?php the_typography_field('header_5', 'line_height', 'option');?>;
	font-size: <?php the_typography_field('header_5', 'font_size', 'option');?>px;
	font-weight: <?php the_typography_field('header_5', 'font_weight', 'option');?>;
	font-style: <?php the_typography_field('header_5', 'font_style', 'option');?>;
	letter-spacing: <?php the_typography_field('header_5', 'letter_spacing', 'option');?>px;
	text-decoration: <?php the_typography_field('header_5', 'text_decoration', 'option');?>;
	text-transform: <?php the_typography_field('header_5', 'text_transform', 'option');?>;
}

h6 {
	color: <?php the_typography_field('header_6', 'text_color', 'option');?>;
	font-family: <?php the_typography_field('header_6', 'font_family', 'option');?>;
	line-height: <?php the_typography_field('header_6', 'line_height', 'option');?>;
	font-size: <?php the_typography_field('header_6', 'font_size', 'option');?>px;
	font-weight: <?php the_typography_field('header_6', 'font_weight', 'option');?>;
	font-style: <?php the_typography_field('header_6', 'font_style', 'option');?>;
	letter-spacing: <?php the_typography_field('header_6', 'letter_spacing', 'option');?>px;
	text-decoration: <?php the_typography_field('header_6', 'text_decoration', 'option');?>;
	text-transform: <?php the_typography_field('header_6', 'text_transform', 'option');?>;
}

a {
	color: <?php the_typography_field('link_type', 'text_color', 'option');?>;
	font-family: <?php the_typography_field('link_type', 'font_family', 'option');?>;
	line-height: <?php the_typography_field('link_type', 'line_height', 'option');?>;
	font-size: <?php the_typography_field('link_type', 'font_size', 'option');?>px;
	font-weight: <?php the_typography_field('link_type', 'font_weight', 'option');?>;
	font-style: <?php the_typography_field('link_type', 'font_style', 'option');?>;
	letter-spacing: <?php the_typography_field('link_type', 'letter_spacing', 'option');?>px;
	text-decoration: <?php the_typography_field('link_type', 'text_decoration', 'option');?>;
	text-transform: <?php the_typography_field('link_type', 'text_transform', 'option');?>;
}

a:hover {
	color: <?php the_typography_field('link_hover', 'text_color', 'option');?>;
	font-style: <?php the_typography_field('link_hover', 'font_style', 'option');?>;
	text-decoration: <?php the_typography_field('link_hover', 'text_decoration', 'option');?>;
}

/*///////////////////////
	      Buttons
 ///////////////////////*/

.button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
	color: <?php the_typography_field('primary_button_typography', 'text_color', 'option');?>;
	font-family: <?php the_typography_field('primary_button_typography', 'font_family', 'option');?>;
	line-height: <?php the_typography_field('primary_button_typography', 'line_height', 'option');?>;
	font-size: <?php the_typography_field('primary_button_typography', 'font_size', 'option');?>px;
	font-weight: <?php the_typography_field('primary_button_typography', 'font_weight', 'option');?>;
	font-style: <?php the_typography_field('primary_button_typography', 'font_style', 'option');?>;
	letter-spacing: <?php the_typography_field('primary_button_typography', 'letter_spacing', 'option');?>px;
	text-decoration: <?php the_typography_field('primary_button_typography', 'text_decoration', 'option');?>;
	text-transform: <?php the_typography_field('primary_button_typography', 'text_transform', 'option');?>;
	background: <?php the_field('primary_button_background', 'option');?>;
  border-color:<?php the_field('primary_border_color','option');?>;
  border-width: <?php the_field('primary_border_width','option');?>px;
	text-decoration: none;
}
input[type="button"]:hover,
input[type="reset"]:hover,
input[type="submit"]:hover,
.button:hover{
	background: darken(<?php the_field('primary_button_background', 'option');?>, 10%);
}

.secondary-button {
	color: <?php the_typography_field('secondary_typography', 'text_color', 'option');?>;
	font-family: <?php the_typography_field('secondary_typography', 'font_family', 'option');?>;
	line-height: <?php the_typography_field('secondary_typography', 'line_height', 'option');?>;
	font-size: <?php the_typography_field('secondary_typography', 'font_size', 'option');?>px;
	font-weight: <?php the_typography_field('secondary_typography', 'font_weight', 'option');?>;
	font-style: <?php the_typography_field('secondary_typography', 'font_style', 'option');?>;
	letter-spacing: <?php the_typography_field('secondary_typography', 'letter_spacing', 'option');?>px;
	text-decoration: <?php the_typography_field('secondary_typography', 'text_decoration', 'option');?>;
	text-transform: <?php the_typography_field('secondary_typography', 'text_transform', 'option');?>;

	background: <?php the_field('secondary_background', 'option');?>;
	border: <?php the_field('secondary_border_width','option');?>px solid <?php the_field('secondary_border_color','option');?>;

	text-decoration: none;
}
.secondary-button:hover{
	background: transparent;
	broder-color: <?php the_field('secondary_background', 'option');?>;
}

/*///////////////////////
	        FORMS
 ///////////////////////*/

input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"],
input[type="number"],
input[type="tel"],
input[type="range"],
input[type="date"],
input[type="month"],
input[type="week"],
input[type="time"],
input[type="datetime"],
input[type="datetime-local"],
input[type="color"],
textarea {
	color: <?php the_typography_field('form_typography', 'text_color', 'option');?>;
	font-family: <?php the_typography_field('form_typography', 'font_family', 'option');?>;
	line-height: <?php the_typography_field('form_typography', 'line_height', 'option');?>;
	font-size: <?php the_typography_field('form_typography', 'font_size', 'option');?>px;
	font-weight: <?php the_typography_field('form_typography', 'font_weight', 'option');?>;
	letter-spacing: <?php the_typography_field('form_typography', 'letter_spacing', 'option');?>px;
	text-decoration: <?php the_typography_field('form_typography', 'text_decoration', 'option');?>;
	text-transform: <?php the_typography_field('form_typography', 'text_transform', 'option');?>;
	border-width: <?php the_field('border_width', 'option'); ?>px;
  border-color: <?php the_field('border_color', 'option'); ?>;
}

/*///////////////////////
	    Header Logo
 ////////////////////////*/

.main-header{
	background:<?php the_field('header_background', 'option');?>;
}
.site-branding{
	width:<?php the_field('logo_width', 'option');?>px;
}
.main-navigation a,
.phone-nav a h1{
	color: <?php the_typography_field('menu_items', 'text_color', 'option');?>;
	font-family: <?php the_typography_field('menu_items', 'font_family', 'option');?>;
	line-height: <?php the_typography_field('menu_items', 'line_height', 'option');?>;
	font-size: <?php the_typography_field('menu_items', 'font_size', 'option');?>px;
	font-weight: <?php the_typography_field('menu_items', 'font_weight', 'option');?>;
	letter-spacing: <?php the_typography_field('menu_items', 'letter_spacing', 'option');?>px;
	text-decoration: <?php the_typography_field('menu_items', 'text_decoration', 'option');?>;
	text-transform: <?php the_typography_field('menu_items', 'text_transform', 'option');?>;
}

/*Menu toggle */
.menu-bar-top,

.menu-bar-bottom {

	border:4px solid <?php the_field('open_icon_color', 'option'); ?>;
}
.button-open .menu-bar-top,
.button-open .menu-bar-middle,
.button-open .menu-bar-bottom {
	border:4px solid <?php the_field('close_icon_color', 'option'); ?>;
}
.menu-bar-middle{
	background-color: <?php the_field('open_icon_color', 'option'); ?>;
}
.button-open .menu-bar-middle{
	background-color: <?php the_field('close_icon_color', 'option'); ?>;
}

/*Full Screen Mode*/
.menu-screen{
	background:<?php the_field('full_screen_background_color', 'option');?>;
}

