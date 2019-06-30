<?php
$items = false;

// get open items on first level
if ($root = $pages->findOpen()) {
  $items = $pages->visible();
}
  
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?= $site->language()->url() ?>">
  <?php if($image = $site->brand()->toFile()): ?>
  <img src="<?= $image->url() ?>" alt="">
<?php endif ?>
    <img src="assets/brand/hr-tag.svg" width="30" height="30" class="d-inline-block align-top" alt="">
 
    <?= $site->title()->upper()->html() ?>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
	
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php foreach($items as $item): ?>
      <li class="nav-item">
        <a class="nav-link <?php if($item->isOpen() === true): echo ' active'; endif ?>" href="<?= $item->url() ?>">
          <?= html($item->title()) ?>
        </a>
      </li>            
      <?php endforeach ?>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item">
        <?php if($user = $site->user()): ?>
        <a class="nav-link" href="/profile">
          <?php if($avatar = $user->avatar()): ?>
            <img src="<?= $avatar->url() ?>" width="30" height="30" class="d-inline-block align-top" alt="">
          <?php else: ?>
            <img src="<?= url('assets/images/avatar.png') ?>">
          <?php endif ?>
          <?= esc($user->firstName() . ' ' . $user->lastName()) ?>
        </a>
        <?php else: ?>
        <a class="nav-link" href="/login">
          <i class="fas fa-sign-in-alt"></i> Log in
        </a>
        <?php endif ?>
        
      </li>
    </ul>
  </div>  
</nav>


 