<?php
/**
*
* Element that allows you to add a CTA
*
*
**/
$ctaLayout = get_field('cta_width');
$ctaCols = get_field('columns');
$cover = get_field('img_cover');
//styles
$ctaBackgroundImg = get_field('cta_background_image');
$ctaBackgroundColor = get_field('cta_background_color');
$ctaImgOverlay = get_field('cta_color_overlay');
$overlayOpacity = get_field('opacity');
$ctaHeight = get_field('cta_height');
$ctaAlign = get_field('img_align');
$hoverAnimation = get_field('hover_animation');

//Container Styles
$wrapBackground = get_field('wrapper_background');
$wrapImage = get_field('wrapper_background_image');
$topBtmSpace = get_field('spacing');
$shapeDivider = get_field('shape_divider');
$wrapWidth = get_field('container_layout');
?>
<div class="block-content <?php echo($wrapWidth); ?>" style="background:url('<?php echo($wrapImage); ?>')<?php echo($wrapBackground); ?>; background-size:cover; padding: <?php echo($topBtmSpace); ?>px 0">
    
    <div class="cta-block row <?php echo($ctaLayout); ?>" >

        <!-- Begin Repeater -->
        <?php if( have_rows('callout_content') ): ?>
            
                <?php while ( have_rows('callout_content') ) : the_row();
                    $ctaimage = get_sub_field('cta_imageicon');
                    $ctaHeadline = get_sub_field('cta_headline');
                    $ctaSubHeadline = get_sub_field('cta_sub_headline');
                    $ctaContent = get_sub_field('cta_content');
                    $ctaLink = get_sub_field('cta_link');
                    $ctaUrl = $ctaLink['url'];
                    $ctaTitle = $ctaLink['title'];
                ?>
            <div class="cta-item-wrap <?php echo($ctaCols); ?> <?php echo($hoverAnimation); ?> <?php echo($ctaAlign); ?>" >
                <div class="image-section">
                    <?php if($ctaImgOverlay): ?>
                        <div class="img-overlay" style="background-color: <?php echo( $ctaImgOverlay ); ?>; opacity: .<?php echo($overlayOpacity); ?>;"></div>
                    <?php endif; ?>
                    <?php if($ctaimage): ?>
                        <img src="<?php echo( $ctaimage ); ?>">
                    <?php endif; ?>
                </div>
            	<div class="cta-content" style="background:<?php echo($ctaBackgroundColor); ?>;">
                     <?php if ($ctaHeadline): ?>
                        <h3><?php echo( $ctaHeadline ); ?></h3>
                    <?php endif; ?>
                    <?php if ($ctaSubHeadline): ?>
                        <h4><?php echo( $ctaSubHeadline ); ?></h3>
                    <?php endif; ?>
                    <?php if ($ctaContent): ?>
                        <?php echo( $ctaContent ); ?>
                    <?php endif; ?>
                    <?php if ($ctaLink): ?>
                        <a class="button" href="<?php echo esc_url( $ctaUrl ); ?>">Learn More</a>
                    <?php endif; ?>
                </div>
               
            </div>
                <?php endwhile;?>
            
        <?php endif; ?>
 
    </div>

    

</div><div class="shape-divider <?php echo($shapeDivider); ?>"> </div>