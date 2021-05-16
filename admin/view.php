<?php
/**
 * Plugin URI: https://gavamedia.com
 * Documentation URI: https://gavamedia.com
 * Author: GAVAMEDIA
 * Author URI: https://gavamedia.com
 * Version: 1.0.2
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
 */


$html_template = file_get_contents(plugin_dir_path( __FILE__ ) . '/index.html');







if ($GLOBALS['WSAPD_Settings']['enable-shipping-dates']) $html_template = str_replace('{{wsapd_enable_shipping_dates}}', ' checked="true"', $html_template);









// Add notices
$noticeHTML = '';
$noticeText = '<span class="wsapd-icon wsapd-icon-warn"></span> Please enable shipping or pickup dates below.';
if ($noticeText) {
	$noticeHTML = "<div id=\"wsapd-notice\">$noticeText</div>";
}
$html_template = str_replace('{{NOTICES}}', $noticeHTML, $html_template);


echo $html_template;

//echo "da settings: " . print_r($GLOBALS['WSAPD_Settings'], true);