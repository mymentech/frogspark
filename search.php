<?php get_header(); ?>

<?php
$featured_post_id = null;
$page_title    = get_field("page_title");
$left_content  = get_field("left_content");
$right_content = get_field("right_content");
$logo_upload   = get_field("logo_upload");
$team_members  = get_field("team_members");
$ajax_nonce = wp_create_nonce('fromspart_load_more_posts');

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
                <h1>NOURISH<span class="txt-rotate">E</span>D HUB</h1>
            </div>
        </div>
    </div>

</section>
<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row" id="our-world-posts-container" style="padding-top: 80px">
                    <?php if(have_posts()){
                        while(have_posts()){
                            the_post();
                            get_template_part('template-parts/posts', 'blog');
                        }
                    }else{
                        echo "<h3>Sorry, Nothing found with this keyword.</h3>";
                    }
                    ?>
                    <?php  ?>
                </div>
            </div>

            <div class="col-md-3">
                <?php get_template_part('template-parts/blog','sidebar') ?>
            </div>
        </div>


    </div>
</section>


<?php get_footer(); ?>
