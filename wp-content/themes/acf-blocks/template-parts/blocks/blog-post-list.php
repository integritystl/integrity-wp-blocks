<?php
/**
*
* Simple component which spans the entire width of the page and allows for a WYSIWYG block.
*
*
**/
$layout = get_field('post_list_layout');
$postsPerPage = get_field('posts_per_page');
$categories = get_field( 'choose_category' );
$filterStyle = get_field('add_filters');

if ($layout == 'stacked-card') :
	$postStyle = "stacked-card-layout";
elseif ($layout == 'side-card') :
	$postStyle = "side-card-layout";
endif;



// Create a comma-separated list from selected values.
?>


<div class="blog-list block-content container <?php echo $filterStyle; ?>">

	<?php if( get_field('add_filters') != 'no-filter' ) : ?>

			<!-- Search and Filter Pro Filters -->
			<div class="filter-bar">
				<div class="filters-container">
					<?php
						if( get_field('add_filters') == 'search-only' ) :
					 		echo do_shortcode('[searchandfilter id="138"]');
						elseif( get_field('add_filters') == 'search-cat' ) :
							echo do_shortcode('[searchandfilter id="143"]');
						elseif( get_field('add_filters') == 'search-cat-tag' ) :
							echo do_shortcode('[searchandfilter id="144"]');
						endif; ?>
				</div>
			</div>


			<div class="ajax-results">

					<?php	if( get_field('add_filters') == 'search-only' ) :
						$filterID = '138';
					elseif( get_field('add_filters') == 'search-cat' ) :
						$filterID = '143';
					elseif( get_field('add_filters') == 'search-cat-tag' ) :
						$filterID = '144';
					endif; ?>

					<?php
					$args = array(
					'post_type'        => 'post',
					'posts_per_page'   => 4,
					'search_filter_id' => $filterID,
					);

				//	$args['search_filter_slug'] = "search-only";
					$query = new WP_Query($args);
					$total = $query->found_posts;
					$totalPages = $query->max_num_pages;
					?>

					<div class="results-found" page_count="<?php echo $totalPages;?>"><span><?php echo $total; ?></span> Results Found</div>

					<?php if ($query->have_posts()) :?>
						<ul class="posts-wrapper <?php echo $postStyle; ?>" post_style="<?php echo $postStyle; ?>">
							<?php while ($query->have_posts()) : $query->the_post();
								global $post; ?>
								<li class="post-card">
									<?php if( get_field('featured_image') == '1' ) { ?>
										 <a href="<?php the_permalink(); ?>" class="post-image" alt="<?php the_title_attribute(); ?>">
												<?php the_post_thumbnail('medium'); ?>
										 </a>
									<?php } ?>
									<div class='post-content'>
											<?php if( get_field('date') == '1' ) { ?>
												<h6 class="post-date"><?php echo get_the_date( 'F, j, Y') ?></h6>
											<?php } ?>
											<?php if( get_field('author') == '1' ) { ?>
												<h6 class="post-author">| <?php echo get_the_author(); ?></h6>
											<?php } ?>

											<a href="<?php the_permalink(); ?>" class="post-title" alt="<?php the_title_attribute(); ?>">
												 <h4><?php the_title(); ?></h4>
											</a>

											<?php if( get_field('category') == '1' ) { ?>
												<div class="post-category">
													<?php	$terms = get_the_term_list( $post, 'category', '', ', ' );
													echo $terms; ?>
												</div>
											<?php } ?>

											<?php if( get_field('excerpt') == '1' ) { ?>
												<div class="post-excerpt">
													<?php echo wp_trim_words( get_the_content(), 25, '...' ); ?>
												</div>
											<?php } ?>

											<?php if( get_field('read_more') == '1' ) { ?>
												<a class="post-read-more" href="<?php the_permalink(); ?>">Read More</a>
											<?php } ?>
									</div>
								</li>
								<?php	wp_reset_postdata(); ?>
							<?php endwhile; ?>
						</ul>

						<button class="load-more button">Load More</button>
					<?php else: ?>
						<div class="no-results">
							<h3>No Results Found</h3>
						</div>
				  <?php endif; wp_reset_postdata(); ?>
			</div>

	  <?php else :

			if( $categories ):
				$catlist = implode( ', ', $categories );
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

				$args = array(
				  'post_type' => 'post',
				  'posts_per_page' => $postsPerPage,
					'category__in' => array($catlist),
					'paged' => $paged,
				);

		 else :
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => $postsPerPage,
				);

		 endif;

		 $the_query = new WP_Query( $args );
		 $total2 = $the_query->found_posts;
		 $totalPages2 = $the_query->max_num_pages;
		 ?>

		 <div class="results-found" page_count="<?php echo $totalPages2;?>"><span><?php echo $total2; ?></span> Results Found</div>

		 <?php if ( $the_query->have_posts() ) : ?>
			 <ul class="posts-wrapper <?php echo $postStyle; ?>" post_style="<?php echo $postStyle; ?>">
				 <?php global $post; ?>
				 <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<?php setup_postdata($post); ?>
						 <li class="post-card">
							 <?php if( get_field('featured_image') == '1' ) { ?>
									<a href="<?php the_permalink(); ?>" class="post-image" alt="<?php the_title_attribute(); ?>">
											<?php the_post_thumbnail('medium'); ?>
									</a>
							 <?php } ?>
							 <div class='post-content'>
									 <?php if( get_field('date') == '1' ) { ?>
										 <h6 class="post-date"><?php echo get_the_date( 'F, j, Y') ?></h6>
									 <?php } ?>
									 <?php if( get_field('author') == '1' ) { ?>
										 <h6 class="post-author">| <?php echo get_the_author(); ?></h6>
									 <?php } ?>

									 <a href="<?php the_permalink(); ?>" class="post-title" alt="<?php the_title_attribute(); ?>">
											<h4><?php the_title(); ?></h4>
									 </a>

									 <?php if( get_field('category') == '1' ) { ?>
										 <div class="post-category">
											 <?php	$terms = get_the_term_list( $post, 'category', '', ', ' );
											 echo $terms; ?>
										 </div>
									 <?php } ?>

									 <?php if( get_field('excerpt') == '1' ) { ?>
										 <div class="post-excerpt">
											 <?php echo wp_trim_words( get_the_content(), 25, '...' ); ?>
										 </div>
									 <?php } ?>

									 <?php if( get_field('read_more') == '1' ) { ?>
										 <a class="post-read-more" href="<?php the_permalink(); ?>">Read More</a>
									 <?php } ?>
							 </div>
						 </li>
				 <?php endwhile; ?>
				 <?php wp_reset_postdata(); ?>
			 </ul>
			 <button class="load-more button">Load More</button>
		 <?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		 <?php endif; ?>
	 <?php endif; ?>
   <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
