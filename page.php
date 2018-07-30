<?php
  get_header();
  if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<section class="jumbotron text-center">
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
