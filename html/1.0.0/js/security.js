"use strict";

import {
	getUrlWithParams
} from './modules/utm.js';

const getLoged = localStorage.getItem('registered');




const checkUserNotLoged = function checkUserNotLoged() {
	if (getLoged === null) {
		window.location.href = getUrlWithParams('/index.php');
	}
}



const checkUserLoged = function checkUserLoged() {

	if (getLoged != null) {
		window.location.href = getUrlWithParams('/registrado.php');
	}

}


const changeRedirectLoged = function changeRedirectLoged() {
	if (getLoged != null) {
		document.querySelectorAll('.nav-ini').forEach(item => {
			const urlWithParams = getUrlWithParams("registrado.php");
			if (item.tagName === 'BUTTON') {
				item.setAttribute("onclick", `window.location.href=${urlWithParams}`)
			} else {
				item.href = urlWithParams;
			}
		})
	}
}

export { checkUserLoged, checkUserNotLoged, changeRedirectLoged };