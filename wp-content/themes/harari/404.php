<?php get_header(); ?>

			<div  id="content">
				<?php 
				$default_header_bg = get_field('default_header_pic',option);
				$header_bg = get_field('header_pic');
				$header_style ='';
				if (!empty($header_bg)) {
					$header_style = 'style="background-image:url('.$header_bg.');"';
				}else{
					$header_style = 'style="background-image:url('.$default_header_bg.');"';
				}?>
				<header class="article-header fullwidth" <?php echo $header_style ?>>
						<h1 class="page-title" itemprop="headline"><?php _e( 'Epic 404 - Article Not Found', 'bonestheme' ); ?></h1>
				</header>
				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="eightcol first clearfix" role="main">

						<article id="post-not-found" class="hentry clearfix">

							<section class="entry-content">

								<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'bonestheme' ); ?></p>

							</section>

						</article>

					</div>

				</div>

			</div>

<?php get_footer(); ?>
