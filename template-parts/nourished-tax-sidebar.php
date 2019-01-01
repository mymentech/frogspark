<?php
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

?>
<div class="page-category">
    <button class="accordion-cat clicked-accordion-cat">TYPE OF NOURISHMENT</button>
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
    <button class="accordion-cat clicked-accordion-cat">BENEFIT</button>
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