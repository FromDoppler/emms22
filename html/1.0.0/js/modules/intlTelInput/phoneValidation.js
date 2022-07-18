

const phoneInputField = document.getElementById("phone-input");
const phoneInputFieldFooter = document.getElementById("phoneInputFooter");
var countryCode = 'AR';
var countryName = 'Argentina';




const phoneInput = window.intlTelInput(phoneInputField, {

	utilsScript:
		"jsIntell/utilScript-intel-input.js",
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
		"jsIntell/utilScript-intel-input.js",
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



export {
	phoneInput,
	phoneInputFooter
};