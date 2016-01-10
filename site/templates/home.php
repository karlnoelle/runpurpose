<?php snippet('header') ?>

  <main class="main" role="main">
		<section class="wrapper">
			<div class="text">
			<h1 class="headline"><?php echo $page->headline()->kirbytext() ?></h1>
			<?php echo $page->text()->kirbytext() ?>
			</div>
			
			<?php snippet('3col') ?>
			
			<h2>Recent Events</h2>
			<p>Check out the <a href="events">events page</a> for more pics.</p>
			<article id="instafeed"></article>
			<h2>Running today? Check the weather!</h2>
			<iframe id="forecast_embed" type="text/html" frameborder="0" height="230" width="100%" src="http://forecast.io/embed/#lat=44.948296&lon=-93.306305&name=Uptown, Minneapolis"> </iframe>
		</section>
  </main>
  
<script type="text/javascript">
    var feed = new Instafeed({
        get: 'tagged',
        tagName: 'runpurpose',
        clientId: '0e2b5338a30748f09486203825c5b8a7',
        resolution: 'low_resolution',
        limit: 4,
    });
    feed.run();
</script>

<?php snippet('footer') ?>