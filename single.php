<?php
  get_header();
  if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<?php
  if (has_post_thumbnail( $post->ID ) ) {
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
  }
?>

<section class="jumbotron text-center section-inverse" style="background-image: url(<?php get_image_uri('sas-news-banner.jpg'); ?>);">
  <div class="container-narrow">
    <h1 class="jumbotron-title jumbotron-title-small"><?php the_title(); ?></h1>
    <p class="mt0 fw2"><?php echo get_the_time('F jS, Y'); ?></p>
  </div>
</section>

<section class="section container-narrow">
  <?php
    the_post_thumbnail('full');
    the_content();
  ?>

  <?php endwhile; else: ?>
  	<p><?php _e('Sorry, this page does not exist.'); ?></p>
  <?php endif; ?>
</section>

<?php get_footer(); ?>
