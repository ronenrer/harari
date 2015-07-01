<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			<div id="content">
				<div id="inner-content" class=" clearfix">
					<!-- Carousel
				    ================================================== -->
				    <div id="myCarousel" class="carousel slide" data-ride="carousel">
				      <!-- Indicators -->
				      <div class="carousel-inner" role="listbox">
				        <div class="item active">
				          <div class="container">
				            <img class="first-slide" src="<?php echo get_stylesheet_directory_uri()?>/library/images/slide1.jpg" alt="First slide">
				            <div class="carousel-caption">
				              <h1>משרד עורכי דין, המתמחה בייצוג בהליכים משפטיים בתחום המסחרי</h1>
				            </div>
				          </div>
				        </div>
				        <div class="item">
				          <img class="second-slide" src="<?php echo get_stylesheet_directory_uri()?>/library/images/slide1.jpg" alt="Second slide">
				          <div class="container">
				            <div class="carousel-caption">
				              <h1>משרד עורכי דין, המתמחה בייצוג בהליכים משפטיים בתחום המסחרי</h1>
				            </div>
				          </div>
				        </div>
				      </div>
				      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				        <span class="sr-only">Previous</span>
				      </a>
				      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				        <span class="sr-only">Next</span>
				      </a>
				    </div><!-- /.carousel -->			

					<div id="main" class="row"  role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
		
							<section class="container clearfix" itemprop="articleBody">
							<div class="row contact-details">
								<div class="col-sm-4">
									<div class="contact-icon"><img src="<?php echo get_stylesheet_directory_uri()?>/library/images/icon-address.png"/></div>
									רחוב דניאל פריש 3,<br>קומה 10, תל אביב 
								</div>
								<div class="col-sm-4">
									<div class="contact-icon"><img src="<?php echo get_stylesheet_directory_uri()?>/library/images/icon-phone.png"/></div>
									טלפון: 03-6932084<br>
									פקס: 03-6006607
								</div>
								<div class="col-sm-4">
									<div class="contact-icon"><img src="<?php echo get_stylesheet_directory_uri()?>/library/images/icon-mail.png"/></div>
									<a href="mailto:office@harari-law.com">office@harari-law.com</a>
									
								</div>
						      </div>
							</section>

						</article>
					<?php endwhile; endif; ?>

					</div>
					
				</div>

			</div>

<?php get_footer(); ?>