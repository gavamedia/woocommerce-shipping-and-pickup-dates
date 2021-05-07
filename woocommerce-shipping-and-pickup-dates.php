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


echo 'Oh hi world!';




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