<?php
/**
 * Plugin Name: CI Beaver Modules
 * Plugin URI: https://cssigniter.com
 * Description: Custom modules for the Beaver Builder Plugin.
 * Version: 0.1
 * Author: cssigniter.com
 * Author URI: https://cssigniter.com
 */

define( 'MY_MODULES_DIR', plugin_dir_path( __FILE__ ) );
define( 'MY_MODULES_URL', plugins_url( '/', __FILE__ ) );

function ci_load_modules() {
	if ( class_exists( 'FLBuilder' ) ) {
		if ( class_exists( 'FLBuilder' ) ) {
			require_once 'ci-justified-gallery/ci-justified-gallery.php';
		}
	}
}
add_action( 'init', 'ci_load_modules' );
