document.addEventListener('DOMContentLoaded', () => {
	const earlyForm = document.getElementById('earlyForm');
	earlyForm.addEventListener('submit', sendData);

	function sendData(e) {
		e.preventDefault();
		const formData = new FormData(earlyForm);
		const endPointApi = '../../services/register.php';
		const data = {
			'name': formData.get('name'),
			'lastname': formData.get('lastname'),
			'email': formData.get('email'),
			'country': formData.get('country'),
			'phone': formData.get('phone'),
			'industry': formData.get('industry'),
			'company': formData.get('company'),
			'acceptPolicies': (formData.get('acceptPolicies') === 'on') ? true : null,
			'acceptPromotions': (formData.get('acceptPromotions') === 'on') ? true : null,
			'utm_source': formData.get('utm_source'),
			'utm_campaign': formData.get('utm_campaign'),
			'utm_content': formData.get('utm_content'),
			'utm_term': formData.get('utm_term'),
			'utm_medium': formData.get('utm_medium'),

		};

		fetch(endPointApi, {
			method: 'POST',
			headers: {
				'Content-Type': 'application/json'
			},
			body: JSON.stringify(data),
		})
			.then(resp => resp)
			.then(resp => {
				// Tenemos la respuesta por si necesitáramos informar al usuario
				console.log('Todo bien')
			})
			.catch((error) => {
				// Tenemos la respuesta de errores
				console.log('Algo salio mal: ', error)
			});

	}

})