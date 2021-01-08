<ul class="archive-list">
  <?php foreach ($pages->children()->listed() as $project) : ?>
    <li>
      <a href="<?= $project->url()  ?>">
        <figure>
          <img src="<?= $project->image()->url() ?>" alt="<?= $project->title() ?>" class="randomnumber">
        </figure>
      </a>
    </li>
  <?php endforeach ?>
</ul>