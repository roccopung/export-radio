<?php snippet('header-mobile') ?>


<?php
$tags = $site->find('archive')->children()->listed()->pluck("tags", ",", true);?>
<ul class="tags">
  <?php foreach ($tags as $tag) : ?>
    <li class="tag">
      <?php $imageUrl = $site->find('archive')->children()->listed()->filterBy('tags', $tag, ',')->nth(0)->files()->first()->url()  ?>
      <a href="<?= url('archive', ['params' => ['tag' => urlencode($tag)]]) ?>">
      <img src="<?= $imageUrl ?>" alt="">
        <?= html($tag) ?>
      </a>
    </li>
  <?php endforeach ?>
</ul>



</body>

</html>
