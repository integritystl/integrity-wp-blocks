<?php
/**
*
* Element that allows you to add a Team Card.
*
*
**/
$columns = get_field('columns');
$cardLayout = get_field('layout_style');
$textAlign = get_field('text_align');
$cardBackground = get_field('background_color');

?>

<div class="team-card-block block-content <?php echo($cardLayout); ?> row">
     <?php if( have_rows('team_member') ): ?>
        
        <?php while ( have_rows('team_member') ) : the_row();
            $profileImg = get_sub_field('profile_image');
            $profileName = get_sub_field('name');
            $profileTitle = get_sub_field('title');
            $profileInfo = get_sub_field('info');
        ?>
        <div class="team-card-item <?php echo($columns); ?>" style="background: <?php echo($cardBackground); ?>; text-align:<?php echo($textAlign); ?>;">
            <div class="team-image">
                <?php if ($profileImg): ?>
                   <img src="<?php echo( $profileImg ); ?>">
                <?php endif; ?>
            </div>
            <div class="team-content">
                <?php if ($profileName): ?>
                    <h3><?php echo( $profileName ); ?></h3>
                <?php endif; ?>
                <?php if($profileTitle): ?>
                    <h4><?php echo( $profileTitle ); ?></h4>
                <?php endif; ?>
                <?php if($profileInfo): ?>
                    <?php echo( $profileInfo ); ?>
                <?php endif; ?>
            </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>

</div>