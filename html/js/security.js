const getLoged = localStorage.getItem('registered');

if (getLoged === null) {
	window.location.href = '/index.php'; 
}