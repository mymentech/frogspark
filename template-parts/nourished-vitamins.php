<?php
$nv_section_title = get_field("nourished_vitamins_title",449);
$nv_section_subtitle = get_field("nourished_vitamins_subtitle",449);
$nv_section_items = get_field("nourished_vitamins_section_items",449);
$nv_section_count = 1;
?>


<div id="nourished-vitamin-area" class="text-center" data-aos="fade-up">
    <h3 class="fheading">the power of seven: the possibility of a billion</h3>
    <section id="nourshed-vitamins">
        <div class="container">
            <h1>Nourish<span class="txt-rotate">E</span>d vitamins</h1>
            <h4>The clever way to get nourish<span class="txt-rotate">E</span>d</h4>
            <div class="row" id="vitamin-list">
                <?php foreach ($nv_section_items as $item):?>
                <div class="single-items" data-aos="fade-up-right" data-aos-delay="<?php echo esc_attr($nv_section_count*100) ?>">
                    <img class="img-responsive" src="<?php echo esc_url($item['image']) ?>" alt="">
                    <h2><?php echo $item['title'] ?></h2>
                    <p><?php echo $item['description'] ?></p>
                </div>
                <?php $nv_section_count++ ?>
                <?php endforeach; ?>

            </div>
        </div>

    </section>
</div>
<!-- nourished-vitamin-area  end-->