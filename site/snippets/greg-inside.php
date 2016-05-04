<style>
a { text-decoration: none; }
.resume__contact {
  font-size: 1rem;
  line-height: 1.25em;
}
.resume__content {
  margin-top: 0;
}
.resume__content h3 {
  margin-top: 2rem;
  margin-bottom: .25rem;
}
.resume__content h3:first-child {
  margin-top: 0;
}
.resume__content h5 {
  margin-bottom: .5rem;
}
.resume__content ul {
  margin-left: 1.5rem;
}
html {
  font-size: 16px;
}
/*
.fa {
  color: #45ada8;
}
*/
</style>

<div class="container">
<div class="wrap">

  <div class="single-col">

  <div class="grid">

    <div class="col-1-2">
      <h2><?php echo $page->title()->html() ?></h2>
      <?php if( $page->id() == "resume" ): ?>
        <p><a href="/assets/pdf/greg-smith-resume.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF Version</a></p>
      <?php endif ?>
    </div>

    <div class="col-1-2">
      <?php if( $page->id() == "resume" ): ?>
      <h2 style="margin-bottom:0;">Greg Smith</h2>
      <p class="resume__contact">
      <a href="http://elmnt.com">elmnt.com</a><br>
      <a href="mailto:greg@elmnt.com">greg@elmnt.com</a><br>
      <a href="tel:9492578520">949-257-8520</a><br>
      Portland, OR
      </p>
      <?php endif ?>
    </div>

  </div><!-- /.grid -->

  <div class="grid resume__content">
    <?php echo $page->text()->kirbytext() ?>
  </div>

  </div><!-- /.single-col -->

</div>
</div>
