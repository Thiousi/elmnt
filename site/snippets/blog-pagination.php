<nav class="nextprev cf" role="navigation">

  <?php if($next = $page->nextVisible()): ?>

    <h4>Next Article:</h4>

    <?php /* if it's a link post, we need to grab the linktitle and not the title */ ?>
    <p>
    <?php if(!$next->linktitle()->empty()): ?>
    <a href="<?php echo $next->url() ?>"><?php echo $next->linktitle() ?></a>
    <?php else: ?>
    <a href="<?php echo $next->url() ?>"><?php echo $next->title() ?></a>
    <?php endif ?>

    <?php if(!$next->description()->empty()): ?>
    <br><?php echo html($next->description()); ?>
    <?php endif ?>
    </p>

  <?php endif ?>

  <?php if($prev = $page->prevVisible()): ?>

    <h4>Previous Article:</h4>

    <?php /* if it's a link post, we need to grab the linktitle and not the title */ ?>
    <p>
    <?php if(!$prev->linktitle()->empty()): ?>
    <a href="<?php echo $prev->url() ?>"><?php echo $prev->linktitle() ?></a>
    <?php else: ?>
    <a href="<?php echo $prev->url() ?>"><?php echo $prev->title() ?></a>
    <?php endif ?>

    <?php if(!$prev->description()->empty()): ?>
    <br><?php echo html($prev->description()); ?>
    <?php endif ?>
    </p>

  <?php endif ?>

</nav>
