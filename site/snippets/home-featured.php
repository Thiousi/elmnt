<?php $ftnum = 2; ?>
<?php foreach($page->children()->visible() as $ft): ?>
<div class="container cbg-1-<?php echo $ftnum ?>">
<div class="wrap">
  <div class="grid">
    <div class="col-1-3">
      <?php echo $ft->featured()->kirbytext() ?>
    </div>
    <div class="col-2-3">
      <?php echo $ft->featuredimg()->kirbytext() ?>
    </div>
  </div>
</div> 
</div>
<?php $ftnum += 1; ?>
<?php endforeach ?>
