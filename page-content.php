<?php
/**
 * Template Name: Content Page
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

  <section id="about-content__section" class="under-nav__item content__section relative__item">
    <div class="container above__background">
      <div class="row">
        <div class="col-md-12 center" data-aos="fade-down">
          <h1 class="black center orange__underline"><?php echo $page_title ?></h1>
        </div>
        <div class="col-md-10 offset-md-1" data-aos="fade-right">
          <?php echo $left_content ?>

        </div>

      </div>
    </div>
  </section>

<?php get_footer(); ?>
