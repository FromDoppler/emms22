"use strict";
document.addEventListener('DOMContentLoaded', () => {



	const queryString = window.location.search;
	const urlParams = new URLSearchParams(queryString);

	const devMode = urlParams.get('devmode');
	const devEmail = (urlParams.get('email') === null) ? 'exampleemail@makingsense.com' : urlParams.get('email');

	if (devMode) {
		console.log('%c Dev mode activado', 'background: #222; color: #bada55')
		const forms = document.querySelectorAll('form')
		forms.forEach(form => {
			form.querySelectorAll('input.required,select.required').forEach(item => {
				if (item.type === 'text') {
					item.value = 'loremtext'
				} else if (item.type === 'tel') {
					setTimeout(() => {
						item.value = 2983417387;
					}, 1000);
				} else if (item.type === 'email') {
					item.value = devEmail;
				} else if (item.type === 'select-one' && item.getAttribute("name") != 'country') {
					item.value = 'Otros'
				} else if (item.type === 'checkbox') {
					item.checked = true;
				}
			})
		})
	}
});
