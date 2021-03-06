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
							<h1 class="single-title"><?php the_title() ?> | <?php echo get_field('lawyer_position')?></h1>						
						</header>
						<div id="main" class="clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<div class="row">
								<div class="col-sm-6">
									<?php the_post_thumbnail('full');?>
								</div>
								<div class="col-sm-6">
									<div class="cv mCustomScrollbar" data-mcs-theme="dark">
										<?php echo get_field('lawyer_cv')?>
									</div>
								</div>
							</div>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">


								<section class="entry-content clearfix">

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

				</div>

			</div>

<?php get_footer(); ?>
