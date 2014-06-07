<div class="">
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
