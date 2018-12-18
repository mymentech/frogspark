<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
session_start();
?>

<?php


//banner
$banner_content = get_field("banner_content");
$banner_promo = get_field("banner_promo");
$banner_images = get_field("banner_images");
$logos = get_field("logos");

//science
$science_image = get_field("science_image");
$science_content = get_field("science_content");

$key_points = get_field("key_points");
$right_image = get_field("right_image");
$bottom_image = get_field("bottom_image");

$how_it_works_title = get_field("how_it_works_title");
$hiw_items = get_field("how_it_works_steps");

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
      padding-top: 180px !important;
    }
    
    .y-img {
          max-width: 700px;
    left: -13px;
    width: 506px !important;
    }
    
    .blue-dark__gradient {
          background: #0a5175!important;
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



  <section id="home-hero__section" class="hero__item relative__item content__section">
    <div class="container above__background">
      <div class="row">
        <div class="col-md-6 hero-1" style="padding-bottom: 20px;" data-aos="fade-right">
          <?php echo $banner_content ?>

          <a href="https://vimeo.com/296864798" class="hero-btn btn expand__item green__gradient gradient__item no__border white shadow__item popup-vimeo" style="background: #6b2659 !important;">
            <i class="fa fa-play" aria-hidden="true" style="padding-right: 10px;"></i> Watch How it works</a>
          <a href="#btn-separator__section" class="hero-btn btn expand__item green__gradient gradient__item no__border white shadow__item">Start your order</a>
        </div>
        <div class="col-md-6 hero-2" data-aos="fade-left">
          <div class="hero-fade owl-carousel">
            
            <?php
            
              foreach($banner_images as $item)
              {
                echo '<div class="person-wrap">
                        <img src="'.$item['banner_image']['url'].'" alt="Hero image" class="person-img">
                        <p class="n-bubble">'.$banner_promo.'</p>
                      </div>';
              }
            
            ?>
            
          </div>
        </div>
      </div>
    </div>
    <div class="layer__background white__gradient"></div>
    <div class="image__background opacity__quarter zoomed__background" style="background-image: url('/app/themes/frogspark/img/bg.png');"></div>
  </section>






<!-- nourished-vitamin-area  start-->
  

  <div id="nourished-vitamin-area" class="text-center">
    <h3 class="fheading">the power of seven: the possibility of a billion</h3>
    <section id="nourshed-vitamins">
      <div class="container">
        <h1>Nourish<span class="txt-rotate" >E</span>d vitamins</h1>
        <h4>The clever way to get nourish<span class="txt-rotate" >E</span>d</h4> 
        <div class="row" id="vitamin-list">
        
            
              <div class="single-items">
                  <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/vitamin-icon.png" alt="">
                  <h2>Fresh</h2>
                  <p>Made to order conveniently delivered every onth</p>
              </div>
          
              <div class="single-items">
              <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/vitamin-icon.png" alt="">
                  <h2>patented</h2>
                  <p>Three Propeietary patented technologies</p>
              </div>

              <div class="single-items">
              <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/vitamin-icon.png" alt="">
                  <h2>encapsulation</h2>
                  <p>Tasty and chewable, optimum absorption</p>
              </div>  
          
              <div class="single-items">
              <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/vitamin-icon.png" alt="">
                  <h2>3d-printed</h2>
                  <p>Seven perfectly balanced and proportioned layers</p>
              </div>

              <div class="single-items">
              <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/vitamin-icon.png" alt="">
                  <h2>quality</h2>
                  <p>Vegan ingredients, natural fruit fibre sweeteners</p>
              </div>
            
  
      </div>
    </div>

    </section>
  </div>

  <!-- nourished-vitamin-area  end-->

 <!-- get-nourished  start-->
  <section id="get-nourished">
    <div class="container text-center" >
      <h1>get nourish<span class="txt-rotate" >E</span>d: it's simple</h1>
      <div class="row">
        <div class="col-md-4">
            <div class="nourished-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/get-item1.png" alt="" class="img-responsive">
                <p>Choose seven of our 27 Nourishments, either through our online consultation tool or select your own</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="nourished-item midle">
            <img src="<?php echo get_template_directory_uri(); ?>/img/get-item2.png" alt="" class="img-responsive">
                <p>We 3D-print and individualy package your personal blend -  you can change your ingredients every month if you link</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="nourished-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/get-item3.png" alt="" class="img-responsive">
                <p>We'll post your month's Nourishments right to your door, completely reliable, really easy and utterly hasle-free</p>
            </div>
        </div>

        <a href="#" target="_blank" class="btn watch-btn">Watch the process ></a>

      </div>
    </div> 
  </section>  
  <!-- get-nourished  end-->

  <!-- make-my-nourished  start-->
  <section id="make-my-nourished">
    <div class="container text-center">
    <h1>make my nouris<span class="txt-rotate" >E</span>h</h1>
      <div class="row">
              <div class="col-md-4">
                <div class="item">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/make-my-1.png" alt="" class="img-responsive">
                  <h5>Take the NOURISHED assessment</h5>
                  <a href="#" class="btn" target="_blank">Help me choose ></a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="item middle">
                <img src="<?php echo get_template_directory_uri(); ?>/img/make-my-center.png" alt="" class="img-responsive">
                    <h3>OR</h3>
                </div>
              </div>
              <div class="col-md-4">
                <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/make-my-2.png" alt="" class="img-responsive">
                  <h5>Select your own Nourishments</h5>
                  <a href="#" class="btn" target="_blank">I'will choose my own ></a>
                </div>
              </div>
      </div>
    </div>
  </section>
  <!-- make-my-nourished  end-->



 <!-- our-world  start-->
  <section id="our-world">
  <div class="col-md-offset-3"></div>
    <div class="container">
    <h1>our world</h1>

      <div class="row">
        <div class="col-md-12">
            <div class="blog-list">
              <p>Whether you're animing to reach a goad, want overall health optimisation or are simply tired of all the different supplements you're taking, we're here for you.</p>
              <p>We'll create your very own perfectly balanced combinationof seven vitamins, minerals and supplements from our 27 Nourishments, The unique power of seven from over a billion possible combinations.</p>
              <a href="#" target="_blank" class="btn btn-secondary">Our Nourishments </a>
            </div>
        </div>
        
      </div>
      <div class="row">
      <div class="section-content">
          <h3>If you'd like to find out more about vitamins, minerals and supplements, then dive into our world here</h3>
          <a href="#" target="_blank" class="btn btn-primary" >The NOURISHED World</a>
        </div>
      </div>

    </div>
  </section>
  <!-- our-world  end-->

  <!-- about us  start-->
  <section id="about-us">
  <h1>About us</h1>
    <div class="container">
   
      <div class="row text-center">
        <div class="col-md-12">
        <h3>We're new, we're different, we're changing everything.</h3>
        <p>We believe that if anything should to be personalised, it's our health and welnes. That's why our mission is to chagne the way world thinks, buys and experices vitamins, minerals and supplements.</p>
        <p>Expect more, be more, do more, Be NOURISH<span class="txt-rotate" >3</span>D</p>

        <a href="#" target="_blank" class="btn btn-secondary"> Meet the Team</a>
        </div>
      </div>
    </div>
    
  </section>
  <!-- about us  end-->

  <div class="check-faq">
              <p>got a question? check our faqs</p>
              <a href="#" class="btn">View faqs</a>
    </div>

  <!-- contact us  start-->
  <section id="contact-us">
    <div class="container">
    <h1>contact us</h1>
    <h3>We'd love to hear from you...</h3>
      <div class="row">
       

  
          <div class="col-md-4">
            <div class="single-option">
              <p>
                <img src="" alt="" class="pull-left">
                Send us an email at: <a href="mailto:info@iamnourish3d@.com">info@iamnourish3d@.com</a>
                (Don't forgot it's 3d at the end!)
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="single-option">
              <p>
                <img src="" alt="" class="pull-left">
                You cal call us on: <a href="mailto:info@iamnourish3d@.com">info@iamnourish3d@.com</a>
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="single-option">
              <p>
                <img src="" alt="" class="pull-left">
                Or even write us a letter if you like: <a href="mailto:info@iamnourish3d@.com">info@iamnourish3d@.com</a>
                <span class="clr-primary">30 Floodgate street,<br> Birmingham, B5 5SL</span>
              </p>
            </div>
          
        </div>
        <div class="contact-form">
          <h1>contact from will here</h1>
        </div>
      </div>
    </div>
  </section>
   <!-- contact us  end-->


   <!-- contact us  end-->

   <footer>
     <div class="container">
       <div class="row">
         <div class="col-md-12">
         <div class="footer-logo">
           <img src="<?php echo get_template_directory_uri() ?>/img/footer-logo.png" alt="logo" >
         </div>
         </div>
       </div>
       <div class="row">
         <div class="col-md-12">
           <div class="footer-pages text-center">
              <ul class="list-unstled list-inline">
                <li> <a href="#">Pricing</a> </li>
                <li> <a href="#">Delivery</a> </li>
                <li> <a href="#">Faqs</a> </li>
                <li> <a href="#">Social links</a> </li>
                <li> <a href="#">Ts & Cs</a> </li>
              </ul>
          </div>

          <div class="social-icons">
            <ul class="list-unstyled list-inline">
                <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/instagram-icon.png" alt="instagram"></a> </li>
                <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/twitter-icon.png" alt="twitter"></a> </li>
                <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/facebook-icon.png" alt="facebook"></a> </li>
            </ul>
            <small>Website by Artisan</small>
          </div>
         </div>
       </div>
       <p class="copy-right-text">These statements have not been evaluted by the Food and Drug Administration. This product is not intended to diagnose, treat, cure or prevent any disease.</p>
     </div>
   </footer>
  
  <div class="dd-strip" data-aos="fade-in" data-aos-delay="200">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>As seen on</p>
          <div class="logo-wrap">
            
            
            <?php
            
              foreach($logos as $item)
              {
                echo '<img src="'.$item['logo_image']['url'].'">';
              }
            
            ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  
  <section id="science-works__section" class="content__section relative__item">
    <div class="container">

      <div class="row">
        <div class="col-md-2 offset-md-1" data-aos="fade-in" data-aos-delay="100">
          <div class="science-image">
            <img src="<?php echo $science_image['url'] ?>">
          </div>
        </div>

        <div class="col-md-10 vitamyne-works__item" data-aos="zoom-in-up" data-aos-delay="200">
          <div class="sci-block">
            <?php echo $science_content ?>
          </div>
        </div>


      </div>
    </div>
  </section>
  
  <section id="your-vita__section" class="content__section relative__item">
    <div class="container above__background">
      <div class="row">
        <div class="col-md-7">
          <h2 class="h1 white">Your NOURISH<span class="e-reverse" style="font-size: 35px;">E</span>D</h2>
          <?php
            foreach($key_points as $point)
            {
              echo '<p class="white" data-aos="fade-right" data-aos-delay="100"><i class="fas fa-check icon__text"></i> '.$point['point'].'</p>'; 
            }
          ?>

          <img src="<?php echo $bottom_image['url'] ?>" style="max-width: 120%; width: 120%; margin-top: 25px;">
        </div>
        <div class="col-md-5 relative__item bounce" data-aos="fade-left">
          <img src="<?php echo $right_image['url'] ?>" alt="Your VitaMY3D" class="center__vert no__margin y-img" style="width: 100%;">
        </div>
      </div>
    </div>
    <div class="layer__background opacity__threequarter blue-dark__gradient"></div>
    <div class="image__background opacity__quarter" style="background-image: url('/app/themes/frogspark/img/alt__background.png');"></div>
  </section>
  
  <style>
    
    #how-vitamyne-works__section .col-md-4:nth-child(3) img {
     max-width: 50% !important; 
    }
    
  </style>
  
  <div id="how-nourish-works__section">
  <section id="how-vitamyne-works__section" class="content__section relative__item" style="background: #fff !important;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="center"><?php echo $how_it_works_title ?></h2>
          <p></p>
        </div>
      </div>
      <div class="row">
        
        <?php 
        
          foreach($hiw_items as $item)
          {
            echo '<div class="col-md-4 " data-aos="zoom-in-up" data-aos-delay="100">
                    <a href="#btn-separator__section" class="white__bg vita-hiw" style="display: block;">
                      <h3 class="h2 relative__item">'.$item['title'].'</h3>
                      <img src="'.$item['image']['url'].'">
                      <p class="no__margin md">'.$item['subtitle'].'</p>
                    </a>
                  </div>';
          }
        
        ?>
 
        <div class="col-md-12" data-aos="fade-in" data-aos-delay="500">
          <div class="hiw-wrap">
            <a href="https://vimeo.com/296864798" class="hero-btn btn expand__item green__gradient gradient__item no__border white shadow__item popup-vimeo" style="">
              <i class="fa fa-play" aria-hidden="true" style="padding-right: 10px;"></i> Watch the video</a>
            <a href="#btn-separator__section" class="hero-btn btn expand__item green__gradient gradient__item no__border white shadow__item">Get started</a>
          </div>
          
        </div>
