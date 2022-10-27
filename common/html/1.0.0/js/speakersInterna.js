
"use strict";

import {
	getUrlWithParams
} from './modules/utm.js';

document.addEventListener('DOMContentLoaded', () => {

    const registerValue = localStorage.getItem("registered");
    const streaming = document.getElementById('streaming');
    const registerForm = document.getElementById('registerForm');

    if ( registerValue != null ){
        streaming.style.display = 'block';
        registerForm.style.display = 'none';
    }

    else {
        streaming.style.display = 'none';
        registerForm.style.display = 'block';
    }
});
