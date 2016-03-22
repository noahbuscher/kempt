<?php get_header(); ?>

<section class="wrap no-photo four-oh-four">
  <h1>Four Oh Four</h1>
  <h3>Page Not Found</h3>
  <article>
    <p>Unfortunately, the page could not be found. Your best bet is to try the <a href="<?php echo get_bloginfo('url'); ?>">home page</a>.</p>
  </article>
</section>

<hr>
<div class="wrap more-link">
  <a href="<?php echo base_url(); ?>">
    <img class="back-arrow" src="<?php echo get_template_directory(); ?>/img/back-arrow.svg" alt="back arrow" /> Home
  </a>
 </div>
 <div class="push"></div>

<?php get_footer(); ?>