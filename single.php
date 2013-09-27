<?php get_header(); ?>

	<div class="grid group">

		

		<section class="latest-news grid-1-1 single-blog-post">

			<h1 class="site-section-title latest-news-title h1"><span>9</span>Latest News</h1>

			<?php the_post(); ?>

			<article class="module" id="post-<?php the_ID(); ?>">
				<div class="sb-circle1"></div><div class="sb-circle2"></div>
				<h2 class="single-bp"><?php the_title(); ?></h2>

				<time date-time="<?php the_time('Y-m-d'); ?>"><?php the_time('F j, Y'); ?></time>

				<p><?php the_content(); ?></p>
				<div class="sb-circle3"></div><div class="sb-circle4"></div>
			</article>

		</section>

			<div class="sidebar-wrap">




				


			</div>

		<section class="slogan grid-1-1 group">

			<article class="module slogan-mod">
				<div class="circle1"></div><div class="circle2"></div>


				<a href="/"><h2 class="h2-slogan">&larr; Back to the Homepage</h2></a>
				<div class="sb-circle3"></div><div class="sb-circle4"></div>
			</article>

		</section>

	</div> <!-- END main-content-wrap -->

	</div> <!-- END main-bg -->

	</div> <!-- END GRID -->

	<?php get_footer(); ?>
