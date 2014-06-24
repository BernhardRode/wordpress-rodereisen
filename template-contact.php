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
      <?php // get_template_part('templates/content', 'page'); ?>
      <div class="wpcf7" id="wpcf7-f85-p83-o1">
      <div class="screen-reader-response"></div>
      <form action="/kontakt/#wpcf7-f85-p83-o1" method="post" class="wpcf7-form" novalidate="novalidate">
      <div style="display: none;">
      <div class="wpcf7-response-output wpcf7-display-none"></div></div>
      <input type="hidden" name="_wpcf7" value="85">
      <input type="hidden" name="_wpcf7_version" value="3.8.1">
      <input type="hidden" name="_wpcf7_locale" value="de_DE">
      <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f85-p83-o1">
      <input type="hidden" name="_wpnonce" value="7e45a9d54a">
      </div>

      <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label hidden-xs">Name</label><p></p>
      <div class="col-sm-10">
            <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Vor- &amp; Nachname"  autocomplete="name"></span>
          </div>
      <p></p></div>
      <div class="clearfix"></div>
      <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label hidden-xs">E-Mail</label><p></p>
      <div class="col-sm-10">
            <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="E-Mail Adresse" autocomplete="email"></span>
          </div>
      <p></p></div>
      <div class="clearfix"></div>
      <div class="form-group">
          <label for="inputMessage" class="col-sm-2 control-label hidden-xs">Nachricht</label><p></p>
      <div class="col-sm-10">
            <?php
              $text = '';
              if (!empty($_GET['url']) && !empty($_GET['title'])) {
                $text = 'Ich interessiere mich für das Angebot "' . $_GET['title'] . '".';
              }
            ?>
            <span class="wpcf7-form-control-wrap your-message">
              <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="Ihre Nachricht an uns"><?php echo $text; ?></textarea>
            </span>
          </div>
      <p></p></div>
      <div class="clearfix"></div>
      <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success btn-block">Senden</button>
          </div>
      <p></p></div>
      </form>
    </div>
    <div class="col col-sm-6 text-center hidden-xs">
      <br>
      <i class="fa fa-question-circle fa-5x gradient-red"></i>
      <h1 class="gradient">Sie haben noch fragen</h1>
      <h2>Wir haben die Antworten!!!!</h2>
    </div>
  </div>
</section>
