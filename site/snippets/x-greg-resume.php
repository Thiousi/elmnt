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
</style>

<div class="container">
<div class="wrap">

  <div class="single-col">

  <div class="grid">

    <div class="col-1-2">
      <h2><?php echo $page->title()->html() ?></h2>
    </div>

    <div class="col-1-2">
      <h2 style="margin-bottom:0;">Greg Smith</h2>
      <p class="resume__contact">
      <a href="http://elmnt.com">elmnt.com</a><br>
      <a href="mailto:greg@elmnt.com">greg@elmnt.com</a><br>
      <a href="https://twitter.com/elmnt" target="_blank">@elmnt</a><br>
      <a href="tel:9492578520">949-257-8520</a><br>
      Portland, OR
      </p>
    </div>

  </div><!-- /.grid -->

  <div class="grid resume__content">
    <?php echo $page->text()->kirbytext() ?>
  </div>

  </div><!-- /.single-col -->

</div>
</div>
