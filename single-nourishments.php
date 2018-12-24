<?php
/**
 * Template Name: Our Nourishments
 *  @package frogspark
 */
?>

<?php get_header(); ?>

<?php
$image               = get_field("image");
$short_description   = get_field("short_description");
$research_percentage = get_field("research_percentage");
$benefits            = get_field("benefits");
$content             = get_field("content");
$photo_image         = get_field("photo_image");
$tags  = get_the_tags();



if (empty($short_description)) {
    $short_description = $content;
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
                <h2 class="text-center"><?php the_title() ?></h2>
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="page-thumbanil">
                    <img src="<?php echo esc_url($photo_image['url'])?>" class="img-responsive" alt="<?php echo esc_attr($photo_image['alt'])?>">

                    <p class="text-center m-5"><a href="/order" class="btn btn-secondary make-my-btn"><img src="<?php echo get_template_directory_uri(); ?>/img/path-icon.png">Make my NOURISH <span class="rotate-txt">E</span>D</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="page-content">
                    <?php echo wp_kses_post($content) ?>

                    <h4><img src="<?php echo get_template_directory_uri(); ?>/img/love.png">Benefits</h4>
                    <ul class="list-unstyled">
                        <?php if(is_array($tags) && !empty($tags)): ?>
                        <?php foreach ($tags as $tag): ?>
                            <?php $tag_url = get_bloginfo('url').'/tag/'.$tag->slug ?>
                        <li><a href="<?php echo esc_url($tag_url) ?>"><?php echo esc_html($tag->name) ?></a></li>
                        <?php endforeach; ?>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

<?php get_template_part('template-parts/nourished','vitamins-faq') ?>


<?php get_footer(); ?>
