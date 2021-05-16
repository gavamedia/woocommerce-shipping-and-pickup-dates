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

if (!class_exists('WSAPD_Settings')) {
	class WSAPD_Settings {



		function saveSettings() {
			if (isset($_REQUEST)) {

				$enableShippingDates = $_REQUEST['enable-shipping-dates'] === 'true';


				// This bit is going to process our fruit variable into an Apple
				//if ( $enableShippingDates == 'Banana' ) {
				$enableShippingDates = 'New saved value: ' . $enableShippingDates;
				//}

				// Now let's return the result to the Javascript function (The Callback) 
				echo $enableShippingDates;        
			}

			// Always die in functions echoing AJAX content
			die();
		}




	}
}