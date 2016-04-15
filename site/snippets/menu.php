<nav class="navmain cf" role="navigation">
  <ul class="list-reset cf">
    <?php foreach($pages->visible() as $p): ?>
    <li class="<?php echo 'nav-main__' . $p->uid() ?>"><a <?php e($p->isOpen(), ' class="active" ') ?> href="<?php echo $p->url() ?>"><?php echo $p->menu()->html() ?></a></li>
    <!-- <li><a <?php /*e($p->isOpen(), ' class="active" ')*/ ?> href="<?php /*echo $p->url()*/ ?>"><?php /*echo $p->menu()->html()*/ ?></a></li> -->
    <?php endforeach ?>
  </ul>
</nav>
