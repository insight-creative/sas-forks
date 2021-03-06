<?php
/**
 * Template Name: Locations Distributors
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sas-forks
 */
get_header();

?>
<main role="main">
  <section class="jumbotron text-center" style="background-image: url(<?php get_image_uri('sas-news-banner.jpg'); ?>);">
    <div class="container">
      <h1 class="jumbotron-title">SAS Forks Distributors</h1>
    </div>
  </section>
  <section class="flex-container section container">
    <div class="col-30">
      <div id="mapContainer">
        <?php echo do_shortcode('[wpgmza id="2"]'); ?>
      </div>
      <img src="http://localhost/sasForksTest/wp-content/uploads/2015/01/alta-equipment-company-logo.jpg" alt="Alta Equipment Company Logo" class = "contactLogo">
      <h3><b>Alta Equipment Company</b></h3>
      <p>
        Address: 56195 Pontiac Trail<br>New Hudson, MI 48165 USA<br>
        Email: <a href="mailto:bill.theile@altaequipment.com">Bill Theile</a><br>
        Phone: (586) 292-0985<br>
        <p><b>For Michigan customers, contact our Michigan distributor Alta Equipment</b></p>
        <a class="btn btn-primary" href="/contact/michigan-distributor/">Contact Alta Equipment</a>
      </p>
    </div>
    <div class="col-30 firstMap">
      <div id="mapContainer">
        <?php echo do_shortcode('[wpgmza id="3"]'); ?>
      </div>
      <img src="http://localhost/sasForksTest/wp-content/uploads/2015/01/scraptech-logo.jpg" alt="ScrapTech Logo" class = "contactLogo">
      <h3><b>ScrapTech</b></h3>
      <p>
        Address: P.O. Box 105<br>Yarra Junction, Victoria AUS 3797<br>
        Email: <a href="mailto:dave.cameron@scraptech.com.au/">Dave Cameron</a><br>
        Phone: 0438 732 063<br>
        <p><b>For Australia customers, contact our Australia distributor ScrapTech</b></p>
        <a class="btn btn-primary" href="/contact/australia-distributor/">Contact ScrapTech</a>
      </p>
    </div>
    <div class="col-30">
      <div id="mapContainer">
        <?php echo do_shortcode('[wpgmza id="4"]'); ?>
      </div>
      <img src="" alt="" class = "contactLogo">
      <h3><b>BT Products - Experts in Recycling</b></h3>
      <p>
        Address: Branchweg 3<br>5705 DR Helmond, EU Netherlands<br>
        Email: <a href="mailto:barbara@expertsinrecycling.com">Barbara Tumulla</a><br>
        Phone: +31 40 8442468<br>
        <p><b>For Europe customers, contact our Europe distributor BT Products</b></p>
        <a class="btn btn-primary" href="/contact/europe-distributor/">Contact BT Products</a>
      </p>
    </div>
  </section>

</main>

<?php get_footer(); ?>
