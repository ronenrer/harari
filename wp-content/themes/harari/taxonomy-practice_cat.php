<?php
/*
This is the custom post type taxonomy template.
If you edit the custom taxonomy name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom taxonomy is called
register_taxonomy( 'shoes',
then your single template should be
taxonomy-shoes.php

*/
?>

<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="container clearfix">
					 <?php
				        global $post;
				        $term = get_queried_object();
						$term_header_image = get_field('practice_header_img', 'practice_cat_'.$term->term_id);
						?>
				
					<header class="article-header">
						<h1 class="single-title"><?php single_cat_title(); ?></h1>						
					</header>
					<div class="practice-pic"><img src="<?php echo $term_header_image ?>"/></div>
					<div class="row row-offcanvas row-offcanvas-right">
						<div id="main" class="col-xs-6 col-sm-8 pull-left clearfix" role="main">

							<?php
							
							$current_taxterms = $term->name;
						      $args = array(
						            'post_type' => 'practice',
						            'posts_per_page' => '1',
						            'order_by' => 'menu_order ',
						            'order' => 'ASC',
						                'tax_query' => array(
						                    array(
						                        'taxonomy' => 'practice_cat', // Taxonomy name
						                        'field' => 'slug',
						                        'terms' => $current_taxterms
						                    )
						                )
						            );
           						 $query = new WP_Query( $args );
								if (have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

								<section class="entry-content">
									<p class="pull-right visible-xs">
					            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
					          </p>
									<?php the_content(); ?>

								</section>

				
							</article>

							<?php endwhile; ?>

									<?php if ( function_exists( 'bones_page_navi' ) ) { ?>
											<?php bones_page_navi(); ?>
									<?php } else { ?>
											<nav class="wp-prev-next">
													<ul class="clearfix">
														<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
														<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
													</ul>
											</nav>
									<?php } ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the taxonomy-custom_cat.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>
						<div class="col-xs-6 col-sm-4 pull-right sidebar-offcanvas" id="sidebar">
				            <?php
				         		
									$current_post_id = get_the_ID();
									$postlist_args = array(
								   'posts_per_page'  => -1,
								   'orderby'         => 'menu_order',
								   'order'           => 'DESC',
								   'post_type'       => 'practice',
								   'practice_cat' => $current_taxterms									  
									); 
			
								$postlist = get_posts( $postlist_args );

										// get ids of posts retrieved from get_posts
									if (!empty($postlist)) :				
									?>	
									<div class="list-group">
											<?php
											foreach($postlist as $post): ?>
											<li <?php echo get_the_ID() == $current_post_id ? 'class="list-group-item current"' : 'class="list-group-item"'; ?>><span></span><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
											<?php endforeach;?>
									</div>
								<?php  endif; 
								/* /////// END RELATED ARTICLES //////// */
								?>
				          </div>
				    </div><!--/.sidebar-offcanvas-->

				</div>

			</div>

<?php get_footer(); ?>
