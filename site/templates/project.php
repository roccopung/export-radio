<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= $page->title() ?></title>

  <?= css('assets/css/project.css') ?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>
	<header>
    <button class="button"><a href="<?= $site->url() ?>">Export Radio</a></button>
	</header>

		<div class="page">

			<main>
				<div class="previousnext">
					<button id="previous">
            <?php if ($page->hasPrevListed()): ?>
              <a href="<?= $page->prevListed()->url() ?>">
                <img src="<?= url('assets/icons/arrowleft.svg') ?>">Previous</a>
            <?php endif ?></button>

					<button id="next">
            <?php if ($page->hasNextListed()): ?>
            <a href="<?= $page->nextListed()->url() ?>">
              <img src="<?= url('assets/icons/arrowright.svg') ?>">Next</a>
          <?php endif ?></button>
				</div>

				<div class="layout">
					<aside>
						<div class="project-title">
							<h3><?= $page->title() ?></h3>
						</div>

            <dl>
              <?php if ($page->author()->isNotEmpty()): ?>
                <div class="project-info">
                  <dt>Author</dt>
                  <dd><?= $page->author() ?></dd>
                </div>
              <?php endif ?>

              <?php if ($page->year()->isNotEmpty()): ?>
                <div class="project-info">
                  <dt>Year</dt>
                  <dd><?= $page->year() ?></dd>
                </div>
              <?php endif ?>

              <?php if ($page->category()->isNotEmpty()): ?>
                <div class="project-info">
                  <dt>Category</dt>
                  <dd><?= $page->category() ?></dd>
                </div>
              <?php endif ?>

              <?php if ($page->link()->isNotEmpty()): ?>
                <div class="project-info">
                  <dt>Link to the website</dt>
                  <dd>
                    <a href="<?= $page->link()->url() ?>" target="_blank"><?= $page->link() ?></a>
                  </dd>
                </div>
              <?php endif ?>
            </dl>

					</aside>
					<div class="textartiste">

            <?php if ($page->description()->isNotEmpty()): ?>
            <?= $page->description()->kirbyText() ?>
            <?php endif ?>

            <ul class="project-gallery" style="list-style-type: none">
                <?php foreach($page->images() as $image ): ?>
                  <li>
                      <figure>
                        <?= $image ?>
                      </figure>
                  </li>
                <?php endforeach ?>
            </ul>

					</div>

					<button onclick="topFunction()" id="myBtn"><img src="<?= url('assets/icons/arrowup.svg') ?>">Top</button>

				</div>
			</main>
		</div>
</body>
<script type="text/javascript" src="<?= url('assets/js/top.js') ?>"></script>
</html>
