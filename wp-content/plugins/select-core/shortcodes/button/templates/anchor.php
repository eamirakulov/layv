<a itemprop="url" href="<?php echo esc_url($link); ?>" target="<?php echo esc_attr($target); ?>" <?php succulents_qodef_inline_style($button_styles); ?> <?php succulents_qodef_class_attribute($button_classes); ?> <?php echo succulents_qodef_get_inline_attrs($button_data); ?> <?php echo succulents_qodef_get_inline_attrs($button_custom_attrs); ?>>
    <span class="qodef-btn-text"><?php echo esc_html($text); ?></span>
    <?php echo succulents_qodef_icon_collections()->renderIcon($icon, $icon_pack); ?>
</a>