<!--
        <div class="col-md-3 vitamyne-works__item" data-aos="zoom-in-up" data-aos-delay="400">
          <div class="block__item rounded__alt blue__border white__bg">
            <h3 class="h2 relative__item" style="padding-right: 32px;"><span class="blue opacity__half">Step 3</span><img class="title__img spin__hover" src="/app/themes/frogspark/img/refresh.png" alt="Refresh"></h3>
            <p class="blue no__margin md">Change your NOURISH<span class="e-reverse" style="font-size: 35px;">E</span>D blend month by month or keep it the same! We tailor everything to you.</p>
          </div>
        </div>
-->
      </div>
    </div>
  </section>
  </div>
  
  <section id="btn-separator__section" class="content__section" data-aos="fade-up">
    <div class="container-fluid no__padding">
      <div class="row">
        <div class="col-md-12">
          <div class="separator__item"></div>
          <p class="btn green-alt__gradient gradient__item no__border white h2 no__margin shadow__item center__abso title-btn">Make my NOURISH<span class="e-reverse" style="font-size: 35px;">E</span>D</span></p>
        </div>
      </div>
    </div>
  </section>
  
  <section id="usp__section" class="content__section">
    <div class="container">
      <div class="row">
        <?php
          
          $log = false;
        
          if(!empty($_SESSION['customerID']))
          {
            $log = true;
          }
        
        ?>

        <div class="col-md-4 offset-md-2" data-aos="zoom-in-up" data-aos-delay="100">

            <a href="/order/choose.php">
                <div class="block-alt__item rounded expand__item gradient__item gradient__vert orange__gradient center shadow__item">
                    <img class="block__icon tilt__hover" src="/app/themes/frogspark/img/thumb.png" alt="Thumb">
                    <h3 class="white">I know what I want</h3>
                    <p class="white__bg orange md usp__spacing light">Choose from 27 NOURISHM<span class="e-reverse" style="font-size: 35px;">E</span>NTS to make your perfect NOURISH<span class="e-reverse" style="font-size: 35px;">E</span>D.</p>
                    <span class="btn white white__border uppercase__item">Get started</span>
                </div>
            </a>
        </div>
        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="200">
          <?php if($log): ?>
            <a href="/order/?questionID=3">
          <?php else: ?>
            <a href="/order/">
          <?php endif; ?>
          
            <div class="block-alt__item rounded expand__item gradient__item gradient__vert blue__gradient center shadow__item">
              <img class="block__icon lift__hover" src="/app/themes/frogspark/img/speech.png" alt="Thumb">
              <h3 class="white">Take the NourishQuiz</h3>
              <p class="white__bg blue md usp__spacing light">Answer a questionnaire and we will recommend specifically for you.</p>
              <span class="btn white white__border uppercase__item">Get started</span>
            </div>
          </a>
        </div>
