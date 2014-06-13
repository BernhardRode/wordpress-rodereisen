<article <?php post_class(); ?>>
  <div class="col-md-3 angebot-container">
    <div class="hidden-xs">
      <a href="<?php the_permalink(); ?>">
        <div class="box">
          <div class="row hidden-xs">
            <div class=" col col-xs-6 col-xs-offset-3 text-center">
              <?php the_post_thumbnail('thumbnail', array('class' => 'img-circle img-responsive')); ?>
            </div>
          </div>
          <div class="row">
            <div class=" col col-xs-12 text-center">
              <h2 class="titel gradient-red">
                <?php the_title(); ?>
              </h2>
            </div>
          </div>
          <div class="row">
            <div class=" col col-xs-12">
              <div class="preis gradient">
                <div class="text text-center">
                  <?php if( get_field('field_53808a959373e') ): ?>
                    ab <?php the_field('field_53808a959373e'); ?> Euro
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="row visible-xs">
      <div class="col col-xs-3">
        <?php the_post_thumbnail('thumbnail', array('class' => 'img-circle img-responsive')); ?>
      </div>
      <div class="col col-xs-12">
        <h2 class="titel gradient-red">
          <?php the_title(); ?>
        </h2>
        <div class="preis gradient">
          <div class="text text-center">
            <?php if( get_field('field_53808a959373e') ): ?>
              ab <?php the_field('field_53808a959373e'); ?> Euro
            <?php endif; ?>
          </div>
        </div>
        <a class="btn btn-primary btn-xs btn-block" href="<?php the_permalink(); ?>">Details</a>
      </div>
    </div>
  </div>
</article>

