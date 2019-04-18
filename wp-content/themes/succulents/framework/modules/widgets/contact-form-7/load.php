<?php

if ( succulents_qodef_contact_form_7_installed() ) {
	include_once QODE_FRAMEWORK_MODULES_ROOT_DIR . '/widgets/contact-form-7/contact-form-7.php';
	
	add_filter( 'succulents_qodef_register_widgets', 'succulents_qodef_register_cf7_widget' );
}

if ( ! function_exists( 'succulents_qodef_register_cf7_widget' ) ) {
	/**
	 * Function that register cf7 widget
	 */
	function succulents_qodef_register_cf7_widget( $widgets ) {
		$widgets[] = 'SucculentsQodefContactForm7Widget';
		
		return $widgets;
	}
}