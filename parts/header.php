

<header>

<div class="social">

		<a href="https://www.facebook.com/pages/Martells-Tiki-Bar-Pt-Pleasant/135937939841644" target="_blank" class="fb">
    	<span data-icon="F" aria-hidden="true" class="fb-icon"></span>
    	<img src="<?php bloginfo('template_url'); ?>/images/social-box.png" class="social-box box-1">
    </a>
    <a href="https://twitter.com/MartellsTikiBar" target="_blank" class="twitter">
    	<span data-icon="O" aria-hidden="true"></span>
    	<img src="<?php bloginfo('template_url'); ?>/images/social-box.png" class="social-box box-2">
    </a>
    <a href="http://www.youtube.com/user/MartellsTikiBar" target="_blank" class="youtube">
    	<span data-icon="X" aria-hidden="true"></span>
    	<img src="<?php bloginfo('template_url'); ?>/images/social-box.png" class="social-box box-3">
    </a>
    <div class="rope-pic">
	    <img src="<?php bloginfo('template_url'); ?>/images/rope.png" class="rope">
	  </div>
	</div>

	<div class="logo">
		<a href="/">
			<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="main logo">
		</a>
	</div>

<nav class="main-nav" id="main-nav">
	<ul>
		<li><a href="/" class="home">Home</a></li>
		<li><a href="../tiki-bar/" class="tiki-bar">Tiki Bar</a></li>
		<li><a href="../seabreeze-dining/" id="seabreeze-anchor" class="seabreeze">SeaBreeze Dining</a>
			<ul id="the-stuff" class="hide-it">
				<li><a href="http://tikibar.com/wp-content/themes/tikibar%20v1/pdfs/2013SeaBreezeLunchMenu.pdf" class="sub-menu">Lunch Menu</a></li>
				<li><a href="http://tikibar.com/wp-content/themes/tikibar%20v1/pdfs/2013SummerDinnerMenued.pdf" class="sub-menu">Dinner Menu</a></li>
				<li><a href="#" id="theme-night-anchor" class="sub-menu">Theme Nights</a>
					<ul id="theme-night-menu" class="hide-it">
						<li><a href="http://tikibar.com/wp-content/themes/tikibar%20v1/pdfs/LobsterNight2013.pdf" class="sub-menu">Mon. Lobster Night</a></li>
						<li><a href="http://tikibar.com/wp-content/themes/tikibar%20v1/pdfs/CrabNight2013.pdf" class="sub-menu">Tues. Crab Night</a></li>
						<li><a href="http://tikibar.com/wp-content/themes/tikibar%20v1/pdfs/ShrimpNight2013.pdf" class="sub-menu">Wed. Shrimp Night</a></li>
						<li><a href="http://tikibar.com/wp-content/themes/tikibar%20v1/pdfs/PrimeRibNight2013.pdf" class="sub-menu">Thurs. Prime Rib Night</a></li>
					</ul>
				</li>
			</li>
			</ul>
		</li>
		<li><a href="../banquets/" class="banquets">Banquets</a></li>
		<li><a href="../news/" class="news">News</a></li>
	</ul>
</nav>

			<div class="mobile-menu-wrapper">
    <div id="top">
	    <div class="block">
	        <h1 class="block-title">NAVIGATION</h1>
	        <a class="nav-btn" id="nav-open-btn" href="#nav"><span>i</span></a>
	    </div>
	  </div>

	    <nav id="nav" role="navigation">
	        <div class="block">
	            <h2 class="block-title">Chapters</h2>
	            <ul>
	                <li>
	                    <a href="/">HOME</a>
	                </li><!--
	             --><li>
	                    <a href="../tiki-bar/">TIKI BAR</a>
	                </li><!--
	             --><li>
	                    <a href="../seabreeze-dining/">SEA BREEZE DINING</a>
	                </li>
	                <li>
	                    <a href="../sea-breeze-dining-appetizers/">-Appetizers menu</a>
	                </li>
	                <li>
	                    <a href="../seafood/">-Seafood Menu</a>
	                </li>
	                <li>
	                    <a href="../grill/">-Dinner Menu</a>
	                </li>
	                <li>
	                    <a href="../bistro/">-Bistro</a>
	                </li>
		             <li>
		             <li>
	                    <a href="../banquets/">BANQUETS</a>
	                </li><!--
	             --><li>
	                    <a href="../news/">LATEST NEWS</a>
	                </li>
	             		<li>
	                    <a href="../weather/">WEATHER</a>
	                </li>
	             		<li>
	                    <a href="../events-calendar/">EVENTS</a>
	                </li>
	             		<li>
	                    <a href="http://martellstikitreats.com/">TIKI TREATS</a>
	                </li>
	             		<li>
	                    <a href="../web-cam/">WEBCAMS</a>
	                </li>
	             		<li>
	                    <a href="../contact-us/">CONTACT US</a>
	                </li>
	             		<li>
	                    <a href="../employment/">EMPLOYMENT</a>
	                </li>
	             		<li>
	                    <a href="../hours/">HOURS OF OP</a>
	                </li>
	             		<li>
	                    <a href="../privacy-policy/">PRIVACY POLICY</a>
	                </li>
	             		<li>
	                    <a href="https://www.facebook.com/pages/Martells-Tiki-Bar-Pt-Pleasant/135937939841644">FACEBOOK</a>
	                </li>
	               	<li>
	                    <a href="https://twitter.com/MartellsTikiBar">TWITTER</a>
	                </li>
	                	               	<li>
	                    <a href="http://www.youtube.com/user/MartellsTikiBar">YOU TUBE</a>
	                </li>
	            </ul>
	            <a class="close-btn" id="nav-close-btn" href="#top">Return to Content</a>
	        </div>
	    </nav>
	    </div>
</header>

<script type="text/javascript">
$('#seabreeze-anchor').mouseover(function() {
		$('#the-stuff').removeClass('hide-it');
    $('#the-stuff').addClass('show-it');
});

$('#seabreeze-anchor' && '#the-stuff').mouseout(function() {
		$('#the-stuff').removeClass('show-it');
    $('#the-stuff').addClass('hide-it');
});

$('#the-stuff').mouseover(function() {
		$('#the-stuff').removeClass('hide-it');
    $('#the-stuff').addClass('show-it');
});

$('#theme-night-anchor').mouseover(function() {
		$('#theme-night-menu').removeClass('hide-it');
    $('#theme-night-menu').addClass('show-it');
});

$('theme-night-anchor').mouseout(function() {
		$('#theme-night-menu').removeClass('show-it');
    $('#theme-night-menu').addClass('hide-it');
});

</script>
