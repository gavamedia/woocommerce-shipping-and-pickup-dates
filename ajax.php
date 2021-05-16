<?php


if (!class_exists('WSAPD_Ajax')) {
	class WSAPD_Ajax {


		function example_ajax_request() {

			// The $_REQUEST contains all the data sent via AJAX from the Javascript call
			if (isset($_REQUEST)) {

				$enableShippingDates = $_REQUEST['enable-shipping-dates'];

				// This bit is going to process our fruit variable into an Apple
				//if ( $enableShippingDates == 'Banana' ) {
					$enableShippingDates = 'Da value: ' . $enableShippingDates;
				//}

				// Now let's return the result to the Javascript function (The Callback) 
				echo $enableShippingDates;        
			}

			// Always die in functions echoing AJAX content
			die();
		}




	}
}