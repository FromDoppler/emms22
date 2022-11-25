import {
    validateFormPreEvent, resetErrorField
} from './modules/formsValidators.js';

import {
    getEncodeURLEmail, loadEmail
} from './modules/decodeEmail.js';

import {
    searchUrlParam, getUrlWithParams
} from './modules/utm.js';


document.addEventListener('DOMContentLoaded', () => {

    const registerValue = localStorage.getItem("registered");
    const btnsVideo = document.querySelectorAll(".btn-video");
    const btnsRegister = document.querySelectorAll(".btn-register");

    const form = document.getElementById('formModal');
    const urlEmail = getEncodeURLEmail();
    var currentAnchor;

    btnsVideo.forEach(btnV => {
        if (registerValue != null) {
            btnV.style.display = 'block';
        }
        else {
            btnV.style.display = 'none';
            btnV.href = "#";
        }
    });

    btnsRegister.forEach(btnR => {
        if (registerValue != null) {
            btnR.style.display = 'none';
        }

        else {
            btnR.style.display = 'block';

        }
    });





    loadEmail(urlEmail);

    form.addEventListener('submit', sendData);


    const activeFieldEventsValidator = () => {
        document.querySelectorAll("input.required,select.required").forEach((elem) => {
            elem.addEventListener('change', resetErrorField);
            elem.addEventListener('keyup', resetErrorField);
        });
    }

    function sendData(e) {
        e.preventDefault();
        const formBtn = form.querySelector('button');
        const formData = new FormData(form);
        const endPointApi = '../../services/register.php';

        const isValidForm = validateFormPreEvent(form);
        activeFieldEventsValidator();


        if (isValidForm) {
            const youtubeID = currentAnchor.getAttribute('id');
            const youtubeURL = 'https://www.youtube.com/';
           window.open(
            youtubeURL + youtubeID,
            '_blank' // <- This is what makes it open in a new window.
          );
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
                    document.getElementById('modalRegister').style.display = "none";
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


// Registration modal

document.addEventListener('click', function (e) {
    e = e || window.event;
    var target = e.target || e.srcElement;

    if (target.hasAttribute('data-toggle') && target.getAttribute('data-toggle') == 'emms22__modal-register') {
        if (target.hasAttribute('data-target')) {
            var m_ID = target.getAttribute('data-target');
            currentAnchor = target;
            document.getElementById(m_ID).classList.add('emms22__modal-register--open');
            document.body.style.overflowY = 'hidden';
            e.preventDefault();
        }
    }

    if ((target.hasAttribute('data-dismiss') && target.getAttribute('data-dismiss') == 'emms22__modal-register') || target.classList.contains('emms22__modal-register')) {
        var modal = document.querySelector('[class="emms22__modal-register emms22__modal-register--open"]');
        modal.classList.remove('emms22__modal-register--open');
        document.body.style.overflowY = 'scroll';
        e.preventDefault();
    }
}, false);

});
