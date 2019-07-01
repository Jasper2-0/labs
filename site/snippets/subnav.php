<ul id="subnav" class="nav bg-white shadow-sm nav-underline ">
  <li class="nav-item">
    <a class=" nav-link <?php if($page->isActive() === true): echo ' active'; endif ?>" href="<?= $page->url() ?>">Introductie</a>
  </li>
  <?php foreach($items as $item): ?>
  <li class="nav-item">
    <a class="nav-link<?php if($item->isActive() === true): echo ' active'; endif ?>" href="<?= $item->url() ?>"><?= html($item->title()) ?></a>
  </li>
<?php endforeach ?>
</ul>