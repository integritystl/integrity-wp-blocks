<?php
/**
*
* Element that allows you to add a Team Card.
*
*
**/
$image = get_field('profile_image');
$cardLayout = get_field('profile_align');
$profileName = get_field('profile_name');
$profileTitle = get_field('title');
$profileContent = get_field('profile_blurb');

?>

<div class="team-card-block block-content container">

    <div class="team-card-item <?php echo($cardLayout); ?>">
    	<img src="<?php echo( $image ); ?>">
    	<?php if ($profileName): ?>
    		<h3><?php echo( $profileName ); ?></h3>
    	<?php endif; ?>
    	<?php if($profileTitle): ?>
    		<h4><?php echo( $profileTitle ); ?></h4>
    	<?php endif; ?>
    	<?php if($profileContent): ?>
    		<?php echo( $profileContent ); ?>
    	<?php endif; ?>
    </div>

</div>