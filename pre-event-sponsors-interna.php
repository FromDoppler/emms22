<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module">
        import {
            checkUserLoged
        } from './html/<?= VERSION ?>/js/security.js'
        const checkUser = checkUserLoged;
		// checkUser()
    </script>
    <?php
	include_once('commonHeader.php');
	?>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity-fade@1/flickity-fade.css">
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M768WZR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<main>

		<!-- Header -->
		<nav class="emms22__header emms22__header__sponsors__interna emms22__header__sponsors__interna__logos">
			<div class="emms22__container--lg emms22__fade-in">
				<div class="emms22__header__sponsors__interna__logos">
					<a href="./index.php" >
                        <img class="lazyload emms22__header__sponsors__interna__logo__doppler" loading="lazy" data-src="../html/<?= VERSION ?>/img/logo-emms.png" alt="Emms 2022" />
                    </a>
                    <a href="./index.php" >
                        <img class="lazyload emms22__header__sponsors__interna__logo__sponsor" loading="lazy" data-src="../html/<?= VERSION ?>/img/logo-metricool.png" alt="Emms 2022" />
                    </a>
				</div>
			</div>
		</nav>
		<!-- Hero -->
		<section class="emms22__hero">
			<div class="emms22__container--editions--lg emms22__hero__container">
				<div class="emms22__hero__content__sponsors__interna emms22__fade-in">
					<h1>Aquí va el Título de la cápsula.</h1>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque id, repellat quidem fuga magni fugiat molestias aut maxime temporibus sint? Nisi, veniam itaque accusantium alias minima ipsa illum vitae quod.</p>
				</div>
				<div class="emms22__hero__content__sponsors__interna__video emms22__fade-in">
					<video class="padding-top" autoplay muted loop>
						<source src="../html/<?= VERSION ?>/img/video-ediciones-anteriores-2022-compress.mp4" type="video/mp4" alt="Video de ediciones anteriores" />
					</video>
				</div>
			</div>
		</section>

		<!-- Section Sponsors -->
		<section class="emms22__sponsors__interna">
			<div class="emms22__container--editions--md emms22__fade-in">
				<div class="emms22__sponsors__interna__wrapper">
					<div class="emms22__sponsors__interna__content emms22__fade-in">
						<h2>Aquí va el título del Lead Magnet del Sponsor</h2>
						<p>Aquí va una descripción del Recurso. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
					    <button class="emms22__sponsors__interna__button"><a href="https://www.fromdoppler.com/?origin=emms-edicionesanteriores" target="_blank" rel="noopener">ACCEDER</a>
					    </button>
                    </div>
				</div>
			</div>
		</section>

        <!-- Section Sponsors - Conoce más -->
        <section class="emms22__sponsors__interna emms22__sponsors__interna__wrapper__color">
			<div class="emms22__container--editions--md emms22__fade-in">
				<div class="emms22__sponsors__interna__wrapper">
					<div class="emms22__sponsors__interna__content__color emms22__fade-in">
						<h2>Conoce más sobre “Nombre del Sponsor”</h2>
						<p>Aquí va una descripción del Sponsor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
					    <button class="emms22__sponsors__interna__button"><a href="https://www.fromdoppler.com/?origin=emms-edicionesanteriores" target="_blank" rel="noopener">MÁS INFORMACIÓN</a>
					    </button>
                    </div>
				</div>
			</div>
		</section>

		<footer class="emms22__footer">
			<div class="emms22__footer__event emms22__fade-in">
				<p><strong>EMMS 2022</strong> - Un evento creado por <a href="https://www.fromdoppler.com/es/" target="_blank"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/logo-doppler--neg.svg" alt="Doppler"></a></p>
			</div>
			<div class="emms22__footer__social emms22__fade-in">
				<ul>
					<li><a href="https://www.instagram.com/fromdoppler/" target="_blank"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/icono-instagram.svg" alt="Instagram"></a></li>
					<li><a href="https://www.facebook.com/DopplerEmailMarketing" target="_blank"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/icono-facebook.svg" alt="Facebook"></a></li>
					<li><a href="https://www.youtube.com/user/FromDoppler" target="_blank"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/icono-youtube.svg" alt="Youtube"></a></li>
					<li><a href="https://www.linkedin.com/company/228261" target="_blank"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/icono-linkedin.svg" alt="Linkedin"></a></li>
					<li><a href="https://twitter.com/fromDoppler" target="_blank"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/icono-twitter.svg" alt="Twitter"></a></li>
				</ul>
			</div>
			<div class="emms22__footer__actions emms22__fade-in">
				<a onclick="OneTrust.ToggleInfoDisplay()" id="ot-sdk-btn" class="ot-sdk-show-settings">Configuración de Cookies.</a>
				<a href="https://www.fromdoppler.com/es/legal/privacidad/" target="_blank">Políticas de privacidad y legales</a>
			</div>
		</footer>
	</main>


	<?php include_once('commonFooter.php') ?>
    <script type="module" src="./html/<?= VERSION ?>/js/preEvent.js?version=<?= VERSION ?>"></script>
    <?php
	if (!(PRODUCTION)) {
	?>
    <script type="module" src="./html/<?= VERSION ?>/js/devMode.js?version=<?= VERSION ?>"></script>
    <?php
	}
	?>

</body>

</html>
