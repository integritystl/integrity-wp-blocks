<?php
/**
 *
 * Template Name: Team
 *
 * This is the template that displays Team page.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ACF_Blocks
 */
get_header();
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main team">
            <?php
            $teamArgs = array(
                'post_type' => 'team',
                'orderby' => 'menu_order',
                'order' => 'ASC'
            );
            $teamQuery = new WP_Query($teamArgs);
            if ($teamQuery->have_posts()) : ?>
                <div class="container">
                    <div class="team-wrap">
                        <?php while ($teamQuery->have_posts()) : $teamQuery->the_post(); ?>
                            <div class="single-member">
                                <?php the_post_thumbnail('medium'); ?>
                                <h3><?php the_title(); ?></h3>
                                <?php
                                $jobPosition = get_field('team_job_position');
                                $jobBio = get_field('team_bio');
                                $teamPhone = get_field('team_phone');
                                $teamLinkedIn = get_field('team_linkedin');
                                $teamEmail = get_field('team_email');
                                if ($jobPosition): ?>
                                    <p class="team-position"><?php echo $jobPosition; ?></p>
                                <?php endif; ?>

                                <?php if ($jobBio): ?>
                                    <div class="team-bio"><?php echo $jobBio; ?></div>
                                <?php endif; ?>
                                <?php if ($teamPhone): ?>
                                    <a href="tel:<?php echo $teamPhone; ?>" class="single-team-phone">
                                        <i class="fa fa-phone"></i>
                                        <span><?php echo $teamPhone; ?></span>
                                    </a>
                                <?php endif; ?>

                                <?php if ($teamEmail): ?>
                                    <a href="mailto:<?php echo $teamEmail; ?>" class="team-email">
                                        <i class="fas fa-envelope"></i>
                                        <span><?php echo $teamEmail; ?></span>
                                    </a>
                                <?php endif; ?>

                                <?php
                                if( have_rows('team_social_icons') ): ?>
                                    <div class="social-links">
                                        <?php while ( have_rows('team_social_icons') ) : the_row();
                                            $socialUrl = get_sub_field('social_link');
                                            $socialIcon = get_sub_field('social_icon');
                                            ?>
                                            <a href="<?php echo $socialUrl; ?>" class="single-social-link" title="View on <?php echo $socialUrl; ?>">
                                                <i class="fab <?php echo $socialIcon; ?>" aria-hidden="true"></i>
                                            </a>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>

            <?php
            endif;
            ?>
        </main>
    </div>
<?php
get_footer();