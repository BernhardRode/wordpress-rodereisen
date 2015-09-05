<?php
/*
Template Name: Contact Template
*/
?>

<?php
    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
        wpcf7_enqueue_scripts();
    }

    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
        wpcf7_enqueue_styles();
    }
?>
<?php get_template_part('templates/page', 'header'); ?>
<section class="box">
 <div class="row">
    <div class="col col-sm-12">
        <?php echo do_shortcode( '[contact-form-7 id="8" title="Kontaktformular"]' ); ?>
    </div>
  </div>
</section>