<?php
/*
Template Name: Banquets - Holiday Parties
*/

?>

<?php get_header(); ?>
<br>
	<div class="grid group"> <!-- Start Grid -->


					<section class="grid-1-1 group banquets-main-copy-wrap beach-main-copy-wrap">

						<h1 class="site-section-title private-title"><span>Q</span>Holiday Parties</h1>

					<article class="module banquets-copy">

					<div class="circle1"></div><div class="circle2"></div>

					<div class="banquets-copy-wrap group">

							<img class="banquets-deck-pic" src="<?php bloginfo('template_url'); ?>/images/banquets-holiday-parties-header.jpg">


					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

					<div class="grid-1-2">
					<h1><?php echo the_title(); ?></h1>
					
					<p><?php echo the_content(); ?></p>

				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>

					</div>
					<div class="grid-1-2">

						<br><img class="banquets-deck-pic privat-pic-thumb" src="<?php bloginfo('template_url'); ?>/images/holiday-party-networking-tips.jpg">
						<h1 style="text-align: center">Catering Manager</h1>
						<h2 style="text-align: center">Jason Vonderlinden</h2>
						<h2 style="text-align: center">Tel: 732-892-0131</h2><br><br>


						<a style="text-align: center" class="vip-links" href="../banquets//">Back to Our Main Wedding Catering</a>


					</div>

					<div class="circle3"></div><div class="circle4"></div>

					</article><br>

				</section>

		</div> <!-- END main-content-wrap -->

	</div> <!-- END main-bg -->

			</div> <!-- END GRID -->

		<?php get_footer(); ?>

			