<!--
        <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="300">
          <a href="/nourish-dna/">
            <div class="block-alt__item rounded expand__item gradient__item gradient__vert purple__gradient center shadow__item">
              <img class="block__icon flip__hover" src="/app/themes/frogspark/img/dna.png" alt="Thumb">
              <h3 class="white">NourishDNA</h3>
              <p class="white__bg purple md usp__spacing light">Take simple saliva swab giving you the most accurate results possible.</p>
              <span class="btn white white__border uppercase__item">Coming soon</span>
            </div>
          </a>
        </div>
-->

      </div>
    </div>
  </section>


  <style>
    
    #meet-vita__section .expand__item {      
      margin-bottom: 15px;
      padding: 6px 30px;
      border: 3px solid #000;
      margin-right: 6px;
    }
    
    .hiw-wrap .btn:focus {
          color: #6b2659 !important;
    }
    
    #meet-vita__section .expand__item.btn-1 {
      border-color: #1c4a6e !important;
      color: #1c4a6e !important;
    }
    
    #meet-vita__section .expand__item.btn-1:hover {
      border-color: #1c4a6e !important;
      color: #fff !important;
      background: #1c4a6e !important;
    }
    
    #meet-vita__section .expand__item.btn-2 {
      border-color: #b7a127 !important;
      color: #b7a127 !important;
    }
    
    .btn-2 i {
      color: #b7a127 !important;
    }
    
    .btn-2:hover i {
      color: #fff !important;
    }
    
    #meet-vita__section .expand__item.btn-2:hover {
      border-color: #b7a127 !important;
      color: #fff !important;
      background: #b7a127 !important;
    }
    
    #meet-vita__section .expand__item.btn-3 {
      border-color: #6b2659 !important;
      color: #6b2659 !important;
    }
    
    #meet-vita__section .expand__item.btn-3:hover {
      border-color: #6b2659 !important;
      color: #fff !important;
      background: #6b2659 !important;
    }
    
    #meet-vita__section .expand__item.btn-4 {
      border-color: #223c20 !important;
      color: #223c20 !important;
    }
    
    #meet-vita__section .expand__item.btn-4:hover {
      border-color: #223c20 !important;
      color: #fff !important;
      background: #223c20 !important;
    }
    
    #meet-vita__section .expand__item {
      font-size: 14px !important;
    }
    
    @media (max-width: 1250px) {
      #meet-vitamyne__section .center__vert {
        padding-left: 50px;
      }
    }
    
  </style>
  

  <div id="meet-nourish__section">
  <section id="meet-vita__section" class="content__section relative__item">
    <div class="container above__background">
      <div class="row">
        <div class="col-md-5" data-aos="fade-right">
          <h2 class="h1">Meet the NOURISHM<span class="e-reverse" style="font-size: 50px;">E</span>NTS</h2>
          <p class="light">We source all of our ingredients from Vegetarian Wholefoods which come from EU and UK based sources. Then we combine them with our patented vegan gummy gel which encapsulates the actives meaning they work better for you!  We sweeten our NOURISHM3NTS with fiber from fruit meaning its low GI and delicious!</p>
          <a href="/search" class="btn expand__item black__border">View All</a>
          
          <?php
            
            $count = 1;
  
            foreach(get_tags() as $tag)
            {
              $teamID = get_the_ID(); //id of team member
              $term_slug = $tag->slug;
              $term_name = $tag->name;

              echo '<a href="/tag/'.$term_slug.'" class="btn expand__item black__border btn-'.$count.'" style="">'.$term_name.'</a>';
              
              if($count == 4)
              {
                $count = 1;
              }
              else
              {
                $count++;
              }
            }  
    
          ?>
          
          <a href="/search/" class="btn expand__item black__border btn-2" style="">Search <i class="fa fa-search" aria-hidden="true" style="padding-left: 2px;"></i></a>
        </div>
        <div class="col-md-7" data-aos="fade-left">
          <?php get_template_part('inc/wheel'); ?>
          <!-- <img src="/app/themes/frogspark/img/wheel__placeholder.png" alt="#" style="width: 100%;"> -->
        </div>
      </div>
    </div>
    <div class="layer__background white__gradient"></div>
    <div class="image__background opacity__quarter" style="background-image: url('/app/themes/frogspark/img/bg.png');"></div>
  </section>
  </div>
  
  <div id="n-pricing">
    <section id="btn-separator__section" class="content__section" data-aos="fade-up">
      <div class="container-fluid no__padding">
        <div class="row">
          <div class="col-md-12">
            <div class="separator__item"></div>
            <p class="btn green-alt__gradient gradient__item no__border white h2 no__margin 
              shadow__item center__abso title-btn">Pricing</p>
          </div>
        </div>
      </div>
    </section>
  </div>

  <section id="price-table__section" class="content__section relative__item" style="">
    <div class="container">
      <div class="row">

        <div class="col-md-4 offset-md-2" data-aos="fade-right">
          <a href="/order/">

            <div class="block-alt__item rounded gradient__item gradient__vert orange__gradient center shadow__item">
              <h3 class="white uppercase__item"><?php echo $price_items[0]['price_title'] ?></h3>
              <div class="white__bg usp__spacing full__margin">
