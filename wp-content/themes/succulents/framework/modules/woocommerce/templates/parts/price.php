<?php
$product = succulents_qodef_return_woocommerce_global_variable();

if ($price_html = $product->get_price_html()) { ?>
	<div class="qodef-<?php echo esc_attr($class_name); ?>-price"><?php echo wp_kses_post($price_html); ?></div>
<?php } ?>