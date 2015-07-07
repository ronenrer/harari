<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="container clearfix">
					 
				
					<header class="article-header">
						<h1 class="single-title">פרסומים</h1>						
					</header>
					<div class="practice-pic"><img src="<?php echo $term_header_image ?>"/></div>
					<div class="row row-offcanvas row-offcanvas-right">
						<div id="main" class="col-xs-6 col-sm-8 pull-left clearfix" role="main">
							
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

								<section class="entry-content clearfix">
									<p class="pull-right visible-xs">
					            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
					          </p>
					          		<h2><?php the_title();?></h2>
									<?php the_content(); ?>

								</section>


							</article>

							<?php endwhile; ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the single-custom_type.php template.', 'bonestheme' ); ?></p>
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
								   'post_type'       => 'publications',
								   'practice_cat' => $current_term_slug,									  
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
			</div>

<?php get_footer(); ?>