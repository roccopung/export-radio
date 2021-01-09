<ul class="archive-list">
  <?php foreach ($pages->children()->listed()->sortBy('date', 'desc', 'time', 'desc') as $project) : ?>
    <li>
      <a href="<?= $project->url()  ?>">
        <figure>
          <img src="<?= $project->image()->url() ?>" alt="<?= $project->title() ?>" class="randomnumber">
        </figure>
      </a>
    </li>
  <?php endforeach ?>
</ul>
