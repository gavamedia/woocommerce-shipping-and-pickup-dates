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






// Easily handle AJAX
if (typeof runningAjaxCalls === 'undefined') {

	let runningAjaxCalls = [];




	function gavaAjaxCallOnReadyStateChange(e) {

		let eReadyState = e.readyState;
		let thisReadyState = this.readyState;

		
		if (runningAjaxCalls[callID].readyState == 4) {
				
			// Include unique ajax call ID back to return return functions
			runningAjaxCalls[callID]['CallID'] = callID;

			
			if (runningAjaxCalls[callID].status == 401) {
				if (typeof window.LoginRequired == 'function') {
					CallAfterLoginFunctionID = FunctionID;
					CallAfterLoginParameters = Parameters;
					CallAfterLoginReturnFunction = ReturnFunction;
					LoginRequired();
				}
				else ShowDialog('<h2>Login Required</h2><br>Please login to continue.', 'loginRequiredResponseBackup', 330, 145, false);
			}
			else if (runningAjaxCalls[callID].status == 403) {
				ShowDialog('<h2>Access Denied</h2><br>You do not have permission to perform this action.', null, 330, 145, false);
				setTimeout(function(){if (typeof ReturnFunction == 'function') ReturnFunction(runningAjaxCalls[callID]);}, 400);
			}
			else {
				if (typeof ReturnFunction == 'function') ReturnFunction(runningAjaxCalls[callID]);
			}
			
			
			// DONE. Remove from running list
			delete runningAjaxCalls[callID];
		}
	}



	function gavaMaybeAbortThisOrOtherAjaxCall(callID, cancelID) {
		let abortThis = false;

		// Already running
		let runningAjaxObj = null;
		try { runningAjaxObj = runningAjaxCalls[callID]; } catch(x){}

		if (runningAjaxObj) {
			// Cancel others, but run this
			if (cancelID) runningAjaxCalls[callID].abort();

			// Or cancel this
			else abortThis = true;
		}

		return abortThis;
	}






	/**
	 * Calls an app's server-side function
	 * If cancelID is set, it will cancel other pending calls with the same id,
	 * even though parameters may be different
	 */
	function gavaAjax(serverFunctionName, parameters, returnFunction, cancelID) {

		let callID = null;
		if (cancelID) callID = encodeURIComponent(cancelID);
		else callID = encodeURIComponent(serverFunctionName + parameters + returnFunction);
		

		// Already running. Cancel others and run this, or cancel this
		if (gavaMaybeAbortThisOrOtherAjaxCall(callID, cancelID)) return false;


		// Create the ajax obj
		runningAjaxCalls[callID] = new XMLHttpRequest();


		
		// Prepare all parameters, and prevent cached response
		let params = 'action=' + serverFunctionName;
		if (parameters) params += '&' + parameters;
		

		// Setup ajax header
		runningAjaxCalls[callID].open('POST', ajaxurl, true);
		runningAjaxCalls[callID].setRequestHeader('Content-type', 'application/x-www-form-urlencoded');


		// Execute return function when ready
		runningAjaxCalls[callID].onreadystatechange = gavaAjaxCallOnReadyStateChange;
		
		

		
		// Submit the AJAX request
		runningAjaxCalls[callID].send(params + '&u=' + Math.random());
		
		
		// Return unique call ID
		return callID;
	}


}








function toggleAreaViaChecked(isChecked, areaElm, styleToChange, styleValueIfChecked, styleValueIfUnChecked) {
	areaElm.style[styleToChange] = isChecked ? styleValueIfChecked : styleValueIfUnChecked;
	
	let inputElms = areaElm.querySelectorAll('input,select,textarea');
	for (let i = 0; i < inputElms.length; i++) {
		if (isChecked) inputElms[i].removeAttribute('disabled');
		else inputElms[i].setAttribute('disabled', 'true');
	}
}





function wsapdSave() {
	//alert('save it yo');



	// This is the variable we are passing via AJAX
	let fruit = 'Banana';

	
	//var ajx = new XMLHttpRequest();
	//let ajax = new XMLHttpRequest();
	//gavaAjax('example_ajax_request', parameters, returnFunction, cancelID);

	// This does the ajax request (The Call).
	$.ajax({
		url: ajaxurl, // admin-ajax.php
		data: {
			'action':'example_ajax_request', // This is our PHP function below
			'fruit' : fruit // This is the variable we are sending via AJAX
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

	$("#datepicker").datepicker();



	


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
	
});

