<?php
/*
Template Name: Home Template
*/
?>
<?php //get_template_part('templates/page', 'header'); ?>



<div class="row hidden-xs">
  <div class="col col-lg-12">
    <?php get_template_part('templates/row-rr-slider'); ?>
  </div>
</div>

<div class="row hidden-xs">
  <div class="col col-lg-12">
    <?php //get_template_part('templates/content', 'page'); ?>
  </div>
</div>

<?php get_template_part('templates/row-open'); ?>

<?php // get_template_part('templates/row-video'); ?>

<div class="hidden-xs">
  <?php get_template_part('templates/row-booking'); ?>
  <?php //get_template_part('templates/row-about'); ?>
</div>

<?php get_template_part('templates/row-personal-offers'); ?>
