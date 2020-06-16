<?php
/**
*
* Simple component which spans the entire width of the page and allows for a WYSIWYG block.
*
*
**/
$postStyle = get_field('post_list_layout');
$postItems = get_field('post_item_select');
?>

<div class="fancy-posts block-content container">

	<?php 
	//get relationship posts
	$posts = get_field('post_selection');
	if( $posts ): ?>

		<div class="fancy-posts-wrapper">
			<?php global $post; ?>
			<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
	        <?php setup_postdata($post); ?>
	        
		    	<?php if($postStyle == 'stacked-card'){ ?>
			    	<div class="stacked-card">
			    		<?php if($postItems == 'featured-image'){ ?>
						    <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
						        <?php the_post_thumbnail(); ?>
						    </a>
						<?php } ?>
					    <div class='post-content'>
					    	<?php if(get_field('post_item_select') == 'post-title'): ?>
						    	<a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
							        <h4><?php the_title(); ?></h4>
							    </a>
							<?php endif; ?>
							<?php if(get_field('post_item_select') == 'post-content'): ?>
							    <div>
							    	<?php echo wp_trim_words( get_the_content(), 50, '...' ); ?>
							    </div>
							<?php endif; ?>
						    <a class="button" href="<?php the_permalink(); ?>">Read More</a>
					    </div>
			    	</div>

				<?php } elseif ($postStyle == 'side-card'){ ?>
				    <div class='side-card'>
				   		A different Thing
					</div>

				<?php } elseif ($postStyle == 'tabbed-list'){ ?> 
				    <div class="tabbed-list">
				    	Do another thing
				    </div>
				<?php } ?>
			<?php endforeach; ?>
    	</div>


	    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	<?php endif; ?>

</div>



