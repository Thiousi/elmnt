<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
<!-- Typekit -->
<script>
  (function(d) {
    var config = {
      kitId: 'mpz3bkm',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<meta name="description" content="<?php echo $site->description()->html() ?>">
<?php snippet('favicons') ?>
<meta name="apple-mobile-web-app-title" content="<?php echo html($site->title()) ?>">
<link rel="alternate" type="application/rss+xml" href="<?php echo url('feed') ?>" title="Blog Feed">
<?php echo css('/assets/css/styles.css') ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
