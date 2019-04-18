<?php
/*
Plugin Name: Select Twitter Feed
Description: Plugin that adds Twitter feed functionality to our theme
Author: Select Themes
Version: 1.0
*/

define( 'QODE_TWITTER_FEED_VERSION', '1.0' );
define( 'QODE_TWITTER_ABS_PATH', dirname( __FILE__ ) );
define( 'QODE_TWITTER_REL_PATH', dirname( plugin_basename( __FILE__ ) ) );
define( 'QODE_TWITTER_URL_PATH', plugin_dir_url( __FILE__ ) );
define( 'QODE_TWITTER_ASSETS_PATH', QODE_TWITTER_ABS_PATH . '/assets' );
define( 'QODE_TWITTER_ASSETS_URL_PATH', QODE_TWITTER_URL_PATH . 'assets' );
define( 'QODE_TWITTER_SHORTCODES_PATH', QODE_TWITTER_ABS_PATH . '/shortcodes' );
define( 'QODE_TWITTER_SHORTCODES_URL_PATH', QODE_TWITTER_URL_PATH . 'shortcodes' );

include_once 'load.php';

if ( ! function_exists( 'qodef_twitter_theme_installed' ) ) {
	/**
	 * Checks whether theme is installed or not
	 * @return bool
	 */
	function qodef_twitter_theme_installed() {
		return defined( 'QODE_ROOT' );
	}
}

if ( ! function_exists( 'qodef_twitter_feed_text_domain' ) ) {
	/**
	 * Loads plugin text domain so it can be used in translation
	 */
	function qodef_twitter_feed_text_domain() {
		load_plugin_textdomain( 'select-twitter-feed', false, QODE_TWITTER_REL_PATH . '/languages' );
	}
	
	add_action( 'plugins_loaded', 'qodef_twitter_feed_text_domain' );
}