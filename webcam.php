<?php
/*
Template Name: Web Cam
*/

?>

<script>

(function($) {

function ChangeMedia(){
	var d = new Date();
	var t = d.getTime();
	document.getElementById('camara').src = "http://www.tikibar.com/webcams/beach_1.jpg?"+t;
}
var reloadcam = setInterval("ChangeMedia()",30000);
-->

<!--
function ChangeMedia(){
	var d = new Date();
	var t = d.getTime();
	document.getElementById('camara').src = "http://www.tikibar.com/webcams/pier_1.jpg?"+t;
}
var reloadcam = setInterval("ChangeMedia()",30000);
-->

function ChangeMedia(){
	var d = new Date();
	var t = d.getTime();
	document.getElementById('camara').src = "http://www.tikibar.com/webcams/beachbar_1.jpg?"+t;
}
var reloadcam = setInterval("ChangeMedia()",30000);

function ChangeMedia(){
	var d = new Date();
	var t = d.getTime();
	document.getElementById('camara').src = "http://www.tikibar.com/webcams/tikibar_1.jpg?"+t;
}
var reloadcam = setInterval("ChangeMedia()",30000);

});


</script>

<?php get_header(); ?>

	<div class="grid group">

		

		<section class="latest-news grid-1-2 single-blog-post">

			<h1 class="site-section-title latest-news-title webcam-title h1"><span>q</span>Live Feed</h1>

			<article class="module">
				<div class="sb-circle1"></div><div class="sb-circle2"></div>
				
				<div class="webcam-wrap">
					<h2>Martell's Pier Cam</h2>
				<img src="http://www.tikibar.com/webcams/pier_1.jpg?" name="camara" id="camara">
				</div>
				

				<div class="webcam-wrap">
					<h2>Live Beach Cam</h2>
				<img src="http://www.tikibar.com/webcams/beach_1.jpg?" name="camara" id="camara">
				</div>


				<div class="webcam-wrap">
					<h2>Live Beach Bar Cam</h2>
				<img src="http://www.tikibar.com/webcams/beachbar_1.jpg?" name="camara" id="camara">
				</div>


				<div class="webcam-wrap">
					<h2>Live Tiki Bar Cam</h2>
				<img src="http://www.tikibar.com/webcams/tikibar_1.jpg?" name="camara" id="camara">
				</div>


				<div class="sb-circle3"></div><div class="sb-circle4"></div>
			</article>

		</section>

			<aside class="twitter-feed-new grid-1-2 group">

					<a href="https://twitter.com/MartellsTikiBar">
						<h1 class="site-section-title twitter-title twitter-widget-title"><span class="tweet">L</span>Tiki Tweets</h1>
					</a>

						<div class="module-twitter group">

							<?php

							//Set parameter for query string

							$username = 'MartellsTikiBar';
							$num = '5';

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

				<aside class="recent-pictures grid-1-2 group"><br><br>

					<h1 class="site-section-title recent-pics-title"><span>p</span>Tiki Flix</h1>

						<div class="module-gallery group photo-grid">

							<?php

							$the_query = new WP_Query(array(
								'post_type' => 'gallery',
								'posts_per_page' => 4
								));

							while ($the_query->have_posts()) :
								$the_query->the_post();
							
							?>

							 <?php $slideImage = get_field('image'); ?>

							<a href="<?php echo $slideImage[url]; ?>"><img src="<?php echo $slideImage[url]; ?>">

							<?php endwhile; ?>

				</aside> 

	</div> <!-- END main-content-wrap -->

	</div> <!-- END main-bg -->

	</div> <!-- END GRID -->

	<?php get_footer(); ?>
