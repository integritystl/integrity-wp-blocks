<?php
/**
*
* Simple component which spans the entire width of the page and allows for a Button Group block.
*
*
**/

//Style Options
$textBackground = get_field('text_background');
$textAlign = get_field('align_text');

?>

<div class="image-callout-block block-content row">
  <?php if( have_rows('callout_content') ): ?>
    <?php while ( have_rows('callout_content') ) : the_row();
      $img = get_sub_field('callout_image');
      $headline = get_sub_field('callout_headline');
      $subHeadline = get_sub_field('callout_subheadline');
      $content = get_sub_field('content');
    ?>
    <div class="image-callout-wrapper col">
      <div class="image-wrapper">
        <?php if ($img): ?>
          <img src="<?php echo ($img); ?>">
          <?php endif; ?>
      </div>

      <div class="content-wrapper <?php echo ($textAlign); ?>" style="background:<?php echo ($textBackground); ?>;">
        <?php if ($headline): ?>
          <h3><?php echo ($headline); ?></h3>
        <?php endif; ?>
        <?php if ($subHeadline): ?>
          <h4><?php echo ($subHeadline); ?></h4>
        <?php endif; ?>
        <?php if ($content): ?>
          <?php echo ($content); ?>
        <?php endif; ?>

        <!-- Begin Repeater -->
      <?php if( have_rows('callout_links') ): ?>
        <?php while ( have_rows('callout_links') ) : the_row();
          $links = get_sub_field('callout_link');
          $links_link = $links['url'];
            $links_title = $links['title'];
            $links_target = $links['target'] ? $links['target'] : '_self';  
            $buttonClass = get_sub_field('button_selector');  
        ?>
            
        <a class="<?php echo ($buttonClass); ?>" href="<?php echo esc_url( $links_link ); ?>" target="<?php echo esc_attr( $links_target ); ?>"><?php echo esc_html( $links_title ); ?></a>

        <?php endwhile;?>

      <?php endif; ?>
      </div>
    </div>
    <?php endwhile;?>

  <?php endif; ?>
  	

</div>