<?php
/**
 * Template Name: Home Page
 */
session_start();
?>

<?php


//banner
$banner_content = get_field("banner_content");
$banner_promo   = get_field("banner_promo");
$banner_images  = get_field("banner_images");
$logos          = get_field("logos");

//science
$science_image   = get_field("science_image");
$science_content = get_field("science_content");

$key_points   = get_field("key_points");
$right_image  = get_field("right_image");
$bottom_image = get_field("bottom_image");

$how_it_works_title = get_field("how_it_works_title");
$hiw_items          = get_field("how_it_works_steps");

$price_items = get_field("price_items");
$price_promo = get_field("price_promo");

/*
$ = get_field("");
$ = get_field("");
$ = get_field("");
$ = get_field("");
$ = get_field("");
$ = get_field("");
*/

?>

<?php get_header(); ?>

<?php get_template_part('navigation-default'); ?>

<style>

    h1, .h1, h1 span, .h1 span {
        font-size: 40px;
        margin-bottom: 10px;
    }

    .vitamyne-works__item {
        flex: 25%;
        max-width: 100%;
        width: 20%;
    }

    .hero__item p {
        font-size: 18px;
    }

    .hero__item .white__gradient {
        background: #f6f6f6;
    }

    #home-hero__section {
        margin-top: 0px !important;
        padding-top: 145px !important;
    }

    .y-img {
        max-width: 700px;
        left: -13px;
        width: 506px !important;
    }

    .blue-dark__gradient {
        background: #0a5175 !important;
        opacity: 1 !important;
    }

    .n-bubble {
        padding: 5px 15px;
        background: #6b2659;
        color: #fff;
        position: absolute;
        right: 20px;
        bottom: 0px;
        display: inline-block;
        border-radius: 20px;
    }

    .navbar {
        padding: 20px 0px;
    }

    #meet-vita__section .h1 {
        font-size: 28px;
    }

    .person-wrap img {
        max-width: 200%;
    }

    .promo-pill {
        border-radius: 33px;
        padding: 15px 60px;
        background: #b7a127 !important;
        color: #fff !important;
        text-align: center !important;
        margin-top: 40px;
    }

    .promo-pill p {
        margin: 0px;
        color: #fff !important;
        font-size: 15px !important;
    }

    .owl-carousel {
        width: 770px;
        left: -200px;
        bottom: -40px;
        margin-top: -100px;
    }

    .hero-1 {
        position: relative;
        z-index: 300;
    }

    .hero-2 {
        position: relative;
        z-index: 100;
    }

    .hero__item p span {
        font-weight: 700 !important;
    }

    .person-wrap img.person-img {
        position: static;
    }

    #price-table__section .btn.white {
        max-width: 200px;
        text-align: center;
        padding: 10px 25px;
    }

    #price-table__section .col-md-3:nth-of-type(2) {
        transform: scale(1.1);
    }

    #price-table__section .col-md-3:nth-of-type(4) .purple__gradient {
        background: #004b71 !important;
    }

    #price-table__section .row:last-of-type {
        padding-top: 0px !important;
    }

    #price-table__section {
        padding: 10px 0px 80px;
    }

    .faq-btn {
        color: #fff !important;
    }

    .faq-btn.green__gradient {
        background: #1c4a6e !important;
    }

    .faq-btn {
        border: none !important;
        margin-bottom: 25px;
    }

    .faq-btn.green__gradient {
        background: #1c4a6e !important;
        border: none !important;
    }

    .faq-btn.blue__gradient {
        background: #223c20 !important;
        border: none !important;
    }

    .faq-wrap {
        display: none;
    }

    #home-hero__section .btn {
        padding: 10px 30px !important;
        margin-right: 10px !important;
        font-size: 16px !important;
    }

    .dd-strip {
        width: 100%;
        background: #1c4a6e !important;
        color: #fff !important;
        padding: 5px 0px 15px;
        text-align: center;
    }

    .dd-strip p {
        color: #fff !important;
        margin: 0px;
    }

    .dd-strip img {
        max-width: 200px;
        display: block;
        margin: auto;
    }

    .hiw-wrap {
        text-align: center;
        margin-top: 50px;
    }

    .hiw-wrap .btn {
        margin: 0px 5px;
    }

    #price-table__section .col-md-4:nth-of-type(2) {
        transform: scale(1) !important;
    }

    .price-text {
        font-size: 30px !important;
    }

    #price-table__section .white__bg p {

        line-height: 1.4em;
    }

    #price-table__section .white__bg p.price-text {
        font-size: 30px;
        font-weight: 700 !important;
    }

    #price-table__section .col-md-4 .usp__spacing {
        padding: 20px !important;
    }

    .sci-block h4 {
        margin: 0px;
        color: #054b70 !important;
        margin-bottom: 25px;
    }

    .science-image img {
        margin-top: 10px;
    }

    .sci-block p {
        margin: 0px;
        color: #054b70 !important;
        line-height: 1em;
        margin-bottom: 10px;
    }

    #science-works__section {
        padding-bottom: 20px !important;
    }

    #how-vitamyne-works__section {
        background: #6b2659 !important;
    }

    #how-vitamyne-works__section h2 {
        color: #014a70 !important;
        margin-bottom: 50px !important;
    }

    .vita-hiw {
        text-align: center;
    }

    .vita-hiw h3 {
        color: #6b2659 !important;
        line-height: 1.6em !important;
        font-size: 18px !important;
        font-size: 25px !important;
        max-width: 60%;
        margin: auto;
        margin-bottom: 25px;
    }

    .vita-hiw img {
        max-width: 80% !important;
    }

    #how-vitamyne-works__section .vitamyne-works__item .block__item {
        border: none !important;
    }

    .hiw-wrap .btn {
        color: #fff !important;
    }

    #btn-separator__section {
        margin-top: 40px !important;
    }

    .logo-wrap img {
        display: inline-block !important;
        max-width: 120px;
        margin: 0px 10px;
    }

    .block__item {
        padding: 25px 25px;
        max-width: 80%;
        margin: AUTO;
    }

    .nf-label-field-5 {
        display: none !important;
    }


    @media (max-width: 991px) {
        .vita-hiw h3 {
            max-width: 100% !important;
            font-size: 18px !important;
        }

        #usp__section .block__icon {
            height: 40px;
        }

        #usp__section {
            padding-top: 20px !important;
            padding-bottom: 30px !important;
        }

        #usp__section h3 {
            font-size: 20px;
            margin-bottom: 20px !important;
        }

        #usp__section .block-alt__item {
            padding: 20px 0px;
        }

        #usp__section .btn {
            padding: 8px 30px;
            font-size: 14px;
        }

        #usp__section .usp__spacing {
            padding: 10px 15px;
            margin: 0px;
            margin-bottom: 20px;
            font-size: 14px;
        }
    }

