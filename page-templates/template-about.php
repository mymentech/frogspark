<?php
/**
 * Template Name: About Page
 * @package frogspark
 */
?>

<?php get_header(); ?>

<?php

$page_title    = get_field("page_title");
$left_content  = get_field("left_content");
$right_content = get_field("right_content");
$logo_upload   = get_field("logo_upload");
$team_members  = get_field("team_members");


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
    section#about-content__section {
        background-color: #eaeaea;
        padding: 30px 0;
    }

</style>

<?php get_template_part('navigation-default'); ?>

<!-- Page banner start -->
<section id="page-banner">
    <div class="contaner">
        <div class="col-md-12">
            <div class="banner-text">
                <h1 class="text-uppercase"><?php echo esc_html($page_title) ?></h1>
            </div>
        </div>
    </div>

</section>
<section id="about-content__section" class=" relative__item">
    <div class="container above__background">
        <div class="row">
            <!-- <div class="col-md-12 center" data-aos="fade-down">
          <h1 class="black center orange__underline"><?php echo $page_title ?></h1>
        </div> -->
            <div class="col-md-6" data-aos="fade-right">
                <?php echo $left_content ?>

            </div>
            <div class="col-md-6" data-aos="fade-left">
                <?php echo $right_content ?>

            </div>
        </div>
    </div>
    <div class="image__background center__background opacity__quarter"
         style="background-image: url('/app/themes/frogspark/img/bg-logo.png');"></div>
</section>

<section id="external-ref">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="awards">
                    <?php

                    foreach ($logo_upload as $item) {
                        echo '<img src="' . $item['logo_image']['url'] . '">';
                    }

                    ?>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="vitateam-slider__section" class="content__section" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="black center">The NOURISH<span class="e-reverse" style="font-size: 50px;">E</span>D Team</h2>
            </div>
            <div class="col-md-12">
                <div class="team-carousel__wrapper relative__item">


                    <?php

                    foreach ($team_members as $item) {
                        echo '<div class="carousel__item relative__item center" data-ref="' . $item['name'] . '">
                        <div class="circle__item relative__item">
                          <div class="image__background center__background" style="background-image: url(' . $item['image']['url'] . ');"></div>
                        </div>
                        <p class="black h3">' . $item['name'] . '</p>
                        <p class="black sm no__margin">' . $item['job_title'] . '</p>
                      </div>';
                    }

                    ?>


                </div>
            </div>
        </div>
    </div>
</section>


<div class="vitateam-bio__wrapper">
    <div class="vitateam-bio__background"></div>

    <?php

    foreach ($team_members as $item) {
        echo '<div class="vitateam__bio center" data-ref="' . $item['name'] . '">
                <div class="close__bio spin__hover"><i class="fas fa-times"></i></div>
                <div class="circle__item relative__item">
                  <div class="image__background center__background" style="background-image: url(' . $item['image']['url'] . ');"></div>
          
                </div>
                <p class="black h3">' . $item['name'] . '</p>
                <p class="black sm no__margin">' . $item['job_title'] . '</p>
                ' . $item['description'] . '
              </div>';

    }

    ?>

</div>
<!-- content section End -->


<div id="nourished-vitamin-area" class="text-center">
    <h3 class="fheading">the power of seven: the possibility of a billion</h3>
    <section id="nourshed-vitamins">
        <div class="container">
            <h1>Nourish<span class="txt-rotate">E</span>d vitamins</h1>
            <h4>The clever way to get nourish<span class="txt-rotate">E</span>d</h4>
            <div class="row" id="vitamin-list">


                <div class="single-items">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/vitamin-icon.png"
                         alt="">
                    <h2>Fresh</h2>
                    <p>Made to order conveniently delivered every onth</p>
                </div>

                <div class="single-items">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/vitamin-icon.png"
                         alt="">
                    <h2>patented</h2>
                    <p>Three Propeietary patented technologies</p>
                </div>

                <div class="single-items">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/vitamin-icon.png"
                         alt="">
                    <h2>encapsulation</h2>
                    <p>Tasty and chewable, optimum absorption</p>
                </div>

                <div class="single-items">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/vitamin-icon.png"
                         alt="">
                    <h2>3d-printed</h2>
                    <p>Seven perfectly balanced and proportioned layers</p>
                </div>

                <div class="single-items">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/vitamin-icon.png"
                         alt="">
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

<?php get_footer(); ?>
