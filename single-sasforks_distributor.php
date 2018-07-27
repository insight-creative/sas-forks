<?php get_header(); ?>

<h1><?php the_title(); ?></h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php
  $contactId = get_field('contact_form')[0]->ID;
  echo do_shortcode("[contact-form-7 id='{$contactId}']");
?>

<address>
  <strong><?php the_field('name'); ?></strong><br>
  <?php the_field('address'); ?>
</address>

<p>
  Email: <a href="mailto:<?php the_field('contact_email'); ?>"><?php the_field('contact_name'); ?></a><br>
  Phone: <?php the_field('contact_phone_number'); ?><br>
  <?php if (the_field('contact_fax')): ?>Fax: <?php the_field('contact_fax'); ?><br><?php endif; ?>
  <a href="<?php the_field('contact_website'); ?>">Visit our website</a>
</p>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
