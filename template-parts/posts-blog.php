<?php
$delay = rand(1,4)*100;

?>
<div class="col-md-4" data-aos-delay="<?php echo esc_attr($delay) ?>" data-aos="fade-up">
    <div class="single-post-item">
        <div class="post-img">
            <img src="<?php echo get_the_post_thumbnail_url(null,'blog_image_thumb')?>" class="img-responsive"
                 alt="">
        </div>
        <div class="single-post-content">
            <a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a>
            <a class="feture-readmore" href="<?php  the_permalink() ?>">Read more</a>
            <p class="text-center">by <a href="<?php the_author_link() ?>"><?php ucwords(the_author()) ?></a> - <?php the_date() ?> - <?php the_tags() ?> </p>
        </div>
    </div>
</div>