<?php

if ( ! function_exists( 'succulents_qodef_register_image_gallery_widget' ) ) {
	/**
	 * Function that register image gallery widget
	 */
	function succulents_qodef_register_image_gallery_widget( $widgets ) {
		$widgets[] = 'SucculentsQodefImageGalleryWidget';
		
		return $widgets;
	}
	
	add_filter( 'succulents_qodef_register_widgets', 'succulents_qodef_register_image_gallery_widget' );
}