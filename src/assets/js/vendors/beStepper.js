//
// Be stepper js
//

'use strict';

// Function to check if an element with a given selector exists
function elementExists(selector) {
	return document.querySelector(selector) !== null;
}

if (elementExists('#stepperForm')) {
	var stepperForm;
	document.addEventListener('DOMContentLoaded', function () {
		stepperForm = new Stepper(document.querySelector('#stepperForm'), {
			linear: false,
			animation: true,
		});
	});
}
