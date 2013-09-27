<?php
/*
Template Name: Site Map
*/

?>

<?php get_header(); ?>

	<div class="grid group">

		

		<section class="latest-news grid-1-1 single-blog-post">



			<h1 class="site-section-title latest-news-title site-map-title h1"><span>0</span><?php echo the_title(); ?></h1>

			<article class="module">

				<div class="sb-circle1"></div><div class="sb-circle2"></div>
				
				<div class="contact-form-tiki">

					<div class="col1">
							<ul class="page-map">
								<?php wp_list_pages('title_li='); ?>
							</ul>
					</div>
				
				</div>
				<div class="sb-circle3"></div><div class="sb-circle4"></div>
			</article>

		</section>



	</div> <!-- END main-content-wrap -->

	</div> <!-- END main-bg -->

	</div> <!-- END GRID -->

	<?php get_footer(); ?>
