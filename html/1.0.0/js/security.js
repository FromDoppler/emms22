const getLoged = localStorage.getItem('registered');


const checkUserNotLoged = function checkUserNotLoged() {
	if (getLoged === null) {
		window.location.href = '/index.php';
	}
}



const checkUserLoged = function checkUserLoged() {

	if (getLoged != null) {
		window.location.href = '/secondIndex.php';
	}

}

export { checkUserLoged, checkUserNotLoged };