</style>


<section id="home-hero__section" class=" relative__item content__section">
    <div class="container above__background">
        <div class="row">
            <div class="col-md-6 hero-1" style="padding-bottom: 20px;" data-aos="fade-right">
                <?php echo $banner_content ?>

                <a href="/#make-my-nourished"
                   class="hero-btn btn expand__item green__gradient gradient__item no__border white shadow__item"
                   style="background: #6b2659 !important;">
                    <img style="margin-bottom:0; padding-right:10px; height: 25px;" src="app/themes/frogspark/img/path-icon.png"> Start
                    your order</a>

            </div>
            <div class="col-md-6 hero-2" data-aos="fade-left">
                <div class="hero-fade owl-carousel">

                    <?php

                    foreach ($banner_images as $item) {
                        echo '<div class="person-wrap">
                        <img src="' . $item['banner_image']['url'] . '" alt="Hero image" class="person-img">
                      </div>';
                    }

                    ?>

                </div>
            </div>
        </div>
    </div>
    
    <div class="image__background opacity__quarter zoomed__background"
         style="background-image: url('/app/themes/frogspark/img/bg.png');"></div>
</section>


<!-- nourished-vitamin-area  start-->


<?php get_template_part('template-parts/nourished','vitamins') ?>

<!-- nourished-vitamin-area  end-->

