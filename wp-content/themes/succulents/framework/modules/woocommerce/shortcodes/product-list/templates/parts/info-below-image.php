<?php
$shader_styles          = $this_object->getShaderStyles( $params );
$text_wrapper_styles    = $this_object->getTextWrapperStyles( $params );
$params['title_styles'] = $this_object->getTitleStyles( $params );
?>
<div class="qodef-pli qodef-item-space">
	<div class="qodef-pli-inner">
		<div class="qodef-pli-image">
			<?php succulents_qodef_get_module_template_part( 'templates/parts/image', 'woocommerce', '', $params ); ?>
		</div>
		<a class="qodef-pli-link" itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"></a>
	</div>
	<div class="qodef-pli-text-wrapper" <?php echo succulents_qodef_get_inline_style( $text_wrapper_styles ); ?>>
		
		<?php succulents_qodef_get_module_template_part( 'templates/parts/category', 'woocommerce', '', $params ); ?>

		<?php succulents_qodef_get_module_template_part( 'templates/parts/title', 'woocommerce', '', $params ); ?>
		
		<div class="qodef-pli-price-wrapper">
			<?php succulents_qodef_get_module_template_part( 'templates/parts/price', 'woocommerce', '', $params ); ?>
			
			<?php succulents_qodef_get_module_template_part( 'templates/parts/add-to-cart', 'woocommerce', '', $params ); ?>
		</div>
		
		<?php succulents_qodef_get_module_template_part( 'templates/parts/excerpt', 'woocommerce', '', $params ); ?>
		
		<?php succulents_qodef_get_module_template_part( 'templates/parts/rating', 'woocommerce', '', $params ); ?>
	</div>
</div>