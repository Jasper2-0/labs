<!DOCTYPE html>
<html lang="en">
<?php snippet('base/page-header') ?>
<body class="bg-light">
<?php snippet('navigation/navbar') ?>
<?php snippet('navigation/subnav', array('items'=> $page->children()->visible())) ?>
<main class="container" role="main">
  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h1><?php echo $page->title()->html() ?></h1>
    <hr>
    <p><?php echo $page->text()->html()?></p>
  </div>
</main>
<?php snippet('base/script-includes')?>
</body>
<?php snippet('base/page-footer') ?>
</html>