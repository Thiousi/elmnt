<div class="container">
  <div class="wrap">
    <div class="grid">
      <div class="col-n-5">
        <?php foreach($page->images() as $image): ?>
          <img src="<?php echo $image->url() ?>" alt="Greg Smith" style="width:100%;max-width:400px;margin:0 auto;">
        <?php endforeach ?>
      </div>
      <div class="col-n-7">
        <?php echo $page->hellotext()->kirbytext() ?>
      </div>
    </div>
  </div>
</div>
