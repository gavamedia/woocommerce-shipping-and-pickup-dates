<?php
/**
 * Plugin Name: WooCommerce Shipping and Pickup Dates
 * Plugin URI: https://gavamedia.com
 * Documentation URI: https://gavamedia.com
 * Description: Extends WooCommerce to let customers choose a shipping or pickup date during checkout.
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

/*
function wsapd_settings_init() {
    // register a new setting for "reading" page
    register_setting('reading', 'wsapd_setting_name');
 
    // register a new section in the "reading" page
    add_settings_section(
        'wsapd_settings_section',
        'FSB Settings Section',
        'wsapd_settings_section_cb',
        'reading'
    );
 
    // register a new field in the "wsapd_settings_section" section, inside the "reading" page
    add_settings_field(
        'wsapd_settings_field',
        'FSB Setting',
        'wsapd_settings_field_cb',
        'reading',
        'wsapd_settings_section'
    );
}
 
/**
 * register wsapd_settings_init to the admin_init action hook
 *
add_action('admin_init', 'wsapd_settings_init');



/**
 * callback functions
 *
 
// section content cb
function wsapd_settings_section_cb() {
    echo '<p>Free Spam Blocking Section Introduction.</p>';
}
 
// field content cb
function wsapd_settings_field_cb() {
    // get the value of the setting we've registered with register_setting()
    $setting = get_option('wsapd_setting_name');
    // output the field
    ?>
    <input type="text" name="wsapd_setting_name" value="<?php echo isset( $setting ) ? esc_attr( $setting ) : ''; ?>">
    <?php
}

*/