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



function Get(el) {if (el) {if (typeof el === 'string' || !isNaN(el)) {if (el == 'document.body') return document.body;return document.getElementById(el);}else {if (el.id) {if (document.getElementById(el.id)) return document.getElementById(el.id);else if (typeof el !== null) return el;}else return el;}}return false;}







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







function wsapd_STARTUP() {
	//alert('loaded!');


	let enableShippingDatesElm = Get('wsapd-enable-shipping-dates');
	if (enableShippingDatesElm) enableShippingDatesElm.AddEvent('onchange', function() {
		toggleAreaViaChecked(enableShippingDatesElm.checked, Get('wsapd-shipping-dates-area'), 'opacity', '1', '.5');
		toggleAreaViaChecked(!enableShippingDatesElm.checked, Get('wsapd-pickup-dates-area'), 'opacity', '1', '.5');
	});

	let enablePickupDatesElm = Get('wsapd-enable-pickup-dates');
	if (enablePickupDatesElm) enablePickupDatesElm.AddEvent('onchange', function() {
		toggleAreaViaChecked(enablePickupDatesElm.checked, Get('wsapd-pickup-dates-area'), 'opacity', '1', '.5');
		toggleAreaViaChecked(!enablePickupDatesElm.checked, Get('wsapd-shipping-dates-area'), 'opacity', '1', '.5');
	});

}





if (document.addEventListener) document.addEventListener('DOMContentLoaded', function() {
	setTimeout(wsapd_STARTUP, 1);
});
else if (document.attachEvent) document.attachEvent('onreadystatechange', function(){
	if (document.readyState === 'complete') {
		setTimeout(wsapd_STARTUP, 1);
		document.detachEvent('onreadystatechange', arguments.callee);
	}
});