"use strict";
import {
	phoneInput,
	phoneInputFooter
} from './modules/intlTelInput/phoneValidation.js';
import {
	validatePhoneField
} from './modules/phoneValidator.js';
import {
	validateForm, resetErrorField
} from './modules/formsValidators.js';
import {
	getEncodeURLEmail, loadEmail
} from './modules/decodeEmail.js';
import {
	searchUrlParam, getUrlWithParams, utmAnchorPropagation
} from './modules/utm.js';
import {
	lazyLoadVideos
} from './lazyVideos.js';



document.addEventListener('DOMContentLoaded', () => {

	lazyLoadVideos();
	utmAnchorPropagation();
	
	const earlyForms = document.querySelectorAll('form');
	const dialCodeContainer = document.querySelector('.iti__selected-dial-code');

	const urlEmail = getEncodeURLEmail();
	loadEmail(urlEmail);

	earlyForms.forEach(form => { form.addEventListener('submit', sendData) });

	const activeFieldEventsValidator = (phoneInput) => {
		document.querySelectorAll("input.required,select.required").forEach((elem) => {
			elem.addEventListener('change', resetErrorField);
			elem.addEventListener('keyup', resetErrorField);
		});
		document.getElementById("phone-input").addEventListener('blur', function () {
			validatePhoneField(phoneInput);
		});
	}
	function sendData(e) {
		e.preventDefault();
		const formBtn = this.querySelector('button');
		const formData = new FormData(this);
		const endPointApi = '../../services/register.php';
		const dialCode = dialCodeContainer.innerHTML;
		const fullPhone = (dialCode + formData.get('phone-input')).trim();
		let isValidForm;

		if (this.id === 'earlyForm') {
			activeFieldEventsValidator(phoneInput);
			isValidForm = validateForm(this, phoneInput);
		} else {
			activeFieldEventsValidator(phoneInputFooter);
			isValidForm = validateForm(this, phoneInputFooter);
		}


		if (isValidForm) {

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
					'utm_source': (searchUrlParam('utm_source') === '') ? 'direct' : searchUrlParam('utm_source'),
					'utm_campaign': searchUrlParam('utm_campaign'),
					'utm_content': searchUrlParam('utm_content'),
					'utm_term': searchUrlParam('utm_term'),
					'utm_medium': searchUrlParam('utm_medium'),
					'origin': searchUrlParam('origin'),
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
						window.location.href = getUrlWithParams('/registrado.php');
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


	function _checkPrefixPhoneExist(phone) {
		let numberRegex = new RegExp("^[0-9]*$");
		if (!phone.match(numberRegex)) {
			return true;
		}
		return false;
	}


})