<!-- get-nourished  start-->
<section id="get-nourished">
    <div class="container text-center">
        <h1>get nourish<span class="txt-rotate">E</span>d: it's simple</h1>
        <div class="row" data-aos="fade-right">
            <div class="col-md-4" data-aos="fade-right">
                <div class="nourished-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/get-item1.png" alt=""
                         class="img-responsive">
                    <p>Choose seven of our 27 Nourishments, either through our online consultation tool or select your
                        own</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="nourished-item midle" data-aos="fade-down">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/get-item2.png" alt=""
                         class="img-responsive">
                    <p>We 3D-print and individualy package your personal blend - you can change your ingredients every
                        month if you like</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="nourished-item" data-aos="fade-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/get-item3.png" alt=""
                         class="img-responsive">
                    <p>We'll post your month's Nourishments right to your door, completely reliable, really easy and
                        utterly hasle-free</p>
                </div>
            </div>

            <a href="https://vimeo.com/296864798" target="_blank" class="btn watch-btn expand__item popup-vimeo">Watch the process ></a>

        </div>
    </div>
</section>
<!-- get-nourished  end-->



<!-- make-my-nourished  start-->
<section id="make-my-nourished">
    <div class="container text-center">
        <h1>make my nourish<span class="txt-rotate">E</span>d</h1>
        <div class="row">
            <div class="col-md-4" data-aos="fade-right">
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/make-my-1.png" alt=""
                         class="img-responsive">
                    <h5>Take the NOURISHED assessment</h5>
                    <a href="http://vitamyne.frogspark.agency/order/" class="btn btn-primary" >Help me choose ></a>
                </div>
            </div>
            <div class="col-md-4" data-aos="zoom-in">
                <div class="item middle">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/make-my-center-1.png" alt=""
                         class="img-responsive">
                    <h3>OR</h3>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-left">
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/make-my-2.png" alt=""
                         class="img-responsive">
                    <h5>Select your own Nourishments</h5>
                    <a href="http://vitamyne.frogspark.agency/order/" class="btn btn-primary" >I'll choose my own ></a>
                </div>
            </div>
        </div>
    </div>
</section>


<div id="meet-nourish__section" class="d-none d-md-block">
    <section id="meet-vita__section" class="content__section relative__item">
        <div class="container above__background">
            <h1 class="text-center">our world</h1>
            <div class="row">
                <div class="col-md-6 offset-md-3" data-aos="fade-left">
                    <?php get_template_part('inc/wheel'); ?>
                    <!-- <img src="/app/themes/frogspark/img/wheel__placeholder.png" alt="#" style="width: 100%;"> -->
                </div>
            </div>
            <div class="row">
                <div class="section-content" data-aos="fade-down">
                    <h3>If you'd like to find out more about vitamins, minerals and supplements, then dive into our
                        world here</h3>
                    <a href="/our-world/"  class="btn btn-primary">The NOURISHED World</a>
                </div>
            </div>
        </div>
        <div class="layer__background white__gradient"></div>
        <div class="image__background opacity__quarter"
             style="background-image: url('/app/themes/frogspark/img/bg.png');"></div>
    </section>
</div>

<!-- about us  start-->
<section id="about-us">
    <div class="heading-hover" data-aos="fade-down">
        <h1>About us</h1>
    </div>
    <div class="container">

        <div class="row text-center">
            <div class="col-md-12"  data-aos="fade-up">
                <h3>We're new, we're different, we're changing everything.</h3>
                <p>We believe that if anything should to be personalised, it's our health and welnes. That's why our
                    mission is to chagne the way world thinks, buys and experices vitamins, minerals and
                    supplements.</p>
                <p>Expect more, be more, do more, Be NOURISH<span class="txt-rotate">3</span>D</p>

                <a href="#" target="_blank" class="btn btn-secondary"> Meet the Team</a>
            </div>
        </div>
    </div>

</section>
<!-- about us  end-->

