<div class="qodef-counter-holder <?php echo esc_attr($holder_classes); ?>">
	<div class="qodef-counter-inner">
		<?php if(!empty($custom_icon)) : ?>
			<?php echo wp_get_attachment_image($custom_icon, 'full'); ?>
		<?php endif; ?>
		<?php if(!empty($digit)) { ?>
			<div class="qodef-counter-symbol-holder">
				<span class="qodef-counter <?php echo esc_attr($type) ?>" <?php echo succulents_qodef_get_inline_style($counter_styles); ?>><?php echo esc_html($digit); ?></span>
				<span class="qodef-counter-symbol"><?php echo esc_html($symbol); ?></span>
			</div>
		<?php } ?>
		<?php if(!empty($title)) { ?>
			<<?php echo esc_attr($title_tag); ?> class="qodef-counter-title" <?php echo succulents_qodef_get_inline_style($counter_title_styles); ?>>
				<?php echo esc_html($title); ?>
			</<?php echo esc_attr($title_tag); ?>>
		<?php } ?>
		<?php if(!empty($text)) { ?>
			<p class="qodef-counter-text" <?php echo succulents_qodef_get_inline_style($counter_text_styles); ?>><?php echo esc_html($text); ?></p>
		<?php } ?>
	</div>
</div>