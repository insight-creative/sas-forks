<?php
  get_header();
  if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<?php if (class_exists('WooCommerce') && is_woocommerce()) : ?>
  <?php woocommerce_breadcrumb(); ?>
<?php endif; ?>

<h1><?php the_title(); ?></h1>

<?php the_content(); ?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
