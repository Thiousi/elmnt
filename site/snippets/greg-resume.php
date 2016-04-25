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
  /* margin-top: 2rem; */
  margin-bottom: .5rem;
}
.resume__content ul {
  margin-left: 1.5rem;
}
/*
.resume__skill {
  width: 100%;
  background-color: #ddd;
}
.resume__skill-label {
  margin-bottom: .5rem;
}
.resume__skill-level {
  padding: 10px 12px; 
}
.skill--acc {
  background: linear-gradient(90deg, #45ada8 90%, #ddd 10%); 
}
.skill--sketch {
  background: linear-gradient(90deg, #45ada8 80%, #ddd 20%); 
}
.skill--html {
  background: linear-gradient(90deg, #45ada8 95%, #ddd 5%); 
}
.skill--css {
  background: linear-gradient(90deg, #45ada8 95%, #ddd 5%); 
}
.skill--sass {
  background: linear-gradient(90deg, #45ada8 90%, #ddd 10%); 
}
.skill--jquery {
  background: linear-gradient(90deg, #45ada8 70%, #ddd 30%); 
}
.skill--php {
  background: linear-gradient(90deg, #45ada8 70%, #ddd 30%); 
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
*/
</style>

<div class="container">
<div class="wrap">

  <div class="single-col">

  <div class="grid">

    <div class="col-1-2">
      <h2><?php echo $page->title()->html() ?></h2>
      <!--
      <h2 style="margin-bottom:0;">Greg Smith</h2>
      <p>
      <a href="mailto:greg@elmnt.com">greg@elmnt.com</a><br>
      <a href="https://twitter.com/elmnt" target="_blank">@elmnt</a><br>
      <a href="tel:9492578520">949-257-8520</a>
      </p>
      -->
    </div>

    <div class="col-1-2">
      <!-- <img src="/content/home/elmnt-avatar.png" alt="Greg Smith" style="width:100%;max-width:200px;margin:0 auto;"> -->
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
    <?php echo $page->text_one()->kirbytext() ?>

    <!--
    <h3>Skills</h3>

    <p>I have more than 15 years experience building websites. I function at an expert level in </p>

    <h5 class="resume__skill-label">Adobe CC</h5>
    <div class="resume__skill">
      <div class="resume__skill-level skill--acc"><p>I like them all, but I <b>♥</b> Illustrator</p></div>
    </div>

    <h5 class="resume__skill-label">Sketch</h5>
    <div class="resume__skill">
      <div class="resume__skill-level skill--sketch"><p>Favorite new design app</p></div>
    </div>

    <h5 class="resume__skill-label">HTML</h5>
    <div class="resume__skill">
      <div class="resume__skill-level skill--html"><p>Remember when tables were cool?</p></div>
    </div>

    <h5 class="resume__skill-label">CSS</h5>
    <div class="resume__skill">
      <div class="resume__skill-level skill--css"><p>I write CSS to take a break from writing CSS</p></div>
    </div>

    <h5 class="resume__skill-label">SCSS Flavored SASS</h5>
    <div class="resume__skill">
      <div class="resume__skill-level skill--sass"><p>My frameworks, let me show you them</p></div>
    </div>

    <h5 class="resume__skill-label">JavaScript / jQuery</h5>
    <div class="resume__skill">
    <div class="resume__skill-level skill--jquery"><p>I can always find the solution</p></div>
    </div>

    <h5 class="resume__skill-label">PHP</h5>
    <div class="resume__skill">
      <div class="resume__skill-level skill--php"><p>I know enough to build custom WP themes</p></div>
    </div>
    -->

    <p>&nbsp;</p>

    <?php echo $page->text_two()->kirbytext() ?>
  </div>

  </div><!-- /.single-col -->

</div>
</div>
