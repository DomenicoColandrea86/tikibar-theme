<?php get_header(); ?>

<?php include("parts/slider.php"); ?>

	<div class="grid group"> <!-- Start Grid -->

				<section class="latest-news grid-2-3">

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

	<aside class="recent-pictures grid-1-3 group">

					<h1 class="site-section-title recent-pics-title"><span>p</span>Tiki Flix</h1>

						<div class="module-gallery group photo-grid">

							<?php

							$the_query = new WP_Query(array(
								'post_type' => 'gallery',
								'posts_per_page' => 6
								));

							while ($the_query->have_posts()) :
								$the_query->the_post();
							
							?>

							 <?php $slideImage = get_field('image'); ?>

							<a href="<?php echo $slideImage[url]; ?>" class="colorbox-effect"><img src="<?php echo $slideImage[url]; ?>">

							<?php endwhile; ?>

					</div>
					<br>

				</aside> 


				<aside class="twitter-feed grid-1-3 group">

					<a href="https://twitter.com/MartellsTikiBar">
						<h1 class="site-section-title twitter-title"><span>L</span>Tiki Tweets</h1>
					</a>

						<div class="module-twitter group">

							<?php

							//Set parameter for query string

							$username = 'd_colandrea'; //'MartellsTikiBar';
							$num = '4';

							// Get the data from Twitter JSON API

							$json = wp_remote_get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=$username&count=$num");

							// Decode JSON into array

							$data = json_decode($json['body'], true);

							//Create unordered list

							?>
							<div class="twitter-wrapper">

							<?php

							echo '
							<ul class="twitter">';

							//Loop through all twitter tweets and display the text with the time it was created

							foreach($data as $tweets){
								$text = $tweets['text'];
								$date = $tweets['created_at'];

								//Make time human readable ie. 6 hours ago

								echo '
							<a href="https://twitter.com/MartellsTikiBar"><span>@MartellsTikiBar</span></a><li>'.$text . ' '. $h_time . '</li>
							';
							}

							//Close list

							echo '</ul>
							';

							?>

						</div>

				</aside> 

				<section class="slogan grid-1-1 group">
					<article class="module slogan-mod">
						<div class="slogan-circle1"></div><div class="slogan-circle2"></div>

						<h2 class="h2-slogan">Come and have the time of your life!</h2>

						<div class="slogan-circle3"></div><div class="slogan-circle4"></div>
					</article>
				</section>

		</div> <!-- END main-content-wrap -->

	</div> <!-- END main-bg -->

<?php include("parts/bottom-box-fix.php"); ?>


			</div> <!-- END GRID -->

		<?php get_footer(); ?>

			