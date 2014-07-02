<footer class="non-printable" itemscope itemtype="http://schema.org/Organization">
  <div class="container hidden-xs">
    <div class="row">
      <div class="col-xs-3">
        <h4>reisebüro<strong>rode</strong> gmbh</h4>
        <span itemprop="name" hidden>reisebüro rode gmbh</span>
        <span itemprop="logo" hidden>http://www.rodereisen.de<?php echo get_template_directory_uri(); ?>/assets/img/rodereisen.png</span>
        <address>
          <abbr title="E-Mail">e:</abbr> <a href="mailto:info@rodereisen.de" itemprop="email">info@rodereisen.de</a><br>
          <abbr title="Webseite">w:</abbr> <a href="http://www.rodereisen.de" itemprop="url">www.rodereisen.de</a><br>
          <abbr title="Fax">f:</abbr> <span itemprop="faxNumber">+49 (0)7062 949994</span>
        </address>
        <span>ust.id. <span itemprop="taxID">DE145781171</span></span>
      </div>
      <div class="col-xs-3">
        <address itemscope itemtype="http://schema.org/TravelAgency">
          <span itemprop="name" hidden>reisebüro rode beilstein</span>
          <meta itemprop="openingHours" content="Mo-Fr 09:00-18:00" hidden>
          <meta itemprop="openingHours" content="Sa 09:00-13:00" hidden>
          <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <h4>standort<strong>beilstein</strong></h4>
            <span itemprop="streetAddress">oberstenfelderstr. 16</span><br>
            d-<span itemprop="postalCode">71717</span> <span itemprop="addressLocality">beilstein</span><br>
            <abbr>p:</abbr> <a href="tel:+49706294990"><span itemprop="telephone">+49 (0)7062 94990</span></a>
          </div>
        </address>
      </div>
      <div class="col-xs-3">
        <address itemscope itemtype="http://schema.org/TravelAgency">
          <span itemprop="name" hidden>reisebüro rode steinheim</span>
          <meta itemprop="openingHours" content="Mo-Fr 09:00-18:00" hidden>
          <meta itemprop="openingHours" content="Sa 09:00-13:00" hidden>
          <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <h4>standort<strong>steinheim</strong></h4>
            <span itemprop="streetAddress">Friedrichstraße 8</span><br>
            d-<span itemprop="postalCode">71711</span> <span itemprop="addressLocality">steinheim</span><br>
            <abbr title="Phone">p:</abbr> <a href="tel:+49714481550"><span itemprop="telephone">+49 (0)7144 81550</span></a>
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
<div class="container">
  <div class="row visible-xs">
    <div class="col-xs-12 text-center">
      <small class="muted">
        <a href="/agb">agb</a>
        &nbsp;|&nbsp;
        <a href="/impressum">impressum</a>
        <br>
        copyright &copy; <?php auto_copyright('1984');  // 2010 - 2011 ?> reisebüro<strong>rode</strong> gmbh. alle rechte vorbehalten.
      </small>
    </div>
  </div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-318144-8', 'rodereisen.de');
  ga('send', 'pageview');
</script>
<?php wp_footer(); ?>
