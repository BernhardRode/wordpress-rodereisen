<div class="">
  <div class="box">
    <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class(); ?>>
        <div class="row">
          <div class="col col-md-4">
            <div class="text-center">
              <?php the_post_thumbnail('thumbnail', array('class' => 'img-circle img-shadow')); ?>
              <span itemprop="image" hidden>http://www.rodereisen.de<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?></span>
              <?php get_template_part('templates/entry-meta'); ?>

            </div>
          </div>
          <div class="col col-md-8">
            <h1 class="entry-title gradient" itemprop="name"><?php the_title(); ?></h1>

            <div itemprop="description">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </article>
    <?php endwhile; ?>
  </div>
</div>
