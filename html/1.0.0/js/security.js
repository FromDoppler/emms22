const getLoged = localStorage.getItem('registered');

function addParameterUTms() {

	const urlParamsValues = [utm_medium, utm_source, utm_campaign, utm_term, utm_content]
	const urlParamsNames = ['utm_medium', 'utm_source', 'utm_campaign', 'utm_term', 'utm_content'];
	let newParamsUrl = '?';
	let firstParam = true;
	urlParamsValues.forEach((param, index) => {
	if (param != null && firstParam && urlParamsValues[index]!="") {
		newParamsUrl = newParamsUrl + urlParamsNames[index] + '=' + urlParamsValues[index];
		firstParam = false;
	} else if (param != null && !firstParam && urlParamsValues[index]!="") {
		newParamsUrl = newParamsUrl + '&' + urlParamsNames[index] + '=' + urlParamsValues[index];
	}
	});
	return newParamsUrl;
}


const checkUserNotLoged = function checkUserNotLoged() {
	if (getLoged === null) {
		window.location.href = '/index.php' + addParameterUTms() ;
	}
}



const checkUserLoged = function checkUserLoged() {

	if (getLoged != null) {
		window.location.href = '/registrado.php' + addParameterUTms();
	}

}

export { checkUserLoged, checkUserNotLoged };