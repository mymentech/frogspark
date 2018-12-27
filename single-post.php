<?php
/**
 * Template Name: Single Post
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<?php get_header(); ?>

<?php

$date = Date('d-m-Y', strtotime($post->post_date));

?>

<?php get_template_part('navigation-default'); ?>

<section class="single-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <a href="<?php the_permalink() ?>">
                    <h2 class="header text-center"><?php echo get_the_title(); ?></h2>
                </a>
                <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('blog_image', array('class' => 'img-responsive')) ?>

                <?php endif ?>
                <span class="single-blog__date text-info">Posted On: <?php echo $date; ?></span>
                <div class="content-body">
                    <?php the_content() ?>
                </div>
            </div>
            <div class="col-md-3">
                <?php get_template_part('template-parts/blog', 'sidebar') ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
