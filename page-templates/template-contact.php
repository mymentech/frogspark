<?php
/**
 * Template Name: Contact us
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<?php get_header(); ?>

<?php

$page_title = get_field("page_title");
$left_content = get_field("left_content");
$right_content = get_field("right_content");
$logo_upload = get_field("logo_upload");
$team_members = get_field("team_members");


?>

  <style>
    
    .team-carousel__wrapper .circle__item .image__background {
      background-size: cover !important;
    }
    
    .under-nav__item {
      margin-top: 80px;
    }
    
    .content__section p {
      margin-bottom: 15px;
      line-height: 1.8em;
    }
    
    .vitateam__bio p.sm-small {
      font-size: 12px;
    }
    
    .content__section p {
      font-size: 16px;
    }
    
    .awards {
      text-align: center;
    }
    
    .awards img {
      max-width: 270px;
      display: inline-block;
      margin-right: 20px;
    }
    
  </style>

  <?php get_template_part('navigation-default'); ?>

<!-- Page banner start -->
  <section id="page-banner">
    <div class="contaner">
     <div class="col-md-12">
        <div class="banner-text">
          <h1 class="text-uppercase">contact  us</h1>
        </div>
     </div>
    </div>

  </section>
<!-- Page banner End -->

<!-- content section start -->
  
  <!-- <section id="about-us-content">
    
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>Our NOURISH3D dream began when Founder Melissa accidentally dropped a container of vitamins and supplements in airport security and had to crawl around the floor in her suit and heels trying to pick them up. As a busy entrepreneur who travels all over the world and as a nutrition enthusiast; she was sick of having to take multiple bottles and packets of pills with her everywhere she went.</p>
          <p>So we came up with NOURISH3D. Now Melissa is able to combine all of her favourite active ingredients into one personalised and convenient pod, and hasn’t had to crawl around an airport since.</p>
          <p>We utilised patented 3D food printing technology to develop a new and ingenious way for you to create your very own customised single batch chewable supplements. And because each custom blend is made to order there is also no waste product or extra packaging, meaning NOURISH3D is not only better for you, its also better for the environment.</p>
        </div>
        <div class="col-md-6">
          <p>We sourced all of our ingredients from high quality vegan whole food sources in Europe and the USA to make sure our product is of the highest standard (and tasted delicious of course!) We also conducted extensive laboratory tests to ensure our active ingredients were optimised in our patented vegan gelling agent. After all, if you are the first in the world to do something – you better do it right!</p>
          <p>NOURISH3D are a small tech start up from Birmingham, but we have big dreams. We believe that everyone is unique and that if anything on Earth should be personalised it should be your health and wellness. Our mission is to change the way the world thinks, buys and experiences vitamins and supplements going forward, one NOURISHM3NT at a time</p>
        </div>
      </div>
      <div class="about-logo">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-3">
            <div class="single-logo">
              <img src="<?php echo get_template_directory_uri() ?>/img/about-icon-1.png" alt="logo" class="img-responsive">
            </div>
          </div>
          <div class="col-md-3">
            <div class="single-logo">
              <img src="<?php echo get_template_directory_uri() ?>/img/about-icon-2.png" alt="logo" class="img-responsive">
            </div>
          </div>
          <div class="col-md-3">
            <div class="single-logo">
              <img src="<?php echo get_template_directory_uri() ?>/img/about-icon-3.png" alt="logo" class="img-responsive">
            </div>
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
    </div>


  </section> -->



<!-- contact us  start-->
  <section id="contact-us">
    <div class="container">
    <h3>We'd love to hear from you...</h3>
      <div class="row">
          <div class="col-md-4">
            <div class="single-option">
              <p>
                <img src="<?php echo get_template_directory_uri() ?>/img/add-icon.png" alt="" class="pull-left">
                Send us an email at: <a href="mailto:info@iamnourish3d@.com">info@iamnourish3d@.com</a>
                <span style="color:#541E53">(Don't forgot it's 3d at the end!)</span>
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="single-option">
              <p>
                <img src="<?php echo get_template_directory_uri() ?>/img/call-icon.png" alt="" class="pull-left">
                You cal call us on: <a href="tel:08001223378">08001223378</a>
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="single-option">
              <p>
                <img src="<?php echo get_template_directory_uri() ?>/img/location-icon.png" alt="" class="pull-left">
                Or even write us a letter if you like: 
                 <span class="clr-primary">30 Floodgate street,<br> Birmingham, B5 5SL</span>
              </p>
            </div>
        </div>
      </div>
      <div id="contact-us-form">
        <div class="row">

            <div class="col-md-6">
                   <form action="" >
                      <div class="form-group">
                      <input type="text" class="form-control" id="name" placeholder="Your name">
                           </div>
                           <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Your email address">
                           </div>

                           <input type="submit" class="btn btn-secondary" value="Send message">
                        </div>
                        <div class="col-md-6">
                              <textarea placeholder="Your message" name="" id="message" cols="50" rows="10"></textarea>
                              </form>
                        </div>
                          
                  </div>

          </div>
      </div>
  </section>
   <!-- contact us  end-->





  
 



   <!-- content section End -->


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


<div class="check-faq">
              <p>got a question? check our faqs</p>
              <a href="#" class="btn">View faqs</a>
    </div>
 

   <footer>
     <div class="container-fluid">
       <div class="row">
         <div class="col-md-12">
         <div class="footer-logo">
           <img src="<?php echo get_template_directory_uri() ?>/img/footer-logo.png" alt="logo" >
         </div>
         </div>
       </div>
       <div class="row">
        <div class="col-md-2"></div>
         <div class="col-md-8">
           <div class="footer-pages text-center">
              <ul class="list-unstled list-inline">
                <li> <a href="#">Pricing</a> </li>
                <li> <a href="#">Delivery</a> </li>
                <li> <a href="#">Faqs</a> </li>
                <li> <a href="#">Social links</a> </li>
                <li> <a href="#">Ts & Cs</a> </li>
              </ul>
            </div>
            <p class="copy-right-text text-center">These statements have not been evaluted by the Food and Drug Administration. This product is not intended to diagnose, treat, cure or prevent any disease.</p>
          </div>
        <div class="col-md-2">
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
      
     </div>
   </footer>

<?php get_footer(); ?>