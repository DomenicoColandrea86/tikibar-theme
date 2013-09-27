<?php
/*
Template Name: Privacy Policy
*/

?>

<?php get_header(); ?>

	<div class="grid group">

		

		<section class="latest-news grid-1-1 single-blog-post">

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

			<h1 class="site-section-title latest-news-title tiki-treats-title h1"><span>&#36;</span><?php echo the_title(); ?></h1>

			<article class="module">
				<div class="sb-circle1"></div><div class="sb-circle2"></div>
				
				<div class="contact-form-tiki">

				<?php echo the_content(); ?>
				
				</div>
				<div class="sb-circle3"></div><div class="sb-circle4"></div>
			</article>

		</section>

	<?php endwhile; endif; ?>

	</div> <!-- END main-content-wrap -->

	</div> <!-- END main-bg -->

	</div> <!-- END GRID -->

	<?php get_footer(); ?>
