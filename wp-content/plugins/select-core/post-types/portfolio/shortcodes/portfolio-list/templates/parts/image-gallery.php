<?php
$media = qodef_core_get_portfolio_single_media();
$featured = '';
$unique_id = rand();

if(has_post_thumbnail()) {
     $featured = get_the_post_thumbnail_url(get_the_ID(),'full');
}


if(is_array($media) && count($media)) { ?>
    <?php if(!empty($featured)) { ?>
        <a itemprop="url" class="qodef-pli-link" data-rel="prettyPhoto[rel-gallery-item-<?php echo get_the_ID() . '-' . esc_attr($unique_id); ?>]" href="<?php echo esc_url($featured); ?>" title="<?php echo get_the_title(get_the_ID()); ?>"></a>
    <?php } ?>

   <?php foreach ($media as $single_media) {
       if(empty($featured)) {
            $featured = $single_media[0];
            unset($single_media[0]);
            ?>
            <a itemprop="url" class="qodef-pli-link" data-rel="prettyPhoto[rel-gallery-item-<?php echo get_the_ID() . '-' . esc_attr($unique_id); ?>]" href="<?php echo esc_url($featured['image_src'][0]); ?>" title="<?php echo get_the_title(get_the_ID()); ?>"></a>
        <?php } ?>
        <a itemprop="url" data-rel="prettyPhoto[rel-gallery-item-<?php echo get_the_ID() . '-' . esc_attr($unique_id); ?>]" href="<?php echo esc_url($single_media['image_src'][0]); ?>" title="<?php echo get_the_title(get_the_ID()); ?>"></a>
    <?php }
}