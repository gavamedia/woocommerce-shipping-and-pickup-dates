<?php
/**
 * Plugin URI: https://gavamedia.com
 * Documentation URI: https://gavamedia.com
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


$html_template = file_get_contents(plugin_dir_path( __FILE__ ) . '/html/index.html');


// Add notices
$noticeHTML = '';
if ($noticeHTML) {
	$noticeHTML = <<<GAVA
	<div class="notice js-wc-plugin-framework-admin-notice error is-dismissible" data-plugin-id="bambora" data-message-id="bambora_credit_card-not-configured">
		<p>You have no shipping or pickup dates enabled</p>
		<button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button>
	</div>
GAVA;
}
$html_template = str_replace('{NOTICES}', $noticeHTML, $html_template);


echo $html_template;