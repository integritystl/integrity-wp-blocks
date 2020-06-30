<?php
/**
*
* Element that allows you to add a CTA
*
*
**/
$ctaLayout = get_field('cta_layout');
$ctaCols = get_field('columns');
//styles
$ctaBackgroundImg = get_field('cta_background_image');
$ctaBackgroundColor = get_field('cta_background_color');
$ctaImgOverlay = get_field('cta_color_overlay');
$overlayOpacity = get_field('opacity');
$ctaHeight = get_field('cta_height');
$ctaAlign = get_field('img_align');
$hoverAnimation = get_field('hover_animation');

?>

<div class="cta-block block-content row" style="<?php echo($ctaBackgroundColor); ?>">

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
        <div class="cta-item-wrap <?php echo($ctaLayout); ?> <?php echo($ctaCols); ?> <?php echo($ctaAlign); ?>" >
            <div class="image-section">
                <?php if($ctaImgOverlay): ?>
                    <div class="img-overlay" style="background-color: <?php echo( $ctaImgOverlay ); ?>; opacity: .<?php echo($overlayOpacity); ?>;"></div>
                <?php endif; ?>
                <?php if($ctaimage): ?>
                    <img src="<?php echo( $ctaimage ); ?>">
                <?php endif; ?>
            </div>
        	<div class="cta-content">
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
                    <a class="" href="<?php echo esc_url( $ctaUrl ); ?>"><?php echo esc_html( $ctaTitle ); ?></a>
                <?php endif; ?>
            </div>
           
        </div>
            <?php endwhile;?>
        
    <?php endif; ?>

</div>