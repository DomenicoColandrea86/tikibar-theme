<?php
/*
Template Name: Events Calendar
*/

?>

<?php get_header(); ?>

	<div class="grid group">

		

		<section class="latest-news grid-1-1 single-blog-post">

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

			<h1 class="site-section-title calendar-title h1"><span>P</span><?php echo the_title(); ?></h1>

			<article class="module">
				<div class="sb-circle1"></div><div class="sb-circle2"></div>
				
				<!-- Responsive iFrame -->
				<div class="responsive-iframe-container">

<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showTabs=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=martellstikibardavanti%40gmail.com&amp;color=%23182C57&amp;ctz=America%2FNew_York" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe>				</div>

				<?php echo the_content(); ?>
				
				<div class="sb-circle3"></div><div class="sb-circle4"></div>
			</article>

		</section>

	<?php endwhile; endif; ?>

	</div> <!-- END main-content-wrap -->

	</div> <!-- END main-bg -->

	</div> <!-- END GRID -->

	<?php get_footer(); ?>


