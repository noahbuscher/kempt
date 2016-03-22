<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if (($img = has_post_thumbnail())): ?>

<!-- Photo = True -->
<section class="full masthead_image" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>);">
  <div class="overlay">
  <header>
    <hgroup>
      <h1><?php echo get_the_title(); ?></h1>
      <h4>Posted in
        <?php
        $categories = get_the_category();
        $separator = ' ';
        $output = '';
        if($categories){
          foreach($categories as $category) {
            $output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
          }
        echo trim($output, $separator);
        }
      ?>
      </h4>
    </hgroup>
  </header>
  </div>
</section>

<section class="wrap">
  <article>
    <?php the_content(); ?>

<!-- Photo = False -->
<?php else: ?>
  <section class="wrap no-photo">
    <h1><?php echo get_the_title(); ?></h1>
    <article>
      <?php the_content(); ?>

<?php endif; ?> <!-- end photo/no-photo bizness -->

  <!-- Article Footer -->
  <footer>
    <hr>
    <h6>
      Posted <time><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></time> in
      <?php
        $categories = get_the_category();
        $separator = ' ';
        $output = '';
        if($categories){
          foreach($categories as $category) {
            $output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
          }
        echo trim($output, $separator);
        }
      ?>
    </h6>
    <!-- tags action-->
    <?php
      $posttags = get_the_tags($post->ID);
      if ($posttags) {
        echo '<br/>';
        foreach($posttags as $tag) {
          echo '<a class="tag" href="' . get_tag_link($tag->term_id) . '">'.$tag->name.'</a>';
        }
      }
    ?>
    <a href="http://twitter.com/share?url=<?php echo get_permalink(); ?>&text=<?php echo get_the_title();?>" class="twitter button">Share on Twitter</a>
  </footer>

  </article>

</section> <!-- End wrapper for both -->

<?php
$prev_link = get_previous_post_link();
$next_link = get_next_post_link();
?>
<?php if ($prev_link || $next_link) : ?>
<section class="more-posts">
  <hr>
  <nav class="pagination">
    <div class="right next-posts"><?php next_post_link('%link', 'Next Post &rarr;') ?></div>
    <div class="left prev-posts"><?php previous_post_link('%link', '&larr; Previous Post') ?></div>
  </nav>
</section>
<?php endif; ?>

</div> <!-- End Page Wrap -->
<?php endwhile; endif; ?>

<?php get_footer(); ?>