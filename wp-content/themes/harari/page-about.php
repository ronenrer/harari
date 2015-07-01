<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>
			<div id="content">
				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="col-sm-9"  role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
		
							<section class="main-features clearfix" itemprop="articleBody">
							<div class="row">
								
						      </div>
							</section>
							

							<footer class="article-footer">

							</footer>

						</article>
					<?php endwhile; endif; ?>

					</div>
					
				</div>

			</div>

<?php get_footer(); ?>