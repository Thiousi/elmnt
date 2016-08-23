<?php snippet('top') ?>
<?php snippet('header') ?>

<?php if( $page->id() == "home" ): ?>

  <?php snippet('home-intro') ?>
  <?php snippet('home-featured') ?>

<?php elseif( $page->id() == "design" ): ?>

  <?php snippet('projects-design') ?>

<?php elseif( $page->id() == "illustration" ): ?>

  <?php snippet('projects-illustration') ?>

<?php /*elseif( $page->id() == "contract" || $page->id() == "basecamp" ):*/ ?>
<?php /*snippet('greg-inside')*/ ?>

<?php elseif( $page->id() == "resume" ): ?>

  <?php snippet('greg-resume') ?>

<?php else: ?>

  <div class="container">
  <div class="wrap">
    
    <main role="main">
    <div class="grid">

      <div class="single-col">

        <?php if( $page->id() == "info" ): ?>
          <img src="/content/home/elmnt-avatar.png" alt="Greg Smith" style="width:100%;max-width:400px;margin:0 auto;">
        <?php endif ?>

        <h1><?php echo $page->title()->html() ?></h1>
        <?php echo $page->text()->kirbytext() ?>

      </div>

    </div>
    </main>

  </div>
  </div>

<?php endif ?>

<?php snippet('footer') ?>
