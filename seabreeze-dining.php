<?php
/*
Template Name: Sea Breeze Dining
*/

?>

<?php get_header(); ?>
<br>
	<div class="grid group"> <!-- Start Grid -->


					<section class="grid-1-1 group banquets-main-copy-wrap">

						<h1 class="site-section-title breezy-home"><span>1</span>Sea Breeze</h1>

					<article class="module banquets-copy">

					<div class="circle1"></div><div class="circle2"></div>

					<div class="banquets-copy-wrap group">

							<img class="banquets-deck-pic" src="<?php bloginfo('template_url'); ?>/images/seabreeze-header.jpg">

					<?php

					if (have_posts()) : while (have_posts()) : the_post(); ?>

					<p><?php echo the_content(); ?></p>

					<h1>Sea Breeze Dining</h1>

					<p>Located alongside the beloved Martell’s Tiki Bar, Martell’s Sea Breeze Restaurant offers oceanfront dining with beautiful views of the Atlantic – and it has the food to match!</p>

					<p>With stunning views of the Atlantic Ocean and easy access to Point Pleasant’s exciting attractions, Martell’s Sea Breeze Restaurant is the ultimate combination of summer getaway and outstanding oceanfront dining. Whether enjoying a romantic dinner for two or an afternoon lunch with friends, you’ll enjoy our carefully cultivated menu of wraps, burgers, steaks, and seafood in a setting that will take your breath away.</p>

					<p>The lunch and dinner menus items are carefully sampled and proudly chosen especially for the Sea Breeze by our chef just prior to our main dining season. These menu items range from classic salads, burgers and wraps for lunch, to fine steaks and exotic fruits of the sea for dinner.</p>

					<p>The dining experience continues as you dine with the fantastic views of the Atlantic Ocean and it's cool salty breezes flowing throughout. As you end your dining experience, we welcome you to step out to one of our outside decks for further relaxation or musical entertainment.</p>
					
					<?php endwhile; endif; ?>

					<?php wp_reset_query() ?>

					</div>

					<div class="circle3"></div><div class="circle4"></div>

					</article><br>

				</section>

				<section class="latest-news grid-1-1 banquets-wrapper group">

					<h1 class="site-section-title h1 menu-options"><span>1</span>Menu Options</h1>

						<article class="module group banquets-copy">

							<div class="circle1"></div><div class="circle2"></div>

								<h1 style="text-align: center">Martell's Seabreeze Dinging Menu's</h1><br>
										
								<h4 style="text-align: center">Please Click Below to View Choices</h4><br>

								<a style="text-align: center" class="vip-links restaurant-menu-links" href="<?php bloginfo('stylesheet_directory'); ?>/pdfs/2013SeaBreezeLunchMenu.pdf">Sea Breeze Lunch Menu</a>
								<a style="text-align: center" class="vip-links restaurant-menu-links" href="<?php bloginfo('stylesheet_directory'); ?>/pdfs/2013SummerDinnerMenued.pdf">Sea Breeze Dinner Menu</a>
								<a style="text-align: center" class="vip-links restaurant-menu-links" href="#">Sea Breeze Theme Nights:</a>
								<a style="text-align: center" class="vip-links restaurant-menu-links" href="<?php bloginfo('stylesheet_directory'); ?>/pdfs/LobsterNight2013.pdf">Monday Lobster Night</a>
								<a style="text-align: center" class="vip-links restaurant-menu-links" href="<?php bloginfo('stylesheet_directory'); ?>/pdfs/CrabNight2013.pdf">Tuesday Crab Night</a>
								<a style="text-align: center" class="vip-links restaurant-menu-links" href="<?php bloginfo('stylesheet_directory'); ?>/pdfs/ShrimpNight2013.pdf">Wednesday Shrimp Night</a>
								<a style="text-align: center" class="vip-links restaurant-menu-links" href="<?php bloginfo('stylesheet_directory'); ?>/pdfs/PrimeRibNight2013.pdf">Thursday Prime Rib Night</a>

							<div class="circle3"></div><div class="circle4"></div>
							
						</article>

				</section> <!-- END Section WEDDING BANQUETS -->



				<section class="slogan grid-1-1 group">


		</div> <!-- END main-content-wrap -->

	</div> <!-- END main-bg -->


			</div> <!-- END GRID -->

		<?php get_footer(); ?>

			