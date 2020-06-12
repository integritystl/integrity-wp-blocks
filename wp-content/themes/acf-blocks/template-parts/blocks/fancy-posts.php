<?php
/**
*
* Simple component which spans the entire width of the page and allows for a WYSIWYG block.
*
*
**/
$relatedPosts = get_field('post_selection');
$postStyle = get_field('post_list_layout');

?>

<div class="fancy-posts block-content container">

  	<div class="fancy-posts-wrapper">
  		
    	<?php 
		if($postStyle == 'stacked-card'){ ?>
	    	<div>Do this</div>
		<?php } elseif ($postStyle == 'side-card'){ ?>
		    <div>Do that</div>
		<?php } elseif ($postStyle == 'tabbed-list'){?>
		    <div>Do another thing</div>
		<?php } ?>

    </div>

</div>



