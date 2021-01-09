<?php snippet('header-mobile') ?>

<div id="container-mobile">
	<div class="button sticky" name="tags"> <a href="<?= $pages->find('tags')->url() ?>">Tags</a> </div>

	<div id="wrap-mobile-archive">

		<?php if ($tag = param('tag')): ?>
			<?php snippet('archive-filtered') ?>
		<?php else: ?>
			<?php snippet('archive') ?>
		<?php endif ?>

	</div>

</div>
</body>
</html>
