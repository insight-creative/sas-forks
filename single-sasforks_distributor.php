<?php
  get_header();
  if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<?php
  if (has_post_thumbnail( $post->ID ) ) {
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
  }
?>

<main role="main">
  <section class="jumbotron text-center" style="background-image: url(<?php echo $image[0]; ?>);">
    <div class="container">
      <h1 class="jumbotron-title"><?php the_title(); ?></h1>
    </div>
  </section>

  <section class="container-narrow">
    <?php the_content(); ?>
  </section>

  <section class="container cf flex-container-reverse">
    <div class="col-50">
      <?php
        $contactId = get_field('contact_form')[0]->ID;
        echo do_shortcode("[contact-form-7 id='{$contactId}']");
      ?>
    </div>

    <div class="col-50">
      <?php if (get_field('distributor_logo')): ?>
        <img src="<?php the_field('distributor_logo'); ?>" alt="<?php the_field('name'); ?>">
      <?php endif; ?>
      <address>
        <strong><?php the_field('name'); ?></strong><br>
        <?php the_field('address'); ?>
      </address>

      <p>
        Email: <a href="mailto:<?php the_field('contact_email'); ?>?subject=Inquiry%20from%20sasforks.com"><?php the_field('contact_name'); ?></a> <a href="mailto:<?php the_field('contact_2_email'); ?>?subject=Inquiry%20from%20sasforks.com"><?php the_field('contact_2_name'); ?></a><br>
        Phone: <?php the_field('contact_phone_number'); ?><br>
        <?php if (get_field('contact_fax')): ?>Fax: <?php the_field('contact_fax'); ?><br><?php endif; ?>
        <a href="<?php the_field('contact_website');?>">Website</a>
      </p>
    </div>

    <?php endwhile; else: ?>
    	<p><?php _e('Sorry, this page does not exist.'); ?></p>
    <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>
