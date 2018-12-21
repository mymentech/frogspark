<?php

$term_id   = get_queried_object_id();
$term      = get_term($term_id);
$term_slug = $term->slug;
$term_name = $term->name;

$nourish_tags = get_categories(array(
    'taxonomy' => 'post_tag',
    'orderby'  => 'name',
    'post_type' => 'nourishments',
    'order'    => 'ASC'
));

$nourish_cats = get_categories(array(
    'taxonomy'  => 'nourishment_cat',
    'post_type' => 'nourishments',
    'orderby'   => 'name',
    'order'     => 'ASC'
));


$image               = get_field("image");
$short_description   = get_field("short_description");
$research_percentage = get_field("research_percentage");
$benefits            = get_field("benefits");
$content             = get_field("content");
$photo_image         = get_field("photo_image");

if (empty($short_description)) {
    $short_description = "Dummy text lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. At tempor commodo ullamcorper.";
}

if (empty($research_percentage)) {
    $research_percentage = "37";
}


//var_dump($term_id);


?>


<?php get_header(); ?>


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
                <h1>OUR NOURISHENTS</h1>
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
                            <?php foreach ($nourish_cats as $cat): ?>
                                <?php $cat_url = get_category_link($cat); ?>
                                <li><a href="<?php echo esc_url($cat_url) ?>"><?php echo esc_html($cat->name) ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="page-category">
                    <button class="accordion-cat">BENEFIT</button>
                    <div class="panel">
                        <ul class="list-unstyled">
                            <?php foreach ($nourish_tags as $tag): ?>
                                <?php $tag_url = get_category_link($tag); ?>
                                <li><a href="<?php echo esc_url($tag_url) ?>"><?php echo esc_html($tag->name) ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-md-9 col-sm-12">
                <div class="page-main-content">
                    <h2>These Nourishments are great for brain Health</h2>
                    <div class="cat-content">
                        <?php  echo wp_kses_post(tag_description()) ?>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="vitamin-item">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/health-icon-1.png"
                                                 alt="" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="vitamin-item">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/health-icon-2.png"
                                                 alt="" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="vitamin-item">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/health-icon-3.png"
                                                 alt="" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="vitamin-item">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/health-icon-4.png"
                                                 alt="" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="vitamin-item">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/health-icon-5.png"
                                                 alt="" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="vitamin-item">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/health-icon-6.png"
                                                 alt="" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="vitamin-item">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/health-icon-7.png"
                                                 alt="" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="vitamin-item">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/health-icon-8.png"
                                                 alt="" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="vitamin-item">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/health-icon-9.png"
                                                 alt="" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="vitamin-item">
                                <a href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/img/health-icon-10.png"
                                            alt="" class="img-responsive"></a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-secondary">Help me Choose > </a> <a href="#" class="btn btn-secondary">Help
                        me Choose> </a>
                </div>

            </div>

        </div>
    </div>

</section>


<div class="container">


</div>


<?php get_footer(); ?>
