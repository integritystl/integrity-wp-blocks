<?php
/**
*
* Simple component which spans the entire width of the page and allows for a Button Group block.
*
*
**/
$slideColor = get_field('callout_background_color');
$slideBackgroundImg = get_field('callout_background_image');
$textColor = get_field('callout_font_color');
$textAlign = get_field('callout_alignment');

?>

<div class="block-content container" style="">

  <div class="callout-slider-wrapper">

    <div class="callout-slider block-content-section <?php echo($textAlign); ?>;" style="background:url('<?php echo($slideBackgroundImg); ?>') <?php echo($slideColor); ?>; color:<?php echo($textColor); ?>;">
    	<!-- Begin Repeater -->
		<?php if( have_rows('callout_content') ): ?>
			<?php while ( have_rows('callout_content') ) : the_row();
				$headline = get_sub_field('callout_headline');
				$content = get_sub_field('callout_content');
			?>
							
				<?php if ($headline): ?>
					<h3><?php echo($headline); ?></h3>
		      	<?php endif; ?>
		      	<?php if ($content): ?>
					<?php echo($content); ?>
		      	<?php endif; ?>

		    <?php endwhile;?>

		<?php endif; ?>
    </div>

  </div>

</div>