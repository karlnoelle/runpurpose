<?php snippet('header') ?>

<main class="main" role="main">
		<section class="wrapper">
		
		<div class="text">
		<h1 class="headline"><?php echo $page->headline()->kirbytext() ?></h1>
		<?php echo $page->text()->kirbytext() ?>
		</div>
		
		<?php snippet('3col') ?>
		
		<h2>Dive deeper into <?php echo $page->title() ?>:</h2>
		<article class="article-links">
			<ul class="flex-container">
				<?php foreach($page->children() as $subpage): ?>
					<li class="flex-container">
						<a href="<?php echo $subpage->url() ?>">
							<?php echo html($subpage->title()) ?>
						</a>
					</li>
				<?php endforeach ?>
			</ul>

		</article>
		
	</section>
</main>

<?php snippet('footer') ?>