<style>
.resume__links {
  margin-bottom: 0;
}
.resume__links a,
.resume__contact a { 
  /* text-decoration: none;  */
}
.resume__links,
.resume__contact {
  /* font-size: 1rem; */
  line-height: 1.35em;
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
      <h2 style="margin-bottom: .5rem;"><?php echo $page->title()->html() ?></h2>
      <?php if( $page->id() == "resume" ): ?>
        <p class="resume__links"><a href="/assets/pdf/greg-smith-resume.pdf" target="_blank">View/Download PDF</a></p>
        <p class="resume__links"><a href="https://docs.google.com/document/d/1xJpW8tEVrJCJYg2WY6vzwIKRsIocnexsb2sUTUEVoxk/edit?usp=sharing" target="_blank">View in Google Docs</a></p>
      <?php endif ?>
    </div>

    <div class="col-1-2">
      <?php if( $page->id() == "resume" ): ?>
      <h2 style="margin-bottom: .5rem;">Greg Smith</h2>
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
