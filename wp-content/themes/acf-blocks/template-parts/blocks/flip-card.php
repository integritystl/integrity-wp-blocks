<?php
/**
*
* Element that allows you to add a flip card.
*
*
**/

$frontIcon = get_field('front_icon');
$frontHeadline = get_field('font_headline');
$frontContent = get_field('front_content');
$frontLink = get_field('front_link')
$backIcon = get_field('back_icon');
$backHeadline = get_field('back_headline');
$backContent = get_field('back_content');
$backLink = get_field('back_link')

//container styles
$cardColumns = get_field('card_columns');
$containerBackground = get_field('container_background_image');
$containerColor = get_field('container_background_color');

//Card Styles
$cardAnimation = get_field('card_animation');
$frontColor = get_field('front_background');
$backColor = get_field('back_background');

?>

<div class="image-slider-block block-content container">

    <div class="block-content-section <?php echo($sliderLayout); ?>">
    	<?php if( $images ): ?>
		    <ul>
		        <?php foreach( $images as $image ): ?>
		            <li>
		                <a href="<?php echo esc_url($image['url']); ?>">
		                     <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		                </a>
		                <p><?php echo esc_html($image['caption']); ?></p>
		            </li>
		        <?php endforeach; ?>
		    </ul>
		<?php endif; ?>
    </div>

</div>