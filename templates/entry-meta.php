<div class="text-muted">
  Veröffentlicht am
  <time class="published" datetime="<?php echo get_the_time('c'); ?>">
    <?php echo get_the_date(); ?>
  </time>
  <time class="updated" datetime="<?php echo get_the_time('c'); ?>" hidden>
    <?php echo get_the_date(); ?>
  </time>

  <p class="byline author vcard">
    <?php echo __('By', 'roots'); ?>
    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn">
      <?php echo get_the_author(); ?>
    </a> - <a href="<?php echo the_author_meta('url'); ?>?rel=author" rel="author-Link" target="_blank" title="Google Plus Profile von <?php echo get_the_author(); ?>"><i class="fa fa-google-plus"></i></a>
  </p>
</div>
