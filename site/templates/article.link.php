<?php snippet('top') ?>
<?php snippet('header') ?>

<div class="container container--blog">
<div class="wrap">

<main role="main">  
<div class="grid grid--blog">

  <article>
  <div class="grid">

    <header>
      <p class="blog__meta-date"><time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('F dS, Y'); ?></time></p>
      <h1 class="blog__title--link"><a href="<?php echo $page->customlink() ?>" target="_blank"><?php echo html($page->linktitle()) ?> &rarr;</a></h1>
      <p class="blog-meta-permalink"><a href="<?php echo $page->url() ?>">permalink</a></p>
    </header>

    <div class="blog__content cf">
      <?php echo kirbytext($page->text()) ?>
    </div><!-- /.blog__content -->

    <?php if($page->tags() != ''): ?>
      <ul class="list-reset blog__meta-tags">
      <li>Tags:</li>
      <?php foreach(str::split($page->tags()) as $tag): ?>
        <li><a href="<?php echo url('blog/tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a></li>
      <?php endforeach ?>
      </ul>
    <?php endif ?>

    <footer>
      <?php snippet('blog-footer') ?>
    </footer>

  </div><!-- /.grid -->
  </article>

</div><!-- /.grid -->
</main>

</div> 
</div>

<?php snippet('footer') ?>
