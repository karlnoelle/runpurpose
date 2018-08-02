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
		<div id="map"></div>
		<script>
		mapboxgl.accessToken = 'pk.eyJ1Ijoia2FybG5vZWxsZSIsImEiOiJLZ05BbmJjIn0.dmxuWzq3fbEO8G61e65S9Q';
		var map = new mapboxgl.Map({
		    container: 'map',
		    //style: 'mapbox://styles/mapbox/streets-v8',
		    style: 'mapbox://styles/karlnoelle/cih734r99000yajmcy6shmxyo',
		    center: [-93.306808, 44.949185],
		    zoom: 13.15,
		    pitch: 40
		});
		
		map.scrollZoom.disable()
		</script>
	</section>
	
	<!-- room for calendar someday? -->
	
	<section class="wrapper">
		<h2>Past Events</h2>
		<article id="instafeed"></article>
		<h2>Recap of 2017</h2>
		<article class="iframe-wrapper">
			<iframe width="100%" height="625" src="https://www.youtube.com/embed/2q1SikPspc8" frameborder="0" allowfullscreen></iframe>
		</article>
	</section>
	
</main>

<script type="text/javascript">
    var feed = new Instafeed({
		get: 'user',
		userId: 1599521991,
        accessToken: '1599521991.e379b40.f12fd0cb846f4393a052b8d6d31c1bd3',
        clientId: 'e379b40ed45447b5bc829847ec2fdbe2',
        resolution: 'standard_resolution',
        limit: 12,
    });
    feed.run();
</script>

<?php snippet('footer') ?>