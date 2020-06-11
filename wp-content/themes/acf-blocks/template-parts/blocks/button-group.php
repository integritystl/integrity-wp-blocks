<?php
/**
*
* Simple component which spans the entire width of the page and allows for a Button Group block.
*
*
**/
$buttonAlign = get_field('button_alignment');
$buttonDisplay = get_field('button_display');

?>

<div class="block-content container">

  <div class="button-group-wrapper">

    <div class="button-group block-content-section container button-<?php echo $buttonAlign; ?> button-<?php echo $buttonDisplay; ?> ">
    	<!-- Begin Repeater -->
		<?php if( have_rows('button_group') ): ?>
			<?php while ( have_rows('button_group') ) : the_row();
				$button = get_sub_field('button');
				$button_link = $button['url'];
			    $button_title = $button['title'];
			    $button_target = $button['target'] ? $button['target'] : '_self';	
			    $buttonBkgd = get_sub_field('button_background');
			    $buttonColor = get_sub_field('text_color');			
			?>
	      	<?php if ($button): ?>

    		<a class="button" style="background:<?php echo( $buttonBkgd ); ?>; color:<?php echo( $buttonColor ); ?>;" href="<?php echo esc_url( $button_link ); ?>" target="<?php echo esc_attr( $button_target ); ?>"><?php echo esc_html( $button_title ); ?></a>

	      	<?php endif; ?>

	    <?php endwhile;?>

		<?php endif; ?>
    </div>

  </div>

</div>