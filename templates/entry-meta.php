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
    <?php echo get_the_author(); ?> auf <a href="<?php echo the_author_meta('url'); ?>" rel="author" target="_blank" title="Google Plus Profile von <?php echo get_the_author(); ?>" class="fn">Google+</a>
  </p>
  <?php $user_info = get_userdata(); ?>
  <g:hangout render="createhangout" invites="[{ id : '<?php echo $user_info->user_email; ?>', invite_type : 'EMAIL' }]"></g:hangout>
  <script type="text/javascript">
    window.___gcfg = {lang: 'de'};

    (function() {
      var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
      po.src = 'https://apis.google.com/js/platform.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
  </script>
</div>
