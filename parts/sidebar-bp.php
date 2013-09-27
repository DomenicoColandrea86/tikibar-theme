			<div class="sidebar-wrap">

				<aside class="recent-pictures grid-1-2 group">

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

							<a href="<?php echo $slideImage[url]; ?>"><img src="<?php echo $slideImage[url]; ?>">

							<?php endwhile; ?>

				</aside> 


				<aside class="twitter-feed grid-1-2 group">

					<a href="https://twitter.com/MartellsTikiBar">
						<h1 class="site-section-title twitter-title"><span>L</span>Tiki Tweets</h1>
					</a>

						<div class="module-twitter group">

							<?php

							//Set parameter for query string

							$username = 'MartellsTikiBar';
							$num = '3';

							// Get the data from Twitter JSON API

							$json = wp_remote_get("http://api.twitter.com/1/statuses/user_timeline.json?screen_name=$username&count=$num");

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


				


			</div>