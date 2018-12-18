<?php
/**
 * Template Name: Thanks Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<?php
  
  $r = false;
  
  if(!empty($_GET['r']))
  {
    $r = $_GET['r'];
  } 

?>

<?php get_header(); ?>

  <?php get_template_part('navigation-default'); ?>

  <section id="home-hero__section" class="hero__item relative__item content__section">
    <div class="container above__background">
      <div class="row">
        <div class="col-md-7" style="padding-bottom: 20px;" data-aos="fade-right">
          <h1 class="green-dark">Thanks!<br><span class="green">Your Order is Complete</span></h1>
          <p class="green">We're in the process of creating your perfect NOURISH<span class="e-reverse" style="font-size: 26px;">E</span>D, we will notify you when your order is on the way.</p>
          
          <?php if($r == 1): ?>
            <a href="/account/index.php" class="btn expand__item green__gradient gradient__item no__border white shadow__item">Go to your Account</a>
          <?php else: ?>
            <a href="/account/login.php" class="btn expand__item green__gradient gradient__item no__border white shadow__item">Login to your Account</a>
          <?php endif; ?>
          
        </div>
        <div class="col-md-5" data-aos="fade-left">
          <img src="/app/themes/frogspark/img/hero__placeholder.png" alt="Hero image" class="bounce" style="width: 100%;">
        </div>
      </div>
    </div>
    <div class="layer__background white__gradient"></div>
    <div class="image__background opacity__quarter zoomed__background" style="background-image: url('/app/themes/frogspark/img/bg.png');"></div>
  </section>
  
  <style>
    
    footer {
      display: none !important;
    }
    
  </style>

 

  <?php
    $latitude = 52.476673;
    $longitude = -1.883098;
  ?>
    
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9rktByHWRIYbrgSY2TeR8QJwCaoe55ME&sensor=false"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script type="text/javascript">
    // When the window has finished loading create our google map below
    // var infowindow = '';
    // var windowinfoLoad = '';
    google.maps.event.addDomListener(window, 'load', init);
    google.maps.event.addDomListener(infowindow, 'load', windowinfoLoad);
    var yourGlobalVariable;
    
    function init() {
      // Basic options for a simple Google Map
      // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
      var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 17,
        streetViewControl: true,
        scrollwheel: false,
      
        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>),
        zoomControl: true,
        zoomControlOptions: {
          position: google.maps.ControlPosition.LEFT_BOTTOM
        },
      
        // How you would like to style the map. 
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{ "featureType": "water", "elementType": "geometry", "stylers": [ { "color": "#e9e9e9" }, { "lightness": 17 } ] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [ { "color": "#f5f5f5" }, { "lightness": 20 } ] }, { "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [ { "color": "#ffffff" }, { "lightness": 17 } ] }, { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [ { "color": "#ffffff" }, { "lightness": 29 }, { "weight": 0.2 } ] }, { "featureType": "road.arterial", "elementType": "geometry", "stylers": [ { "color": "#ffffff" }, { "lightness": 18 } ] }, { "featureType": "road.local", "elementType": "geometry", "stylers": [ { "color": "#ffffff" }, { "lightness": 16 } ] }, { "featureType": "poi", "elementType": "geometry", "stylers": [ { "color": "#f5f5f5" }, { "lightness": 21 } ] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [ { "color": "#dedede" }, { "lightness": 21 } ] }, { "elementType": "labels.text.stroke", "stylers": [ { "visibility": "on" }, { "color": "#ffffff" }, { "lightness": 16 } ] }, { "elementType": "labels.text.fill", "stylers": [ { "saturation": 36 }, { "color": "#333333" }, { "lightness": 40 } ] }, { "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ] }, { "featureType": "transit", "elementType": "geometry", "stylers": [ { "color": "#f2f2f2" }, { "lightness": 19 } ] }, { "featureType": "administrative", "elementType": "geometry.fill", "stylers": [ { "color": "#fefefe" }, { "lightness": 20 } ] }, { "featureType": "administrative", "elementType": "geometry.stroke", "stylers": [ { "color": "#fefefe" }, { "lightness": 17 }, { "weight": 1.2 } ] }]
      };
      
      // Get the HTML DOM element that will contain your map 
      // We are using a div with id="map" seen below in the <body>
      var mapElement = document.getElementById('map__wrapper');
      
      // Create the Google Map using our element and options defined above
      var map = new google.maps.Map(mapElement, mapOptions);
              
      function addMarker(feature) {           
        var icon = {
          url:  "/app/themes/frogspark/img/map-marker.png", // url
          scaledSize: new google.maps.Size(40, 36)
        };
                
        var marker = new google.maps.Marker({
          position: feature.position,
          icon: icon,
          map: map
        });
                
        // var contentString = '<div id="content" class="marker-div"><div class="dist-wrap" style="background-image:url(\'/app/themes/frogspark/img/logo.png\');"></div></div>';
                
        // var infowindow = new google.maps.InfoWindow({
          // content: contentString
        // });
        
        // google.maps.event.addListener(map, "click", function(event) {
          // infowindow.close();
        // });
      
        // marker.addListener('click', function() {           
        //   infowindow.close();
        //   infowindow.open(map, marker);      
        //   var iwOuter = jQuery('.gm-style-iw');
        //   var iwBackground = iwOuter.prev();

        //   var parent = iwOuter.parent();
        //   parent.addClass('marker-wrapper');

        //   // Removes arrow
        //   arrow = iwOuter.prev();
        //   arrow.css('display', 'none');     
          
        //   // Removes background shadow DIV
        //   iwBackground.children(':nth-child(3)').css({'display' : 'none'});
        //   iwBackground.children(':nth-child(2)').css({'display' : 'none'});
        //   // Removes white background DIV
        //   iwBackground.children(':nth-child(4)').css({'display' : 'none'});
        //   var iwCloseBtn = iwOuter.next();
        //   iwCloseBtn.addClass("marker-close");
        // });
      }

      var features = [{position: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>), name: 'VitaMY3D', img: '/app/themes/frogspark/img/logo.png', 'url': '#'}];
      for (var i = 0, feature; feature = features[i]; i++) {
        addMarker(feature);
      }
    }
  </script>

<?php get_footer(); ?>
