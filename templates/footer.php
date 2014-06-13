<footer class="hidden-xs non-printable">
  <div class="container">
    <div class="row">
      <div class="col-xs-3">
        <h4>reisebüro<strong>rode</strong> gmbh</h4>
        <address>
          <abbr title="E-Mail">e:</abbr> <a href="mailto:info@rodereisen.de"><span property="v:mail">info@rodereisen.de<span property="v:tel"></a><br>
          <abbr title="Fax">f:</abbr> +49 (0)7062 949994
        </address>
        <span>ust.id. DE145781171</span>
      </div>
      <div class="col-xs-3">
        <address rel="v:address">
          <div typeof="v:Address">
            <h4>standort<strong>beilstein</strong></h4>
            <span property="v:street-address">oberstenfelderstr. 16</span><br>
            d-71717 beilstein<br>
            <abbr title="Phone">p:</abbr> <a href="tel:+49706294990"><span property="v:tel">+49 (0)7062 94990</span></a>
          </div>
        </address>
      </div>
      <div class="col-xs-3">
        <address rel="v:address">
          <div typeof="v:Address">
            <h4>standort<strong>steinheim</strong></h4>
            <span property="v:street-address">im klostermuseum</span><br>
            <span property="v:locality">d-71711 steinheim</span><br>
            <abbr title="Phone">p:</abbr> <a href="tel:+49714481550"><span property="v:tel">+49 (0)7144 81550</span></a>
          </div>
        </address>
      </div>
      <div class="col-xs-3">
        <h4>soziale<strong>medien</strong></h4>
        <ul class="list-inline">
          <li>
            <a href="https://plus.google.com/u/0/+rodereisende" target="_blank">
              <i class="fa fa-google-plus fa-3x"></i>
            </a>
          </li>
          <li>
            <a href="https://www.facebook.com/ReisebueroRode" target="_blank">
              <i class="fa fa-facebook fa-3x"></i>
            </a>
          </li>
          <li>
            <a href="https://www.twitter.com/ReisebueroRode" target="_blank">
              <i class="fa fa-twitter fa-3x"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <?php function auto_copyright($year = 'auto'){ ?>
       <?php if(intval($year) == 'auto'){ $year = date('Y'); } ?>
       <?php if(intval($year) == date('Y')){ echo intval($year); } ?>
       <?php if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); } ?>
       <?php if(intval($year) > date('Y')){ echo date('Y'); } ?>
    <?php } ?>
    <div class="row">
      <div class="col-xs-12 text-right">
        <small class="muted">
          copyright &copy; <?php auto_copyright('1983');  // 2010 - 2011 ?> reisebüro<strong>rode</strong> gmbh. alle rechte vorbehalten.
          &nbsp;
          <a href="/agb">agb</a>
          &nbsp;|&nbsp;
          <a href="/impressum">impressum</a>
        </small>
      </div>
    </div>
  </div>
</footer>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-318144-8', 'rodereisen.de');
  ga('send', 'pageview');
</script>
<?php wp_footer(); ?>
