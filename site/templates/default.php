<?php snippet('header') ?>

<main class="main" role="main">
	<section class="wrapper">
		<div class="text">
		<h1 class="headline"><?php echo $page->headline()->kirbytext() ?></h1>
		<?php echo $page->pic()->kirbytext() ?>
		<?php echo $page->text()->kirbytext() ?>
		</div>
	</section>
</main>

<?php snippet('footer') ?>