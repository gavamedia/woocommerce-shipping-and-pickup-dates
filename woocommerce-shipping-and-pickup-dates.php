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


//echo 'Oh hi world!';




/*

define('WSAPD_INVISIBLE_CHAR', ' ‌');
define('WSAPD_REPLY_TO_HEADER', 'Reply-To: ');

define('WSAPD_JS_FILE_PATH', plugin_dir_path( __FILE__ ) . 'free-spam-blocker.js');
define('WSAPD_JS_URL', plugins_url('free-spam-blocker.js', __FILE__));




function wsapd_str_contains($haystack, $needle) {
	if (is_array($haystack)) return strpos(implode('|', $haystack), $needle) !== false;
	else return strpos($haystack, $needle) !== false;
}




function wsapd_mail_filter($args) {
	$to = $args['to'];
	$subject = $args['subject'];
	
	
	// Only check for spam emails that contain "reply-to"
	if (wsapd_str_contains($args['headers'], WSAPD_REPLY_TO_HEADER)) {
				
		$subject = 'New message from your website';
		
		// No invisible char used - should have been set by JavaScript
		if (!wsapd_str_contains($args['message'], WSAPD_INVISIBLE_CHAR)) {
			$to = 'spam@gavamedia.com';
			$subject = 'Possible spam from your website';
		}
		
	}
		
	$new_wp_mail = array(
		'to'          => $to,
		'subject'     => $subject,
		'message'     => $args['message'],
		'headers'     => $args['headers'],
		'attachments' => $args['attachments']
	);

	return $new_wp_mail;
}







function wsapd_plugins_loaded() {
	//require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'initialize.php';
	
	
	// Cache based on date modified
	$wsapd_js_ver = date('Ymd-Gis', filemtime(WSAPD_JS_FILE_PATH));
	wp_enqueue_script('wsapd_js', WSAPD_JS_URL, array(), $wsapd_js_ver);
	
	
	require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'settings.php';
	
	add_filter('wp_mail', 'wsapd_mail_filter');
}
add_action('plugins_loaded', 'wsapd_plugins_loaded', 30);
*/





add_action( 'admin_menu', 'mlx_options_page' );
function mlx_options_page() {
//	$svg_icon = '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 512 512" fill="#82878c" xmlns:v="https://vecta.io/nano"><path d="M176.724 94.73V54.115h-28v14.758L105.9 29.164 1.07 126.115h32.653v86h143v-86h34.32l-34.32-31.385zm-28.478 53.2C141.5 159.417 106.1 182.4 106.1 182.4s-35.52-23.08-42.232-34.46c-3.36-5.696-5.744-11.983-5.35-20.246.7-14.626 11.406-26.705 24.517-26.705 13.48 0 23.022 10.735 23.022 10.735s10.12-10.735 23.02-10.735c13.1 0 23.816 12.08 24.517 26.705.394 8.263-1.983 14.524-5.35 20.246zM163.08 40.076s17.42-11.313 20.747-16.964c1.658-2.816 2.828-5.9 2.633-9.966C186.115 5.946 180.845 0 174.4 0c-6.35 0-11.333 5.285-11.333 5.285S158.36 0 151.724 0C145.27 0 140 5.946 139.655 13.146c-.194 4.067.98 7.162 2.633 9.966 3.305 5.602 20.8 16.964 20.8 16.964z"/></svg>';
	
    add_menu_page(
        'MLX',
        'Listings',
        'manage_options',
        plugin_dir_path(__FILE__) . 'admin/view.php',
        null,
        'dashicons-admin-multisite',
        20
    );
}
