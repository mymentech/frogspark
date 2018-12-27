<?php
get_header();
$ajax_nonce = wp_create_nonce('fromspart_load_more_posts');

$featured_tax_terms = get_terms('featured_taxonomy', array(
    'hide_empty' => true,
));

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
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            get_template_part('template-parts/posts', 'blog2col');
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
                <?php get_template_part('template-parts/blog','sidebar') ?>
            </div>
        </div>

    </div>
</section>


<?php get_footer(); ?>
