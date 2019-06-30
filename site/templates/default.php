<!DOCTYPE html>
<html lang="en">
<?php snippet('page-header') ?>
<body class="bg-light">
<?php snippet('nav-bar') ?>
<?php snippet('subnav', array('items'=> $page->children()->visible())) ?>
<main class="container" role="main">
  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h1><?php echo $page->title()->html() ?></h1>
    <hr>
    <p><?php echo $page->text()->html()?></p>
  </div>
</main>
<?php snippet('script-includes')?>
</body>
<?php snippet('footer') ?>
</html>