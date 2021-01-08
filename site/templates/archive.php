<?php snippet('header-mobile') ?>

<div id="container-mobile">
	<div class="button sticky" name="tags"> <a href="<?= $pages->find('tags')->url() ?>">Tags</a> </div>
	
	<div id="wrap-mobile-archive">
		<?php snippet('archive-filtered') ?>
	</div>

</div>
</body>
</html>