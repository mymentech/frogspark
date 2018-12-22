<?php
/**
 * Template Name: Blog page
 * @package frogspark
 */
?>

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
                <div class="row" id="our-world-posts-container">
                    <?php
                        if(have_posts()){
                            while(have_posts()){
                                the_post();
                                get_template_part('template-parts/posts','blog2col');
                            }
                        }
                    ?>
                </div>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="category_navigation"><p><?php posts_nav_link(' '); ?></p></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="filter-options">
                    <h3>FILTERS POSTS</h3>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#">Popular</a>
                        </li>
                        <li>
                            <a class="#" href="#">Latest News</a>
                        </li>
                        <li>
                            <a href="#">Featured</a>
                        </li>
                        <li>
                            <a href="#">Promotions</a>
                        </li>
                    </ul>

                    <div class="blog-search">
                        <form>
                            <input type="text" class="form-control search" placeholder="Search">
                        </form>
                    </div>
                    <div class="tag-list">
                        <ul>
                            <li>
                                <a href="#"><span>></span>Tags</a>
                            </li>
                            <li>
                                <a href="#"><span>></span>Archives</a>
                            </li>
                            <li>
                                <a href="#"><span>></span>Categories</a>
                            </li>
                        </ul>
                    </div>
                    <div class="subscription-form-sec">
                        <form>
                            <h3>Never miss a thing! <br> Join our Newsletter...</h3>
                            <input type="text" placeholder="Your email address" class="form-control">
                            <input type="submit" class="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<?php get_footer(); ?>
