<!doctype html>

<?php snippet('header') ?>

	<main>
		<div id="container">
		<!-- FIRST COLUMN DESKTOP -->
				<div id="col1" class="col">
					<div class="grid-container">

						<div class="logo"><img src="<?= url('assets/icons/exp-logo.svg') ?>"></div>

						<?php snippet('broadcasts')	?>

					</div>

						<?php snippet('about') ?>

					<!-- RESPONSIVE COL3 MEDIUM SIZE -->

					<div class="medium">

						<div class="chat">
							<?php snippet('twitch') ?>
						</div>

						<?php snippet('social') ?>

					</div>
		  	</div>

			<div class="resizer first"></div>


			<!-- SECOND COLUMN DESKTOP -->
			<div id="col2" class="col">
				<?php snippet('archive') ?>
			</div>

			<div class="resizer second"></div>

			<!-- THIRD COLUMN DESKTOP -->
				<div id="col3" class="col">

					<div class="chat">
						<?php snippet('twitch') ?>
					</div>

					<?php snippet('social') ?>

				</div>

		</div>

	</main>

	<!-- MOBILE HOMEPAGE -->

	  <div id="container-mobile">
	    <div class="logo-mobile-wrap">
	      <img class="logo-mobile" src="assets/icons/exp-logo.svg">
	    </div>

	    <div class="bottom">

			<div class="menu-mobile">
				<ul>
					<?php foreach ($site->children()->listed()->sortBy('link_title','desc') as $item): ?>
						<li> <a href="<?= $item->url() ?>"><?= $item->link_title() ?></a> </li>
					<?php endforeach; ?>
				</ul>
			</div>

	    <div class="footer-mobile">
	        <a href="mailto:exportradiosubmissions@gmail.com" target="_top">e-mail</a></li>
	        <a href="https://www.instagram.com/exportradio/" target ="_blank" class="fa fa-instagram"></a>
	        <a href="https://www.twitch.tv/exportradio/"  target ="_blank" class="fa fa-twitch"></a>
	    </div>
	    </div>
	  </div>


<?php snippet('footer') ?>
