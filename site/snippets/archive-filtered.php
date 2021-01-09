<h2 class="archive--title">Tag: <?php echo(urldecode(param('tag'))) ?></h2>
<ul class="archive-list">
  <?php foreach ($pages->children()->listed()->filterBy('tags', urldecode(param('tag')), ',') as $project) : ?>
    <li>
      <a href="<?= $project->url()  ?>">
        <figure>
          <img src="<?= $project->image()->url() ?>" alt="<?= $project->title() ?>" class="randomnumber">
        </figure>
      </a>
    </li>
  <?php endforeach ?>
</ul>
