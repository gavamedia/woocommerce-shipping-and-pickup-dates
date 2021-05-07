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



function toggleAreaViaChecked(isChecked, areaElm, styleToChange, styleValueIfChecked, styleValueIfUnChecked) {
	areaElm.style[styleToChange] = isChecked ? styleValueIfChecked : styleValueIfUnChecked;
	
	let inputElms = areaElm.querySelectorAll('input,select,textarea');
	for (let i = 0; i < inputElms.length; i++) {
		if (isChecked) inputElms[i].removeAttribute('disabled');
		else inputElms[i].setAttribute('disabled', 'true');
	}
}



let shipOrderElm = Get('ship-order');
if (shipOrderElm) shipOrderElm.ae('onchange', function() {
	toggleAreaViaChecked(shipOrderElm.checked, Get('shipping-method-area'), 'opacity', '1', '.5');
	toggleAreaViaChecked(!shipOrderElm.checked, Get('pickup-area'), 'opacity', '1', '.5');
});




function wsapd_STARTUP() {
	alert('loaded!');
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