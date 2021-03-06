<?php
/**
 * Plugin Name: WooCommerce Shipping and Pickup Dates
 * Plugin URI: https://gavamedia.com
 * Documentation URI: https://gavamedia.com
 * Description: Extends WooCommerce to let customers choose a shipping or pickup date during checkout.
 * Author: GAVAMEDIA
 * Author URI: https://gavamedia.com
 * Version: 1.0.1
 * Text Domain: woocommerce-shipping-and-pickup-dates
 *
 * Copyright: Copyright (c) 2021 GAVAMEDIA Corporation (support@gavamedia.com)
 *
 * License: Server Side Public License VERSION 1 or later
 * License URI: https://www.mongodb.com/licensing/server-side-public-license
 *
 * @package   WooCommerceShippingAndPickupDates
 * @author    GAVAMEDIA
 * @category  Delivery and Shipping Options
 * @copyright Copyright (c) 2021 GAVAMEDIA Corporation (support@gavamedia.com)
 * @license   https://www.mongodb.com/licensing/server-side-public-license Server Side Public License VERSION 1 or later
 *
 * xxxWoo: 187234:2i3u4oiu234329a3242387
 * xxxWC requires at least: 3.5
 * xxxWC tested up to: 5.1.0
 */



defined('ABSPATH') or die('No script kiddies, please!');
//define('WP_DEBUG', true);


if (!function_exists('str_starts_with')) {
	function str_starts_with($haystack, $needle) {
		return (string)$needle !== '' && strncmp($haystack, $needle, strlen($needle)) === 0;
	}
}
if (!function_exists('str_ends_with')) {
	function str_ends_with($haystack, $needle) {
		return $needle !== '' && substr($haystack, -strlen($needle)) === (string)$needle;
	}
}
if (!function_exists('str_contains')) {
	function str_contains($haystack, $needle) {
		return $needle !== '' && mb_strpos($haystack, $needle) !== false;
	}
}






