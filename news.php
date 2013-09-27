<?php
/*
Template Name: News Page
*/

?>

<?php get_header(); ?>
<br><br>
	<div class="grid group"> <!-- Start Grid -->


					


					<div class="tiki-copy-wrap group">

							<img class="tiki-deck-pic girls-pic" src="<?php bloginfo('template_url'); ?>/images/tikibar_page-header.jpg"><br>

						<?php

						if (have_posts()) : while (have_posts()) : the_post(); ?>

					<p><?php echo the_content(); ?></p>
					

					<?php endwhile; endif; ?>

					<?php wp_reset_query() ?>

					</div>

					

					</article>

				</section>



				<section class="latest-news grid-1-2">

					<h1 class="site-section-title latest-news-title h1"><span>9</span>Latest News</h1>

					<?php $i = 1; query_posts('posts_per_page=3');

					if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article class="module" id="post-<?php the_ID(); ?>">
							<div class="circle1"></div><div class="circle2"></div>

							<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

								<time date-time="<?php the_time('Y-m-d'); ?>"><?php the_time('F j, Y'); ?></time>

								<p><?php the_excerpt(); ?></p>

							<a href="<?php the_permalink() ?>"><span class="read-more">Read Article &rarr;</span></a>
							<div class="circle3"></div><div class="circle4"></div>
						</article>

					<?php endwhile; endif; ?>

					<?php wp_reset_query() ?>

				</section> <!-- END Section Latest News -->

				<section class="latest-news grid-1-2 events-wrapper">

					<h1 class="site-section-title h1 events-title"><span>P</span>Events</h1>

						<article class="module group">

							<div class="circle1"></div><div class="circle2"></div>

						<?php

						$todaysDate = date('Ymd');
						$args = array(
							'meta_value' => $todaysDate,
							'meta_compare' => '>',
							'meta_key' => 'date_of_event',
							'post_type' => 'events',
							'orderby' => 'date_of_event',
							'posts_per_page' => 2,
							'order' => 'ASC',
							);
						query_posts( $args );

						while (have_posts()) : the_post();
						
						?>

							<div class="event-slot">

								<?php $eventDate = get_field('date_of_event'); ?>						
								<?php $date = DateTime::createFromFormat('Ymd', get_field('date_of_event')); ?>

								<h2><?php echo $date->format('F j Y'); ?><!-- <span>th</span> --></h2>

								<?php $eventTown = get_field('town_and_state'); ?>

								<h3><?php echo $eventTown ?></h3>

								<?php $eventVenue = get_field('venue'); ?>

								<h4>@<?php echo $eventVenue ?></h4>

								<?php $eventThumb = get_field('event_image'); ?>

									<div class="events-image">

										<img src="<?php echo $eventThumb[url]; ?>">

									</div>

									<?php $eventName1= get_field('name_of_event'); ?>

									<?php $eventTime1= get_field('time_of_event'); ?>

									<ul>

										<li><strong><?php echo $eventName1 ?></strong><span> @ </span><?php echo $eventTime1 ?></li>

									<?php $eventName2= get_field('name_of_second_event'); ?>

									<?php $eventTime2= get_field('time_of_second_event'); ?>

										<li><strong><?php echo $eventName2 ?></strong><span> @ </span><?php echo $eventTime2 ?></li>

									</ul>

							</div> <!-- END # EVENT -->

						<?php endwhile; ?>

						<a href="../events-calendar/" class="calendar-link">Click Here to see our Event Calendar &rarr;</a>

							<div class="circle3"></div><div class="circle4"></div>
							
						</article><br>

				</section> 
				<!-- END Section Latest News -->

				<?php get_sidebar(); ?>



		</div> <!-- END main-content-wrap -->

	</div> <!-- END main-bg -->


			</div> <!-- END GRID -->

		<?php get_footer(); ?>

			