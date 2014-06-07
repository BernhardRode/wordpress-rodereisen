<div class="">
  <div class="row">
    <div class="col text-center col-md-4">
        <?php

          $next_post = get_next_post();
          if (!empty( $next_post )):
            $nextthumbnail = get_the_post_thumbnail($next_post->ID, array(150,150) );

          //echo $nextthumbnail;
        ?>
          <div class="">
            <a class="btn btn-lg  btn-block btn-primary" href="<?php echo get_permalink( $next_post->ID ); ?>">
              <i class="fa fa-toggle-left"></i>&nbsp;<?php echo $next_post->post_title; ?>
            </a>
          </div>
        <?php
          endif;
        ?>
    </div>
    <div class="col col-md-4">
      <div class="">
        <div class="text-center">
          <a class="btn btn-lg btn-block btn-primary" href="/angebote">Alle Angebote</a>
        </div>
      </div>
    </div>
    <div class="col col-md-4">
        <?php
          $previous_post = get_previous_post();
          if (!empty( $previous_post )):
            $previousthumbnail = get_the_post_thumbnail($previous_post->ID, array(150,150) );
            //echo $previousthumbnail;
        ?>

          <div class="">
            <a class="btn btn-lg btn-block btn-primary" href="<?php echo get_permalink( $previous_post->ID ); ?>">
              <?php echo $previous_post->post_title; ?>&nbsp;<i class="fa fa-toggle-right"></i>
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
      <article <?php post_class(); ?>>
        <div class="row">
          <div class="col col-md-4">
            <div class="text-center">
              <?php the_post_thumbnail('thumbnail', array('class' => 'img-circle img-shadow')); ?>
            </div>
          </div>
          <div class="col col-md-8">
            <h1 class="entry-title gradient"><?php the_title(); ?></h1>

            <?php the_content(); ?>
          </div>
        </div>
      </article>
    <?php endwhile; ?>
  </div>
</div>
