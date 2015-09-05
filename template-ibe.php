<?php
/*
Template Name: IBE Template
*/
?>
<?php if( get_field('field_5392b435732f7') ): ?>
  <div class="ibe">
    <iframe src="" frameborder="0" marginheight="0" marginwidth="0" frameborder="0" scrolling="auto" id="ibe" name="ibe"></iframe>
  </div>


  <script>
    var $myIframe = $('#ibe');
    var myIframe = $myIframe[0];

    var MutationObserver = window.MutationObserver || window.WebKitMutationObserver;

    myIframe.addEventListener('load', function() {
      setIframeHeight();

      var target = myIframe.contentDocument.body;

      var observer = new MutationObserver(function(mutations) {
        setIframeHeight();
      });

      var config = {
        attributes: true,
        childList: true,
        characterData: true,
        subtree: true
      };
      observer.observe(target, config);
    });

    myIframe.src = '<?php the_field('field_5392b435732f7'); ?>';

    function setIframeHeight() {
      $myIframe.height('auto');
      var newHeight = $('html', myIframe.contentDocument).height();
      $myIframe.height(newHeight);
    }
  </script>
<?php endif; ?>
