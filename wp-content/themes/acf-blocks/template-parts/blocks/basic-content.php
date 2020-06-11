<?php
/**
*
* Simple component which spans the entire width of the page and allows for a WYSIWYG block.
*
*
**/

?>

<div class="block-content container">

  <div class="wysiwyg-wrapper">

    <div class="wysiwyg block-content-section container">
    	<?php
    		the_field('basic_content_editor');
    	?>
    </div>

  </div>

</div>