"use strict";
document.addEventListener('DOMContentLoaded', () => {
	const earlyForms = document.querySelectorAll('form');
	const utm_source = (document.getElementById("utm_source").value != '' ? document.getElementById("utm_source").value : '');
	const utm_campaign = (document.getElementById("utm_campaign").value != '' ? document.getElementById("utm_campaign").value : '');
	const utm_content = (document.getElementById("utm_content").value != '' ? document.getElementById("utm_content").value : '');
	const utm_term = (document.getElementById("utm_term").value != '' ? document.getElementById("utm_term").value : '');
	const utm_medium = (document.getElementById("utm_medium").value != '' ? document.getElementById("utm_medium").value : '');
	const dialCodeContainer = document.querySelector('.iti__selected-dial-code');
	earlyForms.forEach(form => { form.addEventListener('submit', sendData) });
	function addParameterUTms() {

		const urlParamsValues = [utm_medium, utm_source, utm_campaign, utm_term, utm_content]
		const urlParamsNames = ['utm_medium', 'utm_source', 'utm_campaign', 'utm_term', 'utm_content'];
		let newParamsUrl = '?';
		let firstParam = true;
		urlParamsValues.forEach((param, index) => {
			if (param != null && firstParam && urlParamsValues[index] != "") {
				newParamsUrl = newParamsUrl + urlParamsNames[index] + '=' + urlParamsValues[index];
				firstParam = false;
			} else if (param != null && !firstParam && urlParamsValues[index] != "") {
				newParamsUrl = newParamsUrl + '&' + urlParamsNames[index] + '=' + urlParamsValues[index];
			}
		});

		return newParamsUrl;
	}

	function sendData(e) {
		e.preventDefault();
		const formBtn = this.querySelector('button');
		const formData = new FormData(this);
		const endPointApi = '../../services/register.php';
		const dialCode = dialCodeContainer.innerHTML;
		const fullPhone = (dialCode + formData.get('phone-input')).trim();

		if (_validateForm(this)) {

			const holderPhone = this.querySelector(".holder-phone");
			const message = "Ouch! Escribe un teléfono válido.";

			if (_checkPrefixPhoneExist(formData.get('phone-input').trim())) {
				holderPhone.classList.add("error");
				holderPhone.setAttribute("data-error", message);
				return false;
			} else {
				const data = {
					'name': formData.get('firstname'),
					'lastname': formData.get('lastname'),
					'email': formData.get('email'),
					'country': formData.get('country'),
					'phone': fullPhone,
					'industry': formData.get('industry-input'),
					'company': formData.get('company'),
					'acceptPolicies': (formData.get('privacy') === 'true') ? true : null,
					'acceptPromotions': (formData.get('promotions') === 'true') ? true : null,
					'utm_source': formData.get('utm_source'),
					'utm_campaign': formData.get('utm_campaign'),
					'utm_content': formData.get('utm_content'),
					'utm_term': formData.get('utm_term'),
					'utm_medium': formData.get('utm_medium'),

				};

				formBtn.innerHTML = "";
				formBtn.classList.add("button--loading");
				formBtn.disabled = true;
				fetch(endPointApi, {
					method: 'POST',
					headers: {
						'Content-Type': 'application/json'
					},
					body: JSON.stringify(data),
				})
					.then(resp => resp)
					.then(resp => {
						localStorage.setItem('registered', true);
						window.location.href = '/registrado.php' + addParameterUTms(); //relative to domain
					})
					.catch((error) => {
						// Tenemos la respuesta de errores
						console.log('Algo salio mal: ', error)
						formBtn.innerHTML = "ASEGURA TU CUPO GRATIS";
						formBtn.classList.remove("button--loading");
						formBtn.disabled = false;
					});

			}
		}
	}

	//Resets de campos inputs y select  on blur se quitan los errores

	const formInputs = document.querySelectorAll("input");

	formInputs.forEach(input => {
		input.addEventListener('blur', () => {
			if (input.id != "phone-input" && input.value.length > 0) {
				input.closest(".holder").classList.remove("error");
			}
		})
	});


	function _checkPrefixPhoneExist(phone) {
		let numberRegex = new RegExp("^[0-9]*$");
		if (!phone.match(numberRegex)) {
			return true;
		}
		return false;
	}


	function _validateForm(form) {
		// document.querySelector('input, textarea, select', form);

		form.querySelectorAll('input, textarea, select').forEach(field => {
			_validateField(field);
		});
		console.log(form.querySelectorAll(".error"))
		console.log(form.querySelectorAll(".error").length)

		return form.querySelectorAll(".error").length === 0 ? true : false;
	}

	function _validateField(field) {

		var emailRegex = new RegExp(
			/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i
		),
			urlRegex = new RegExp(
				/(^|\s)((https?:\/\/)?[\w-]+(\.[\w-]+)+\.?(:\d+)?(\/\S*)?)/gi
			),
			numberRegex = new RegExp("^[0-9]+$"),
			val = field.value,
			messageRequired_es = "¡Ouch! El campo está vacío.",
			messageEmail_es = "¡Ouch! Ingresa un Email válido.",
			messageURL_es = "¡Ouch! Ingresa una URL válida.",
			messageNumber_es = "¡Ouch! Ingresa un número válido.",
			messagePolicy_es = "¡Ouch! No has aceptado la Política de Privacidad.",
			parent = field.closest(".holder");

		if (!val && field.classList.contains("required")) {
			parent.classList.add("error");
			parent.setAttribute("data-error", messageRequired_es);
		} else if (
			field.classList.contains("check") &&
			field.classList.contains("required") &&
			!field.checked
		) {
			parent.classList.add("error");
			parent.setAttribute("data-error", messagePolicy_es);
		} else if (field.classList.contains("email") && !val.match(emailRegex)) {
			parent.classList.add("error");

			parent.setAttribute("data-error", messageEmail_es);
		} else if (field.classList.contains("url") && !val.match(urlRegex)) {
			parent.classList.add("error");

			parent.setAttribute("data-error", messageURL_es);
		} else if (!field.classList.contains("phone-number") && field.type != "hidden") {
			if (parent != null) {
				parent.classList.remove("error");
			}
		}
	}

})