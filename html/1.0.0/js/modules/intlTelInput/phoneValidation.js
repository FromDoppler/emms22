var errorMap = [
	'¡Ouch! Escribe un teléfono válido.',
	'¡Ouch! Escribe un código de area válido.',
	'¡Ouch! El número de teléfono es demasiado corto.',
	'¡Ouch! El número de teléfono es demasiado largo.',
	'¡Ouch! Escribe un teléfono válido.',
];

const phoneInputField = document.getElementById("phone-input");
const phoneInputFieldFooter = document.getElementById("phoneInputFooter");

var countryCode = 'AR';
var countryName = 'Argentina';

const phoneInput = window.intlTelInput(phoneInputField, {

	utilsScript:
		"html/1.0.0/js/modules/intlTelInput/utilScript-intel-input.js",
	separateDialCode: true,
	initialCountry: 'auto',
	hiddenInput: 'full_phone',
	geoIpLookup: function (callback) {

		fetch('/services/getCountryNameAndCode.php')
			.then((response) => {
				return response.json();
			})
			.then(countryResponse => {
				countryCode = countryResponse.countryCode;
				countryName = countryResponse.countryName;
				document.getElementById('country').value = countryName;
				document.getElementById('country2').value = countryName;
				callback(countryCode);
			});


	}
});
const phoneInputFooter = window.intlTelInput(phoneInputFieldFooter, {

	utilsScript:
		"../../js/modules/intlTelInput/utilScript-intel-input.js",
	separateDialCode: true,
	initialCountry: 'auto',
	hiddenInput: 'full_phone',
	geoIpLookup: function (callback) {

		fetch('/services/getCountryNameAndCode.php')
			.then((response) => {
				return response.json();
			})
			.then(countryResponse => {
				countryCode = countryResponse.countryCode;
				countryName = countryResponse.countryName;
				document.getElementById('country').value = countryName;
				document.getElementById('country2').value = countryName;
				callback(countryCode);
			});

	}
});
var reset = function () {
	$(phoneInputField).closest('.holder').removeClass('error');
};

// on blur: validate
phoneInputField.addEventListener('blur', function () {
	reset();
	if (phoneInputField.value.trim()) {
		if (phoneInput.isValidNumber()) {
			$(phoneInputField).closest('.holder').removeClass('error');


			var errorCode = phoneInput.getValidationError();
		} else {
			var errorCode = phoneInput.getValidationError();
			$(phoneInputField)
				.closest('.holder')
				.attr('data-error', errorMap[errorCode]);
			$(phoneInputField).closest('.holder').addClass('error');
		}
	}
});

// on keyup / change flag: reset
phoneInputField.addEventListener('change', reset);
phoneInputField.addEventListener('keyup', reset);

var reset = function () {
	$(phoneInputFieldFooter).closest('.holder').removeClass('error');
};

// on blur: validate2
phoneInputFieldFooter.addEventListener('blur', function () {
	reset();
	if (phoneInputFieldFooter.value.trim()) {
		if (phoneInputFooter.isValidNumber()) {
			$(phoneInputFieldFooter).closest('.holder').removeClass('error');


			var errorCode = phoneInputFooter.getValidationError();
		} else {
			var errorCode = phoneInputFooter.getValidationError();
			$(phoneInputFieldFooter)
				.closest('.holder')
				.attr('data-error', errorMap[errorCode]);
			setTimeout(() => {
				$(phoneInputFieldFooter).closest('.holder').addClass('error');
			}, 250);

		}
	}
});

// on keyup / change flag: reset
phoneInputFieldFooter.addEventListener('change', reset);
phoneInputFieldFooter.addEventListener('keyup', reset);