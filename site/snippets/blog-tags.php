<?php $tag = urldecode(param('tag'));
      $articles = $pages->find('blog')
                        ->children()
                        ->visible()
                        ->filterBy('tags', $tag, ',')
                        ->flip()
                        ->paginate(10);

      echo '<h1>Articles tagged with <span>' . $tag . '</span></h1>';
?>

<ul class="results">
  <?php foreach($articles as $article): ?>
  <li>
    <h2><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h2>
    <div class="meta">
      <time datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('F dS, Y'); ?></time>
      <?php if ($article->tags() != ''): ?> |
      <ul class="tags">
        <?php foreach(str::split($article->tags()) as $tag): ?>
        <li><a href="<?php echo url('blog/tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a></li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>
    </div>
  </li>
  <?php endforeach ?>
</ul>
      
