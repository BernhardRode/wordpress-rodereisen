<article <?php post_class(); ?>>

  <div class="row">
    <div class="col col-md-3 text-center">
      <a class="" href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('thumbnail', array('class' => 'img-circle')); ?>
      </a>
      <?php get_template_part('templates/entry-meta'); ?>
    </div>
    <div class="col col-md-9">
      <header>
        <h2 class="gradient-red">
          <?php the_title(); ?>
        </h2>
      </header>
      <div class="entry-content">
        <?php the_excerpt(); ?>

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
