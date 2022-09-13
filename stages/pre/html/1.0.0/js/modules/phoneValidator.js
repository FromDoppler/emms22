const setErrorField = (form, errorCode) => {

	const errorMap = [
		'¡Ouch! Escribe un teléfono válido.',
		'¡Ouch! Escribe un código de area válido.',
		'¡Ouch! El número de teléfono es demasiado corto.',
		'¡Ouch! El número de teléfono es demasiado largo.',
		'¡Ouch! Escribe un teléfono válido.',
		'¡Ouch! Ingresa solo valores numéricos.',
	];
	const holderPhone = form.querySelector(".holder-phone");
	holderPhone.setAttribute('data-error', errorMap[errorCode]);
	holderPhone.classList.add("error");
}


const createPhoneField = () => {
	const phoneInputField = document.getElementById("phone-input");

	return window.intlTelInput(phoneInputField, {
		utilsScript: "./js/modules/intlTelInput/util.js",
		separateDialCode: true,
		initialCountry: 'auto',
		hiddenInput: 'full-phone-input',
		geoIpLookup: function (callback) {
			fetch('https://ipinfo.io')
				.then(data => {
					const countryCode = data && data.country ? data.country : 'AR';
					callback(countryCode);
				})
		}
	});
}

const validatePhoneField = (form, phoneInput) => {

	if (phoneInput != undefined) {
		const phoneInputField = form.querySelector(".phone-number");
		const numberRegex = new RegExp('^[0-9]*$');
		// Checkeamos la version especifica de Safari en la que se rompe la librería
		const ua = navigator.userAgent;
		const isSafari = ua.includes("15.5 Safari");

		if (phoneInputField.value.trim()) {
			if (!phoneInputField.value.trim().match(numberRegex)) {
				setErrorField(form, 5);
				return false;
			}
			if (!isSafari) {
				if (!phoneInput.isValidNumber()) {
					const errorCode = phoneInput.getValidationError();
					setErrorField(form, errorCode);
					return false;
				}
			}
			return true;
		}
	}
}

export {
	createPhoneField,
	validatePhoneField
};