<article <?php post_class(); ?> itemscope itemtype="http://data-vocabulary.org/Person">
  <div class="col-xs-3 mitarbeiter-container">
    <a href="<?php the_permalink(); ?>">
      <div class="box hidden-xs">
        <div class="row">
          <div class="col col-xs-8 col-xs-offset-2 text-center">
            <?php the_post_thumbnail('thumbnail', array('class' => 'img-circle img-responsive')); ?>
          </div>
        </div>
        <div class="row hidden-xs">
          <div class=" col col-xs-12 text-center">
            <h2 class="titel gradient">
              <?php
                list( $vorname, $nachname ) = explode( ' ', get_the_title(),2 );
              ?>
              <span itemprop="name"><?php echo $vorname; ?><br/><strong><?php echo $nachname; ?></strong></span>
            </h2>
          </div>
        </div>
      </div>
      <div class="visible-xs">
        <?php the_post_thumbnail('thumbnail', array('class' => 'img-circle img-responsive')); ?>
      </div>
    </a>
  </div>
</article>
