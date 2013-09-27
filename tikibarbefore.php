<?php
/*
Template Name: Tiki Bar Page
*/

?>

<?php get_header(); ?>
<br>
	<div class="grid group"> <!-- Start Grid -->


					<section class="grid-1-1 group tikibar-copy-wrap">

						<h1 class="site-section-title tikibar-title"><span>K</span>MARTELL'S TIKI BAR</h1>

					<article class="module tikibar-copy">

					<div class="circle1"></div><div class="circle2"></div>

					<div class="tiki-copy-wrap group">

							<img class="tiki-deck-pic" src="<?php bloginfo('template_url'); ?>/images/tikibar_page-header1.jpg">

						<?php

						if (have_posts()) : while (have_posts()) : the_post(); ?>

					<p><?php echo the_content(); ?></p>
					

					<?php endwhile; endif; ?>

					<?php wp_reset_query() ?>

					</div>

					<div class="circle3"></div><div class="circle4"></div>

					</article>

				</section>

		<section class="tiki-section grid-1-2 single-blog-post">

			<h1 class="site-section-title tickets-title h1"><span>C</span>Tiki Tickets</h1>

			<article class="module ticket-module">
				<div class="sb-circle1"></div><div class="sb-circle2"></div>

				<img class="tiki-deck-pic" src="<?php bloginfo('template_url'); ?>/images/tickets-header.jpg">

				<h1>Online Ticket Purchases</h1>

				<br><h2>Martell's Tiki Bar Offers Online Ticket Purchases for Upcoming Special Events</h2>

				<br><p>If you want to make sure that you have tickets, or don't want to wait in line for ticket sales the day of an event, you can order them securely, in advance, here and have them sent to you via registered mail with our On-line Ticket Sales form below.</p>

				<p>Just choose the event and its date, continue on with our secure purchasing system and once finalized and ordered prior to 7 days of the event, you will receive your tickets via US Postal Mail. Unless otherwise specified below orders placed within 7 days of event are subject to tickets being held on reserve at Martell's Tiki Bar.</p>
				<div class="sb-circle3"></div><div class="sb-circle4"></div>
			</article>

		</section>


				<section class="latest-news grid-1-2 events-wrapper">

					<h1 class="site-section-title h1 events-title"><span>P</span>Events</h1>

						<article class="module group">

							<div class="circle1"></div><div class="circle2"></div>

						<?php

						$todaysDate = date('Ymd',time() - 43200);
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

						<?php wp_reset_query(); ?>

							<a href="../events-calendar/" class="calendar-link">Click Here to see our Event Calendar &rarr;</a>

							<div class="circle3"></div><div class="circle4"></div>
							
						</article>
						<br><br>
				</section> <!-- END Section Latest News -->


		<section class="recent-pictures vip-cards-section grid-1-1 group">

		<h1 class="site-section-title recent-pics-title vip-card-wrap"><span>7</span>VIP Cards</h1>

		<div class="module-vip vip-card group">

			<h1>Martell's Tiki Bar Platinum Cards</h1>

			<img class="tiki-deck-pic2" src="<?php bloginfo('template_url'); ?>/images/vipcard-2.jpg">

			<h2>Convenience of Cash - Security of a Credit Card</h2>

			<p>When you obtain a Martell's Tiki Bar Platinum Card, the funds placed on your Platinum Card account may be utilized to purchase food, beverages, tickets and merchandise offered by Martell’s Sea Breeze, Inc. We will provide you with a quarterly statement reflecting purchases made, any applicable discount, and your balance. The Platinum Card may not be utilized at the Beach Bar. All privileges extended with this card will be suspended upon depletion of your account and will be reactivated when additional funds are placed on the account.</p>
			
			<h2>10% DISCOUNT</h2>

			<p>When your card is utilized for payment of regularly priced food and/or beverages, you will receive a 10% discount on the same.</p>
			
			<h2>CLUB COURTESY</h2>
			
			<p>If a line forms to enter the Tiki Bar, Platinum Cardholders may proceed to the front of the line. The cardholder may bring three non-cardholder guests to the front of the line. Cover charge will be waived as to the cardholder. Club courtesy does not apply on dates of specialty events.</p>
			
			<h2>Please View, Print and Return the following Documents</h2><br>
			
			<a class="vip-links" href="http://www.tikibar.com/pdf_files/2013_platinum_card_open_balance.pdf">2013 Platinum Card Open Balance Form</a>
			
			<a class="vip-links" href="http://www.tikibar.com/pdf_files/2013_platinum_card_application.pdf">2013 Platinum Card Application Form</a>
			
			<a class="vip-links" href="http://www.tikibar.com/pdf_files/2013_platinum_contract.pdf">2013 Platinum Card Agreement</a><br>
		
		</div>

	</section> 

			<section class="recent-pictures vip-cards-section grid-1-1 group">

		<h1 class="site-section-title recent-pics-title gift-card-wrap"><span>w</span>Gift Cards</h1>

		<div class="module-vip vip-card group">

			<h1>Tiki Bar Gift Cards!!</h1>

			<h2>A Great Way to Say the Next One's On Me!!</h2>

			<p>Looking to give the perfect gift that will never go unused, always be appreciated and be guaranteed fun while using it?? The Martell's Tiki Bar Gift Card!!!</p>
			
			<h2>* Makes a Great Gift Anytime! *</h2>

			<p>For yourself, family, friends or co-workers, the Martell's Tiki Bar Gift Card will be good to use for food & drinks thru-out the Tiki Bar.</p>
			
			<p>Your Martell's Tiki Bar Gift Card will be sent to you with the credited amount specified by your purchases below.</p>
			
			<p>If a line forms to enter the Tiki Bar, Platinum Cardholders may proceed to the front of the line. The cardholder may bring three non-cardholder guests to the front of the line. Cover charge will be waived as to the cardholder. Club courtesy does not apply on dates of specialty events.</p>
			
			<h3 style="color: gray">PLEASE NOTE:</h3>
			<p>For Special Holiday Rush Gift Orders, we ask you to
