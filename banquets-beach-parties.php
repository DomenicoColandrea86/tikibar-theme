<?php
/*
Template Name: Banquets - Beach Parties
*/

?>

<?php get_header(); ?>
<br>
	<div class="grid group"> <!-- Start Grid -->


					<section class="grid-1-1 group banquets-main-copy-wrap beach-main-copy-wrap">

						<h1 class="site-section-title beach-title"><span>Q</span>Beach Parties</h1>

					<article class="module banquets-copy">

					<div class="circle1"></div><div class="circle2"></div>

					<div class="banquets-copy-wrap group">

							<img class="banquets-deck-pic" src="<?php bloginfo('template_url'); ?>/images/beach-header.jpg">


												<?php

					if (have_posts()) : while (have_posts()) : the_post(); ?>


					<div class="grid-1-2">
					<h1><?php echo the_title(); ?></h1>

					<p><?php echo the_content(); ?></p>

					<?php endwhile; endif; ?>

					<?php wp_reset_query() ?>

					</div>
					<div class="grid-1-2">

						<img class="banquets-deck-pic" src="<?php bloginfo('template_url'); ?>/images/martells-outside.jpg">

						<h1 style="text-align: center">Private Beach Parties</h1>
						<h2 style="text-align: center">Available Tuesday thru Friday Only</h2>
						<h2 style="text-align: center">Minimum 50 People • Entertainment Available</h2>
						<h6 style="text-align: center">See Our Available Beach Party Packages Below</h6><br>
					</div>
					<div class="grid-1-2 bbq-package">
						<h4 style="text-align: center">BBQ Package</h4>
						<h6 style="text-align: center">BBQ Chicken</h6>
						<h6 style="text-align: center">Hot Dogs</h6>
						<h6 style="text-align: center">Cheeseburgers</h6>
						<h6 style="text-align: center">Steamed and Seasoned Clams</h6>
						<h6 style="text-align: center">Corn on the Cobb</h6>
						<h6 style="text-align: center">Potato Salad</h6>
						<h6 style="text-align: center">Tri-Colored Pasta Salad</h6>
					</div>
					<div class="grid-1-2 bbq-package">
						<h4 style="text-align: center">BBQ -N- RIBS PACKAGE</h4>
						<h6 style="text-align: center">BBQ Chicken</h6>
						<h6 style="text-align: center">BBQ Ribs</h6>
						<h6 style="text-align: center">Hot Dogs</h6>
						<h6 style="text-align: center">Cheeseburgers</h6>
						<h6 style="text-align: center">Steamed and Seasoned Clams</h6>
						<h6 style="text-align: center">Corn on the Cobb</h6>
						<h6 style="text-align: center">Potato Salad</h6>
						<h6 style="text-align: center">Tri-Colored Pasta Salad</h6>
					</div>

					<div class="grid-1-2 bbq-package">
						<h4 style="text-align: center">BBQ-N-SHRIMP PACKAGE</h4>
						<h6 style="text-align: center">BBQ Chicken</h6>
						<h6 style="text-align: center">BBQ Ribs</h6>
						<h6 style="text-align: center">Shrimp U-Peel</h6>
						<h6 style="text-align: center">Hot Dogs</h6>
						<h6 style="text-align: center">Cheese Burgers</h6>
						<h6 style="text-align: center">Steamed and Seasoned Clams</h6>
						<h6 style="text-align: center">Corn on the Cobb</h6>
						<h6 style="text-align: center">Potato Salad</h6>
					</div>

					<div class="grid-1-2 bbq-package">
						<h4 style="text-align: center">ULTIMATE BBQ PACKAG4</h4>
						<h6 style="text-align: center">BBQ Chicken</h6>
						<h6 style="text-align: center">BBQ Ribs</h6>
						<h6 style="text-align: center">Shrimp U-Peel</h6>
						<h6 style="text-align: center">Hot Dogs</h6>
						<h6 style="text-align: center">Cheese Burgers</h6>
						<h6 style="text-align: center">Steamed and Seasoned Clams</h6>
						<h6 style="text-align: center">Corn on the Cobb</h6>
						<h6 style="text-align: center">Potato Salad</h6>
					</div>

					<div class="grid-1-2 bbq-package">
						<h4 style="text-align: center">BEACH BAR</h4>
						<h6 style="text-align: center">Four Hour - Beer, Wine & Soda</h6>
						<h6 style="text-align: center">Four Hour Open Bar</h6>
						<h6 style="text-align: center">Import & Domestic Bottled Beer</h6>
						<h6 style="text-align: center">Draught Beer</h6>
						<h6 style="text-align: center">Specialty Drinks</h6>
						<h6 style="text-align: center">Frozen Drinks</h6>
					</div>

					<div class="grid-1-2 bbq-package">
						<h4 style="text-align: center">ADD-ONS PACKAGES</h4>
						<h6 style="text-align: center">Add a Roast Pig or Kabobs (Chicken or Veggie) to Any Package</h6>
						<h6 style="text-align: center">Add a Raw Bar to Any Package</h6>
						<h6 style="text-align: center">Clams ½ Shell • Oysters ½ Shell • Shrimp U Peel</h6>
						<h6 style="text-align: center">Add a 1 Lb. Lobster to Any Package</h6>
						<h6 style="text-align: center">Market Price</h6><br><br><br>
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

			