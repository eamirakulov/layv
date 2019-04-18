<?php

if ( ! function_exists( 'succulents_qodef_register_woocommerce_dropdown_cart_widget' ) ) {
	/**
	 * Function that register image gallery widget
	 */
	function succulents_qodef_register_woocommerce_dropdown_cart_widget( $widgets ) {
		$widgets[] = 'SucculentsQodefWoocommerceDropdownCart';
		
		return $widgets;
	}
	
	add_filter( 'succulents_qodef_register_widgets', 'succulents_qodef_register_woocommerce_dropdown_cart_widget' );
}