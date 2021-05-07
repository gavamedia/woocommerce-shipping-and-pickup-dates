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
define('WP_DEBUG', true);





define('WSAPD_CSS_FILE_PATH', plugin_dir_path( __FILE__ ) . 'admin/css/style.css');
define('WSAPD_CSS_URL', plugins_url('admin/css/style.css', __FILE__));

define('WSAPD_JS_FILE_PATH', plugin_dir_path( __FILE__ ) . 'admin/js/menus.js');
define('WSAPD_JS_URL', plugins_url('admin/js/menus.js', __FILE__));





function wsapd_plugins_loaded() {
	//require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'initialize.php';
	
	
	// Cache based on date modified
	$wsapd_css_ver = date('Ymd-Gis', filemtime(WSAPD_CSS_FILE_PATH));
	$wsapd_js_ver = date('Ymd-Gis', filemtime(WSAPD_JS_FILE_PATH));

	wp_enqueue_style('wsapd_css', WSAPD_CSS_URL, array(), $wsapd_css_ver);
	wp_enqueue_script('wsapd_js', WSAPD_JS_URL, array(), $wsapd_js_ver);
	
	
	require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'settings.php';
}
add_action('plugins_loaded', 'wsapd_plugins_loaded');






function make_wsapd_page() {
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
add_action( 'admin_menu', 'make_wsapd_page' );