<!--                 <p class="orange md no__margin">1 Month Trial</p> -->
                <p class="orange sm light half__margin price-text"><?php echo $price_items[0]['big_price'] ?></p>
                                <p class="blue light sm no__margin"><?php echo $price_items[0]['price_content'] ?></p>

              </div>
              <span class="btn white white__border uppercase__item">Continue <i class="fas fa-chevron-right"></i></span>
            </div>
          </a>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <a href="/order/">
            <div class="block-alt__item rounded gradient__item gradient__vert blue__gradient center shadow__item">
              <h3 class="white uppercase__item"><?php echo $price_items[1]['price_title'] ?></h3>
              <div class="white__bg usp__spacing full__margin">
<!--                 <p class="blue md no__margin uppercase__item">12 Months Annual Nourish membership</p> -->
                <p class="blue sm light half__margin price-text"><?php echo $price_items[1]['big_price'] ?></p>
<!--                 <p class="blue light sm half__margin">Get the best value with your NOURISH<span class="e-reverse" style="font-size: 35px;">E</span>D at only £1/day with our annual NOURISH membership!</p> -->
                <p class="blue light sm no__margin"><?php echo $price_items[1]['price_content'] ?><br><br></p>
              </div>
              <span class="btn white white__border uppercase__item">Continue <i class="fas fa-chevron-right"></i></span>
            </div>
          </a>
        </div>
        
        <div class="col-md-8 offset-md-2">
          <div class="promo-pill">
            <p><?php echo $price_promo ?></p>
          </div>
        </div>
        
