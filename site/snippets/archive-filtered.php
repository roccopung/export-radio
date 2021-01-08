<h2 class="archive--title">Tag: <?php echo(param('tag')) ?></h2>
<ul class="archive-list">
  <?php foreach ($pages->children()->listed()->filterBy('tags', param('tag'), ',') as $project) : ?>
    <li>
      <a href="<?= $project->url()  ?>">
        <figure>
          <img src="<?= $project->image()->url() ?>" alt="<?= $project->title() ?>" class="randomnumber">
        </figure>
      </a>
    </li>
  <?php endforeach ?>
</ul>