<div class="container--footer">
<div class="wrap">
<div class="grid align-center">

  <footer class="footer center-content cf" role="contentinfo">

    <?php if ( ($page->uid() == 'blog') || ($page->parent()->uid() == 'blog') ): ?>

    <div class="single-col">
    <form class="search" role="search" action="<?php echo url('search') ?>">
      <label class="vh" for="search">Search the Blog</label>
      <input type="search" name="q" id="search" placeholder="Search the Blog">
    </form>
    </div>
    
    <?php endif ?>

    <div class="grid footer-fa-icons" style="margin-top:2rem;">
      <a href="https://twitter.com/elmnt" target="_blank"><i class="fa fa-twitter fa-2x"></i></a><a href="https://github.com/elmnt" target="_blank"><i class="fa fa-github fa-2x"></i></a>
      <!--<a href="http://codepen.io/elmnt" target="_blank"><i class="fa fa-codepen fa-2x"></i></a>-->
      <!-- <a href="https://dribbble.com/elmnt" target="_blank"><i class="fa fa-dribbble fa-2x"></i></a> -->
    </div>

    <div class="copyright colophon">
      <?php echo $site->copyright()->kirbytext() ?>
      <a href="http://getkirby.com/made-with-kirby-and-love">Made with Kirby and <b>♥</b></a>
    </div>
    
  </footer>

</div><!-- /.grid -->
</div><!-- /.wrap -->
</div><!-- /.container -->

<script src="/assets/js/elmnt.min.js"></script>

<script type="text/javascript">
$(window).on('load',function(event){

  $('.masonry-list').masonry({
    itemSelector: '.masonry-item'
  });

});
</script>

</body>
</html>
