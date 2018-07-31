<?php
  get_header();
  if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
<?php endif; ?>

<section class="jumbotron text-center" style="background-image: url(<?php echo $image[0]; ?>);">
  <div class="container">
    <h1 class="jumbotron-title"><?php the_title(); ?></h1>
  </div>
</section>

<section class="container">
  <?php the_content(); ?>

  <?php endwhile; else: ?>
  	<p><?php _e('Sorry, this page does not exist.'); ?></p>
  <?php endif; ?>
</section>

<?php get_footer(); ?>
