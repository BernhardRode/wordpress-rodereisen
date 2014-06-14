<article <?php post_class(); ?>>
  <div class="hidden-xs">
    <div class="col col-xs-3">
      <div class="box angebot-container text-center">
        <div class="row">
          <div class="col col-xs-12 angebot-title">
            <h2 class="gradient-red">
              <?php the_title(); ?>
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col col-xs-offset-2 col-xs-8">
            <a class="" href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('thumbnail', array('class' => 'img-circle img-responsive img-shadow')); ?>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col col-xs-12">
            <h3 class="gradient">
              <?php if( get_field('field_53808a959373e') ): ?>
                ab <?php the_field('field_53808a959373e'); ?> Euro
              <?php endif; ?>
            </h3>
          </div>
        </div>
        <div class="row">
          <div class="col col-xs-12">
            <a class="btn btn-primary btn-xs btn-block" href="<?php the_permalink(); ?>">Details</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="visible-xs">
    <div class="col col-lg-12">
      <div class="row">
        <div class="col col-xs-9">
          <h2 class="gradient-red">
            <?php the_title(); ?>
          </h2>
          <div class="preis gradient">
            <div class="text text-center">
              <?php if( get_field('field_53808a959373e') ): ?>
                ab <?php the_field('field_53808a959373e'); ?> Euro
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="col col-xs-3">
          <br>
          <a class="" href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('thumbnail', array('class' => 'img-circle img-responsive img-shadow')); ?>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col col-xs-9">
          <a class="btn btn-primary btn-xs btn-block" href="<?php the_permalink(); ?>">Details</a>
        </div>
      </div>
    </div>
  </div>
</article>