if (!class_exists('WSAPD_Main')) {
	class WSAPD_Main {


		const CSS_FILE_PATH = 'admin/style.css';
		const JS_FILE_PATH = 'admin/script.js';

		private $screenID = null;


		function enqueueContent($hook) {
			// MUST be on the plugin's admin page
			if (!str_starts_with($hook, 'woocommerce-shipping-and-pickup-dates')) return false;

			$cssFilePath = plugin_dir_path( __FILE__ ) . self::CSS_FILE_PATH;
			$cssURL = plugins_url(self::CSS_FILE_PATH, __FILE__);
			
			$jsFilePath = plugin_dir_path( __FILE__ ) . self::JS_FILE_PATH;
			$jsURL = plugins_url(self::JS_FILE_PATH, __FILE__);
			
			//if (is_page('woocommerce-shipping-and-pickup-dates%2Fadmin%2Fview.php')) {
				
			
			// Cache based on date modified
			$cssVersion = date('Ymd-Gis', filemtime($cssFilePath));
			$jsVersion = date('Ymd-Gis', filemtime($jsFilePath));
	
			wp_enqueue_style('wsapd_css', $cssURL, array(), $cssVersion);

			//wp_enqueue_script('jquery');

			// Load the datepicker script (pre-registered in WordPress).
			wp_enqueue_script('jquery-ui-datepicker');


			// You need styling for the datepicker. For simplicity I've linked to the jQuery UI CSS on a CDN.
			wp_register_style('jquery-ui', 'https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css');
			wp_enqueue_style('jquery-ui');


			wp_enqueue_script('wsapd_js', $jsURL, array(), $jsVersion);

			/*wp_localize_script('wsapd_js', 'wsapd_js_vars', array(
					'alert' => __('Hey! You have clicked the button!', 'gava')
				)
			);*/

		}

		







		function addToAdminMenu() {
			add_menu_page(
				'WooCommerce Shipping and Pickup Dates',
				'Ship Dates',
				'manage_options',
				plugin_dir_path(__FILE__) . 'admin/view.php',
				null,
				'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxnPg0KCQkJPHBhdGggZmlsbD0iIzljYTJhNyIgZD0iTTQzMiw0MGgtMjZWMjBjMC0xMS4wNDYtOC45NTQtMjAtMjAtMjBjLTExLjA0NiwwLTIwLDguOTU0LTIwLDIwdjIwaC05MVYyMGMwLTExLjA0Ni04Ljk1NC0yMC0yMC0yMA0KCQkJCWMtMTEuMDQ2LDAtMjAsOC45NTQtMjAsMjB2MjBoLTkwVjIwYzAtMTEuMDQ2LTguOTU0LTIwLTIwLTIwcy0yMCw4Ljk1NC0yMCwyMHYyMEg4MEMzNS44ODgsNDAsMCw3NS44ODgsMCwxMjB2MzEyDQoJCQkJYzAsNDQuMTEyLDM1Ljg4OCw4MCw4MCw4MGgxNTNjMTEuMDQ2LDAsMjAtOC45NTQsMjAtMjBjMC0xMS4wNDYtOC45NTQtMjAtMjAtMjBIODBjLTIyLjA1NiwwLTQwLTE3Ljk0NC00MC00MFYxMjANCgkJCQljMC0yMi4wNTYsMTcuOTQ0LTQwLDQwLTQwaDI1djIwYzAsMTEuMDQ2LDguOTU0LDIwLDIwLDIwczIwLTguOTU0LDIwLTIwVjgwaDkwdjIwYzAsMTEuMDQ2LDguOTU0LDIwLDIwLDIwczIwLTguOTU0LDIwLTIwVjgwaDkxDQoJCQkJdjIwYzAsMTEuMDQ2LDguOTU0LDIwLDIwLDIwYzExLjA0NiwwLDIwLTguOTU0LDIwLTIwVjgwaDI2YzIyLjA1NiwwLDQwLDE3Ljk0NCw0MCw0MHYxMTRjMCwxMS4wNDYsOC45NTQsMjAsMjAsMjANCgkJCQljMTEuMDQ2LDAsMjAtOC45NTQsMjAtMjBWMTIwQzUxMiw3NS44ODgsNDc2LjExMiw0MCw0MzIsNDB6Ii8+DQoJCQk8cGF0aCBmaWxsPSIjOWNhMmE3IiBkPSJNMzkxLDI3MGMtNjYuNzIsMC0xMjEsNTQuMjgtMTIxLDEyMXM1NC4yOCwxMjEsMTIxLDEyMXMxMjEtNTQuMjgsMTIxLTEyMVM0NTcuNzIsMjcwLDM5MSwyNzB6IE0zOTEsNDcyDQoJCQkJYy00NC42NjMsMC04MS0zNi4zMzYtODEtODFzMzYuMzM3LTgxLDgxLTgxYzQ0LjY2MywwLDgxLDM2LjMzNiw4MSw4MVM0MzUuNjYzLDQ3MiwzOTEsNDcyeiIvPg0KCQkJPHBhdGggZmlsbD0iIzljYTJhNyIgZD0iTTQyMCwzNzFoLTl2LTIxYzAtMTEuMDQ2LTguOTU0LTIwLTIwLTIwYy0xMS4wNDYsMC0yMCw4Ljk1NC0yMCwyMHY0MWMwLDExLjA0Niw4Ljk1NCwyMCwyMCwyMGgyOQ0KCQkJCWMxMS4wNDYsMCwyMC04Ljk1NCwyMC0yMEM0NDAsMzc5Ljk1NCw0MzEuMDQ2LDM3MSw0MjAsMzcxeiIvPg0KCQkJPGNpcmNsZSBmaWxsPSIjOWNhMmE3IiBjeD0iMjk5IiBjeT0iMjEwIiByPSIyMCIvPg0KCQkJPGNpcmNsZSBmaWxsPSIjOWNhMmE3IiBjeD0iMjEyIiBjeT0iMjk3IiByPSIyMCIvPg0KCQkJPGNpcmNsZSBmaWxsPSIjOWNhMmE3IiBjeD0iMTI1IiBjeT0iMjEwIiByPSIyMCIvPg0KCQkJPGNpcmNsZSBmaWxsPSIjOWNhMmE3IiBjeD0iMTI1IiBjeT0iMjk3IiByPSIyMCIvPg0KCQkJPGNpcmNsZSBmaWxsPSIjOWNhMmE3IiBjeD0iMTI1IiBjeT0iMzg0IiByPSIyMCIvPg0KCQkJPGNpcmNsZSBmaWxsPSIjOWNhMmE3IiBjeD0iMjEyIiBjeT0iMzg0IiByPSIyMCIvPg0KCQkJPGNpcmNsZSBmaWxsPSIjOWNhMmE3IiBjeD0iMjEyIiBjeT0iMjEwIiByPSIyMCIvPg0KCQkJPGNpcmNsZSBmaWxsPSIjOWNhMmE3IiBjeD0iMzg2IiBjeT0iMjEwIiByPSIyMCIvPg0KCQk8L2c+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=',
				20
			);
		}



		function admin_notice__error() {
			echo '<div class="notice notice-info"><p>You have no shipping or pickup dates configured. Please <a href="/wp-admin/admin.php?page=woocommerce-shipping-and-pickup-dates%2Fadmin%2Fview.php">enable your shipping and pickup dates here</a>.</p></div>';
		}
		
		
	
		
		

		public static function init() {
			require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'settings.php';
			add_action('wp_ajax_WSAPD_ajaxSaveAllSettings', 'WSAPD_ajaxSaveAllSettings');

			// Admin only
			if (is_admin()) {
				add_action('admin_menu', 'WSAPD_Main::addToAdminMenu');
				add_action('admin_notices', 'WSAPD_Main::admin_notice__error' );
				add_action('admin_enqueue_scripts', 'WSAPD_Main::enqueueContent');
			}

			// Customers only
			else require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'client.php';
		}


	}
}
WSAPD_Main::init();