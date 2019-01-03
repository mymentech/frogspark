<?php
$smf_nonce          = wp_create_nonce('mailchimp_connect');
$featured_tax_terms = get_terms('featured_taxonomy', array(
    'hide_empty' => true,
));
$tag_terms          = get_terms('post_tag', array(
    'hide_empty' => true,
));
$category_terms     = get_terms('category', array(
    'hide_empty' => true,
    'post_type'  => 'post',
));

?>
<div class="filter-options">
    <h3>FILTERS POSTS</h3>

    <ul class="list-unstyled">
        <?php foreach ($featured_tax_terms as $term) {
            $link = get_term_link($term->term_id, 'featured_taxonomy');
            printf("<li><a href='%s'>%s</a></li>", esc_url($link), esc_html($term->name));
        } ?>
    </ul>

    <div class="blog-search">
        <form action="/">
            <input type="text" style="padding-left: 40px;" name="s" value="<?php the_search_query(); ?>"
                   class="form-control search" placeholder="Search">
        </form>
    </div>
    <div class="mt-50 cb"></div>
    <div class="tag-list">

        <ul>
<!--            <li>-->
            <!--                <a data-toggle="collapse" class="fs-collapse-handle" href="#fs-collapse-tags" aria-expanded="false"-->
            <!--                   aria-controls="fs-collapse-tags"><span>></span>Tags</a>-->
            <!--                <div class="fs-collapse tax-links" id="fs-collapse-tags">-->
            <!--                    <ul>-->
            <!--                        --><?php
            ////                        foreach ($tag_terms as $term) {
            ////                            $link = get_term_link($term->term_id, 'post_tag');
            ////                            printf("<li><a href='%s'>%s</a></li>", esc_url($link), esc_html($term->name));
            ////                        }
            //                        ?>
            <!--                    </ul>-->
            <!--                </div>-->
            <!--            </li>-->

            <!--            <li>-->
            <!--                <a data-toggle="collapse" class="fs-collapse-handle" href="#fs-collapse-category" aria-expanded="false"-->
            <!--                   aria-controls="fs-collapse-tags"><span>></span>Categories</a>-->
            <!--                <div class="fs-collapse tax-links" id="fs-collapse-category">-->
            <!--                    <ul>-->
            <!--                        --><?php
            ////                        foreach ($category_terms as $term) {
            ////                            $link = get_category_link($term->term_id);
            ////                            printf("<li><a href='%s'>%s</a></li>", esc_url($link), esc_html($term->name));
            ////                        }
            //                        ?>
            <!--                    </ul>-->
            <!--                </div>-->
            <!---->
            <!--            </li>-->
        </ul>
    </div>
    <div class="mb-50 cb"></div>
    <div class="subscription-form-sec">
        <form class="simple_mailchimp_form">
            <h3>Never miss a thing! <br> Join our Newsletter...</h3>
            <input type="text" placeholder="Your email address" class="form-control email">
            <input type="button" data-smf_s="<?php echo esc_attr($smf_nonce) ?>" class="submit smf-submit-button"
                   value="Submit">
        </form>
    </div>
</div>