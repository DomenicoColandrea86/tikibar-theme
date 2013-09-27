<?php
/*
Template Name: Banquets - Weddings - Cocktail
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

							<img class="banquets-deck-pic" src="<?php bloginfo('template_url'); ?>/images/cocktail-reception-header.jpg">

						<?php echo the_content();



						endwhile; endif; 

						wp_reset_query(); ?>



					<h2 style="text-align: center">Butler Style Hor d'oeuvres</h2>

					<h4 style="text-align: center">Please Select Six of the Following<br>
Passed for 2 Hours:</h4>

					<div class="grid-1-2 bbq-package">
						<h6 style="text-align: center">Crab Imperial</h6>
						<h6 style="text-align: center">Coconut Shrimp</h6>
						<h6 style="text-align: center">Shrimp Tempura</h6>
						<h6 style="text-align: center">Sesame Chicken</h6>
						<h6 style="text-align: center">Shrimp Canapé</h6>
						<h6 style="text-align: center">Tuna & Cucumber</h6>
						<h6 style="text-align: center">Carpaccio Canapé</h6>
						<h6 style="text-align: center">Scallops Wrapped In Bacon</h6>
						<h6 style="text-align: center">BBQ Shrimp Kabobs</h6>
						<h6 style="text-align: center">Smoked Salmon Canapés</h6>
						<h6 style="text-align: center">Crab Filled Mushrooms</h6>
						<h6 style="text-align: center">Petite Crab Cakes</h6>
						<h6 style="text-align: center">Filet Mignon On A Stick</h6>
						<h6 style="text-align: center">Maryland Crab Puffs </h6>
					</div><br>

					<h2 style="text-align: center">Additional Items Suggested</h2>

					<div class="grid-1-2 bbq-package">
						<h6 style="text-align: center">Carving Station</h6>
						<h6 style="text-align: center">Raw Bar By The Sea</h6>
						<h6 style="text-align: center">Pasta Station</h6>
						<h6 style="text-align: center">Viennese Table</h6>
						<h6 style="text-align: center">Ice Cream Bar</h6>
						<h6 style="text-align: center">Chocolate Fountain Table</h6>
						<h6 style="text-align: center">Tuna Sashimi</h6>
						<h6 style="text-align: center">Colossal Shrimp Cocktail</h6>
						<h6 style="text-align: center">Lollipop Lamb Chop</h6>
					</div><br>

					<h2 style="text-align: center">Accompaniments</h2>

					<div class="grid-1-2 bbq-package">
						<h6 style="text-align: center">Fresh Rolls & Butter</h6>
						<h6 style="text-align: center">Coffee, Tea & Brewed Decaf</h6><br><br>
						
					</div>

					<a style="text-align: center" class="vip-links" href="../banquets//">Back to Our Main Wedding Catering</a>

					</div>

					<div class="circle3"></div><div class="circle4"></div>

					</article><br>

				</section>

		</div> <!-- END main-content-wrap -->

	</div> <!-- END main-bg -->


			</div> <!-- END GRID -->

		<?php get_footer(); ?>

			