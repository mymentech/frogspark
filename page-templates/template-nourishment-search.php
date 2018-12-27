<?php
/**
 *Template Name: Nourishment Sortable
 */
get_header();

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
                <?php get_template_part('template-parts/nourished-tax', 'sidebar') ?>

            </div>
            <div class="col-md-9 col-sm-12">
                <div class="page-main-content">
                    <div class="row">
                        <div class="col-md-12">
                            <input id="nourishmentSearchInput" type="text" class="form-control" onkeyup="nourishmentSort()" placeholder="Search NOURISHM3NTS and Benefits..." />
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $args  = array('post_type' => 'nourishments', 'posts_per_page' => 600, 'orderby' => 'title', 'order' => 'asc');
                        $loop  = new WP_Query($args);
                        $count = 1;
                        while ($loop->have_posts()) : $loop->the_post();
                            $post_ID   = get_the_ID(); //id of team member
                            $fields    = get_fields($post_ID); //gets all advanced custom fields for the team member
                            $url       = get_permalink();
                            $image_url = $fields['image']['url'];
                            $image_alt = $fields['image']['alt'];
                            ?>

                            <div class="col-md-3 col-sm-4 col-xs-6 single-vitamin-item-col">
                                <div class="vitamin-item">
                                    <a href="<?php echo esc_url($url) ?>">
                                        <img src="<?php echo esc_url($image_url) ?>"
                                             alt="<?php echo esc_attr($image_alt) ?>" class="img-responsive">
                                        <p><strong class="nourishment-title"><?php the_title(); ?></strong></p>
                                    </a>

                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>

            </div>

        </div>
    </div>

</section>


<?php get_template_part('template-parts/nourished', 'vitamins-faq') ?>



<?php get_footer(); ?>
