		<section class="latest-news grid-1-2 single-blog-post">

			<h1 class="site-section-title weather-title h1"><span>C</span>Tiki Tickets</h1>

			<article class="module ticket-module">
				<div class="sb-circle1"></div><div class="sb-circle2"></div>

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

						$todaysDate = date('Ymd');
						$args = array(
							'meta_value' => $todaysDate,
							'meta_compare' => '>',
							'meta_key' => 'date_of_event',
							'post_type' => 'events',
							'orderby' => 'date_of_event',
							'posts_per_page' => -1,
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

				</section> <!-- END Section Latest News -->


		<section class="recent-pictures grid-1-2 group">

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
