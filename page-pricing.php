<?php
/**
 * Template Name: Pricing Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<?php get_header(); ?>

  <?php get_template_part('navigation-default'); ?>
  
  <style>
    
    p.sm {
      font-size: 12px !important;
    }
    
  </style>


  <section id="price-table__section" class="content__section relative__item" style="margin-top: 60px;">
    <div class="container">
      <div class="row">

        <div class="col-md-4" data-aos="fade-right">
          <a href="/thanks/">
            <div class="block-alt__item rounded gradient__item gradient__vert orange__gradient center shadow__item">
              <h3 class="white uppercase__item">Tier 1</h3>
              <div class="white__bg usp__spacing full__margin">
                <p class="orange md no__margin">1 Month Trial</p>
                <p class="orange sm light half__margin">£60.00</p>
                <p class="orange light sm no__margin">Try Nourished for 1 month and if you convert your subscription to 12 months before the end of the trial we will give you another month completely free!</p>
              </div>
              <span class="btn white white__border uppercase__item">Place Order <i class="fas fa-chevron-right"></i></span>
            </div>
          </a>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <a href="/thanks/">
            <div class="block-alt__item rounded gradient__item gradient__vert blue__gradient center shadow__item bounce">
              <h3 class="white uppercase__item">Tier 3</h3>
              <div class="white__bg usp__spacing full__margin">
                <p class="blue md no__margin uppercase__item">12 Months Annual Nourished membership</p>
                <p class="blue sm light half__margin">£30.00 a month</p>
                <p class="blue light sm half__margin">Get the best value and your nourishment at only £1/day with our annual Nourished membership!</p>
                <p class="blue light sm no__margin">Pay for your annual subscription upfront and we will give you NourishDNA completely free!</p>
              </div>
              <span class="btn white white__border uppercase__item">Place Order <i class="fas fa-chevron-right"></i></span>
            </div>
          </a>
        </div>
        <div class="col-md-4" data-aos="fade-left">
          <a href="/thank/">
            <div class="block-alt__item rounded gradient__item gradient__vert purple__gradient center shadow__item">
              <h3 class="white uppercase__item">Tier 2</h3>
              <div class="white__bg usp__spacing full__margin">
                <p class="purple md no__margin">3 Month Trial</p>
                <p class="purple sm light half__margin">£45.00</p>
                <p class="purple light sm no__margin">Try Nourished for 3 months and if you convert your subscription to 12 months before the end of the trial we will give you 2 months completely free!</p>
              </div>
              <span class="btn white white__border uppercase__item">Place Order <i class="fas fa-chevron-right"></i></span>
            </div>
          </a>
        </div>

      </div>
      <div class="row">
        <div class="col-md-12" data-aos="fade-up">
<!--           <a href="/order/" class="btn green-alt__gradient gradient__item no__border white h2 no__margin shadow__item block__item" style="width: 100%;">Add VitaDNA to any subscription for an additional £99.00</a> -->
        </div>
      </div>
    </div>
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

      var features = [{position: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>), name: 'Nourished', img: '/app/themes/frogspark/img/logo.png', 'url': '#'}];
      for (var i = 0, feature; feature = features[i]; i++) {
        addMarker(feature);
      }
    }
  </script>

<?php get_footer(); ?>
