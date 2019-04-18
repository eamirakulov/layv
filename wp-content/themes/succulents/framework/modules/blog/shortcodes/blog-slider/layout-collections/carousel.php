<li class="qodef-blog-slider-item">
    <div class="qodef-blog-slider-item-inner">
        <div class="qodef-item-image">
            <a itemprop="url" href="<?php echo get_permalink(); ?>">
                <?php echo get_the_post_thumbnail(get_the_ID(), $image_size); ?>
            </a>
        </div>
        <div class="qodef-bli-content">
            <?php succulents_qodef_get_module_template_part('templates/parts/title', 'blog', '', $params); ?>
            <?php if($post_info_category == 'yes') { ?>
                <?php succulents_qodef_get_module_template_part('templates/parts/post-info/category', 'blog', '', $params); ?>
            <?php } ?>
        </div>
    </div>
</li>