<article id="post-<?php the_ID(); ?>" <?php post_class($post_classes); ?>>
    <div class="qodef-post-content">
        <div class="qodef-post-text" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?> ')">
            <div class="qodef-post-mark">
                <span class="icon_link qodef-link-mark"></span>
            </div>
            <?php succulents_qodef_get_module_template_part('templates/parts/post-info/category', 'blog', '', $part_params); ?>
            <div class="qodef-post-text-inner">
                <div class="qodef-post-text-main">
                    <?php succulents_qodef_get_module_template_part('templates/parts/post-type/link', 'blog', '', $part_params); ?>
                </div>
                <div class="qodef-post-info-bottom clearfix">
                    <div class="qodef-post-info-bottom-left">
                        <?php succulents_qodef_get_module_template_part('templates/parts/post-info/date', 'blog', '', $part_params); ?>
                    </div>
                    <div class="qodef-post-info-bottom-right">
                        <?php succulents_qodef_get_module_template_part('templates/parts/post-info/share', 'blog', '', $part_params); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>