<div class="container cbg-2">
<div class="wrap">

  <div class="grid mb0">

    <div class="col-1-3">
      <h1><?php echo $page->title()->html() ?></h1>
      <!-- meta info
      <ul class="meta cf">
        <li><b>Year:</b> <time datetime="<?php /*echo $page->date('c')*/ ?>"><?php /*echo $page->date('Y', 'year')*/ ?></time></li>
        <li><b>Tags:</b> <?php /*echo $page->tags()*/ ?></li>
      </ul>
      -->
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <div class="col-2-3">
      <!--
      <figure>
        <img src="<?php /*echo $image->url()*/ ?>" alt="<?php /*echo $page->title()->html()*/ ?>" style="margin-bottom:1rem;">
      </figure>
      -->
      <?php foreach ($page->images()->sortBy('sort', 'asc') as $image ): ?>
      <picture class="fit">
        <source srcset="<?php echo $image->url() ?>" media="(min-width: 1200px)">
        <source srcset="<?php echo $image->resize(600)->url() ?>" media="(min-width: 600px)">
        <img class="mb1" srcset="<?php echo $image->resize(600)->url() ?>" alt="<?php echo $page->title()->html() ?>">
      </picture>
      <?php endforeach ?>
      <?php /*snippet('project-pagination')*/ ?>
    </div>

  </div><!-- /.grid -->

  <!-- project pagination/nav -->
  <div class="grid mt0">
    <div class="col-1-3"><p>&nbsp;</p></div>
    <div class="col-2-3">
      <div class="project-pagnav">
        <?php if( $page->parent()->id() == "designs" ): ?>
        <?php if($prev = $page->prevVisible()): ?>
        <a href="<?php echo $prev->url() ?>" class="button">Previous Design Project</a>
        <?php endif ?>
        <?php if($next = $page->nextVisible()): ?>
        <a href="<?php echo $next->url() ?>" class="button">Next Design Project</a>
        <?php endif ?>
        <a href="#!" class="button button__all-design">All Design Projects</a>
        <?php elseif( $page->parent()->id() == "illustrations" ): ?>
        <?php if($prev = $page->prevVisible()): ?>
        <a href="<?php echo $prev->url() ?>" class="button">Previous Illustration Project</a>
        <?php endif ?>
        <?php if($next = $page->nextVisible()): ?>
        <a href="<?php echo $next->url() ?>" class="button">Next Illustration Project</a>
        <?php endif ?>
        <a href="#!" class="button button__all-illustration">All Illustration Projects</a>
        <?php endif ?>
        <a href="/projects" class="button">Projects Index</a>
      </div>
    </div>
  </div>
  <!-- /project pagination/nav -->

</div><!-- /.wrap -->
</div><!-- /.container -->
