<style type="text/css">
.work__wrap {
  border-bottom: 3px solid #ccc;
}
.work__wrap:last-child {
  border-bottom: none !important;
}
.work__wrap:last-child img {
  border: 3px solid #ccc;
  margin-bottom: 1rem;
}
.work__piece {
  /*
  max-height: 600px;
  overflow: hidden;
  */
  padding-bottom: 2rem !important;
  margin-bottom: 0 !important;
}
</style>

<div class="container cbg-2">
<div class="wrap">

  <div class="grid" style="margin-bottom:0;">
    <h1>Design Projects</h1>
  </div>

</div>
</div>

<div class="wwcounter">

<?php foreach(page('design')->children()->visible()->limit(7) as $project): ?>

<div class="container cbg-2 work__wrap">
<div class="wrap">

    <div class="grid work__piece">
      <div class="col-2-5">
        <?php echo $project->text()->kirbytext() ?>
      </div>
      <div class="col-3-5">

        <?php /*if($image = $project->images()->sortBy('sort', 'asc')->first()):*/ ?>
        <?php /*if($image = $project->images()->sortBy('sort', 'asc')->last()):*/ ?>
        <!-- <img src="<?php /*echo $image->resize(800)->url()*/ ?>" alt="<?php /*echo $project->title()->html()*/ ?>"> -->
        <?php /*endif*/ ?>

        <?php foreach($project->images() as $image): ?>
        <!-- <img src="<?php /*echo $image->url()*/ ?>" alt=""> -->
        <img src="<?php echo $image->resize(800)->url() ?>" alt="<?php echo $project->title()->html() ?>">
        <?php endforeach ?>

      </div>
    </div><!-- /.grid -->

</div>
</div>

<?php endforeach ?>

</div>
