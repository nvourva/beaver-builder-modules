<?php
/**
 * Plugin Name: CI Beaver Modules
 * Plugin URI: https://cssigniter.com
 * Description: Custom modules for the Beaver Builder Plugin.
 * Version: 0.1
 * Author: cssigniter.com
 * Author URI: https://cssigniter.com
 * Text Domain: ci-beaver-modules
 * Domain Path: /languages
 *
 * CI Beaver Modules is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * CI Beaver Modules is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with CI Beaver Modules. If not, see <http://www.gnu.org/licenses/>.
 */

add_action( 'plugins_loaded', 'ci_beaver_modules_init' );
function ci_beaver_modules_init() {
	define( 'CI_MODULES_DIR', plugin_dir_path( __FILE__ ) );
	define( 'CI_MODULES_URL', plugins_url( '/', __FILE__ ) );

	if ( ! class_exists( 'FLBuilder' ) ) {
		add_action( 'admin_notices', 'ci_beaver_modules_dep' );

		return;
	}

	add_action( 'init', 'ci_load_modules' );
	add_action( 'init', 'ci_beaver_modules_load_plugin_textdomain' );
}


function ci_load_modules() {
	if ( class_exists( 'FLBuilder' ) ) {
		if ( class_exists( 'FLBuilder' ) ) {
			require_once 'ci-justified-gallery/ci-justified-gallery.php';
		}
	}
}

function ci_beaver_modules_load_plugin_textdomain() {
	load_plugin_textdomain( 'ci-beaver-modules', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}

function ci_beaver_modules_dep() {
	$message      = esc_html__( 'CI Beaver Modules requires the Beaver Builder plugin to be active. Please activate it to continue.', 'ci-beaver-modules' );
	$html_message = sprintf( '<div class="error">%s</div>', wpautop( $message ) );
	echo wp_kses_post( $html_message );
}

