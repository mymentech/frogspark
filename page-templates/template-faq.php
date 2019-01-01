<?php
/**
 * Template Name: FAQ
 *
 *  @package frogspark
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
          <h1>Frequently Asked Questions</h1>
        </div>
     </div>
    </div>

  </section>
<!-- Page banner End -->


<section id="faq-section">
  
  <div class="container">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10 text-center">
        <div class="row" data-aos="fade-down">
          <div class="col-md-3">
            <div class="single-item ">
              <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/page-icon-1.png" alt="">
                  <h2 class="text-uppercase">delivery</h2>
              </div>
          </div>
          <div class="col-md-3">
            <div class="single-item odd">
              <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/page-icon-2.png" alt="">
                  <h2 class="text-uppercase">payment</h2>
              </div>
          </div>
          <div class="col-md-3">
            <div class="single-item">
              <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/page-icon-3.png" alt="">
                  <h2 class="text-uppercase">my nourish<span class="txt-rotate" >E</span>d</h2>
              </div>
          </div>
          <div class="col-md-3">
            <div class="single-item odd">
              <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/page-icon-4.png" alt="">
                  <h2 class="text-uppercase">work with us</h2>
              </div>
          </div>
         
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>

    <div class="container">
      <div class="row">
        <div class="accordion" id="accord">
              <ul>
                <li data-aos="fade-up">
                  <h5>How long does delivery take?</h5>
                  <div>We dispatch our NOURISHM3NTS every week to arrive on a Friday. You can select your desired Friday by picking an option in the delivery dates box on the checkout page. If you don’t receive your package by that date then please contact us at info@iamnourish3d.com with your order number. Deliveries do not need to be signed for and our packaging is designed to fit through your letterbox. If you have special delivery instructions, please ensure to put them in the ‘Special Instructions’ box on the checkout page.</div>
                </li>
                <li data-aos="fade-up">
                  <h5>What Courier do you use?</h5>
                  <div>We dispatch our NOURISHM3NTS every week to arrive on a Friday. You can select your desired Friday by picking an option in the delivery dates box on the checkout page. If you don’t receive your package by that date then please contact us at info@iamnourish3d.com with your order number. Deliveries do not need to be signed for and our packaging is designed to fit through your letterbox. If you have special delivery instructions, please ensure to put them in the ‘Special Instructions’ box on the checkout page.</div>
                </li>
                <li data-aos="fade-up">
                  <h5>How can I track my NOURISHMENT?</h5>
                  <div>We dispatch our NOURISHM3NTS every week to arrive on a Friday. You can select your desired Friday by picking an option in the delivery dates box on the checkout page. If you don’t receive your package by that date then please contact us at info@iamnourish3d.com with your order number. Deliveries do not need to be signed for and our packaging is designed to fit through your letterbox. If you have special delivery instructions, please ensure to put them in the ‘Special Instructions’ box on the checkout page.</div>
                </li>
                <li data-aos="fade-up">
                  <h5>Do you delivery internationally?</h5>
                  <div>We dispatch our NOURISHM3NTS every week to arrive on a Friday. You can select your desired Friday by picking an option in the delivery dates box on the checkout page. If you don’t receive your package by that date then please contact us at info@iamnourish3d.com with your order number. Deliveries do not need to be signed for and our packaging is designed to fit through your letterbox. If you have special delivery instructions, please ensure to put them in the ‘Special Instructions’ box on the checkout page.</div>
                </li>
              </ul>
        </div>
      </div>
      <a href="/#make-my-nourished" class="btn btn-secondary">
          <img src="<?php echo get_template_directory_uri(); ?>/img/path-icon.png" alt="">
          Make my NOURISH<span class="txt-rotate" >E</span>D >
      </a>
    </div>
  </div>


</section>

<?php get_template_part('template-parts/nourished','vitamins-faq') ?>


<?php get_footer(); ?>
