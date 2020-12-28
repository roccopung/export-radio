<ul style="list-style-type: none">
    <?php foreach($pages->children()->listed() as $project): ?>
      <li>
        <a href="<?= $project->url()  ?>">
          <figure>
            <img src="<?= $project->image()->url() ?>" alt="<?= $project->title() ?>" class="randomnumber">
          </figure>
        </a>
      </li>
    <?php endforeach ?>
</ul>
