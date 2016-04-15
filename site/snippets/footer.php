<div class="container--footer">
<div class="wrap">
<div class="grid align-center">

  <footer class="footer center-content cf" role="contentinfo">

    <div class="grid footer-fa-icons">
      <a href="https://twitter.com/elmnt" target="_blank"><i class="fa fa-twitter fa-2x"></i></a><a href="https://github.com/elmnt" target="_blank"><i class="fa fa-github fa-2x"></i></a>
      <!--<a href="http://codepen.io/elmnt" target="_blank"><i class="fa fa-codepen fa-2x"></i></a>-->
      <!-- <a href="https://dribbble.com/elmnt" target="_blank"><i class="fa fa-dribbble fa-2x"></i></a> -->
    </div>

    <div class="copyright colophon">
      <?php echo $site->copyright()->kirbytext() ?>
      <a href="https://getkirby.com" target="_blank">Made with Kirby and <b>♥</b></a>
    </div>
    
  </footer>

</div><!-- /.grid -->
</div><!-- /.wrap -->
</div><!-- /.container -->

<script src="/assets/js/elmnt.min.js"></script>

<?php if( $page->id() == "illustration" ): ?>

<script src="/assets/js/jquery.mosaicflow.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  $('#mfhr').mosaicflow({
    itemSelector: '.mosaicflow__item',
    minItemWidth: 400
  });
});
</script>

<?php endif; ?>

</body>
</html>