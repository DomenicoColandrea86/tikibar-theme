
<div class="sliderContainer fullWidth clearfix"> 

	<div id="full-width-slider" class="royalSlider heroSlider rsMinW">

		<?php

			$the_query = new WP_Query(array(
				'post_type' => 'main_slider',
				'posts_per_page' => -1
				));

			while ($the_query->have_posts()) :
				$the_query->the_post();
			
			?>

		<div class="rsContent">

			<?php $slide = get_field('slide_image'); ?>

			<img class="rsImg" src="<?php echo $slide[url]; ?>" alt="" />

		</div>

		<?php endwhile; ?>

	</div>

</div> 