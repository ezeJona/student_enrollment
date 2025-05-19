//
// Add Value js
//

(function () {
	'use strict';

	function findParentWithClass(element, className) {
		while (element && !element.classList.contains(className)) {
			element = element.parentNode;
		}
		return element;
	}

	function incrementValue(event) {
		event.preventDefault();
		const fieldName = event.target.getAttribute('data-field');
		const parent = findParentWithClass(event.target, 'input-group');
		const input = parent.querySelector(`input[name='${fieldName}']`);
		const currentVal = parseInt(input.value, 10);

		if (!isNaN(currentVal)) {
			input.value = currentVal + 1;
		} else {
			input.value = 0;
		}
	}

	function decrementValue(event) {
		event.preventDefault();
		const fieldName = event.target.getAttribute('data-field');
		const parent = findParentWithClass(event.target, 'input-group');
		const input = parent.querySelector(`input[name='${fieldName}']`);
		const currentVal = parseInt(input.value, 10);

		if (!isNaN(currentVal) && currentVal > 0) {
			input.value = currentVal - 1;
		} else {
			input.value = 0;
		}
	}

	document.querySelectorAll('.input-group').forEach(function (group) {
		group.addEventListener('click', function (event) {
			if (event.target.classList.contains('button-plus')) {
				incrementValue(event);
			} else if (event.target.classList.contains('button-minus')) {
				decrementValue(event);
			}
		});
	});
})();
