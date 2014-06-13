<?php
/*
Template Name: Contact Template
*/
?>
<?php get_template_part('templates/page', 'header'); ?>
<section class="box">
  <?php //get_template_part('templates/page', 'header'); ?>
  <div class="row">
    <div class="col col-sm-6">
      <?php get_template_part('templates/content', 'page'); ?>
    </div>
    <div class="col col-sm-6 text-center hidden-xs">
      <br>
      <i class="fa fa-question-circle fa-5x gradient-red"></i>
      <h1 class="gradient">Sie haben noch fragen</h1>
      <h2>Wir haben die Antworten!!!!</h2>
    </div>
  </div>
</section>
