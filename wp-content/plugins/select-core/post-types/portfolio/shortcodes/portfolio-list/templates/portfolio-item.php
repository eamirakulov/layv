<?php
$media = qodef_core_get_portfolio_single_media();
?>
<article class="qodef-pl-item qodef-item-space <?php echo esc_attr( $this_object->getArticleClasses( $params ) ); ?>">
	<div class="qodef-pl-item-inner">
		<?php echo qodef_core_get_cpt_shortcode_module_template_part( 'portfolio', 'portfolio-list', 'layout-collections/' . $item_style, '', $params ); ?>

		<?php if ( $item_type == 'gallery' &&  is_array( $media ) && count( $media ) > 0 ) { ?>
			<?php echo qodef_core_get_cpt_shortcode_module_template_part( 'portfolio', 'portfolio-list', 'parts/image-gallery', '', $params ); ?>
		<?php } elseif ( empty( $item_type )  ) { ?>
			<a itemprop="url" class="qodef-pli-link qodef-block-drag-link" href="<?php echo esc_url( $this_object->getItemLink() ); ?>" target="<?php echo esc_attr( $this_object->getItemLinkTarget() ); ?>"></a>
		<?php } ?>
	</div>
</article>