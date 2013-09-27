<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow">
	<?php } ?>
  <title><?php wp_title(''); ?></title>
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
  <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png">
  <?php
	  // e.g. jQuery
	  wp_head();
	?>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
  <link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Open+Sans:300italic,400,800,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<script>
 var _gaq = [['_setAccount', 'UA-41206446-1'], ['_trackPageview']];
 (function(d, t) {
  var g = d.createElement(t),
      s = d.getElementsByTagName(t)[0];
  g.async = true;
  g.src = '//www.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g, s);
 })(document, 'script');
</script>
</head>
<body <?php body_class("user-$user_ID"); ?>>
<?php include("parts/header.php"); ?>
	<div class="main-bg-wrap">
		<div class="main-content-wrap">