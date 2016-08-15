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
      
      <h1 class="blog__title"><?php echo html($page->title()) ?></h1>
      
      <?php if(!$page->subtitle()->empty()): ?>
      <h2 class="blog__subtitle"><?php echo html($page->subtitle()); ?></h2>
      <?php endif ?>

    </header>

    <div class="blog__content cf">
      <?php if($page->description() != ''): ?>
        <p class="blog__description"><?php echo $page->description(); ?></p>
      <?php endif ?>
      <?php if($page->intro() != ''): ?>
        <div class="blog__intro"><?php echo kirbytext($page->intro()); ?></div>
      <?php endif ?>
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
      <?php snippet('blog-pagination') ?>
      <?php snippet('blog-footer') ?>
    </footer>

  </div><!-- /.grid -->
  </article>

</div><!-- /.grid -->
</main>

</div> 
</div>

<?php snippet('footer') ?>
