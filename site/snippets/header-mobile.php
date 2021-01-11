<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?= url('assets/icons/exp-logo.svg') ?>">
  <meta name="description" content="An experimental radio station provided by Royal College of Art of London students, showcasing voices, soundscapes and noises.">

  <title><?= $page->title() ?></title>
  <?= css('assets/css/mobile.css') ?>
  <?= css('assets/css/tags.css') ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>

<body>
	<header id="header-mobile">
    <h1><?= $page->title() ?></h1>
    <button class="button"><a href="<?= $site->url() ?>"><?= $site->title() ?></a></button>
	</header>
