<?php
/**
*
* Simple component which spans the entire width of the page and allows for a Button Group block.
*
*
**/

$tabsLayout = get_field('layout');
$tabBackground = get_field('tab_background_color');
$tabText = get_field('tab_font_color');
$contentBackground = get_field('content_background_color');
$contentText = get_field('content_font_color');
$headline = get_field('tab_header');


?>

<div class="tabs-block block-content">
	<?php if ($headline): ?>
		<h3><?php echo( $headline ); ?></h3>
	<?php endif; ?>
    <div class="block-content-section tabs <?php echo($tabsLayout); ?>">
    	
		<div class="tab-btn-wrapper">
      	<!-- Begin tabs -->
		<?php if( have_rows('tabs') ): 
			$i = 1;?>
			<?php while ( have_rows('tabs') ) : the_row();
				$headline = get_sub_field('tab_title');
			?> 
		      	<div rel="<?php echo ('tab-' . $i); ?>" class="tab-btn" role="button" style="background:<?php echo ($tabBackground); ?>; color: <?php echo ($tabText); ?>;">
	          		<h5><?php echo $headline; ?></h5>
				</div>
			<?php $i++;
			endwhile;?>
		<?php endif; ?>
		</div>
		<div class="content-wrapper">
		<?php if( have_rows('tabs') ):
			$i = 1;?>
			<?php while ( have_rows('tabs') ) : the_row();
				$bodyCopy = get_sub_field('tab_content');
			?> 
				<div id="<?php echo ('tab-' . $i); ?>" class="tab_content" style="background:<?php echo ($contentBackground); ?>; color: <?php echo ($contentText); ?>;">
						<?php echo $bodyCopy; ?>
				</div>
			<?php $i++;
			endwhile;?>
		
		<?php endif; ?>
		</div>

    </div>
</div>
