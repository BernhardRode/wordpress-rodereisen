<?php get_template_part('templates/page', 'header'); ?>

<div class="box">
  <div class="row">
    <div class="col col-md-6">
      <div class="alert alert-warning">
        <?php _e('Sorry, but the page you were trying to view does not exist.', 'roots'); ?>
      </div>
    </div>
    <div class="col col-md-6">
      <p><?php _e('It looks like this was the result of either:', 'roots'); ?></p>
      <ul>
        <li><?php _e('a mistyped address', 'roots'); ?></li>
        <li><?php _e('an out-of-date link', 'roots'); ?></li>
      </ul>
    </div>
  </div>
</div>

<?php get_search_form(); ?>
