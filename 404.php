<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php
	include_once('commonHeader.php');
	?>

</head>

<body class="emms22__wrapper__404">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M768WZR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<main>
		<!-- Header -->
		<nav class="emms22__header">
			<div class="emms22__container--lg">
				<div class="emms22__header__logo">
					<a href="index.php"><img src="../html/<?= VERSION ?>/img/logo-emms.png?version=<?= VERSION ?>" alt="Emms 2022" id="logo-emms-404"></a>
				</div>
			</div>
		</nav>

		<!-- main -->
		<section class="emms22__404">
			<div class="emms22__container--lg ">
				<div class="emms22__404__container">
					<div class="error-404">
					</div>

					<div class="emms22__404__error error-404-message">
						<p>¿Te has perdido? Lo que no puedes perderte es el evento exclusivo que estamos preparando para ti.
						</p>
						<button type="button" class="emms22__404__button nav-ini" id="error-404-btn" onclick="window.location.href='/index.php'">
							VOLVER A EMMS2022
						</button>
					</div>
				</div>

			</div>
		</section>

	</main>
	<input type="hidden" id="utm_source" name="utm_source" value='<?= isset($_GET['utm_source']) ? $_GET['utm_source'] : "" ?>' />
	<input type="hidden" id="utm_campaign" name="utm_campaign" value='<?= isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : "" ?>' />
	<input type="hidden" id="utm_content" name="utm_content" value='<?= isset($_GET['utm_content']) ? $_GET['utm_content'] : "" ?>' />
	<input type="hidden" id="utm_term" name="utm_term" value='<?= isset($_GET['utm_term']) ? $_GET['utm_term'] : "" ?>' />
	<input type="hidden" id="utm_medium" name="utm_medium" value='<?= isset($_GET['utm_medium']) ? $_GET['utm_medium'] : "" ?>' />
	<script src="https://www.fromdoppler.com/wp-content/themes/doppler_site/utm/utmCookiesHistory.js" type="text/javascript"></script>
	<script type="module">
		import {
			changeRedirectLoged
		} from '../html/<?= VERSION ?>/js/security.js'
		const changeBtnRedirect = changeRedirectLoged;
		changeBtnRedirect();
	</script>
</body>

</html>