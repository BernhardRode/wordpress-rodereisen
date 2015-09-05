<?php //get_template_part('templates/page', 'header'); ?>
<div class="row hidden-xs">
  <div class="col col-lg-12">
    <div class="page-header">
      <h1 class="gradient-red">Wir kümmern uns. Um Sie.</h1>
    </div>
  </div>
</div>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<div class="row">
  <?php query_posts($query_string . '&orderby=rand'); ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content-mitarbeiter', get_post_format()); ?>
  <?php endwhile; ?>
</div>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
