<?php
/**
 * Template Name: Distributors
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
      <h1 class="jumbotron-title">Find a Distributor</h1>
    </div>
  </section>
  <section class="flex-container section container">
    <div class="col-50" id="regionSearch">
      <h2>Select a region to find a distributor near you</h2>
        <select class="choiceList" name = "states" required>
          <option value="Region Select">Select your region</option>
          <option value="USA">USA</option>
          <option value="Australia">Australia</option>
          <option value="Europe">Europe</option>
        </select>
        <p id=selectError></p>
        <a class="btn btn-primary searchButton">Find a distributor</a>
    </div>
  </section>
</main>

<?php get_footer(); ?>
