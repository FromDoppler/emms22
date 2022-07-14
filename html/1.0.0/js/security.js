const getLoged = localStorage.getItem('registered');

const utm_source = (document.getElementById("utm_source").value != '' ? document.getElementById("utm_source").value : '');
const utm_campaign = (document.getElementById("utm_campaign").value != '' ? document.getElementById("utm_campaign").value : '');
const utm_content = (document.getElementById("utm_content").value != '' ? document.getElementById("utm_content").value : '');
const utm_term = (document.getElementById("utm_term").value != '' ? document.getElementById("utm_term").value : '');
const utm_medium = (document.getElementById("utm_medium").value != '' ? document.getElementById("utm_medium").value : '');

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
	return (newParamsUrl === '?' ? '' : newParamsUrl);
}


const checkUserNotLoged = function checkUserNotLoged() {
	if (getLoged === null) {
		window.location.href = '/index.php' + addParameterUTms();
	}
}



const checkUserLoged = function checkUserLoged() {

	if (getLoged != null) {
		window.location.href = '/registrado.php' + addParameterUTms();
	}

}


const changeNavLoged = function changeNavLoged() {
	if (getLoged != null) {
		document.querySelectorAll('.nav-ini').forEach(item => {
			item.href = "registrado.php" + addParameterUTms();
		})
	}
}

export { checkUserLoged, checkUserNotLoged, changeNavLoged };