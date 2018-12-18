<?php
/**
 * Template Name: VitaDNA Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<?php get_header(); ?>

  <?php get_template_part('navigation-default'); ?>
  
  <style>
    
    .btn:active, .btn.active {
          background-image: -webkit-gradient(linear, left top, right top, from(#39A934), color-stop(51%, #60c0f3), to(#39A934));
    background-image: linear-gradient(to right, #39A934 0%, #60c0f3 51%, #39A934 100%);
    }
    
    #vitadna__process .col-md-7 p {
      line-height: 1.4em;
    }
    
  </style>

  <section id="vitadna-content__section" class="under-nav__item content__section relative__item">
    <div class="container above__background">
      <div class="row">
        <div class="col-md-12 center" data-aos="fade-down">
          <h1>NourishDNA</h1>
          <h2>Coming Soon</h2>
           <p class="sm no__margin">DNA is the commonly thought of as the building blocks of our bodies and is in effect the instruction manual for the body– controlling and creating every single trait, characteristic and function contained within our cells. </p>
<p class="sm ">Our genes play a role in many important facets of our health and wellness predispositions including our muscle memory, lactose tolerance, absorption of vitamins and prevalence to certain hereditary illnesses.</p>
<p class="sm ">Our genes are passed down to us by our mother and father in a combination of ways and by analysing our DNA we can understand more about ourselves and how to optimise our lives in the present and future. 
DNA is not the only factor when it comes to health and wellbeing of course and a good lifestyle including healthy eating habits and exercise also play an extremely important role in make the most of our time.</p>
<p class="sm ">Through our partnership with XXXX we are delighted to offer our customers NourishDNA whereby you can access the information within your DNA code and we can use this in combination with your lifestyle habits and goals to create the best possible recommendation for your NOURISHED blend. </p>
<p class="sm ">If you would like to be added to the waiting list to be one of the first people in the UK to try NOURISHDNA – click HERE and we will contact you when it becomes available!
Thanks so much for your interest and have a NOURISHED Day!
</p>
      
        </div>
      </div>
      <div class="row full__margin" style="display: none;">
        <div id="vitadna__process" class="col-md-10 offset-md-1">
          <p class="btn green-alt__gradient gradient__item no__border white h2 no__margin shadow__item">The Process</p>
          <div class="container">

            <div class="row">
              <div class="col-md-2">
                <p class="no__margin red">1</p>
              </div>
              <div class="col-md-7">
                <p>Integer iaculis est nec nibh finibus, vel elementum tortor ornare. Curabitur eget accumsan libero. Proin gravida, sapien vel porttitor fermentum.</p>
              </div>
              <div class="col-md-3 right">
                <img src="/app/themes/frogspark/img/1.png" alt="">
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <p class="no__margin green">2</p>
              </div>
              <div class="col-md-7">
              <p>Integer iaculis est nec nibh finibus, vel elementum tortor ornare. Curabitur eget accumsan libero. Proin gravida, sapien vel porttitor fermentum.</p>
              </div>
              <div class="col-md-3 right">
                <img src="/app/themes/frogspark/img/2.png" alt="">
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <p class="no__margin blue">3</p>
              </div>
              <div class="col-md-7">
              <p>Integer iaculis est nec nibh finibus, vel elementum tortor ornare. Curabitur eget accumsan libero. Proin gravida, sapien vel porttitor fermentum.</p>
              </div>
              <div class="col-md-3 right">
                <img src="/app/themes/frogspark/img/3.png" alt="">
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="row" style="padding-top: 25px;">
        <div class="col-md-6 offset-md-3 bounce">
          <h2 class="half__underline text-center">Your NourishDNA</h2>
          <img src="http://vitamyne.frogspark.agency/app/themes/frogspark/img/f-slide-1.png" style="max-width: 70%;" alt="DNA placeholder">
        </div>
<!--
        <div class="col-md-6">
          
          <p class="dna__tick half__margin">Lorem ipsum dolor sit amet, consectetuer...</p>
          <p class="dna__tick half__margin">Lorem ipsum dolor sit amet, consectetuer...</p>
          <p class="dna__tick half__margin">Lorem ipsum dolor sit amet, consectetuer...</p>
          <p class="dna__tick half__margin">Lorem ipsum dolor sit amet, consectetuer...</p>
        </div>
-->
      </div>
    </div>
    <div class="image__background center__background" style="background-image: url('/app/themes/frogspark/img/dna-bg.png');"></div>
  </section>

  <section id="singup-strip__section" class="content__section relative__item purple-alt__gradient" style="padding: 120px 0px 80px; margin-top: -160px;">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1 center">
          <h2 class="white">Coming soon...</h2>
          <p class="success" style="color: #fff; display: none;">Thanks for registering your interest, will will notify you when NourishDNA has launched.</p>
          <div class="signup__wrapper">
            
            <input type="text" placeholder="Register your interest">
            <input type="submit" value="Submit" class="news-signup">
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>

<script>
  
  $(document).ready(function(){
    $(".news-signup").click(function(){
      
      $(".signup__wrapper").slideUp();
      $(".success").slideDown();
      
      return false;  
        
    });
  });
  
  
</script>
