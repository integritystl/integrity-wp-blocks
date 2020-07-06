<?php
/**
*
* Simple component which spans the entire width of the page and allows for a Button Group block.
*
*
**/

$triggerBackground = get_field('trigger_background');
$triggerColor = get_field('trigger_color');
$contentBackground = get_field('content_background');
$contentColor = get_field('content_color');
?>

<div class="accordion-block block-content">

    <div class="block-content-section">

      	<!-- Begin Accordion -->
		<?php if( have_rows('accordion_repeater') ): ?>
			<?php while ( have_rows('accordion_repeater') ) : the_row();
				$headline = get_sub_field('accordion_title');
				$bodyCopy = get_sub_field('accordion_content');
			?>
		    <div class="accordion-item ">

		      	<?php if ($headline && $bodyCopy) : ?>
			      	<div class="collapse-toggle" role="button" style="background:<?php echo ($triggerBackground); ?>; color: <?php echo ($triggerColor); ?>;">
				       	<div class="collapsible">
		          		<?php echo $headline; ?>
							<span><i class="fas fa-plus-circle"></i></span>
				        </div>
					</div>
	      		<?php endif; ?>

				<?php if ($bodyCopy): ?>
					<div class="collapse-content" style="background:<?php echo ($contentBackground); ?>; color: <?php echo ($contentColor); ?>;">
						<div class="content-container">
							<?php echo $bodyCopy; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<?php endwhile;?>
		<?php endif; ?>

    </div>

</div>