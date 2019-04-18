<?php

if ( ! function_exists( 'succulents_qodef_reset_options_map' ) ) {
	/**
	 * Reset options panel
	 */
	function succulents_qodef_reset_options_map() {
		
		succulents_qodef_add_admin_page(
			array(
				'slug'  => '_reset_page',
				'title' => esc_html__( 'Reset', 'succulents' ),
				'icon'  => 'fa fa-retweet'
			)
		);
		
		$panel_reset = succulents_qodef_add_admin_panel(
			array(
				'page'  => '_reset_page',
				'name'  => 'panel_reset',
				'title' => esc_html__( 'Reset', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'reset_to_defaults',
				'default_value' => 'no',
				'label'         => esc_html__( 'Reset to Defaults', 'succulents' ),
				'description'   => esc_html__( 'This option will reset all Select Options values to defaults', 'succulents' ),
				'parent'        => $panel_reset
			)
		);
	}
	
	add_action( 'succulents_qodef_options_map', 'succulents_qodef_reset_options_map', 100 );
}