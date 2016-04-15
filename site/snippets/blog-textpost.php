        <header>
          <h1><a href="<?php echo $article->url(); ?>"><?php echo html($article->title()); ?></a></h1>
          <?php if(!$article->description()->empty()): ?>
            <h2 class="blog__subtitle"><?php echo $article->description(); ?></h2>
          <?php endif ?>
        </header>
