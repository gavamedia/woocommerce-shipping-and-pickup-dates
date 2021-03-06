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
 */


function custom_override_checkout_fields($fields) {
	// Comment field is required
	$fields['order']['order_comments']['required'] = true;
	
	// Pickup date may be required
	if ($GLOBALS['WSAPD_Settings']['require-pickup-date']) $fields['order']['pickup_date']['required'] = true;

	$fields['order']['pickup_date']['type'] = 'select';
	$fields['order']['pickup_date']['class'] = array('my-field-class form-row-wide');
	$fields['order']['pickup_date']['label'] = __('Pickup date');
	$fields['order']['pickup_date']['options'] = array( '' => 'Select...', '2021' => 'Irgendwann in 2021', '2022' => 'Irgendwann in 2022' );
	
	return $fields;
}

// Shipping or pickup dates required
if ($GLOBALS['WSAPD_Settings']['enable-shipping-dates'] || $GLOBALS['WSAPD_Settings']['enable-pickup-dates'])
	add_filter('woocommerce_checkout_fields' , 'custom_override_checkout_fields');



