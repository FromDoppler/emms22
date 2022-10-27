"use strict";


import {
    validateFormPreEvent, resetErrorField
} from './modules/formsValidators.js';

import {
    getEncodeURLEmail, loadEmail
} from './modules/decodeEmail.js';

import {
    searchUrlParam, getUrlWithParams
} from './modules/utm.js';

import {
    lazyLoadVideos
} from './lazyVideos.js';



document.addEventListener('DOMContentLoaded', () => {

    lazyLoadVideos();

    const earlyForms = document.querySelectorAll('form');

    const urlEmail = getEncodeURLEmail();
    loadEmail(urlEmail);

    earlyForms.forEach(form => { form.addEventListener('submit', sendData) });

    const activeFieldEventsValidator = () => {
        document.querySelectorAll("input.required,select.required").forEach((elem) => {
            elem.addEventListener('change', resetErrorField);
            elem.addEventListener('keyup', resetErrorField);
        });
    }

    function sendData(e) {
        e.preventDefault();
        const formBtn = this.querySelector('button');
        const formData = new FormData(this);
        const endPointApi = '../../services/register.php';

        const isValidForm = validateFormPreEvent(this);
        activeFieldEventsValidator();


        if (isValidForm) {

            const data = {
                'name': formData.get('firstname'),
                'email': formData.get('email'),
                'industry': formData.get('industry-input'),
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
                    if(window.location.href.includes('speakers-interna.php')){
                        document.getElementById('streaming').style.display = "block";
                        document.getElementById('registerForm').style.display = "none";
                    }
                    else{
                        window.location.href = getUrlWithParams('/registrado.php');
                    }
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





})
