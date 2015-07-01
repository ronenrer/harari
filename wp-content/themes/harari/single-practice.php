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
					<div class="row row-offcanvas row-offcanvas-right">
						<div id="main" class="col-xs-6 col-sm-9 pull-left clearfix" role="main">
							
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

								<header class="article-header">

									<h1 class="single-title custom-post-type-title"><?php the_title(); ?></h1>

								</header>

								<section class="entry-content clearfix">
									<p class="pull-right visible-xs">
					            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
					          </p>
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

						<div class="col-xs-6 col-sm-3 pull-right sidebar-offcanvas" id="sidebar">
				          <div class="list-group">
				            <a href="#" class="list-group-item active">Link</a>
				            <a href="#" class="list-group-item">Link</a>
				            <a href="#" class="list-group-item">Link</a>
				            <a href="#" class="list-group-item">Link</a>
				            <a href="#" class="list-group-item">Link</a>
				            <a href="#" class="list-group-item">Link</a>
				            <a href="#" class="list-group-item">Link</a>
				            <a href="#" class="list-group-item">Link</a>
				            <a href="#" class="list-group-item">Link</a>
				            <a href="#" class="list-group-item">Link</a>
				          </div>
				        </div><!--/.sidebar-offcanvas-->
				    </div>
				</div>
			</div>

<?php get_footer(); ?>
