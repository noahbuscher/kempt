<?php get_header(); ?>

<?php if (!is_category() && !is_tag()) : ?>
  <section class="full masthead_home">
    <header>
      <hgroup>
        <h1><?php echo get_bloginfo('description'); ?></h1>
      </hgroup>
      <aside class="latest">
        <h5>
          <?php
            $args = array( 'numberposts' => '1', 'category' => CAT_ID );
            $recent_posts = wp_get_recent_posts( $args );
            foreach( $recent_posts as $recent ){
              echo '<a href="' . get_permalink($recent["ID"]) . '">Latest Post &rarr;</a>';
            }
          ?>
        </h5>
      </aside>
    </header>
  </section>
<?php endif; ?>

<section class="wrap">
  <h1 class="list-head">Latest Blog Posts <?php if (is_category()) : ?>in "<?php echo single_cat_title( '', true ); ?>"<?php endif; ?><?php if (is_tag()) : ?>tagged "<?php echo single_tag_title( '', true ); ?>"<?php endif; ?></h1>
  <hr>
  <?php if ( have_posts() ) : ?>
    <ul class="post-list">
      <?php while ( have_posts() ) : the_post(); ?>
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
            <?php echo  get_the_excerpt(); ?>
          </p>
          <hr>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php endif; ?>
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