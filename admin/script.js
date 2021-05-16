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






function toggleAreaViaChecked(isChecked, areaElm, styleToChange, styleValueIfChecked, styleValueIfUnChecked) {
	areaElm.style[styleToChange] = isChecked ? styleValueIfChecked : styleValueIfUnChecked;
	
	let inputElms = areaElm.querySelectorAll('input,select,textarea');
	for (let i = 0; i < inputElms.length; i++) {
		if (isChecked) inputElms[i].removeAttribute('disabled');
		else inputElms[i].setAttribute('disabled', 'true');
	}
}





function wsapdSave() {


	//$('#wsapd-enable-shipping-dates')


	
	// This does the ajax request (The Call).
	$.ajax({
		url: ajaxurl, // admin-ajax.php
		data: {
			'action': 'example_ajax_request',
	
			'enable-shipping-dates': $('#wsapd-enable-shipping-dates').checked
		},
		success: function(data) {
			// This outputs the result of the ajax request (The Callback)
			window.alert(data);
		},  
		error: function(errorThrown) {
			window.alert(errorThrown);
		}
	});


}







// Let's use jQuery, people
let $ = null;


jQuery(document).ready(function($jQuery) {
	$ = $jQuery;

	$('#datepicker').datepicker();



	


	let enableShippingDatesElm = $('#wsapd-enable-shipping-dates');
	if (enableShippingDatesElm) enableShippingDatesElm.change(function() {
		toggleAreaViaChecked(enableShippingDatesElm.checked, $('#wsapd-shipping-dates-area'), 'opacity', '1', '.5');
	});

	let enablePickupDatesElm = $('#wsapd-enable-pickup-dates');
	if (enablePickupDatesElm) enablePickupDatesElm.change(function() {
		toggleAreaViaChecked(enablePickupDatesElm.checked, $('#wsapd-pickup-dates-area'), 'opacity', '1', '.5');
	});



	// Load settings


	// Apply settings
	toggleAreaViaChecked(enableShippingDatesElm.checked, $('#wsapd-shipping-dates-area'), 'opacity', '1', '.5');
	toggleAreaViaChecked(enablePickupDatesElm.checked, $('#wsapd-pickup-dates-area'), 'opacity', '1', '.5');


	$('#wsapd-save-button').click(wsapdSave);
	
});

