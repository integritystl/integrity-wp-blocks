<?php
/**
*
* Element that allows you to add a flip card.
*
*
**/

//container styles
$cardColumns = get_field('card_columns');

//Card Styles
$cardAnimation = get_field('card_animation');
$frontColor = get_field('front_background');
$backColor = get_field('back_background');

?>

<div class="flip-card-block block-content ">

    <div class="block-content-section row">
    	<?php if( have_rows('card_repeater') ): ?>
			<?php while ( have_rows('card_repeater') ) : the_row();
				$frontIcon = get_sub_field('front_icon');
				$frontHeadline = get_sub_field('front_headline');
				$frontContent = get_sub_field('front_content');
				
				$backIcon = get_sub_field('back_icon');
				$backHeadline = get_sub_field('back_headline');
				$backContent = get_sub_field('back_content');
				$backLink = get_sub_field('back_button');
					$backURL = $backLink['url'];
				    $backTitle = $backLink['title'];
				    $backTarget = $backLink['target'] ? $backLink['target'] : '_self';
			?>
			<div class="card <?php echo($cardAnimation);?> <?php echo($cardColumns); ?>">
				<div class="card-inner">
					<div class="front" style="background: <?php echo($frontColor); ?>;">
						<?php if ($frontIcon): ?>
			                <img href="<?php echo( $frontIcon ); ?>"></img>
			            <?php endif; ?>
						<?php if ($frontHeadline): ?>
				    		<h3><?php echo( $frontHeadline ); ?></h3>
				    	<?php endif; ?>
				    	<?php if ($frontContent): ?>
				    		<?php echo( $frontContent ); ?>
				    	<?php endif; ?>
					</div>
					<div class="back" style="background: <?php echo($backColor); ?>;">
						<?php if ($backIcon): ?>
			                <img href="<?php echo( $backIcon ); ?>"></img>
			            <?php endif; ?>
						<?php if ($backHeadline): ?>
				    		<h3><?php echo( $backHeadline ); ?></h3>
				    	<?php endif; ?>
				    	<?php if ($backContent): ?>
				    		<?php echo( $backContent ); ?>
				    	<?php endif; ?>
				    	<?php if ($backLink): ?>
			    			<a class="button" href="<?php echo esc_url( $backURL ); ?>" target="<?php echo esc_attr( $backTarget ); ?>"><?php echo esc_html( $backTitle ); ?></a>
				      	<?php endif; ?>
					</div>
				</div>
			</div>

			<?php endwhile; ?>
		<?php endif; ?>
    </div>

</div>