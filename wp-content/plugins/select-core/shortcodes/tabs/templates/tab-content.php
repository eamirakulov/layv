<div class="qodef-tab-container" id="tab-<?php echo sanitize_title($tab_title); ?>">
    <?php if(isset($tab_content_title) && $tab_content_title != '') { ?>
    <<?php echo esc_attr($content_title_tag); ?> class="qodef-tab-title">
    <?php echo esc_html($tab_content_title); ?>
</<?php echo esc_attr($content_title_tag); ?>>
<?php } ?>
<?php if(isset($tab_content_description) && $tab_content_description != '') { ?>
    <div class="qodef-tab-description">
        <?php echo esc_html($tab_content_description); ?>
    </div>
<?php } ?>
<div class="qodef-tab-content-holder">
    <div class="qodef-tab-content">
        <?php echo do_shortcode($content); ?>
    </div>
    <?php if(! empty($tab_image)){ ?>
        <div class="qodef-tab-image">
            <?php echo wp_get_attachment_image($tab_image, 'full'); ?>
        </div>
    <?php } ?>
</div>
</div>