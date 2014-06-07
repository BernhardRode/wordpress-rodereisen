<?php
/*
Template Name: Where Template
*/
?>

<div class="map">
  <div id="map_canvas" style="width: 100%; height: 100%"></div>
</div>

<section class="map-overlay">
  <div class="row">
    <div class="col col-xs-12">
      <?php get_template_part('templates/page', 'header'); ?>
    </div>
  </div>
  <?php //get_template_part('templates/page', 'header'); ?>
  <div class="row">
    <div class="col col-xs-4">
      <div class="box">
        <div class="row">
          <div class="col col-xs-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/BST.jpg" class="img-thumbnail img-responsive">
            <a class="btn btn-warning margin-top-20" href="https://www.google.com/maps/views/view/109291867098216000411/photo/quWvYUn4XJgAAAQW4fVg5A" target="_blank">
              360° Ansicht
            </a>
          </div>
          <div class="col col-xs-7">
            <address>
              <h4>standort<strong>beilstein</strong></h4>
              oberstenfelderstr. 16<br>
              d-71717 beilstein<br>
              <abbr title="Phone">p:</abbr> <a href="tel:+49706294990">+49 (0)7062 94990</a>
            </address>
          </div>
        </div>
      </div>
      <div class="box margin-top-20">
        <div class="row">
          <div class="col col-xs-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/STH.jpg" class="img-thumbnail img-responsive">
            <a class="btn btn-warning margin-top-20" href="https://www.google.com/maps/views/view/109291867098216000411/photo/quWvYUn4XJgAAAQW4fVg5A" target="_blank" disabled>
              360° Ansicht
            </a>
          </div>
          <div class="col col-xs-7">
            <address>
              <h4>standort<strong>steinheim</strong></h4>
              im klostermuseum<br>
              d-71711 steinheim<br>
              <abbr title="Phone">p:</abbr> <a href="tel:+49714481550">+49 (0)7144 81550</a>
            </address>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
function removeElement(element) {
    element && element.parentNode && element.parentNode.removeChild(element);
}

function initialize() {

  var LAT = 49.00882560981354; //49.037142923228565;
  var LNG = 9.300613403320312; //9.316268985858177;

  google.maps.visualRefresh = true;

  var mapOptions = {
    zoom: 12,
    center: new google.maps.LatLng(LAT,LNG),
    scrollwheel: false,
    mapTypeId: google.maps.MapTypeId.TERRAIN,
    panControlOptions: {
      position: google.maps.ControlPosition.RIGHT_CENTER
    },
    mapTypeControlOptions: {
      position: google.maps.ControlPosition.RIGHT_CENTER,
      style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
    },
    zoomControlOptions: {
      position: google.maps.ControlPosition.RIGHT_CENTER
    }
  }
  var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

  var geocoder = new google.maps.Geocoder();
  var codeAddress = function( address ) {
      geocoder.geocode( { 'address': address }, function(results, status) {
          if (status === google.maps.GeocoderStatus.OK) {
              new google.maps.Marker({ map: map, position: results[0].geometry.location });
          }
      });
  };
  codeAddress('Reisebüro Rode GmbH, Oberstenfelderstr.16, D-71717 Beilstein');
  codeAddress('Reisebüro Rode GmbH, Im Klostermuseum, D-71711 Steinheim');

  google.maps.event.addListener(map, "rightclick", function(event) {
      var lat = event.latLng.lat();
      var lng = event.latLng.lng();
      // populate yor box/field with lat, lng
      console.log("Lat=" + lat + "; Lng=" + lng);
  });
  setTimeout(function(){
    removeElement( document.getElementById('spinner') );
  },250);

}

function loadScript() {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyCxK3Bptr99EqBmhLW0ezLhvGhhrKuc2RA&sensor=FALSE&callback=initialize";
  document.body.appendChild(script);
}

window.onload = loadScript;
</script>
