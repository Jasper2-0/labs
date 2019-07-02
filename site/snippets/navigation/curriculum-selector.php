<div class="btn-group" role="group">
<?php for ($i=$startLevel; $i < $maxLevel; $i++): ?> 
  <div class="btn-group" role="group">
  <?php $p = $site->children();
  
  for ($j=0; $j < $i; $j++) { 
    $p = $p->children();
  }
  snippet('com-dropdown',array('items'=> $p->visible(),
                               'value'=> 'test', 
                               'id'=> 'ID',
                               'class'=> 'btn btn-dark dropdown-toggle',
                               'disabled'=> ($i < $page->depth()+1) ? false:true))
  
  ?>
  </div>
<?php endfor ?>
</div>