<?php snippet('top') ?>
<?php snippet('header') ?>

<style>
.blog-intro-content {
  margin-right: 0;
}
@media all and (max-width: 800px){
  .blog-intro-mobile { display: none; }
  .blog-intro-content {
    display: block !important;
    float: none !important;
    width: 100% !important;
  }
}
</style>

<div class="container">
<div class="wrap">

  <article style="border-bottom:5px solid #eee;">
    <div class="grid">
      <div class="col-1-3 blog-intro-mobile">
        <p>&nbsp;</p>
      </div>
      <div class="col-2-3 blog-intro-content">
        <h3 class="mt0">Thoughts &amp; ideas about design, illustration, and making stuff for the web</h3>
        <p class="mb0">I've been a professional designer for about 15 years. I believe sharing professional insight makes everyone just a little better, and I believe it's important to give credit to those that have shared with and inspired us along the way.</p>
      </div>
    </div>
  </article>

</div>
</div>

<div class="container container--blog">
<div class="wrap">

  <main role="main">  
  <div class="grid--blog">
      
      <?php /*echo $page->intro()->kirbytext()*/ ?>
      <!--<h1><?php /*echo $page->title()->html()*/ ?></h1>-->

      <!-- start: show tag results -->

      <?php if(param('tag')): ?>

      <div class="single-col">

        <?php $tag = urldecode(param('tag'));
              $articles = $pages->find('blog')
                                ->children()
                                ->visible()
                                ->filterBy('tags', $tag, ',')
                                ->flip()
                                ->paginate(10);

            //echo '<h1>Articles tagged with:<br><span>#' . $tag . '</span></h1>';
        ?>
        
        <h1>Articles tagged with:</h1>

        <h4 class="brand-color-0">#<?php echo $tag; ?></h4>

        <ul class="results list-reset">
          <?php foreach($articles as $article): ?>
          <li style="margin-bottom:1rem;">
            <p class="blog__meta-date"><time datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('F dS, Y'); ?></time></p>
            <h2 style="margin-top:.25rem;margin-bottom:.25rem;"><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h2>
            <?php if(!$article->subtitle()->empty()): ?>
            <h4 style="margin-top:0;margin-bottom:1.5rem;"><?php echo $article->subtitle(); ?></h4>
            <?php endif ?>
            <!--
            <div class="meta" style="margin-bottom:2rem;">
              <time datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('F dS, Y'); ?></time>
              <?php if ($article->tags() != ''): ?>
              <ul class="tags list-reset">
                <?php foreach(str::split($article->tags()) as $tag): ?>
                <li><a href="<?php echo url('blog/tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a></li>
                <?php endforeach ?>
              </ul>
              <?php endif ?>
            </div>
            -->
            <!-- /.meta -->
          </li>
          <?php endforeach ?>
        </ul>

      </div><!-- /.single-col -->

      <!-- end: show tag results -->
      <!-- start: show latest articles -->

      <?php else: ?>

      <!-- set the number of posts to show on the blog landing page -->
      <?php $articles = $pages->find('blog')->children()->visible()->flip()->paginate(99) ?>

      <!-- start: article overview -->

      <?php foreach($articles as $article): ?>

      <!-- start: text posts -->

      <?php if($article->template() == 'article.text'): ?>

      <article>

        <div class="grid--blog">

        <div class="col-1-3 col--blog-meta">
          <div class="blog__meta">
            <?php if($article->tags() != ''): ?>
              <ul class="list-reset blog__meta-tags">
              <li>Tags:</li>
              <?php foreach(str::split($article->tags()) as $tag): ?>
                <li><a href="<?php echo url('blog/tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a></li>
              <?php endforeach ?>
              </ul>
            <?php endif ?>
          </div>
        </div>
        
        <div class="col-2-3 blog-2-3">

          <header>
            
            <p class="blog__meta-date"><time datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('F d, Y'); ?></time></p>
            
            <?php if($article->dowrk() == 'yes'): ?>
              <h1 style="margin-bottom:.5rem;"><a href="<?php echo $article->url(); ?>"><?php echo html($article->title()); ?></a></h1>
            <?php else: ?>
              <h1><a href="<?php echo $article->url(); ?>"><?php echo html($article->title()); ?></a></h1>
            <?php endif ?>

            <?php if(!$article->subtitle()->empty()): ?>
              <h2><?php echo html($article->subtitle()); ?></h2>
            <?php endif ?>

            <?php if(!$article->description()->empty()): ?>
              <p class="blog__description"><?php echo $article->description(); ?></p>
            <?php endif ?>

          </header>

          <div class="blog__content cf">
            <!-- <?php /*echo $article->excerpt()->kirbytext()*/ ?> -->
            <!-- get the 'read more' link if we need it -->
            <!-- <?php /*if($article->readmore()->empty()):*/ ?> -->
            <!-- <a href="<?php /*echo $article->url()*/ ?>" class="button--readmore">read more</a> -->
            <!-- <?php /*endif*/ ?> -->
          </div><!-- /.blog__content -->

          <div class="blog__meta--mobile"></div>

        </div>

        </div><!-- /.grid -->

      </article>

      <!-- end: text posts -->
      <!-- start: link posts -->

      <?php elseif($article->template() == 'article.link'): ?>

      <article>

        <div class="grid--blog">

        <div class="col-1-3 col--blog-meta">

          <div class="blog__meta">
            <?php if($article->tags() != ''): ?>
              <ul class="list-reset blog__meta-tags">
              <li>Tags:</li>
              <?php foreach(str::split($article->tags()) as $tag): ?>
                <li><a href="<?php echo url('blog/tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a></li>
              <?php endforeach ?>
              </ul>
            <?php endif ?>
          </div>

        </div>
        
        <div class="col-2-3 blog-2-3">

          <header>
            <p class="blog__meta-date"><time datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('F d, Y'); ?></time></p>
            <h1 class="blog__title--link"><a href="<?php echo $article->customlink() ?>" target="_blank"><?php echo html($article->linktitle()) ?> &rarr;</a></h1>
            <p class="blog-meta-permalink"><a href="<?php echo $article->url() ?>">permalink</a></p>
          </header>

          <div class="blog__content cf">
            <?php echo kirbytext($article->text()) ?>
          </div><!-- /.blog__content -->

          <div class="blog__meta--mobile"></div>

        </div>

        </div><!-- /.grid -->

      </article>
      
      <!-- end: link posts -->
      <!-- start: video posts -->

      <?php elseif($article->template() == 'article.video'): ?>

      <article>

        <div class="grid--blog">

        <div class="col-1-3 col--blog-meta">

          <div class="blog__meta">
            <?php if($article->tags() != ''): ?>
              <ul class="list-reset blog__meta-tags">
              <li>Tags:</li>
              <?php foreach(str::split($article->tags()) as $tag): ?>
                <li><a href="<?php echo url('blog/tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a></li>
              <?php endforeach ?>
              </ul>
            <?php endif ?>
          </div>

        </div>
        
        <div class="col-2-3 blog-2-3">

          <header>
            <p class="blog__meta-date"><time datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('F dS, Y'); ?></time></p>
            <h1><a href="<?php echo $article->url(); ?>"><?php echo html($article->title()); ?></a></h1>
            <?php if(!$article->subtitle()->empty()): ?>
            <h2><?php echo html($article->subtitle()); ?></h2>
            <?php endif ?>
          </header>

          <div class="blog__content blog__video cf">
            <?php if(!$article->description()->empty()): ?>
            <p class="blog__description"><?php echo $article->description(); ?></p>
            <?php endif ?>
            <?php echo $article->text()->kirbytext() ?>
            <!-- we probably don't need this button: -->
            <!--<a href="<?php /*echo $article->url()*/ ?>" class="button--readmore">read more</a>-->
          </div><!-- /.blog__content -->

          <div class="blog__meta--mobile"></div>

        </div>

        </div><!-- /.grid -->

      </article>

      <?php endif ?>
      
      <!-- end: video posts -->

      <?php endforeach ?>

      <!-- end: article overview -->

      <?php endif ?>
      
      <!-- end: show latest articles -->

      <!-- start: pagination -->

      <?php if($articles->pagination()->hasPages()): ?>
      <nav class="pagination cf">
        <?php if($articles->pagination()->hasPrevPage()): ?>
        <a class="button fleft prev" href="<?php echo $articles->pagination()->prevPageURL() ?>">newer</a>
        <?php endif ?>
        <?php if($articles->pagination()->hasNextPage()): ?>
        <a class="button fright next" href="<?php echo $articles->pagination()->nextPageURL() ?>">older</a>
        <?php endif ?>
      </nav>
      <?php endif ?>

      <!-- end: pagination -->

  </div><!-- grid -->
  </main>

</div> 
</div>

<?php snippet('footer') ?>
