<?php
/**
*
* Element that allows you to add an image slider to a page.
*
*
**/
$images = get_field('slider_image_gallery');
$sliderLayout = get_field('slider_style')

?>

<div class="block-content container">

  <div class="slider-wrapper">

    <div class="image-slider block-content-section <?php echo($sliderLayout); ?>">
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

</div>