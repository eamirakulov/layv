<?php

if ( ! function_exists( 'succulents_qodef_register_widgets' ) ) {
	function succulents_qodef_register_widgets() {
		$widgets = apply_filters( 'succulents_qodef_register_widgets', $widgets = array() );
		
		foreach ( $widgets as $widget ) {
			register_widget( $widget );
		}
	}
	
	add_action( 'widgets_init', 'succulents_qodef_register_widgets' );
}