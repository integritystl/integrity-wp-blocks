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
$ctaAlign = get_field('text_align');
$hoverAnimation = get_field('hover_animation');

?>

<div class="cta-block block-content container <?php echo($ctaLayout); ?> <?php echo($ctaCols); ?>" style="background:url('<?php echo($ctaBackgroundImg); ?>')<?php echo($ctaBackgroundColor); ?>">

    <?php if ($ctaImgOverlay): ?>
        <div class="img-overlay" style="background:url('<?php echo($ctaImgOverlay); ?>');"></div>
    <?php endif; ?>

    <!-- Begin Repeater -->
    <?php if( have_rows('callout_content') ): ?>
        
            <?php while ( have_rows('callout_content') ) : the_row();
                $ctaIcon = get_sub_field('cta_imageicon');
                $ctaHeadline = get_sub_field('cta_headline');
                $ctaSubHeadline = get_sub_field('cta_sub_headline');
                $ctaContent = get_sub_field('cta_content');
                $ctaLink = get_sub_field('cta_link');
                $ctaUrl = $ctaLink['url'];
                $ctaTitle = $ctaLink['title'];
            ?>
        <div class="cta-item-wrap <?php echo($ctaAlign); ?> " >
        	<?php if ($ctaIcon): ?>
                <img href="<?php echo( $ctaIcon ); ?>"></img>
            <?php endif; ?>
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
            <?php endwhile;?>
        
    <?php endif; ?>

</div>