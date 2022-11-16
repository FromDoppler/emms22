<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
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
    <?php
	include_once('././common/components/commonGTMBody.php');
	?>

	<main>
		<!-- Header -->
		<nav class="emms22__header">
			<div class="emms22__container--lg">
				<div class="emms22__header__logo">
					<a href="index.php"><img src="common/html/img/logo-emms.png?version=<?= VERSION ?>" alt="Emms 2022" id="logo-emms-404"></a>
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
	<?php include_once('commonUtms.php') ?>
	<script type="module">
		import {
			changeRedirectLoged
		} from '../../common/html/<?= VERSION ?>/js/security.js'
		const changeBtnRedirect = changeRedirectLoged;
		changeBtnRedirect();
	</script>
</body>

</html>
