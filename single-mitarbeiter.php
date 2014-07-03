<?

class CacheAPC {

    var $iTtl = 3600; // Time To Live
    var $bEnabled = false; // APC enabled?

    // constructor
    function CacheAPC() {
        $this->bEnabled = extension_loaded('apc');
    }

    // get data from memory
    function getData($sKey) {
        $bRes = false;
        $vData = apc_fetch($sKey, $bRes);
        return ($bRes) ? $vData :null;
    }

    // save data to memory
    function setData($sKey, $vData) {
        return apc_store($sKey, $vData, $this->iTtl);
    }

    // delete data from memory
    function delData($sKey) {
        return (apc_exists($sKey)) ? apc_delete($sKey) : true;
    }
}

?>
<div class="box">
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?> itemscope itemtype="http://data-vocabulary.org/Person">
      <div class="row">
        <div class="col col-md-12">
          <a class="btn btn-primary pull-right" href="/mitarbeiter">Zurück</a>
        </div>
      </div>
      <div class="row">
        <div class="col col-md-4">
          <div class="text-center">
            <?php the_post_thumbnail('thumbnail', array('class' => 'img-circle img-shadow')); ?>
            <h2 class="gradient">Kontakt</h2>

            <ul class="list-inline">
            <?php if( get_field('field_538dece97dfcb') ): ?>
              <li>
                <a href="mailto:<?php the_field('field_538dece97dfcb'); ?>">
                  <i class="fa fa-envelope-square fa-3x"></i>
                </a>
              </li>
            <?php endif; ?>
            <?php if( get_field('field_538ded2b7dfcb') ): ?>
              <li>
                <a href="<?php the_field('field_538ded2b7dfcb'); ?>" target="_blank">
                  <i class="fa fa-google-plus-square fa-3x"></i>
                </a>
              </li>
            <?php endif; ?>
            <?php if( get_field('field_538dece97dfca') ): ?>
              <li>
                <a href="<?php the_field('field_538dece97dfca'); ?>" target="_blank">
                  <i class="fa fa-facebook-square fa-3x"></i>
                </a>
              </li>
            <?php endif; ?>
            <?php if( get_field('field_538de9d3ae668') ): ?>
              <li>
                <a href="<?php the_field('field_538de9d3ae668'); ?>" target="_blank">
                  <i class="fa fa-twitter-square fa-3x"></i>
                </a>
              </li>
            <?php endif; ?>
            </ul>
            <?php if( get_field('field_538dece97dfcb') ): ?>
              <div>
                <g:hangout render="createhangout" invites="[{ id : '<?php the_field('field_538dece97dfcb'); ?>', invite_type : 'EMAIL' }]"></g:hangout>
              </div>
            <?php endif; ?>
            <?php if( get_field('field_538ded2b7dfcb') ): ?>
              <div class="g-person" data-width="273" data-href="<?php the_field('field_538ded2b7dfcb'); ?>" data-layout="landscape" data-showtagline="false" data-showcoverphoto="false" data-rel="author"></div>
            <?php endif; ?>
          </div>
        </div>
        <!-- Fügen Sie dieses Tag nach dem letzten Widget-Tag ein. -->
        <script type="text/javascript">
          window.___gcfg = {lang: 'de'};

          (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/platform.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
        </script>
        <div class="col col-md-8">
          <?php
            list( $vorname, $nachname ) = explode( ' ', get_the_title(),2 );
          ?>
          <h1 class="entry-title gradient" itemprop="name"><?php echo $vorname; ?><strong><?php echo $nachname; ?></strong></h1>

          <?php the_content(); ?>

          <?php if( get_field('field_538ded2b7dfcb') ): ?>
            <?php
              $profile_url = get_field('field_538ded2b7dfcb');

              function get_user_id( $url ) {
                $parts = explode( '/', $url );
                return $parts[sizeof($parts)-2];
              }

              #$google_api_key_client = "AIzaSyC1C4Q0DGVvWjw5fFm26VO35X04IeV44LE";
              $google_api_key_server = "AIzaSyAdf6MnTLF2JLGCyPfXQlPdoiV6vRX1xT0";
              $json_url = "https://www.googleapis.com/plus/v1/people/" . get_user_id($profile_url) . "/activities/public?maxResults=5&key=";
              $json_url = $json_url . $google_api_key_server;

              $oCache = new CacheAPC();
              if ($oCache->bEnabled) { // if APC enabled
                  $google_plus_activities = $oCache->getData(get_user_id($profile_url));
                  if ( $google_plus_activities ) {
                    $google_plus_activities['cached'] = true;
                  } else {
                    $google_plus_activities = json_decode(file_get_contents($json_url), true);
                    $oCache->setData(get_user_id($profile_url),$google_plus_activities);
                    $google_plus_activities['cached'] = false;
                  }
                  $google_plus_activities['apc'] = true;
              } else {
                  $google_plus_activities = json_decode(file_get_contents($profile_url), true);
                  $google_plus_activities['cached'] = false;
                  $google_plus_activities['apc'] = false;
              }

              #override cache
              #$google_plus_activities = json_decode(file_get_contents($json_url), true);
            ?>
              <?php if( array_key_exists( 'items', $google_plus_activities )  && sizeof( $google_plus_activities['items'] ) > 0 ): ?>

              <h2 class="gradient-red">
                Von mir veröffentlicht und geteilt
              </h2>
              <?php #echo "<pre>" . json_encode($google_plus_activities, JSON_PRETTY_PRINT) . "</pre>"; ?>
              <ul class="list-unstyled">
                <?php
                foreach ($google_plus_activities['items'] as $key => $activity) {
                ?>
                  <li>
                    <div class="panel panel-default">
                        <?php
                          switch ( $activity['verb'] ) {
                            case 'share':
                              ?>
                                <div class="panel-heading">
                                  <h3 class="panel-title">
                                    <img class="img-circle" src="<?php echo $activity['object']['actor']['image']['url']; ?>" alt="<?php echo $activity['object']['actor']['displayName']; ?>">
                                    <a href="<?php echo $activity['object']['actor']['url']; ?>" target="_blank">
                                      <?php echo $activity['object']['actor']['displayName']; ?>
                                    </a>
                                    hat Folgendes ursprünglich geteilt:
                                  </h3>
                                </div>
                              <?php
                              break;
                            default:
                            ?>
                              <div class="panel-heading">
                                <h3 class="panel-title">
                                  Von mir veröffentlicht:
                                </h3>
                              </div>
                            <?php
                              break;
                          }
                        ?>

                      <div class="panel-body">
                        <?php
                          if (array_key_exists( 'title', $activity['object'] ) ) {
                        ?>
                          <h1><?php echo $activity['object']['title']; ?></h1>
                        <?php
                          }
                        ?>
                        <?php
                          if (array_key_exists( 'content', $activity['object'] ) ) {
                        ?>
                          <p><?php echo $activity['object']['content']; ?></p>
                        <?php
                          }
                        ?>
                        <?php
                          if (array_key_exists( 'attachments', $activity['object'] ) ) {
                        ?>
                          <?php
                            foreach ($activity['object']['attachments'] as $key => $attachment) {
                          ?>
                            <?php
                              if ( array_key_exists('displayName', $attachment) ) {
                            ?>
                            <h3 class="<?php echo $attachment['objectType']; ?>"><?php echo $attachment['displayName']; ?></h3>
                            <?php
                              }
                            ?>
                            <?php
                              if ( array_key_exists('content', $attachment) ) {
                            ?>
                              <blockquote><?php echo $attachment['content']; ?></blockquote>
                            <?php
                              }
                            ?>

                            <div class="text-center">
                            <?php
                              switch ($attachment['objectType']) {
                                case 'article':
                                  echo '<img src="' . $attachment['image']['url'] . '" class="img-thumbnail">';
                                  break;
                                case 'video':
                                  echo '<img src="' . $attachment['image']['url'] . '" class="img-thumbnail">';
                                  break;
                                case 'photo':
                                  echo '<img src="' . $attachment['image']['url'] . '" class="img-thumbnail">';
                                  break;

                                default:
                                  break;
                              }
                            ?>
                            </div>
                          <?php
                            }
                          ?>

                        <?php
                          }
                        ?>

                      </div>
                      <div class="panel-footer text-muted">
                        <?php
                          $date = new DateTime($activity['published']);
                        ?>
                        Veröffentlicht <?php echo $date->format('d.M Y'); ?> um <?php echo $date->format('H:i:s'); ?> Uhr

                        <div class="pull-right">
                          <a class="btn btn-xs btn-primary" target="_blank" href="<?php echo $activity['url']; ?>">
                            Anzeigen <i class="fa fa-share"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                <?php
                  }
                ?>
              </ul>
              <small class="text-muted">cached=<?php echo $google_plus_activities['cached']; ?>,apc=<?php echo $google_plus_activities['apc']; ?></small>
              <?php endif; ?>
            <?php endif; ?>


          <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
        </div>
      </div>
    </article>
  <?php endwhile; ?>
</div>
