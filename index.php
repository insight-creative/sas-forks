<?php get_header(); ?>

<section class="jumbotron text-center" style="background-image: url(<?php get_image_uri('sas-news-banner.jpg'); ?>);">
  <div class="container">
    <h1 class="jumbotron-title">SAS News</h1>
  </div>
</section>

<section class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="card cf">
      <div class="col-70">
        <?php if (has_post_thumbnail(get_the_id())) : ?>
          <a class="image-link" href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
        <?php endif; ?>
      </div>
      <div class="col-30">
        <h2 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <span class="card-meta"><?php echo get_the_time('F jS, Y'); ?></span>
        <?php the_excerpt(); ?>
      </div>
    </div>
  <?php endwhile; else: ?>
    <p class="tc"><?php _e('Blog coming soon!'); ?></p>
  <?php endif; ?>

  <div class="mv text-center">
    <?php previous_posts_link( 'Newer posts' ); ?>
    <?php next_posts_link( 'Older posts' ); ?>
  </div>
</section>

<?php get_footer(); ?>
