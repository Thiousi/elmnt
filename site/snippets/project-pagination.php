<nav class="nextprev cf" role="navigation">
  <?php if($prev = $page->prevVisible()): ?>
  <a class="button prev fleft" href="<?php echo $prev->url() ?>">previous</a>
  <?php endif ?>
  <?php if($next = $page->nextVisible()): ?>
  <a class="button next fright" href="<?php echo $next->url() ?>">next</a>
  <?php endif ?>
</nav>