<!--
        <div class="col-md-3" data-aos="fade-left">
          <a href="/order/">
            <div class="block-alt__item rounded gradient__item gradient__vert purple__gradient center shadow__item">
              <h3 class="white uppercase__item">Tier 2</h3>
              <div class="white__bg usp__spacing full__margin">
                <p class="purple md no__margin">3 Month Trial</p>
                <p class="purple sm light half__margin">£45.00</p>
                <p class="purple light sm no__margin">Try NOURISH<span class="e-reverse" style="font-size: 35px;">E</span>D for 3 months and if you convert your subscription to 12 months before the end of the trial we will give you 2 months completely free!</p>
              </div>
              <span class="btn white white__border uppercase__item">Continue <i class="fas fa-chevron-right"></i></span>
            </div>
          </a>
        </div>
        <div class="col-md-3" data-aos="fade-left">
          <a href="#">
            <div class="block-alt__item rounded gradient__item gradient__vert purple__gradient center shadow__item">
              <h3 class="white uppercase__item">Pre-Order</h3>
              <div class="white__bg usp__spacing full__margin">
                <p class="purple md no__margin">Pre-Order</p>
                <p class="purple sm light half__margin">£45.00</p>
                <p class="purple light sm no__margin">NOURISH<span class="e-reverse" style="font-size: 35px;">E</span>D is so in demand we can’t keep up! Register your interest here and we’ll email you as soon as NOURISH<span class="e-reverse" style="font-size: 35px;">E</span>D is available again</p>
              </div>
              <span class="btn white white__border uppercase__item">Pre-Order <i class="fas fa-chevron-right"></i></span>
            </div>
          </a>
        </div>
