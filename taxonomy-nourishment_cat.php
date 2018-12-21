<?php

$term_id   = get_queried_object_id();
$term      = get_term($term_id);
$term_slug = $term->slug;
$term_name = $term->name;

$nourish_tags = get_categories(array(
    'taxonomy' => 'post_tag',
    'orderby'  => 'name',
    'order'    => 'ASC'
));

$nourish_cats = get_categories(array(
    'taxonomy' => 'nourishment_cat',
    'orderby'  => 'name',
    'order'    => 'ASC'
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
                        <?php echo wp_kses_post(category_description()) ?>
                    </div>
                    <div class="row">
                        <?php
                        $args = array(
                            'post_type'      => 'nourishments',
                            'posts_per_page' => 600,
                            'cat'            => $term_slug,
                            'tax_query'      => array(
                                array('taxonomy' => 'nourishment_cat',
                                      'field'    => 'slug',
                                      'terms'    => $term_slug)
                            )
                        );
                        $loop = new WP_Query($args);

                        ?>
                        <?php
                            while ($loop->have_posts()) : $loop->the_post();
                                $fields = get_fields(get_the_ID()); //gets all advanced custom fields for the team member
                                $url    = get_permalink();
                                $image_url = $fields['image']['url'];
                                $image_alt = $fields['image']['alt'];
                            ?>
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <div class="vitamin-item">
                                    <a href="<?php echo esc_url($url) ?>">
                                        <img src="<?php echo esc_url($image_url)?>" alt="<?php echo esc_attr($image_alt) ?>" class="img-responsive">
                                        <p><strong><?php the_title(); ?></strong></p>
                                    </a>

                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <a href="#" class="btn btn-secondary">Help me Choose > </a> <a href="#" class="btn btn-secondary">Help
                        me Choose> </a>
                </div>

            </div>

        </div>
    </div>

</section>


<?php get_template_part('template-parts/nourished','vitamins') ?>



<?php get_footer(); ?>
