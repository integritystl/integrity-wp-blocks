<?php
/**
*
* Simple component which spans the entire width of the page and allows for a WYSIWYG block.
*
*
**/
$postStyle = get_field('post_list_layout');

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

		    	<?php if($postStyle == 'stacked-card') { ?>

						<div class="stacked-card">
							<?php if( get_field('featured_image') == '1' ) { ?>
								 <a href="<?php the_permalink(); ?>" class="post-image" alt="<?php the_title_attribute(); ?>">
										 <?php the_post_thumbnail(); ?>
								 </a>
							<?php } ?>
 							<div class='post-content'>
						    	<a href="<?php the_permalink(); ?>" class="post-title" alt="<?php the_title_attribute(); ?>">
							       <h4><?php the_title(); ?></h4>
							    </a>

									<?php if( get_field('date') == '1' ) { ?>
								    <div class="post-date">
								    	Posted on <?php echo get_the_date( 'F, j, Y') ?>
								    </div>
									<?php } ?>

									<?php if( get_field('author') == '1' ) { ?>
								    <div class="post-author">
								    	By <?php echo get_the_author(); ?>
								    </div>
									<?php } ?>

									<?php if( get_field('category') == '1' ) { ?>
										<div class="post-category">

											<?php
											$terms = get_the_term_list( $post, 'category', '', ', ' );
											echo $terms;
											?>

										</div>
									<?php } ?>

									<?php if( get_field('excerpt') == '1' ) { ?>
								    <div class="post-excerpt">
								    	<?php echo wp_trim_words( get_the_content(), 50, '...' ); ?>
								    </div>
									<?php } ?>

									<?php if( get_field('read_more') == '1' ) { ?>
						    		<a class="post-read-more" href="<?php the_permalink(); ?>">Read More »</a>
									<?php } ?>
					    </div>
			    	</div>

				<?php } elseif ($postStyle == 'side-card'){ ?>
				    <div class='side-card'>
							<?php if( get_field('featured_image') == '1' ) { ?>
								 <a href="<?php the_permalink(); ?>" class="post-image" alt="<?php the_title_attribute(); ?>">
										 <?php the_post_thumbnail(); ?>
								 </a>
							<?php } ?>
							<div class='post-content'>
									<a href="<?php the_permalink(); ?>" class="post-title" alt="<?php the_title_attribute(); ?>">
										 <h4><?php the_title(); ?></h4>
									</a>

									<?php if( get_field('date') == '1' ) { ?>
										<div class="post-date">
											Posted on <?php echo get_the_date( 'F, j, Y') ?>
										</div>
									<?php } ?>

									<?php if( get_field('author') == '1' ) { ?>
										<div class="post-author">
											By <?php echo get_the_author(); ?>
										</div>
									<?php } ?>

									<?php if( get_field('category') == '1' ) { ?>
										<div class="post-category">

											<?php
											$terms = get_the_term_list( $post, 'category', '', ', ' );
											echo $terms;
											?>

										</div>
									<?php } ?>

									<?php if( get_field('excerpt') == '1' ) { ?>
										<div class="post-excerpt">
											<?php echo wp_trim_words( get_the_content(), 50, '...' ); ?>
										</div>
									<?php } ?>

									<?php if( get_field('read_more') == '1' ) { ?>
										<a class="post-read-more" href="<?php the_permalink(); ?>">Read More »</a>
									<?php } ?>
							</div>
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