-->

      </div>

    </div>
  </section>


              <style>
                
                .lg-background.carousel__item .h1.white, .lg-background.carousel__item p.white {
                  color: #1c4a6e !important;
                }
                
                .lg-background .btn-white-outline {
                  border-color: #1c4a6e !important;
                  color: #1c4a6e !important;
                }
                
              </style>
  
  
  
  <div id="meet-n__section">
    

    
  <section id="meet-vitamyne__section" data-aos="fade" data-aos-offset="-300">
    <div class="container-fluid no__padding">

      <div class="row">

        <div class="col-md-12">
          <div class="carousel__wrapper relative__item">

              <div class="carousel__item relative__item">
                <div class="container above__background">
                  <div class="row" style="padding: 0px 0px 40px 0px;">
                    <div class="col-md-12">
                      <h2 class="center" style="color: #fff !important;margin-bottom: 70px;">...Meet your NOURISH<span class="e-reverse">E</span>D</h2>
                    </div>
                    <div class="col-md-7">
                      <div class="center__vert">
                        <h3 class="h1 white no__margin">Convenience...</h3>
                        <p class="h3 white">Everything you need, nothing you don't</p>
                        <p class="h3 white">Delivered to your door monthly</p>
                        <p class="h3 white">Single serving gummy pods</p>
                        <a href="#btn-separator__section" class="btn btn-primary btn-white-outline">Get started</a>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="image__background carousel__image bounce" 
                        style="background-image: url('/app/themes/frogspark/img/f-slide-10.png'); background-size: 86%; height: 173%;margin-top: -150px;"></div>
                      
                    </div>
                  </div>
                </div>
                <div class="image__background" style="background:#1c4a6e;"></div>
              </div>
              
              <div class="carousel__item relative__item">
                <div class="container above__background">
                  <div class="row" style="padding: 0px 0px 40px 0px;">
                    
                    <div class="col-md-12">
                      <h2 class="center" style="color: #fff !important; margin-bottom: 25px;">...Meet your NOURISH<span class="e-reverse">E</span>D</h2>
                    </div>
                    
                    <div class="col-md-7">
                      <div class="center__vert">
                        <h3 class="h1 white no__margin">Less waste...</h3>
                        <p class="h3 white">100% plastic free</p>
                        <p class="h3 white">One convenient delivery a month</p>
                        <p class="h3 white">Fully biodegradable recycled packaging</p>
                        <p class="h3 white">One compact box minimising waste</p>
                        <a href="#btn-separator__section" class="btn btn-primary btn-white-outline">Get started</a>
                      </div>
                    </div>
                    <div class="col-md-5">
                       <div class="image__background carousel__image bounce" style="background-image: url('/app/themes/frogspark/img/f-slide-2.png'); display: none !important;"></div>
                    </div>
                  </div>
                </div>
             
                <div class="image__background fade-2 w-img" style="background-image:url('/app/themes/frogspark/img/w-1.png'); background-size: cover !important; background-position: center;"></div>
       
              </div>
              

              
              <div class="carousel__item relative__item lg-background">
                <div class="container above__background">
                  <div class="row" style="padding: 0px 0px 40px 0px;">
                    <div class="col-md-12">
                      <h2 class="center" style="color: #1c4a6e !important;margin-bottom: 25px;">...Meet your NOURISH<span class="e-reverse">E</span>D</h2>
                    </div>
                    <div class="col-md-7">
                      <div class="center__vert">
                        <h3 class="h1 white no__margin">The highest quality ingredients...</h3>
                        <p class="h3 white">All natural, Non GMO</p>
                        <p class="h3 white">Wholefood sourced</p>
                        <p class="h3 white">Free from gluten, dairy, soy, nuts</p>
                        <p class="h3 white">Vegetarian ingredients</p>
                        <a href="#btn-separator__section" class="btn btn-primary btn-white-outline">Get started</a>
                        
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="image__background carousel__image bounce" style="background-image: url('/app/themes/frogspark/img/f-slide-30.png');height: 135%;
    left: 0px;
    position: absolute;
    top: -45px;
    width: 100%;"></div>
                    </div>
                  </div>
                </div>
                <div class="image__background" style="background:#e3e3e3;"></div>
              </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
  

  <section id="contact-cta__section_faq" class="content__section relative__item">
    <div class="container above__background">
      <div class="row">
        <div class="col-md-12" data-aos="fade-right">
          
         
          <h2>Frequently Asked Questions</h2>
          
          <div class="row">
            
            <div class="col-md-3">
              <a href="#" id="d-faq" class="btn white faq-btn orange__gradient">My Delivery</a>
            </div>
            
            <div class="col-md-3">
              <a href="#" id="p-faq" class="btn white faq-btn green__gradient">My Payment</a>
            </div>
            
            <div class="col-md-3">
              <a href="#" id="n-faq" class="btn white faq-btn blue__gradient">My NOURISH<span class="e-reverse">E</span>D</a>
            </div>
            
            <div class="col-md-3">
              <a href="#contact-cta__section" id="" class="btn white faq-btn purple__gradient">Work with us</a>
            </div>
            
          </div>
          
          <div id="d-block" class="faq-wrap">
          
            <div class="faq__item opacity__half" data-aos="fade-left" data-aos-delay="" data-aos-offset="-350">
              <p class="faq__title no__margin relative__item">How long does delivery take?</p>
              <div class="faq__content">
                <p class="light sm no__margin" style="padding-top: 5px;">We dispatch our NOURISHM3NTS every week to arrive on a Friday. You can select your desired Friday by picking an option in the delivery dates box on the checkout page. If you don’t receive your package by that date then please contact us at info@iamnourish3d.com with your order number. Deliveries do not need to be signed for and our packaging is designed to fit through your letterbox. If you have special delivery instructions, please ensure to put them in the ‘Special Instructions’ box on the checkout page.</p>
              </div>
            </div>
            
            <div class="faq__item opacity__half" data-aos="fade-left" data-aos-delay="" data-aos-offset="-350">
              <p class="faq__title no__margin relative__item">What courier do you use?</p>
              <div class="faq__content">
                <p class="light sm no__margin" style="padding-top: 5px;">TBC</p>
              </div>
            </div>
            
            <div class="faq__item opacity__half" data-aos="fade-left" data-aos-delay="" data-aos-offset="-350">
              <p class="faq__title no__margin relative__item">How can I track my NOURISHMENT?</p>
              <div class="faq__content">
                <p class="light sm no__margin" style="padding-top: 5px;">You can track your NOURISHM3NT by logging into your account and going to ‘My Orders/Payment History’. Here there is a link which shows you which stage of the personalisation or delivery process your NOURISH3MENTS are! </p>
              </div>
            </div>
            
            <div class="faq__item opacity__half" data-aos="fade-left" data-aos-delay="" data-aos-offset="-350">
              <p class="faq__title no__margin relative__item">Do you deliver internationally?</p>
              <div class="faq__content">
                <p class="light sm no__margin" style="padding-top: 5px;">As NOURISH3D is so new we are only able to deliver within the UK at the moment. But watch this space for more developments coming soon!</p>
              </div>
            </div>
            
          </div>
          
          <div id="p-block" class="faq-wrap">

            <div class="faq__item opacity__half" data-aos="fade-left" data-aos-delay="" data-aos-offset="-350">
              <p class="faq__title no__margin relative__item">How do I pause or cancel my subscription? </p>
              <div class="faq__content">
                <p class="light sm no__margin" style="padding-top: 5px;">You can pause or cancel your subscription anytime up to 7 days before it is dispatched. Just log into your account using the email address you signed up with, go on ‘MY Account’ and then ‘Change My Next Order’. After you have paused or cancelled your account you will receive a confirmation by email, and you can restart your account at any time by logging back in…If you have any concerns about your account and would like to discuss it before cancelling your subscription, please email us at info@iamnourish3d.com and we will be happy to help</p>
              </div>
            </div>
            
            <div class="faq__item opacity__half" data-aos="fade-left" data-aos-delay="" data-aos-offset="-350">
              <p class="faq__title no__margin relative__item">What is your returns policy?</p>
              <div class="faq__content">
                <p class="light sm no__margin" style="padding-top: 5px;">Because all of our NOURISHM3NTS are made in single batches personal to you, we are unable to offer refunds. If you have a complaint or aren’t happy with your package, please email us at info@iamnourish3d.com and we will endeavour to resolve it for you </p>
              </div>
            </div>
            
            <div class="faq__item opacity__half" data-aos="fade-left" data-aos-delay="" data-aos-offset="-350">
              <p class="faq__title no__margin relative__item">I have a refer a friend discount code, how do I apply it?</p>
              <div class="faq__content">
                <p class="light sm no__margin" style="padding-top: 5px;">If you have referred a friend and received an email with a discount code, please copy and paste it into discount code box on the checkout page. This will then automatically take the discounted amount off the total price in your basket. If you have any problems or further questions, please don’t hesitate to contact us on info@iamnourish3d.com</p>
              </div>
            </div>
            
            <div class="faq__item opacity__half" data-aos="fade-left" data-aos-delay="" data-aos-offset="-350">
              <p class="faq__title no__margin relative__item">How does the subscription work?</p>
              <div class="faq__content">
                <p class="light sm no__margin" style="padding-top: 5px;">If you select to go with 3 month or 12 month membership, we will take the subscription amount from your card at the same time each month from when you signed up. The 3 month subscription is £45 a month and the 12 month subscription is £30 a month. You can upgrade or downgrade your account at any time by logging into your account and going to ‘Edit My Account’. Subscriptions will auto renew to make sure you keep getting your NOURISHM3NTS, unless we hear from you to do otherwise. To stop your subscription from renewing or to see how long you have left until your renewal, please log into your account and go to ‘My Orders’ </p>
              </div>
            </div>
            
            <div class="faq__item opacity__half" data-aos="fade-left" data-aos-delay="" data-aos-offset="-350">
              <p class="faq__title no__margin relative__item">What forms of payment do you accept?</p>
              <div class="faq__content">
                <p class="light sm no__margin" style="padding-top: 5px;">We accept the following cards – Visa Debit, Mastercard and American Express</p>
              </div>
            </div>
            
          </div>
          
          <div id="n-block" class="faq-wrap">          

            <div class="faq__item opacity__half" data-aos="fade-left" data-aos-delay="" data-aos-offset="-350">
              <p class="faq__title no__margin relative__item">Is NOURISH3D suitable for vegans and vegetarians?</p>
              <div class="faq__content">
                <p class="light sm no__margin" style="padding-top: 5px;">Our pectin based encapsulation formula is 100% vegan, allergen free and Halal and Kosher friendly. All of our active ingredients are also sourced from high quality whole food and vegetarian sources. Please refer to the individual NOURISHM3NT descriptions to see if they are vegetarian or vegan  </p>
              </div>
            </div>
            
            <div class="faq__item opacity__half" data-aos="fade-left" data-aos-delay="" data-aos-offset="-350">
              <p class="faq__title no__margin relative__item">Can I add or change an active ingredient in my NOURISHM3NT?</p>
              <div class="faq__content">
                <p class="light sm no__margin" style="padding-top: 5px;">You can change your NOURISHM3NT anytime up to 7 days before it is dispatched. Just log into your account using the email address you signed up with, go on ‘MY Account’ and then ‘Change My Next Order’. Here you can swap around different active ingredients to suit your particular lifestyle and goals. We have 27 different active ingredients to choose from, and you can combine any 7 of them into your NOURISHM3NT. </p>
              </div>
            </div>
          
          </div>

        </div>
      </div>
    </div>
  </section>
  
  <section id="contact-cta__section" class="content__section relative__item">
    <div class="container above__background">
      <div class="row">
        <div class="col-md-5">
          
          <div id="map__wrapper" class="above__background" data-aos="fade-up" style="height: 350px; margin-bottom: 25px;"></div>
          
          <p class="half__margin" data-aos="fade-left"><i class="fas fa-map-marker-alt"></i> Address: <span class="green">30 Floodgate Street, Digbeth, B5 5SL</span></p>
          <p class="half__margin" data-aos="fade-left" data-aos-delay="50"><i class="far fa-envelope"></i> Email: <a href="mailto:info@iamnourish3d.com" class="underline__item green">info@iamnourish3d.com</a></p>
          <p class="half__margin" data-aos="fade-left" data-aos-delay="100"><i class="fas fa-phone flip__horizontal"></i> Phone: <a href="tel:0800 122 3378" class="underline__item green">0800 122 3378</a></p>

          

        </div>
        <div class="col-md-6 offset-md-1 mob-m" data-aos="fade-right">
          <h2>Want more information?</h2>
          <p class="light">Contact us below</p>
          <?php echo do_shortcode('[ninja_form id=1]'); ?>
        </div>
        
      </div>
      <div class="row full__margin">
        <div class="col-md-6">
          
        </div>
      </div>
    </div>
    
    <div class="image__background center__background opacity__quarter" style="background-image: url('/app/themes/frogspark/img/bg-logo.png');"></div>
  </section>

  <?php
    $latitude = 52.476673;
    $longitude = -1.883098;
  ?>
    

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9rktByHWRIYbrgSY2TeR8QJwCaoe55ME&sensor=false"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <script>
    $('.hero-fade').owlCarousel({
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        items:1,
        margin:0,
        stagePadding:0,
        autoplay: true,
        autoplayTimeout: 5000,
        loop: true,
        smartSpeed:250
    });
    
    $(document).ready(function() {
	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 300,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});
});
    
    
    setInterval(function(){
      
      var currentImage = $(".w-img").css("background-image");
      console.log(currentImage);
      
      if(currentImage == 'url("http://vitamyne.frogspark.agency/app/themes/frogspark/img/w-1.png")')
      {
        console.log('t');
        $(".w-img").css("background-image", "url(/app/themes/frogspark/img/w-2.png)");
      }
      else
      {
        console.log('t1');
        $(".w-img").css("background-image", "url(/app/themes/frogspark/img/w-1.png)");  
      }
      
      
    	//document.body.style.backgroundImage = "url('img_tree.png')";
    }, 3000)    

    $('#d-faq').click(function(){
      $(".faq-wrap").slideUp();
      $("#d-block").slideDown();
      
      return false;
    });
    
    $('#p-faq').click(function(){
      $(".faq-wrap").slideUp();
      $("#p-block").slideDown();
      
      return false;
    });
    
    $('#n-faq').click(function(){
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
