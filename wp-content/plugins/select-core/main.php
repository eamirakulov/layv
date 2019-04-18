<?php
/*
Plugin Name: Select Core
Description: Plugin that adds all post types needed by our theme
Author: Select Themes
Version: 1.0.1
*/

require_once 'load.php';

add_action( 'after_setup_theme', array( QodeCore\CPT\PostTypesRegister::getInstance(), 'register' ) );

if ( ! function_exists( 'qodef_core_activation' ) ) {
	/**
	 * Triggers when plugin is activated. It calls flush_rewrite_rules
	 * and defines succulents_qodef_core_on_activate action
	 */
	function qodef_core_activation() {
		do_action( 'succulents_qodef_core_on_activate' );
		
		QodeCore\CPT\PostTypesRegister::getInstance()->register();
		flush_rewrite_rules();
	}
	
	register_activation_hook( __FILE__, 'qodef_core_activation' );
}

if ( ! function_exists( 'qodef_core_text_domain' ) ) {
	/**
	 * Loads plugin text domain so it can be used in translation
	 */
	function qodef_core_text_domain() {
		load_plugin_textdomain( 'select-core', false, QODE_CORE_REL_PATH . '/languages' );
	}
	
	add_action( 'plugins_loaded', 'qodef_core_text_domain' );
}

if ( ! function_exists( 'qodef_core_version_class' ) ) {
	/**
	 * Adds plugins version class to body
	 *
	 * @param $classes
	 *
	 * @return array
	 */
	function qodef_core_version_class( $classes ) {
		$classes[] = 'qodef-core-' . QODE_CORE_VERSION;
		
		return $classes;
	}
	
	add_filter( 'body_class', 'qodef_core_version_class' );
}

if ( ! function_exists( 'qodef_core_theme_installed' ) ) {
	/**
	 * Checks whether theme is installed or not
	 * @return bool
	 */
	function qodef_core_theme_installed() {
		return defined( 'QODE_ROOT' );
	}
}

if ( ! function_exists( 'qodef_core_is_woocommerce_installed' ) ) {
	/**
	 * Function that checks if woocommerce is installed
	 * @return bool
	 */
	function qodef_core_is_woocommerce_installed() {
		return function_exists( 'is_woocommerce' );
	}
}

if ( ! function_exists( 'qodef_core_is_woocommerce_integration_installed' ) ) {
	//is Qode Woocommerce Integration installed?
	function qodef_core_is_woocommerce_integration_installed() {
		return defined( 'QODE_WOOCOMMERCE_CHECKOUT_INTEGRATION' );
	}
}

if ( ! function_exists( 'qodef_core_is_revolution_slider_installed' ) ) {
	function qodef_core_is_revolution_slider_installed() {
		return class_exists( 'RevSliderFront' );
	}
}

if(!function_exists('qodef_core_is_wpml_installed')) {
    /**
     * Function that checks if WPML plugin is installed
     * @return bool
     *
     * @version 0.1
     */
    function qodef_core_is_wpml_installed() {
        return defined('ICL_SITEPRESS_VERSION');
    }
}

if ( ! function_exists( 'qodef_core_theme_menu' ) ) {
	/**
	 * Function that generates admin menu for options page.
	 * It generates one admin page per options page.
	 */
	function qodef_core_theme_menu() {
		if ( qodef_core_theme_installed() ) {
			
			global $succulents_qodef_Framework;
			succulents_qodef_init_theme_options();
			
			$page_hook_suffix = add_menu_page(
				esc_html__( 'Select Options', 'select-core' ), // The value used to populate the browser's title bar when the menu page is active
				esc_html__( 'Select Options', 'select-core' ), // The text of the menu in the administrator's sidebar
				'administrator',                            // What roles are able to access the menu
				'succulents_qodef_theme_menu',            // The ID used to bind submenu items to this menu
				array( $succulents_qodef_Framework->getSkin(), 'renderOptions' ), // The callback function used to render this menu
				$succulents_qodef_Framework->getSkin()->getSkinURI() . '/assets/img/admin-logo-icon.png', // Icon For menu Item
				100                                                                                            // Position
			);
			
			foreach ( $succulents_qodef_Framework->qodefOptions->adminPages as $key => $value ) {
				$slug = "";
				
				if ( ! empty( $value->slug ) ) {
					$slug = "_tab" . $value->slug;
				}
				
				$subpage_hook_suffix = add_submenu_page(
					'succulents_qodef_theme_menu',
					esc_html__( 'Select Options - ', 'select-core' ) . $value->title, // The value used to populate the browser's title bar when the menu page is active
					$value->title,                                                 // The text of the menu in the administrator's sidebar
					'administrator',                                               // What roles are able to access the menu
					'succulents_qodef_theme_menu' . $slug,                       // The ID used to bind submenu items to this menu
					array( $succulents_qodef_Framework->getSkin(), 'renderOptions' )
				);
				
				add_action( 'admin_print_scripts-' . $subpage_hook_suffix, 'succulents_qodef_enqueue_admin_scripts' );
				add_action( 'admin_print_styles-' . $subpage_hook_suffix, 'succulents_qodef_enqueue_admin_styles' );
			};
			
			add_action( 'admin_print_scripts-' . $page_hook_suffix, 'succulents_qodef_enqueue_admin_scripts' );
			add_action( 'admin_print_styles-' . $page_hook_suffix, 'succulents_qodef_enqueue_admin_styles' );
		}
	}
	
	add_action( 'admin_menu', 'qodef_core_theme_menu' );
}

if ( ! function_exists( 'qodef_core_theme_menu_backup_options' ) ) {
	/**
	 * Function that generates admin menu for options page.
	 * It generates one admin page per options page.
	 */
	function qodef_core_theme_menu_backup_options() {
		if ( qodef_core_theme_installed() ) {
			global $succulents_qodef_Framework;
			
			$slug             = "_backup_options";
			$page_hook_suffix = add_submenu_page(
				'succulents_qodef_theme_menu',
				esc_html__( 'Select Options - Backup Options', 'select-core' ), // The value used to populate the browser's title bar when the menu page is active
				esc_html__( 'Backup Options', 'select-core' ),                // The text of the menu in the administrator's sidebar
				'administrator',                                             // What roles are able to access the menu
				'succulents_qodef_theme_menu' . $slug,                     // The ID used to bind submenu items to this menu
				array( $succulents_qodef_Framework->getSkin(), 'renderBackupOptions' )
			);
			
			add_action( 'admin_print_scripts-' . $page_hook_suffix, 'succulents_qodef_enqueue_admin_scripts' );
			add_action( 'admin_print_styles-' . $page_hook_suffix, 'succulents_qodef_enqueue_admin_styles' );
		}
	}
	
	add_action( 'admin_menu', 'qodef_core_theme_menu_backup_options' );
}

if ( ! function_exists( 'qodef_core_theme_admin_bar_menu_options' ) ) {
	/**
	 * Add a link to the WP Toolbar
	 */
	function qodef_core_theme_admin_bar_menu_options( $wp_admin_bar ) {
		$args = array(
			'id'    => 'succulents-admin-bar-options',
			'title' => sprintf( '<span class="ab-icon dashicons-before dashicons-admin-generic"></span> %s', esc_html__( 'Select Options', 'select-core' ) ),
			'href'  => esc_url( admin_url('admin.php?page=succulents_qodef_theme_menu') )
		);
		
		$wp_admin_bar->add_node( $args );
	}
	
	add_action( 'admin_bar_menu', 'qodef_core_theme_admin_bar_menu_options', 999 );
}