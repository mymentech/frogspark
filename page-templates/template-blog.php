<?php
/**
 * Template Name: Blog page
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
          <h1 >OUR NOURISHENTS</h1>
        </div>
     </div>
    </div>

  </section>
<!-- Page banner End -->


<section id="brain-health-content">

<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="page-category">
        <button class="accordion-cat">TYPE OF NOURISHMENT</button>
        <div class="panel">
          <ul class="list-unstyled">
            <li><a href="#">VItamin list</a></li>
            <li><a href="#">VItamin list</a></li>
            <li><a href="#">VItamin list</a></li>
            <li><a href="#">VItamin list</a></li>
            <li><a href="#">VItamin list</a></li>
          </ul>
        </div>
      </div>

      <div class="page-category">
        <button class="accordion-cat">BENEFIT</button>
        <div class="panel">
          <ul class="list-unstyled">
            <li><a href="#">VItamin list</a></li>
            <li><a href="#">VItamin list</a></li>
            <li><a href="#">VItamin list</a></li>
            <li><a href="#">VItamin list</a></li>
            <li><a href="#">VItamin list</a></li>
          </ul>
        </div>
      </div>

    </div>
    <div class="col-md-9 col-sm-12">
     <div class="page-main-content">
       <h2>These Nourishments are great for brain Health</h2>
         <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin  </p>
         <p>Click on the ingredients to find out more.</p>
         <div class="row">
           <div class="col-md-3 col-sm-4 col-xs-6">
             <div class="vitamin-item">
               <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/health-icon-1.png" alt="" class="img-responsive"></a>
             </div>
           </div>
           <div class="col-md-3 col-sm-4 col-xs-6">
             <div class="vitamin-item">
               <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/health-icon-2.png" alt="" class="img-responsive"></a>
             </div>
           </div>
           <div class="col-md-3 col-sm-4 col-xs-6">
             <div class="vitamin-item">
               <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/health-icon-3.png" alt="" class="img-responsive"></a>
             </div>
           </div>
           <div class="col-md-3 col-sm-4 col-xs-6">
             <div class="vitamin-item">
               <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/health-icon-4.png" alt="" class="img-responsive"></a>
             </div>
           </div>
           <div class="col-md-3 col-sm-4 col-xs-6">
             <div class="vitamin-item">
               <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/health-icon-5.png" alt="" class="img-responsive"></a>
             </div>
           </div>
           <div class="col-md-3 col-sm-4 col-xs-6">
             <div class="vitamin-item">
               <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/health-icon-6.png" alt="" class="img-responsive"></a>
             </div>
           </div>
           <div class="col-md-3 col-sm-4 col-xs-6">
             <div class="vitamin-item">
               <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/health-icon-7.png" alt="" class="img-responsive"></a>
             </div>
           </div>
           <div class="col-md-3 col-sm-4 col-xs-6">
             <div class="vitamin-item">
               <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/health-icon-8.png" alt="" class="img-responsive"></a>
             </div>
           </div>
           <div class="col-md-3 col-sm-4 col-xs-6">
             <div class="vitamin-item">
               <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/health-icon-9.png" alt="" class="img-responsive"></a>
             </div>
           </div>
           <div class="col-md-3 col-sm-4 col-xs-6">
             <div class="vitamin-item">
               <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/health-icon-10.png" alt="" class="img-responsive"></a>
             </div>
           </div>
         </div> 
         <a href="#" class="btn btn-secondary">Help me Choose > </a> <a href="#" class="btn btn-secondary">Help me Choose> </a>
     </div>

    </div>

  </div>
</div>

</section>



<div class="container">
  


</div>



<?php get_footer(); ?>
