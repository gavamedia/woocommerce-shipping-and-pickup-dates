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


echo <<<GAVA

<div class="wrap">
	<h1 class="wp-heading-inline">WooCommerce Shipping and Pickup Dates</h1>

	<a href="/wp-admin/post-new.php?post_type=page" class="page-title-action">Add New</a>
	<hr class="wp-header-end">


	<select>
		<option>2021 sometime...</option>
		<option>2022 sometime...</option>
	</select>
		
	<div id="ajax-response"></div>
	<br class="clear">
</div>


GAVA;
