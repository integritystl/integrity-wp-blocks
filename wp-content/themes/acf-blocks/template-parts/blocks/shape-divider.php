<?php
/**
*
* Element that allows you to add Shape Dividers.
*
*
**/
$shape = get_field('divider_shape');


?>



<?php if($shape == 'slant'): ?>
    <div class="shape-divider-block block-content">
        <div class="shape-wrap">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 66"><defs><style>.cls-1{fill:#fff;}</style></defs><title>slant</title><polygon class="cls-1" points="0 0 500 43 500 66 0 66 0 0"/></svg>
        </div>
    </div>

<?php endif; ?>