<?php get_template_part('template-parts/faq','link') ?>
<!-- contact us  start-->
<section id="contact-us">
    <div class="container">
        <div class="div-hover" data-aos="fade-down">
            <h1>contact us</h1>
        </div>
        
        <h3>We'd love to hear from you...</h3>
        <div class="row">
            <div class="col-md-4" data-aos="fade-right">
                <div class="single-option">
                    <p>
                        <img src="<?php echo get_template_directory_uri() ?>/img/add-icon.png" alt="" class="pull-left">
                        Send us an email at: <a href="mailto:info@iamnourish3d@.com">info@iamnourish3d@.com</a>
                        <span style="color:#541E53">(Don't forgot it's 3d at the end!)</span>
                    </p>
                </div>
            </div>
            <div class="col-md-4" >
                <div class="single-option" data-aos="fade-up">
                    <p>
                        <img src="<?php echo get_template_directory_uri() ?>/img/call-icon.png" alt=""
                             class="pull-left">
                        You cal call us on: <a href="tel:08001223378">08001223378</a>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-option" data-aos="fade-left">
                    <p>
                        <img src="<?php echo get_template_directory_uri() ?>/img/location-icon.png" alt=""
                             class="pull-left">
                        Or even write us a letter if you like:
                        <span class="clr-primary">30 Floodgate street,<br> Birmingham, B5 5SL</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--    Container End  -->

    <!--    Form Container  -->

    <div id="contact-us-form">
        <?php //echo do_shortcode('[contact-form-7 id="391" title="homepage-cf7"]') ?>
        <?php echo do_shortcode('[contact-form-7 id="351" title="Contact form 1"]') ?>
    </div>
    <!--/    Form Container  -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-col-action">
                    <h2 class="text-center text-uppercase">Didn't find what you need? Contact Us <a href="#">Here</a></a></h2>
                </div>
            </div>
        </div>
    </div>

</section>

<?php
$latitude  = 52.476673;
$longitude = -1.883098;
?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9rktByHWRIYbrgSY2TeR8QJwCaoe55ME&sensor=false"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script>
    $('.hero-fade').owlCarousel({
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        items: 1,
        margin: 0,
        stagePadding: 0,
        autoplay: true,
        autoplayTimeout: 5000,
        loop: true,
        smartSpeed: 250
    });

    $(document).ready(function () {
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            disableOn: 300,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });
    });


    setInterval(function () {

        var currentImage = $(".w-img").css("background-image");
        console.log(currentImage);

        if (currentImage == 'url("/app/themes/frogspark/img/w-1.png")') {
            console.log('t');
            $(".w-img").css("background-image", "url(/app/themes/frogspark/img/w-2.png)");
        } else {
            console.log('t1');
            $(".w-img").css("background-image", "url(/app/themes/frogspark/img/w-1.png)");
        }


        //document.body.style.backgroundImage = "url('img_tree.png')";
    }, 3000)

    $('#d-faq').click(function () {
        $(".faq-wrap").slideUp();
        $("#d-block").slideDown();

        return false;
    });

    $('#p-faq').click(function () {
        $(".faq-wrap").slideUp();
        $("#p-block").slideDown();

        return false;
    });

    $('#n-faq').click(function () {
        $(".faq-wrap").slideUp();
        $("#n-block").slideDown();

        return false;
    });

</script>
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
            styles: [{
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{"color": "#e9e9e9"}, {"lightness": 17}]
            }, {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [{"color": "#f5f5f5"}, {"lightness": 20}]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{"color": "#ffffff"}, {"lightness": 17}]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [{"color": "#ffffff"}, {"lightness": 29}, {"weight": 0.2}]
            }, {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{"color": "#ffffff"}, {"lightness": 18}]
            }, {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [{"color": "#ffffff"}, {"lightness": 16}]
            }, {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [{"color": "#f5f5f5"}, {"lightness": 21}]
            }, {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [{"color": "#dedede"}, {"lightness": 21}]
            }, {
                "elementType": "labels.text.stroke",
                "stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"lightness": 16}]
            }, {
                "elementType": "labels.text.fill",
                "stylers": [{"saturation": 36}, {"color": "#333333"}, {"lightness": 40}]
            }, {"elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [{"color": "#f2f2f2"}, {"lightness": 19}]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [{"color": "#fefefe"}, {"lightness": 20}]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [{"color": "#fefefe"}, {"lightness": 17}, {"weight": 1.2}]
            }]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map__wrapper');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        function addMarker(feature) {
            var icon = {
                url: "/app/themes/frogspark/img/map-marker.png", // url
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

        var features = [{
            position: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>),
            name: 'Nourished',
            img: '/app/themes/frogspark/img/logo.png',
            'url': '#'
        }];
        for (var i = 0, feature; feature = features[i]; i++) {
            addMarker(feature);
        }
    }
</script>

<?php get_footer(); ?>
