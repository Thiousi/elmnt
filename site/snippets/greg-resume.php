<style>
a { text-decoration: none; }
.resume__contact {
  font-size: 1rem;
  line-height: 1.25em;
}
.resume__contact br {
  display: none;
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
  /* margin-top: 2rem; */
  margin-bottom: .5rem;
}
.resume__content ul {
  margin-left: 1.5rem;
}
.resume__skill {
  width: 100%;
  background-color: #ddd;
}
.resume__skill-label {
  margin: .5rem 0 .25rem 0;
  font-size: .75rem;
  line-height: 1em;
  text-transform: none;
}
.resume__skill-level {
  padding: 10px 12px; 
}
.skill--acc {
  background: linear-gradient(90deg, #45ada8 100%, #ddd 10%); 
}
.skill--sketch {
  background: linear-gradient(90deg, #45ada8 80%, #ddd 20%); 
}
.skill--html {
  background: linear-gradient(90deg, #45ada8 100%, #ddd 5%); 
}
.skill--css {
  background: linear-gradient(90deg, #45ada8 100%, #ddd 5%); 
}
.skill--sass {
  background: linear-gradient(90deg, #45ada8 100%, #ddd 10%); 
}
.skill--jquery {
  background: linear-gradient(90deg, #45ada8 75%, #ddd 30%); 
}
.skill--php {
  background: linear-gradient(90deg, #45ada8 50%, #ddd 30%); 
}
.resume__skill-level p {
  font-family: "proxima-nova", Helvetica, Arial, sans-serif;
  font-size: .75rem;
  line-height: 1em;
  text-transform: uppercase;
  color: white;
  padding: 0;
  margin: 0;
}
@media all and (max-width: 600px){
  .resume__contact br {
    display: block;
  }
  .resume__contact span {
    display: none;
  }
}
</style>

<div class="container resume__global">
<div class="wrap">

  <div class="single-col">

  <div class="grid" style="margin-bottom:.5rem;">

    <h2 style="margin-bottom: .25rem;"><?php echo $page->title()->html() ?></h2>
    <p class="resume__links"><a href="/assets/pdf/greg-smith-resume.pdf" target="_blank">View/Download PDF</a></p>

    <h3 style="margin-bottom:.25rem;">Greg Smith</h3>
    <p class="resume__contact"><a href="http://elmnt.com">elmnt.com</a><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span><br><a href="mailto:greg@elmnt.com">greg@elmnt.com</a><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span><br><a href="tel:9492578520">949-257-8520</a><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span><br>Portland, OR</p>

  </div><!-- /.grid -->

  <div class="grid resume__content">
    <?php echo $page->text_one()->kirbytext() ?>

    <h3 class="mb1">Technical Skills</h3>

    <h5 class="resume__skill-label">Adobe CC</h5>
    <div class="resume__skill">
      <div class="resume__skill-level skill--acc"></div>
    </div>

    <h5 class="resume__skill-label">HTML</h5>
    <div class="resume__skill">
      <div class="resume__skill-level skill--html"></div>
    </div>

    <h5 class="resume__skill-label">CSS</h5>
    <div class="resume__skill">
      <div class="resume__skill-level skill--css"></div>
    </div>

    <h5 class="resume__skill-label">SCSS Flavored Sass</h5>
    <div class="resume__skill">
      <div class="resume__skill-level skill--sass"></div>
    </div>

    <h5 class="resume__skill-label">JavaScript / jQuery</h5>
    <div class="resume__skill">
    <div class="resume__skill-level skill--jquery"></div>
    </div>

    <h5 class="resume__skill-label">PHP</h5>
    <div class="resume__skill">
      <div class="resume__skill-level skill--php"></div>
    </div>

    <?php echo $page->text_two()->kirbytext() ?>
  </div>

  </div><!-- /.single-col -->

</div>
</div>
