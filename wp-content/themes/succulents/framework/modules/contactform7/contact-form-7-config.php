<?php

if ( ! function_exists('succulents_qodef_contact_form_map') ) {
	/**
	 * Map Contact Form 7 shortcode
	 * Hooks on vc_after_init action
	 */
	function succulents_qodef_contact_form_map() {
		vc_add_param('contact-form-7', array(
			'type' => 'dropdown',
			'heading' => esc_html__('Style', 'succulents'),
			'param_name' => 'html_class',
			'value' => array(
				esc_html__('Default', 'succulents') => 'default',
				esc_html__('Custom Style 1', 'succulents') => 'cf7_custom_style_1',
				esc_html__('Custom Style 2', 'succulents') => 'cf7_custom_style_2',
				esc_html__('Custom Style 3', 'succulents') => 'cf7_custom_style_3'
			),
			'description' => esc_html__('You can style each form element individually in Qode Options > Contact Form 7', 'succulents')
		));
	}
	
	add_action('vc_after_init', 'succulents_qodef_contact_form_map');
}