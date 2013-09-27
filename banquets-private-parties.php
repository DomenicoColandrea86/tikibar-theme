<?php
/*
Template Name: Banquets - Private Parties
*/

?>

<?php get_header(); ?>
<br>
	<div class="grid group"> <!-- Start Grid -->


					<section class="grid-1-1 group banquets-main-copy-wrap beach-main-copy-wrap">

						<h1 class="site-section-title private-title"><span>Q</span>Private Parties</h1>

					<article class="module banquets-copy">

					<div class="circle1"></div><div class="circle2"></div>

					<div class="banquets-copy-wrap group">

							<img class="banquets-deck-pic" src="<?php bloginfo('template_url'); ?>/images/private-parties-header.jpg">

					<?php if(have_posts()) : while (have_posts())	: the_post(); ?>	


					<div class="grid-1-2">
					<h1><?php echo the_title(); ?></h1>

					<p><?php echo the_content(); ?></p>					
					<h2>Please Click Below to View Choices</h2>
					<a class="vip-links" href="#">Surfside Buffet</a>
					<a class="vip-links" href="#">Beach View Buffet</a>
					<a class="vip-links" href="#">Ocean View Special Event</a>
					<a class="vip-links" href="#">Sea Breeze Special Event</a>

				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>

					<a class="vip-links" href="#">Special Event Cocktail Reception</a>



					</div>
					<div class="grid-1-2">

						<br><img class="banquets-deck-pic privat-pic-thumb" src="<?php bloginfo('template_url'); ?>/images/private-party-pic.png">

						<h1 style="text-align: center">Available Options for All Packages</h1><br>
						<h2 style="text-align: center">Please Click Below to View Choices</h2>
						<a style="text-align: center" class="vip-links" href="#">Available Options for All Packages</a>
						<h1 style="text-align: center">Catering Manager</h1>
						<h2 style="text-align: center">Jason Vonderlinden</h2>
						<h2 style="text-align: center">Tel: 732-892-0131</h2><br><br><br>


						<a style="text-align: center" class="vip-links" href="../banquets//">Back to Our Main Wedding Catering</a>


					</div>

					<div class="circle3"></div><div class="circle4"></div>

					</article><br>

				</section>

		</div> <!-- END main-content-wrap -->

	</div> <!-- END main-bg -->

			</div> <!-- END GRID -->

		<?php get_footer(); ?>

			