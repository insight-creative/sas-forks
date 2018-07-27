<?php get_header(); ?>

<h1>Blog</h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
  <span><?php echo get_the_time('F jS, Y'); ?></span>
  <?php if (has_post_thumbnail(get_the_id())) : ?>
    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
  <?php endif; ?>
  <?php the_excerpt(); ?>
<?php endwhile; else: ?>
  <p class="tc"><?php _e('Blog coming soon!'); ?></p>
<?php endif; ?>

<?php previous_posts_link( 'Newer posts' ); ?>
<?php next_posts_link( 'Older posts' ); ?>

<?php get_footer(); ?>
