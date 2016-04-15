<style>
.mosaicflow__column { float:left; }
.mosaicflow__item img { display:block; width:100%; height:auto; }
.mosaicflow__item { margin: 0 3% 3% 0; }
/* .mosaicflow__column .mosaicflow__item:nth-child(3n) { margin-right: 0; } */
</style>

<div class="container cbg-2">
<div class="wrap">

  <div class="grid" style="margin-bottom:0;"> 
    <h1>Illustration Projects</h1>
  </div>

</div>
</div>

<div class="container cbg-2">
<div class="wrap">

    <div class="grid">
    <h3>Peeking Press&trade;</h3>
    <p style="width:100%;max-width:700px;">These are a few samples from a children's book I'm writing &amp; illustrating, called <em>Animal Alphabet</em>. The page copy has been removed, in these samples, to highlight the illustrations.</p>
    <p style="font-size:.75rem;color:#999;">All images &copy; Peeking Press LLC / All Rights Reserved.</p>
      <div class="counter"> 
        <?php foreach($page->find('pp')->images()->sortBy('sort', 'asc') as $image): ?>
          <div class="two">
            <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
          </div><!-- /.two -->
        <?php endforeach ?>
      </div><!-- /.counter -->
    </div><!-- /.grid -->

    <div class="grid">
      <h3>Miscellaneous</h3>
      <div class="cf" id="mfhr">
        <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
          <div class="mosaicflow__item">
            <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
          </div><!-- /.mosaicflow__item -->
        <?php endforeach ?>
      </div><!-- /.mosaicflow -->
    </div><!-- /.grid -->

</div>
</div>



