<?php
/**
*
* Element that allows you to add a Team Card.
*
*
**/
$mediaImage = get_field('media_image');
$mediaVideo = get_field('media_video');
$calloutHeadline = get_field('callout_title');
$calloutContent = get_field('callout_content');
$calloutBackground = get_field('background_color');
$backgroundImg = get_field('background_image');
$calloutAlign = get_field('callout_alignment');

?>

<div class="team-card-block block-content container">

    <div class="team-card-item <?php echo($calloutAlign); ?>" style="background:url('<?php echo($backgroundImg); ?>') <?php echo($calloutBackground); ?>">
    	<div class="media-wrapper">
           <?php if($mediaImage): ?>
                <img src="<?php echo( $mediaImage ); ?>">
            <?php endif; ?>
            <?php if($mediaVideo): ?>
                <div class="video"><?php echo($mediaVideo); ?></div>
            <?php endif; ?> 
        </div>
        <div class="callout-content">
            <?php if($calloutHeadline): ?>
                <h4><?php echo( $calloutHeadline ); ?></h4>
            <?php endif; ?>
            <?php if($calloutContent): ?>
                <?php echo( $calloutContent ); ?>
            <?php endif; ?>
        </div>
    	
    </div>

</div>