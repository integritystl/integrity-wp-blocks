
<!-- Typography -->

body,
button,
input,
select,
optgroup,
textarea {
	color: <?php the_typography_field('main_copy', 'text_color', 'option');?>;
	font-family: <?php the_typography_field('main_copy', 'font_family', 'option');?>;
	line-height: <?php the_typography_field('main_copy', 'line_height', 'option');?>;
	font-size: <?php the_typography_field('main_copy', 'font_size', 'option');?>px;
	font-weight: <?php the_typography_field('main_copy', 'font_weight', 'option');?>;
	font-style: <?php the_typography_field('main_copy', 'font_style', 'option');?>;
	letter-spacing: <?php the_typography_field('main_copy', 'letter_spacing', 'option');?>px;
	text-decoration: <?php the_typography_field('main_copy', 'text_decoration', 'option');?>;
	text-transform: <?php the_typography_field('main_copy', 'text_transform', 'option');?>;
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
