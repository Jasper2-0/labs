  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white shadow-sm my-3">
      <?php foreach($site->breadcrumb() as $crumb): ?>
        <li class="breadcrumb-item"><a href="<?= $crumb->url() ?>"><small><?= $crumb->title()->html() ?></small></a></li>
      <?php endforeach ?>    
    </ol>
  </nav>