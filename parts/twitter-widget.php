<aside class="twitter-feed grid-1-2 group">

					<a href="https://twitter.com/MartellsTikiBar">
						<h1 class="site-section-title twitter-widget-title"><span>L</span>Tiki Tweets</h1>
					</a>

						<div class="module-twitter group">

							<?php

							//Set parameter for query string

							$username = 'MartellsTikiBar';
							$num = '4';

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