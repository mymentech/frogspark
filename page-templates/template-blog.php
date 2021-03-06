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
                <?php
                $featured_args_query = array(
                    'post_type'      => array('post'),
                    'posts_per_page' => 1,
                    'order'          => 'DESC',
                    'orderby'        => 'date',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'featured_taxonomy',
                            'field' => 'name',
                            'terms' => array('featured'),
                        ),
                    ),
                );

                $featured_query = new WP_Query($featured_args_query);

                if ($featured_query->have_posts()):
                    while ($featured_query->have_posts()): $featured_query->the_post();
                        $featured_post_id = get_the_ID();
                        ?>
                        <div class="lastest-feature">
                            <div class="featre-img">
                                <img src="<?php echo get_the_post_thumbnail_url(null, 'full'); ?>"
                                     class="img-responsive" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/feature-batch.png"
                                     alt="Feature batch" class="img-responsive feature-batch">
                            </div>
                            <div class="post-content">
                                <h2 class="text-center"><?php the_title() ?></h2>

                                <div class="row">
                                    <div class="col-md-5"><span><a
                                                    href="<?php the_author_link() ?>"><?php echo ucwords(get_the_author()) ?></a> - <?php the_date() ?></span>
                                    </div>
                                    <div class="col-md-3"><a class="feture-readmore text-center"
                                                             href="<?php the_permalink() ?>">Read More</a></div>
                                    <div class="col-md-4"><span class="text-right pull-right">Featured</span></div>
                                </div>

                            </div>
                        </div>
                        <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-md-3">
                <?php get_template_part('template-parts/blog','sidebar') ?>
            </div>
        </div>
        <div class="row" id="our-world-posts-container">
                <?php
                $post_not_in = isset($featured_post_id)? array($featured_post_id): array();
                $args_posts_query = array(
                    'post_type' => array('post'),
                    'posts_per_page' => 12,
                    'order' => 'DESC',
                    'orderby' => 'date',
                    'post__not_in' => $post_not_in,
                );

                $posts_query = new WP_Query( $args_posts_query );
                $total_page = $posts_query->max_num_pages;

                if ( $posts_query->have_posts() ) {
                    while ( $posts_query->have_posts() ) {
                        $posts_query->the_post();
                        get_template_part('template-parts/posts','blog');
                    }
                }else{
                    echo '<div class="col-md-12"><h3 class="text-center text-uppercase text-danger">Sorry, No post found!</h3></div>';
                }

                wp_reset_postdata();

                ?>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <?php if($total_page>1): ?>
                    <button id="blog_load_more" data-nonce="<?php echo esc_attr($ajax_nonce) ?>" data-total="<?php echo esc_attr($total_page) ?>" class="btn blog-load-more btn-secondary btn-info" type="button">Load More Post</button>
                <?php endif ?>
            </div>
        </div>

    </div>
</section>


<?php get_footer(); ?>
