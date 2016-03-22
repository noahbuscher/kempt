<?php
/*
Template Name: Latest Posts
*/
?>

<?php get_header(); ?>
<section class="wrap">
    <h1 class="list-head">Latest Blog Posts</h1>
  <hr>
    <ul class="post-list">
    <?php
      $args=array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'caller_get_posts'=> 1
        );
      $query = null;
      $query = new WP_Query($args);
      if ($query->have_posts()) {
        while ($query->have_posts()) : $query->the_post();
    ?>
      <li>
        <?php if (($img = has_post_thumbnail())): ?>
          <a href="<?php echo get_permalink(); ?>">
            <header style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>);">
              <div class="overlay">
                <h2>
                  <?php echo get_the_title(); ?>
                </h2>
              </div>
            </header>
          </a>
        <?php else: ?>
          <a href="<?php echo get_permalink(); ?>">
            <header style="background: <?php echo random_color(); ?>;">
              <h2>
                <?php echo get_the_title(); ?>
              </h2>
            </header>
          </a>
        <?php endif; ?>
        <p>
          <?php echo get_the_excerpt($post->ID); ?>
        </p>
        <hr>
      </li>
    <?php
        endwhile;
      }
      wp_reset_query();
    ?>
  </ul>
</section>

<?php
  $prev_link = get_previous_posts_link();
  $next_link = get_next_posts_link();
?>
<?php if ($prev_link || $next_link) : ?>
  <nav class="pagination">
    <hr>
    <div class="wrap">
      <span class="left"><?php echo previous_posts_link(); ?></span>
      <span class="right"><?php echo next_posts_link(); ?></span>
    </div>
  </nav>
<?php endif; ?>

</div>
<?php get_footer(); ?>