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

		const CLASS_NAME = 'WSAPD';

		public $settings = ['enable-shipping-dates'];


		function getOption($optionName) {
			$optionName = self::CLASS_NAME . '-' . $optionName;

			return get_option($optionName);
		}




		function saveOption($optionName, $optionValue) {
			$optionName = self::CLASS_NAME . '-' . $optionName;

			if (get_option($optionName) === false && update_option($optionName, false) === false)
				add_option($optionName, $optionValue);
			else
				update_option($optionName, $optionValue);
		}


		function saveSettings() {
			if (isset($_REQUEST)) {

				WSAPD_Settings::saveOption('enable-shipping-dates', $_REQUEST['enable-shipping-dates'] === 'true');


				echo 'saved';        
			}

			// Always die in functions echoing AJAX content
			die();
		}



		public static function init() {

			foreach ($settings as $settingName=>$value) {

				$settings[$settingName] = WSAPD_Settings::getOption($settingName);

			}

		}

	}
}

$WSAPD_settings = new WSAPD_Settings;
$WSAPD_settings::init();