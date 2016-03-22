<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo get_bloginfo('name'); ?></title>

    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo get_bloginfo('rss_url'); ?>">

    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script data-no-instant>var base = '<?php echo get_template_directory(); ?>';</script>
    <script data-no-instant src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width">
    <meta name="generator" content="WordPress">

    <meta property="og:title" content="<?php echo get_bloginfo('name'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $_SERVER['PHP_SELF'] ?>">
    <meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>">
    <meta property="og:description" content="<?php echo get_bloginfo('description'); ?>">

    <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive-nav.css">
  </head>

  <body>
  <div class="page-wrap">
    <header role="main-header">
      <a href="#" id="toggle">+</a>

      <nav class="nav-collapse">
        <hgroup>
          <a href="<?php echo bloginfo('url'); ?>"><?php echo get_bloginfo('name'); ?></a>
        </hgroup>

        <ul>
          <li><a href="<?php echo bloginfo('url'); ?>" title="<?php echo bloginfo('name'); ?>">Home</a></li>
          <?php
            $pages = get_pages('parent=0');
            foreach ($pages as $page) : ?>
              <li><a href="<?php echo get_permalink($page->ID); ?>" title="<?php echo get_the_title($page->ID); ?>"><?php echo get_the_title($page->ID); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </header>