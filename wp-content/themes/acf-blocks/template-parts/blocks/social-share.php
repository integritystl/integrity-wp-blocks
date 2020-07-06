<?php
/**
*
* Simple component which allows for a social share section.
*
*
**/
$socialHeadline = get_field('social_headline');
$socialContent = get_field('social_content');
$socialLayout = get_field('social_style');

?>

<div class="social-share-block block-content">

  <div class="social-share-wrapper">
  	<?php if($socialHeadline): ?>
  		<h4><?php echo($socialHeadline); ?></h4>
  	<?php endif; ?>
  	<?php if($socialContent): ?>
  		<?php echo($socialContent); ?>
  	<?php endif; ?>
    <div class="block-content-section">
    	<!-- Begin Repeater -->
      <div class="social <?php echo($socialLayout); ?>">
  		<?php if( have_rows('social_link') ): ?>
  			<?php while ( have_rows('social_link') ) : the_row();
  				$social = get_sub_field('social_link');
  				$social_link = $social['url'];
  		    $social_title = $social['title'];
  		    $social_target = $social['target'] ? $social['target'] : '_self';
  		    $socialPlatform = get_sub_field('social_platform');	
  			?>
        	<?php if ($social): ?>
      			<a class="social-button" href="<?php echo esc_url( $social_link ); ?>" target="_blaink"><i class="fab <?php echo($socialPlatform); ?>"></i></a>
        	<?php endif; ?>
        <?php endwhile;?>
	    <?php endif; ?>
      </div>
    </div>
  </div>

</div>