</div>





<?php if( get_field('add_filters') == 'no-filter' ) : ?>
	<script>
	jQuery(function(){
		var page = 2;
		var loadmore = 'on';
		var pageCount = jQuery('.results-found').attr('page_count');
		var param = '?paged=';

		if (pageCount == 1 ){
			jQuery(".load-more").hide();
		}


		jQuery(".load-more").click(function() {
				if (loadmore == 'on') {
					loadmore = 'off';
					//jQuery('#spinner').css('visibility', 'visible');
					jQuery('.posts-wrapper').append(jQuery('<ul class="paged"></ul>').load( param + page + ' div.blog-list > ul > *', function() {
						page++;
						loadmore = 'on';
						jQuery('.paged li').unwrap();

						if (pageCount == 1 ){
							jQuery(".load-more").hide();
						}

						if (page > pageCount) {
							jQuery(".load-more").hide();
						}
						else {
							jQuery(".load-more").show();
						}

						jQuery('html,body').animate({
							scrollTop: jQuery(this).offset().top - 150
						}, 0);

					}));
				}
		});
	});
 </script>

<?php else : ?>

	<script>

	jQuery(function(){
		var page = 2;
		var loadmore = 'on';
		var pageCount = jQuery('.results-found').attr('page_count');

		if(window.location.search.length) {
			var param = window.location.search + '&sf_paged=';
		} else {
			var param = '?sf_paged=';
		}


		if (pageCount == 1 ){
			jQuery(".load-more").hide();
		}


		jQuery(".load-more").click(function() {
				if (loadmore == 'on') {
					loadmore = 'off';
					//jQuery('#spinner').css('visibility', 'visible');
					jQuery('.posts-wrapper').append(jQuery('<ul class="paged"></ul>').load( param + page + ' div.ajax-results > ul > *', function() {
						page++;
						loadmore = 'on';
						jQuery('.paged li').unwrap();

						if (pageCount == 1 ){
							jQuery(".load-more").hide();
						}

						if (page > pageCount) {
							jQuery(".load-more").hide();
						}
						else {
							jQuery(".load-more").show();
						}

						jQuery('html,body').animate({
							scrollTop: jQuery(this).offset().top - 150
						}, 0);

					}));
				}
		});
	});


			jQuery(document).on("sf:ajaxfinish", ".searchandfilter", function(){
				var page = 2;
				var loadmore = 'on';
				var pageCount = jQuery('.results-found').attr('page_count');

				if(window.location.search.length) {
					var param = window.location.search + '&sf_paged=';
				} else {
					var param = '?sf_paged=';
				}


				if (pageCount == 1 ){
					jQuery(".load-more").hide();
				}

				jQuery(".load-more").click(function() {
						if (loadmore == 'on') {
							loadmore = 'off';
						//	jQuery('#spinner').css('visibility', 'visible');
						jQuery('.posts-wrapper').append(jQuery('<ul class="paged"></ul>').load( param + page + ' div.ajax-results > ul > *', function() {
								page++;
								loadmore = 'on';
								jQuery('.paged li').unwrap();
							//	jQuery('#spinner').css('visibility', 'hidden');

								if (pageCount == 1 ){
									jQuery(".load-more").hide();
								}

								if (page > pageCount) {
									jQuery(".load-more").hide();
								}
								else {
									jQuery(".load-more").show();
								}

								jQuery('html,body').animate({
									scrollTop: jQuery(this).offset().top - 150
								}, 0);

							}));
						}
				});

				jQuery( document ).ajaxComplete(function( event, xhr, options ) {
					if (xhr.responseText.indexOf('class="page"') == -1) {
						loadmore = 'off';
					}
				});

		});
	</script>
<?php endif; ?>
