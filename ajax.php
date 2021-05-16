<?php


if (!class_exists('WSAPD_Plugin')) {
	class WSAPD_Plugin {

		function example_ajax_request() {

			// The $_REQUEST contains all the data sent via AJAX from the Javascript call
			if ( isset($_REQUEST) ) {

					$fruit = $_REQUEST['fruit'];

					// This bit is going to process our fruit variable into an Apple
					if ( $fruit == 'Banana' ) {
							$fruit = 'Apple pen?';
					}

					// Now let's return the result to the Javascript function (The Callback) 
					echo $fruit;        
			}

			// Always die in functions echoing AJAX content
			die();
		}

	}
}