<article <?php post_class(); ?>>

  <div class="row">
    <div class="col col-xs-3">
      <div class="text-center">
        <a class="" href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('thumbnail', array('class' => 'img-circle img-responsive img-shadow')); ?>
        </a>
        <?php get_template_part('templates/entry-meta'); ?>
      </div>
    </div>
    <div class="col col-xs-9">
      <header>
        <h2 class="gradient-red">
          <?php the_title(); ?>
        </h2>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>

        <a class="btn btn-danger pull-right" href="<?php the_permalink(); ?>">
          Weiterlesen...
        </a>
      </div>
    </div>
  </div>
  <footer>
    <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
  </footer>
  <?php // comments_template('/templates/comments.php'); ?>
</article>
