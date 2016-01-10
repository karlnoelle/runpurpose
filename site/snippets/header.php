<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="icon" href="favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-114.png" />
	
	<script>document.documentElement.className += ' wf-loading';</script>
	
	<title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
	<meta name="description" content="<?php echo $site->description()->html() ?>">
	<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
	
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		ga('create', 'UA-16197147-7', 'auto');
		ga('send', 'pageview');
	</script>

	<!-- SEA ESS ESS -->
	<?php echo css('assets/css/main.css') ?>
	<?php echo css ('assets/css/responsive-nav.css') ?>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  
	<!-- J A V A S C R I P T -->
	<?php echo js('assets/js/instafeed.min.js') ?>
	<?php echo js('assets/js/responsive-nav.min.js') ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

</head>
<body>

	<header class="header cf" role="banner">
		<section class="wrapper">
			<a class="logo" href="<?php echo url() ?>">
			<img src="<?php echo url('assets/images/runpurpose-logo.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
			</a>
			<?php snippet('menu') ?>
		</section>
	</header>