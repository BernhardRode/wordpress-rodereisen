<div class="">
  <div class="row non-printable">
    <div class="col text-center col-xs-4">
        <?php

          $next_post = get_next_post();
          if (!empty( $next_post )):
            $nextthumbnail = get_the_post_thumbnail($next_post->ID, array(150,150) );

          //echo $nextthumbnail;
        ?>
          <div class="">
            <a class="btn btn-lg  btn-block btn-primary" href="<?php echo get_permalink( $next_post->ID ); ?>">
              <i class="fa fa-toggle-left"></i><span class="hidden-xs">&nbsp;<?php echo $next_post->post_title; ?></span>
            </a>
          </div>
        <?php
          endif;
        ?>
    </div>
    <div class="col col-xs-4">
      <div class="">
        <div class="text-center">
          <a class="btn btn-lg btn-block btn-primary" href="/angebote">Übersicht</a>
        </div>
      </div>
    </div>
    <div class="col col-xs-4">
        <?php
          $previous_post = get_previous_post();
          if (!empty( $previous_post )):
            $previousthumbnail = get_the_post_thumbnail($previous_post->ID, array(150,150) );
            //echo $previousthumbnail;
        ?>

          <div class="">
            <a class="btn btn-lg btn-block btn-primary" href="<?php echo get_permalink( $previous_post->ID ); ?>">
              <span class="hidden-xs">&nbsp;<?php echo $previous_post->post_title; ?>&nbsp;</span><i class="fa fa-toggle-right"></i>
            </a>
          </div>
        <?php
          endif;
        ?>
    </div>
  </div>
</div>
<div class="margin-top-20">
  <div class="box">
    <?php while (have_posts()) : the_post(); ?>
      <?php
        $permalink = urlencode(get_the_permalink());
        $title = urlencode(get_the_title());
        $kontakt_url = "/kontakt/?url=" . $permalink . "&title=" . $title;
      ?>
      <article <?php post_class(); ?>>
        <div class="row">
          <div class="col col-md-4">
            <div class="text-center">
              <?php the_post_thumbnail('thumbnail', array('class' => 'img-circle img-shadow')); ?>
              <div class="hidden-xs margin-top-20">
                <a class="btn btn-danger btn-lg btn-block" href="<?php echo $kontakt_url; ?>">Informationen anfordern</a>
              </div>
            </div>
          </div>
          <div class="col col-md-8">
            <h1 class="entry-title gradient"><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </div>
        </div>
        <div class="row visible-xs">
          <div class="col col-lg-12">
            <a class="btn btn-danger btn-lg btn-block" href="<?php echo $kontakt_url; ?>">Informationen anfordern</a>
          </div>
        </div>
      </article>
    <?php endwhile; ?>
  </div>
</div>
