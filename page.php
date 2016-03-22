<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if (($img = has_post_thumbnail())): ?>
<section class="full masthead_image" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>);">
  <header>
    <hgroup>
      <h1><?php echo get_the_title(); ?></h1>
    </hgroup>
  </header>
</section>

<section class="wrap">
  <article>
    <?php the_content(); ?>

  <?php else: ?>
    <section class="wrap no-photo">
      <h1><?php echo get_the_title(); ?></h1>
      <article>
        <?php the_content(); ?>

    <?php endif ?>

    </article>
  </section>
</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>