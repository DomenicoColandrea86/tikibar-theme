<?php
/*
Template Name: Banquets - Weddings - royal
*/

?>

<?php get_header(); ?>

<br>
	<div class="grid group"> <!-- Start Grid -->


					<section class="grid-1-1 group banquets-main-copy-wrap">

						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

						<h1 class="site-section-title wedding-titles"><span>=</span><?php echo the_title(); ?></h1>

					<article class="module banquets-copy">

					<div class="circle1"></div><div class="circle2"></div>

					<div class="banquets-copy-wrap group">

							<img class="banquets-deck-pic" src="<?php bloginfo('template_url'); ?>/images/royal_wedding-header.jpg">


							<?php echo the_content(); ?>



						<?php endwhile; endif; ?>

								<div class="grid-1-2 bbq-package">
									<h6 style="text-align: center">Shrimp and Scallop Scampi</h6>
									<h6 style="text-align: center">Four Cheese Ravioli alla Vodka</h6>
									<h6 style="text-align: center">Sole Pepperonata</h6>
									<h6 style="text-align: center">Grilled Chicken Primavera </h6>
									<h6 style="text-align: center">Teriyaki Tuna</h6>
									<h6 style="text-align: center">Chicken -n- Broccoli Alfredo </h6>
									<h6 style="text-align: center">Sliced Steak Lyonnaise</h6>
									<h6 style="text-align: center">Farfalle Carbonara</h6>
									<h6 style="text-align: center">Maryland Crab Puffs </h6><br>
								</div><br>

					<h2 style="text-align: center">Additional Items Suggested</h2>

					<h2 style="text-align: center">Accompaniments</h2>

					<div class="grid-1-2 bbq-package">
						<h6 style="text-align: center">Fresh Rolls & Butter</h6>
						<h6 style="text-align: center">Coffee, Tea & Brewed Decaf</h6><br><br>

						<a style="text-align: center" class="vip-links" href="../banquets/">See our Available Options for All Packages</a>
						<a style="text-align: center" class="vip-links" href="../banquets//">Back to Our Main Wedding Catering</a>
						
					</div>


					</div>

					<div class="circle3"></div><div class="circle4"></div>

					</article><br>

				</section>

		</div> <!-- END main-content-wrap -->

	</div> <!-- END main-bg -->


			</div> <!-- END GRID -->

		<?php get_footer(); ?>

			