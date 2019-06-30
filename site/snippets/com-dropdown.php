  <a class="<?= $class ?> <?= e($disabled == true,'disabled','')?>" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?= $value ?></a>  
  <? if(!$disabled): ?>
  <div class="dropdown-menu">
    <?php foreach($items as $item): ?>
    <a class="dropdown-item" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    <?php endforeach ?>
  </div>
  <? endif ?>
