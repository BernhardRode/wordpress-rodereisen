<div id="bg" class="visibile-xs">
  <img src="/app/themes/rr-press/assets/img/stock/strand.yucatan.mobile.jpg" />
</div>

<div id="navbar-full">
    <div id="navbar">
       <!--
        navbar-default can be changed with navbar-rr-blue navbar-rr-azzure navbar-rr-red navbar-rr-green navbar-rr-orange
        -->
        <nav class="navbar navbar-ct-white navbar-fixed-top navbar-transparent" role="navigation">

          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#rr-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand navbar-brand-logo" href="/">
  <!--               <div class="logo">
                  <img src="/app/themes/rr-press/assets/img/rr.png">
                </div> -->
                <div class="brand">
                  reisebüro<strong>rode</strong><br>
                  <span>wir kümmern uns. um sie.</span>
                </div>
              </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="rr-navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="/angebote">
                    <i class="fa fa-suitcase"></i>
                    <p>Angebote</p>
                  </a>
                </li>
                <li>
                  <a href="/blog">
                    <i class="fa fa-road"></i>
                    <p>Blog</p>
                  </a>
                </li>
                <li>
                  <a href="/mitarbeiter">
                    <i class="fa fa-user"></i>
                    <p>Wir</p>
                  </a>
                </li>
                <li>
                  <a href="/wo">
                    <i class="fa fa-map-marker"></i>
                    <p>Wo</p>
                  </a>
                </li>
                <li>
                  <a href="/kontakt">
                    <i class="fa fa-life-ring"></i>
                    <p>Kontakt</p>
                  </a>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </div><!--  end navbar -->

</div> <!-- end menu-dropdown -->
<script>
  searchVisible = 0;
  transparent = true;
  hasTransparent = false;
  offset = 10;

  $(document).ready(function(){
     if($('nav[role="navigation"]').hasClass('navbar-transparent')){
          hasTransparent = true;
     }
  });

  $(document).scroll(function() {
     if(hasTransparent){
          if( $(this).scrollTop() > offset ) {
              if(transparent) {
                  transparent = false;
                  $('nav[role="navigation"]').removeClass('navbar-transparent');
              }
          } else {
              if( !transparent ) {
                  transparent = true;
                  $('nav[role="navigation"]').addClass('navbar-transparent');
              }
          }
      }
  });
</script>
