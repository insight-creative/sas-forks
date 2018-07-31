<?php get_header(); ?>

<?php

class Slide {
  function __construct($heading, $subheading, $image, $linkText, $link) {
    $this->heading = $heading;
    $this->subheading = $subheading;
    $this->image = $image;
    $this->linkText = $linkText;
    $this->link = $link;
  }
}

$slides = array(
  new Slide('Engineered tough', 'Auto salvage forks • Engine pullers • Grapples • Quick couplers', 'sas-vulture-wire-picker-banner.jpg', 'SAS Extreme', '/product/sas-extreme-auto-processor/'),
  new Slide('Engineered tough', 'Auto salvage forks • Engine pullers • Grapples • Quick couplers', 'homepage-banner4.jpg', 'Ultimate Adjustible Forks', '/product/ultimate-adjustable-forks/'),
  new Slide('Engineered tough', 'Auto salvage forks • Engine pullers • Grapples • Quick couplers', 'sasforks-dumpster-banner.jpg', 'Dumpsters/Buckets', '/product-category/dumpsters-and-buckets/'),
  new Slide('Engineered tough', 'Auto salvage forks • Engine pullers • Grapples • Quick couplers', 'sas-railroad-coupler-banner.jpg', 'Railroad Couplers', '/product/railroad-coupler/'),
  new Slide('Engineered tough', 'Auto salvage forks • Engine pullers • Grapples • Quick couplers', 'sas-auto-salvage-forks-banner.jpg', 'Auto Salvage Forks', '/product-category/auto-salvage-forks/')
);

?>

<section>
  <ul id="slides">
    <?php
      $i = 0;
      foreach ($slides as $slide):
    ?>
      <li class="slide <?php if ($i == 0) { echo 'showing'; } ?>" style="background-image: url(<?php get_image_uri($slide->image); ?>);">
        <div>
          <span class="uppercase"><?php echo $slide->subheading ?></span>
          <h2 class="jumbotron-title"><?php echo $slide->heading ?></h2>
          <a class="btn btn-primary" href="<?php echo $slide->link ?>"><?php echo $slide->linkText ?></a>
        </div>
      </li>
    <?php $i++; endforeach; ?>
  </ul>
  <div class="controls">
    <button class="slider-control" id="previous"><i class="fa fa-chevron-left"></i> <span class="sr-only">Previous</span></button>
    <button class="slider-control" id="pause"><i class="fa fa-pause"></i> <span class="sr-only">Pause</span></button>
    <button class="slider-control" id="next"><i class="fa fa-chevron-right"></i> <span class="sr-only">Next</span></button>
  </div>
</section>

<section class="section container-narrow text-center">
  <p>SAS FORKS™ and attachments are built to the rigorous specifications resulting in a tool tough enough to handle severe conditions and heavier loads, this gives operators performance, durability, and an extended useful life. The ultimate the goal of SAS is to eliminate down time.</p>
</section>

<section class="container">
  <h2 class="b text-center uppercase">Our core services</h2>
  <i class="fa fa-check"></i>
  <h3 class="b uppercase">Our specialty</h3>
  <p>We specialize in manufacturing 6' to 18' fork assemblies for use in the auto salvage industry. Our extensive experience in the auto salvage market, where operators are especially hard on their equipment, has helped us develop insights into other industry segments which demand performance from their forks in the most extreme environments.</p>

  <i class="fa fa-arrows-alt"></i>
  <h3 class="b uppercase">Built for your equipment</h3>
  <p>SAS FORKS and attachments are manufactured to fit many types of equipment, including wheel loaders, excavators and forklifts (fork trucks). We engineer custom products for telehandlers, skid steers and backhoes.</p>

  <i class="fa fa-share-alt"></i>
  <h3 class="b uppercase">Multiple applications</h3>
  <p>Products are delivered with a wide variety of functions. Fixed and adjustable widths of forks and carriages as well as the SAS Quick Coupler System for wheel loaders, for use in multiple material handling applications including rock quarries, oil fields, steel mills and defense applications.</p>
  <img src="<?php get_image_uri('sas-product-collage.jpg'); ?>" alt="SAS products">

</section>

<section class="section cover" style="background-image: url(<?php get_image_uri('distorted-backdrop.jpg'); ?>);">
  <div class="container">
    <img src="<?php get_image_uri('sas-dumpster.png'); ?>" alt="Dumpster bucket">
    <div class="text-center">
      <h2 class="uppercase"><span class="small b">Product spotlight</span><br><span class="b">Dumpsters</span><br>for wheel loaders</h2>
      <p>Use as collection bins for engines, transmissions, wheels, wire and or cores. Smaller sizes save space in the processing area on site.</p>
      <a class="btn btn-primary" href="#">Learn more</a>
    </div>
  </div>
</section>

<section class="section container text-center">
  <blockquote>
    <p class="b">These SAS Dumpsters are perfect! Right now I'm driving my new L90H and simply quick coupled right to the SAS Dumpster and hauling aluminum wheels from my wheel break down area. These dumpsters are great for wire harnesses and aluminum radiators recycling collection. Works wonderful! I'm really happy with it!</p>
    <p>—BRAD, US AUTO, MICHIGAN—</p>
  </blockquote>
  <p>Find more customer reviews on each of our product pages.</p>
  <a class="btn btn-primary" href="/products">Learn more</a>
</section>

<section class="section section-inverse cover" style="background-image: url(<?php get_image_uri('contact-background.jpg'); ?>);">
  <div class="container text-center">
    <h2 class="section-title">Have questions?</h2>
    <p class="lead">We're here to help you—contact SAS Forks today!</p>
    <img class="mv" src="<?php get_image_uri('sas-forks-logo3.png'); ?>" alt="SAS Forks">
    <p class="lead"><a href="tel:877-727-3675">(877) 727-3675</a></p>
    <a class="btn btn-inverse" href="/contact">Contact us now</a>
  </div>
</section>

<?php get_footer(); ?>
