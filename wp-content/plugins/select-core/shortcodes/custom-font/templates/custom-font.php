<<?php echo esc_attr( $title_tag ); ?> class="qodef-custom-font-holder <?php echo esc_attr( $holder_classes ); ?>" <?php succulents_qodef_inline_style( $holder_styles ); ?> <?php echo succulents_qodef_get_inline_attrs( $holder_data ); ?>>
	<?php echo wp_kses_post( $title ); ?>
</<?php echo esc_attr( $title_tag ); ?>>
<span class="qodef-custom-font-subtitle" <?php succulents_qodef_inline_style( $subtitle_styles ); ?>><?php echo wp_kses_post($subtitle); ?></span>