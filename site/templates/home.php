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
			<iframe id="forecast_embed" type="text/html" frameborder="0" height="230" width="100%" src="https://forecast.io/embed/#lat=44.948296&lon=-93.306305&name=Uptown, Minneapolis"> </iframe>
		</section>
  </main>
  
<script type="text/javascript">
    var feed = new Instafeed({
		get: 'user',
		userId: 1599521991,
        accessToken: '1599521991.e379b40.f12fd0cb846f4393a052b8d6d31c1bd3',
        clientId: 'e379b40ed45447b5bc829847ec2fdbe2',
        resolution: 'standard_resolution',
        limit: 4,
    });
    feed.run();
</script>

<?php snippet('footer') ?>
