<?php get_header(); ?>

<section class="jumbotron text-center" style="background-image: url(<?php get_image_uri('sas-news-banner.jpg'); ?>);">
  <div class="container">
    <h1 class="jumbotron-title">Contact SAS Forks</h1>
  </div>
</section>

<section class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="card">
      <h2 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    </div>
  <?php endwhile; else: ?>
    <p class="tc"><?php _e('Blog coming soon!'); ?></p>
  <?php endif; ?>

  <?php previous_posts_link( 'Newer posts' ); ?>
  <?php next_posts_link( 'Older posts' ); ?>
</section>

<?php get_footer(); ?>
