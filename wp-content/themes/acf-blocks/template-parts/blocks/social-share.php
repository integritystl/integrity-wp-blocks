<?php
/**
*
* Simple component which allows for a social share section.
*
*
**/
$socialHeadline = get_field('social_headline');
$socialContent = get_field('social_content');

?>

<div class="social=share-block block-content">

  <div class="social-share-wrapper">
  	<?php if($socialHeadline): ?>
  		<h4><?php echo($socialHeadline); ?></h4>
  	<?php endif; ?>
  	<?php if($socialContent): ?>
  		<?php echo($socialContent); ?>
  	<?php endif; ?>
    <div class="block-content-section">
    	<!-- Begin Repeater -->
		<?php if( have_rows('social_link') ): ?>
			<?php while ( have_rows('social_link') ) : the_row();
				$social = get_sub_field('social_link');
				$social_link = $socialLink['url'];
		    $social_title = $socialLink['title'];
		    $social_target = $socialLink['target'] ? $social['target'] : '_self';
		    $socialPlatform = get_sub_field('social_platform');	
		    $socialStyle = get_sub_field('social_style');
		    $socialStyleDark = $socialStyle['Dark'];
			?>
      	<?php if ($social): ?>
    		<div class="social">
    			<?php if( $socialStyle == 'linkedin' ) { ?>
    			<a class="social-button <?php echo( $socialPlatform ); ?>-" href="<?php echo esc_url( $social_link ); ?>" target="_blaink"></a>
    		</div>
    		<?php } ?>

	      	<?php endif; ?>


	    <?php endwhile;?>

		<?php endif; ?>
    </div>

  </div>

</div>