<?php
/*
Template Name: אודות
*/

 get_header(); ?>

			<div id="content-about">
				<div id="inner-content" class="container clearfix">
					<?php if (has_post_thumbnail())
						the_post_thumbnail('full');
						?>
					
					<div id="main" class="" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							<header class="article-header">
								<h1 class="single-title custom-post-type-title"><?php the_title(); ?></h1>
							</header>

							<section class="entry-content row clearfix" itemprop="articleBody">
									<div class="col-sm-6"><?php echo get_field('right_col') ?></div>
									<div class="col-sm-6"><?php echo get_field('left_col') ?></div>
							</section>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

					</div>

				</div>

			</div>

<?php get_footer(); ?>