contact us directly at: 732-892-0131 to offer EXPRESS SHIPPING</p>
			
			<h2>Martell's Tiki Bar Gift Cards</h2>
			<p><strong>Your Martell's Tiki Bar Gift Card(s) will be sent to you with the credited amount specified at your purchase</strong></p>
	<br>
			<form id="giftcard-form" class="giftcard-form" method=post action="https://www.cart32hostingred.com/cgi-bin/cart32.exe/MARTELLSTIKIBAR-AddItem">
				<font size=+1><b>$25 gift card</b><br><br>
				<input type="hidden" name="item" value="$25 gift card" />
				Qty: <input type=text name="Qty" value="1" size=3 />
				<b>Price: $25.00</b>
				<input type="hidden" name="Price" value="25.00" />
				<br>
				<br><input type=submit value="Add to Shopping Cart" /><br>
			</form>

			<form method=post action="https://www.cart32hostingred.com/cgi-bin/cart32.exe/MARTELLSTIKIBAR-AddItem">
				<font size=+1><b>$50 gift card</b><br><br>
				<input type="hidden" name="item" value="$50 gift card" />
				Qty: <input type=text name="Qty" value="1" size=3 />
				<b>Price: $50.00</b>
				<input type="hidden" name="Price" value="50.00" />
				<br>
				<br><input type=submit value="Add to Shopping Cart" /><br>
			</form>

			<form method=post action="https://www.cart32hostingred.com/cgi-bin/cart32.exe/MARTELLSTIKIBAR-AddItem">
				<font size=+1><b>$100 gift card</b><br><br>
				<input type="hidden" name="item" value="$100 gift card" />
				Qty: <input type=text name="Qty" value="1" size=3 />
				<b>Price: $100.00</b>
				<input type="hidden" name="Price" value="100.00" />
				<br>
				<br><input type=submit value="Add to Shopping Cart" /><br><br>
			</form>

		</div>

	</section> 


<aside class="twitter-feed grid-1-1 group">

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



				<section class="slogan grid-1-1 group">




		</div> <!-- END main-content-wrap -->

	</div> <!-- END main-bg -->


			</div> <!-- END GRID -->

		<?php get_footer(); ?>

			