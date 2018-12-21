<?php
/**
 * Template Name: Nourishment Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<?php get_header(); ?>

<?php

$image = get_field("image");
$short_description = get_field("short_description");
$research_percentage = get_field("research_percentage");
$benefits = get_field("benefits");
$content = get_field("content");
$photo_image = get_field("photo_image");

if(empty($short_description))
{
  $short_description = $content;
}

if(empty($research_percentage))
{
  $research_percentage = "37";
}

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
  <style>
    
    .vit-sidebar h2 {
      color: #1c4a6e !important;
      font-weight: 300 !important;
    }
    
    .vit-sidebar {
      text-align: center;
    }
    
    .bar-img {
      max-width: 60%;
      margin: auto;
    }
    
    .bar-txt span {
      font-size: 22px;
      position: relative;
      top: 2px;
    }
    
    .benefits a {
      display: inline-block !important;
      padding: 5px 20px;
      background: #1b4c6d;
      color: #fff !important;
      border-radius: 10px;
      margin-right: 10px;
      margin-bottom: 20px;
      font-size: 12px;
      letter-spacing: 1px;
    }
    
    .benefits a.color-1 {
      background: #6b2559 !important;
    }
    
    .benefits a.color-2 {
      background: #1b4c6d !important;
    }
    
    .benefits a.color-3 {
      background: #223c21 !important;
    }
    
    .benefits a.color-4 {
      background: #b7a130 !important;
    }
    
    .btn-ready {
      background: #1c4a6e !important;
      color: #fff !important;
      border-color: #1c4a6e !important;
    }
    
    .nut-value p {
      margin-bottom: 25px !important;
    }
    
    @media (max-width: 767px) {
      .btn-ready {
        white-space: normal !important;
        margin-bottom: 25px;
      }
    }
    
  </style>

  <?php get_template_part('navigation-default'); ?>

  <section id="about-content__section" class="under-nav__item content__section relative__item">
    <div class="container above__background">
      <div class="row">
        <div class="col-md-4" data-aos="fade-right">
          <div class="vit-sidebar">
            <img class="vit-gem" src="<?php echo $image['url']; ?>">
            <h2><?php echo get_the_title() ?></h2>
            <p><?php echo $short_description ?></p>
            <img class="bar-img" src="/app/themes/frogspark/img/bar-icon.png">
            <p class="bar-txt">Research Barometer | <span><?php echo $research_percentage ?>%</span></p>
          </div>

        </div>
        <div class="col-md-8" data-aos="fade-left">
          <div class="benefits">
            <?php
            
              $tags = get_the_tags();
              $count = 1;
              foreach($tags as $tag)
              {
                echo "<a href='/tag/".$tag->slug."' class='color-".$count."'>".$tag->name."</a>";
                
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

          </div>
          <?php echo $content ?>
          
          <div class="row">
            <div class="col-md-6">
              <img class="vit-photo" src="<?php echo $photo_image['url'] ?>">
            </div>
            <div class="col-md-6">
              <div class="nut-value">
                <p>Nutritional Information</p>
              </div>
              <a href="/#btn-separator__section" class="btn btn-primary btn-ready">I'm ready to make my NOURISH3D</a>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>


<?php get_footer(); ?>
