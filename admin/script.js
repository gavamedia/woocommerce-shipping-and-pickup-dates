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


// Let's use jQuery like normal goddamn people
let $ = null;



// Easily get elements
if (typeof GavaGet !== 'function') {
	function GavaGet(el) {if (el) {if (typeof el === 'string' || !isNaN(el)) {if (el == 'document.body') return document.body;return document.getElementById(el);}else {if (el.id) {if (document.getElementById(el.id)) return document.getElementById(el.id);else if (typeof el !== null) return el;}else return el;}}return false;}
}

// Easily add events to elements
if (!Element.prototype.AddEvent)
	Element.prototype.AddEvent = function(eventName, callFunction) {
		if (this.addEventListener) this.addEventListener(eventName.substring(2), callFunction, true);
  	else if (this.attachEvent) this.attachEvent(eventName, callFunction);
	};
if (!Element.prototype.RemoveEvent)
	Element.prototype.RemoveEvent = function(eventName, callFunction) {
		if (this.removeEventListener) this.removeEventListener(eventName.substring(2), callFunction, true);
  	else if (this.DetachEvent) this.DetachEvent(eventName, callFunction);
	};











function toggleAreaViaChecked(isChecked, areaElm, styleToChange, styleValueIfChecked, styleValueIfUnChecked) {
	areaElm.style[styleToChange] = isChecked ? styleValueIfChecked : styleValueIfUnChecked;
	
	let inputElms = areaElm.querySelectorAll('input,select,textarea');
	for (let i = 0; i < inputElms.length; i++) {
		if (isChecked) inputElms[i].removeAttribute('disabled');
		else inputElms[i].setAttribute('disabled', 'true');
	}
}





let wsapdIsSaving = false;

function wsapdSave() {
	if (wsapdIsSaving) return false;

	wsapdIsSaving = true;
	$('#wsapd-save-button').css('opacity', '.5');

	

	// This does the ajax request (The Call).
	$.ajax({
		url: ajaxurl, // admin-ajax.php
		data: {
			'action': 'WSAPD_ajaxSaveAllSettings', // This is our PHP function below

			'enable-shipping-dates': GavaGet('wsapd-enable-shipping-dates').checked,
			'enable-pickup-dates': GavaGet('wsapd-enable-pickup-dates').checked,

			'require-shipping-date': GavaGet('wsapd-require-shipping-date').checked,
			'require-pickup-date': GavaGet('wsapd-require-pickup-date').checked
		},
		success: function(data) {
			// This outputs the result of the ajax request (The Callback)
			window.alert(data);
			wsapdIsSaving = false;
			$('#wsapd-save-button').css('opacity', '1');
		},  
		error: function(errorThrown) {
			window.alert(errorThrown);
			wsapdIsSaving = false;
			$('#wsapd-save-button').css('opacity', '1');
		}
	});


}






function wsapdAddNewDate(e) {
	alert('changed: ' + e.id);



	/*
	// Check if valid date
	var newDate = new Date(Get('NewShipDate').value);

	if (!isNaN(newDate.getTime())) {
		var li = document.createElement('li');
		li.innerHTML = Get('NewShipDate').value + '<span onclick="parentNode.parentNode.removeChild(parentNode);">Remove</span>';
		Get('ShipDates').appendChild(li);
		prevShipDate = Get('NewShipDate').value;
		Get('NewShipDate').value = '';
		Get('ShipDates').scrollTop = Get('ShipDates').scrollHeight;
	}
	*/
}








jQuery(document).ready(function($jQuery) {
	// Let's use jQuery like normal goddamn people
	$ = $jQuery;

	//$('#datepicker').datepicker();



	


	let enableShippingDatesElm = GavaGet('wsapd-enable-shipping-dates');
	if (enableShippingDatesElm) enableShippingDatesElm.AddEvent('onchange', function() {
		toggleAreaViaChecked(enableShippingDatesElm.checked, GavaGet('wsapd-shipping-dates-area'), 'opacity', '1', '.5');
	});

	let enablePickupDatesElm = GavaGet('wsapd-enable-pickup-dates');
	if (enablePickupDatesElm) enablePickupDatesElm.AddEvent('onchange', function() {
		toggleAreaViaChecked(enablePickupDatesElm.checked, GavaGet('wsapd-pickup-dates-area'), 'opacity', '1', '.5');
	});



	// Load settings


	// Apply settings
	toggleAreaViaChecked(enableShippingDatesElm.checked, GavaGet('wsapd-shipping-dates-area'), 'opacity', '1', '.5');
	toggleAreaViaChecked(enablePickupDatesElm.checked, GavaGet('wsapd-pickup-dates-area'), 'opacity', '1', '.5');


	GavaGet('wsapd-save-button').AddEvent('onclick', wsapdSave);
	

	// Enable date pickers
	$('#wsapd-add-custom-ship-date').datepicker({
		minDate: 0,
		dateFormat: 'MM d, yy'
	});
	
	$('#wsapd-add-custom-ship-date').change(wsapdAddNewDate);
	
	
	//$('#wsapd-add-custom-ship-date').datepicker('option', 'dateFormat', 'MM d, yy');
	

});

