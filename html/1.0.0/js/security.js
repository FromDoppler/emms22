const getLoged = localStorage.getItem('registered');

if (getLoged === null) {
	console.log('no')
	window.location.href = '/index.php';
}
const checkUserLoged = function checkUserLoged() {

	if (getLoged != null) {
		window.location.href = '/secondIndex.php';
	}

}

export { checkUserLoged };