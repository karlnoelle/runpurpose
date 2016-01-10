<?php snippet('header') ?>

<main class="main" role="main">
		<section class="wrapper">
		<div class="text">
		<h1 class="headline"><?php echo $page->headline()->kirbytext() ?></h1>
		</div>
		
		<?php snippet('3col') ?>
		<?php echo $page->text()->kirbytext() ?>
		
		</section>
	
	<section class="map">
		<iframe style="display: block;" width='100%' frameBorder='0' src='https://a.tiles.mapbox.com/v4/karlnoelle.l6m26069/attribution,geocoder,share.html?access_token=pk.eyJ1Ijoia2FybG5vZWxsZSIsImEiOiJLZ05BbmJjIn0.dmxuWzq3fbEO8G61e65S9Q'></iframe>
	</section>
	
	<!-- room for calendar someday? -->
	
	<section class="wrapper">
		<h2>Past Events</h2>
		<article id="instafeed"></article>
		<h2>Recap of 2015</h2>
		<article class="iframe-wrapper">
			<iframe width="100%" height="625" src="https://www.youtube.com/embed/aZ4LcSCAmTY" frameborder="0" allowfullscreen></iframe>
		</article>
	</section>
	
</main>

<script type="text/javascript">
    var feed = new Instafeed({
        get: 'tagged',
        tagName: 'runpurpose',
        clientId: '0e2b5338a30748f09486203825c5b8a7',
        resolution: 'low_resolution',
        limit: 12,
    });
    feed.run();
</script>

<?php snippet('footer') ?>