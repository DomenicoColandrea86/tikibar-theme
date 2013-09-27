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