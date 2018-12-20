<?php
/**
 * Template Name: Our Nourishments
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
          <h1 class="text-uppercase">Our Nourishments</h1>
        </div>
     </div>
    </div>

  </section>
<!-- Page banner End -->





    <section id="nourishments">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="text-center">Beetroot Powder</h2>
          </div>
          <div class="col-md-6"></div>
        </div>
        <div class="row">
          <div class="col-md-6">
           <div class="page-thumbanil">
             <img src="<?php echo get_template_directory_uri(); ?>/img/nearbong-page.png" class="img-responsive" alt="">

             <p class="text-center m-5"><a href="#" class="btn btn-secondary make-my-btn"><img src="<?php echo get_template_directory_uri(); ?>/img/path-icon.png">Make my NOURISH <span class="rotate-txt">E</span>D</a></p>
           </div>
          </div>
          <div class="col-md-6">
            <div class="page-content">
                <p>Lets get to the Root of the issue….the Beetroot that is known for its intense red colour and unique flavour, beetroot has been a salad favourite for years but did you know that it has also been shown to improve endurance, blood flow and even lower blood pressure?</p>
                <p> have a naturally high level of nitrates which have been shown to improve everything from cardiovascular health to immune function. So much evidence is mounting that The American Heart Association now suggests a cup of the red stuff daily to improve BP and recovery from exercise. Want in on this fast track to fitness and heart health Choose Beetroot in your next NOURISHED blend and you’ll be on your way!</p>

                 <h4><img src="<?php echo get_template_directory_uri(); ?>/img/love.png">Benefits</h4>
                 <ul class="list-unstyled">
                   <li><a href="#">Endurance &amp; Recovery</a></li>
                   <li><a href="#">Energy</a></li>
                   <li><a href="#">Heart Health</a></li>
                   <li><a href="#">Performance</a></li>
                 </ul>
            </div>
          </div>
        </div>

      </div>
    </section>



<?php get_footer(); ?>
