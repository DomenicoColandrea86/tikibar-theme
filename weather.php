<?php
/*
Template Name: Weather
*/

?>

<?php get_header(); ?>

	<div class="grid group">

		

		<section class="latest-news grid-1-1 single-blog-post">

			<h1 class="site-section-title weather-title h1"><span>&#36;</span><?php echo the_title(); ?></h1>

			<article class="module module-weather">
				<div class="opacity-circles sb-circle1"></div><div class="opacity-circles sb-circle2"></div>
				
				<div class="weather-wrap">
					
				<div id="weather"></div>

				<h3>Presented to you by Martell's Tiki Bar on <?php echo date('M d Y'); ?></h3>			
				</div>
				<div class="opacity-circles sb-circle3"></div><div class="opacity-circles sb-circle4"></div>
			</article>

		</section>

	</div> <!-- END main-content-wrap -->

	</div> <!-- END main-bg -->

	</div> <!-- END GRID -->


	<script>

$(document).ready(function() {
  $.simpleWeather({
    zipcode: '08742',
    woeid: '',
    location: '',
    unit: 'f',
    success: function(weather) {
      html = '<h2>'+weather.temp+'&deg;'+weather.units.temp+'</h2>';
      html += '<ul><li>'+weather.city+', '+weather.region+'</li>';
      html += '<li class="currently">'+weather.currently+'</li>';

  
      $("#weather").html(html);
    },
    error: function(error) {
      $("#weather").html('<p>'+error+'</p>');
    }
  });
});

	</script>

	<?php get_footer(); ?>
