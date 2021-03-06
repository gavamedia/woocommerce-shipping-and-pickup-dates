<?php
/**
 * Plugin URI: https://gavamedia.com
 * Documentation URI: https://gavamedia.com
 * Author: GAVAMEDIA
 * Author URI: https://gavamedia.com
 * Version: 1.0.0
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


 
$GLOBALS['WSAPD_Settings'] = [
	'enable-shipping-dates' => '',
	'enable-pickup-dates' => '',
	'require-shipping-date' => '',
	'require-pickup-date' => ''
];




function WSAPD_getOption($optionName) {
	return get_option('WSAPD_' . $optionName);
}


function WSAPD_setOption($optionName, $optionValue) {
	$optionName = 'WSAPD_' . $optionName;

	if (get_option($optionName) === false && update_option($optionName, false) === false)
		add_option($optionName, $optionValue);
	else
		update_option($optionName, $optionValue);
}






function WSAPD_ajaxSaveAllSettings() {
	if (isset($_REQUEST)) {

		WSAPD_setOption('enable-shipping-dates', $_REQUEST['enable-shipping-dates'] === 'true');
		WSAPD_setOption('enable-pickup-dates', $_REQUEST['enable-pickup-dates'] === 'true');

		WSAPD_setOption('require-shipping-date', $_REQUEST['require-shipping-date'] === 'true');
		WSAPD_setOption('require-pickup-date', $_REQUEST['require-pickup-date'] === 'true');



		echo 'saved';        
	}

	// Always die in functions echoing AJAX content
	die();
}




// Load all settings
foreach ($GLOBALS['WSAPD_Settings'] as $settingName => $value) {
	//error_log("Call: WSAPD_getOption(`$settingName`)");
	$GLOBALS['WSAPD_Settings'][$settingName] = WSAPD_getOption($settingName);
}

//error_log("\$GLOBALS['WSAPD_Settings'] = " . print_r($GLOBALS['WSAPD_Settings'], true));


