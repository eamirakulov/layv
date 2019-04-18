<?php
/*
Plugin Name: Select Instagram Feed
Description: Plugin that adds Instagram feed functionality to our theme
Author: Select Themes
Version: 1.0
*/
define('QODE_INSTAGRAM_FEED_VERSION', '1.0');
define('QODE_INSTAGRAM_ABS_PATH', dirname(__FILE__));
define('QODE_INSTAGRAM_REL_PATH', dirname(plugin_basename(__FILE__ )));

include_once 'load.php';

if(!function_exists('qodef_instagram_feed_text_domain')) {
    /**
     * Loads plugin text domain so it can be used in translation
     */
    function qodef_instagram_feed_text_domain() {
        load_plugin_textdomain('select-instagram-feed', false, QODE_INSTAGRAM_REL_PATH.'/languages');
    }

    add_action('plugins_loaded', 'qodef_instagram_feed_text_domain');
}