<?php
/*
Template Name: Banquets Page
*/

?>

<?php get_header(); ?>
<br>
	<div class="grid group"> <!-- Start Grid -->


					<section class="grid-1-1 group banquets-main-copy-wrap">

						<h1 class="site-section-title tikibar-title"><span>l</span>Banquets</h1>

					<article class="module banquets-copy">

					<div class="circle1"></div><div class="circle2"></div>

					<div class="banquets-copy-wrap group">

							<img class="banquets-deck-pic" src="<?php bloginfo('template_url'); ?>/images/banquets-header.jpg">

					<?php

					if (have_posts()) : while (have_posts()) : the_post(); ?>

					<p><?php echo the_content(); ?></p>
					
					<?php endwhile; endif; ?>

					<?php wp_reset_query() ?>

					</div>

					<div class="circle3"></div><div class="circle4"></div>

					</article><br>

				</section>

				<section class="latest-news grid-1-2 banquets-wrapper group">

					<h1 class="site-section-title h1 banquets-title"><span>=</span>Weddings</h1>

						<article class="module group banquets-copy">

							<div class="circle1"></div><div class="circle2"></div>

								<h1>Martell's Wedding Receptions</h1><br>

								<p>If your looking to celebrate your marriage vows with a reception that is like no other, then an oceanfront catered affair at Martell's Sea Breeze is not to be overlooked.

	The Atlantic Ocean… Its tranquil views and surf sounds already provide an already natural and romantic setting. Add to that, our chef prepared, mouth watering selections and our ability to transform the one of the hottest spots on the Jersey shore, into becoming your most elegant and memorable affairs.

	Custom menus are a specialty of the house. Every affair is coordinated and supervised by banquet management. Only one wedding at a time to insure our brides the special attention they deserve. Conveniently located only minutes from the Garden State Parkway, Routes 195, 70 and 35.

	For the family and friends who must travel, there are a variety of Victorian bed and breakfast inns, hotels, guesthouses and lodges for your overnight or weekend accommodations.</p>
										
								<h4>Discounts are Available for Friday and Sunday Affairs</h4><br>

								<h2>Our Wedding Packages</h2>

								<h6>Please Click Below to View Choices</h6><br>

								<a class="vip-links" href="../banquets/martells-wedding-cocktail-reception/">Martell's Wedding Cocktail Reception</a>
						
								<a class="vip-links" href="../banquets/the-royal-wedding/">The Royal Wedding</a>
						
								<a class="vip-links" href="../banquets/the-supreme-wedding/">The Supreme Wedding</a>

								<a class="vip-links" href="../banquets/the-pinnacle/">The Pinnacle</a><br>

								<h2>Available Options for All Packages</h2>

								<a class="vip-links" href="../banquets/available-options/">Available Option Items</a><br>

								<h2>Catering Manager</h2>

								<h5>Jason Vonderlinden</h5>

								<h5>Tel: 732-892-0131</h5>
								<br><br>

							<div class="circle3"></div><div class="circle4"></div>
							
						</article>

				</section> <!-- END Section WEDDING BANQUETS -->



				<?php include ("parts/side-bar-banquets.php"); ?>

				<section class="slogan grid-1-1 group">


		</div> <!-- END main-content-wrap -->

	</div> <!-- END main-bg -->


			</div> <!-- END GRID -->

		<?php get_footer(); ?>

			