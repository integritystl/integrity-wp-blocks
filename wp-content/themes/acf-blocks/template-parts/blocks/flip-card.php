<?php
/**
*
* Element that allows you to add a flip card.
*
*
**/

//container styles
$cardColumns = get_field('card_columns');
$containerBackground = get_field('container_background_image');
$containerColor = get_field('container_background_color');

//Card Styles
$cardAnimation = get_field('card_animation');
$frontColor = get_field('front_background');
$backColor = get_field('back_background');

?>

<div class="flip-card-block block-content ">

    <div class="block-content-section <?php echo($cardColumns); ?>" style="background: url('<?php echo($containerBackground); ?>')<?php echo($containerColor); ?>;">

    	<?php if( have_rows('card_repeater') ): ?>
			<?php while ( have_rows('card_repeater') ) : the_row();
				$frontIcon = get_sub_field('front_icon');
				$frontHeadline = get_sub_field('front_headline');
				$frontContent = get_sub_field('front_content');
				$frontLink = get_sub_field('front_link');
					$frontURL = $frontLink['url'];
				    $frontTitle = $frontLink['title'];
				    $frontTarget = $frontLink['target'] ? $frontLink['target'] : '_self';	
				$backIcon = get_sub_field('back_icon');
				$backHeadline = get_sub_field('back_headline');
				$backContent = get_sub_field('back_content');
				$backLink = get_sub_field('front_link');
					$backURL = $frontLink['url'];
				    $backTitle = $frontLink['title'];
				    $backTarget = $frontLink['target'] ? $frontLink['target'] : '_self';
			?>
			<div class="flip-card-item">
				<div class="front">
					<?php if ($frontIcon): ?>
		                <img href="<?php echo( $frontIcon ); ?>"></img>
		            <?php endif; ?>
					<?php if ($frontHeadline): ?>
			    		<h3><?php echo( $frontHeadline ); ?></h3>
			    	<?php endif; ?>
			    	<?php if ($frontContent): ?>
			    		<?php echo( $frontContent ); ?>
			    	<?php endif; ?>
			    	<?php if ($frontLink): ?>
		    			<a class="button" href="<?php echo esc_url( $frontURL ); ?>" target="<?php echo esc_attr( $frontTarget ); ?>"><?php echo esc_html( $frontTitle ); ?></a>
			      	<?php endif; ?>
				</div>
				<div class="back">
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

			<?php endwhile; ?>
		<?php endif; ?>
    </div>

</div>