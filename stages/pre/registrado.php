<?php
require_once('././config.php');
require_once('././utils/DB.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="module">
		import {
			checkUserNotLoged
		} from '../../common/html/<?= VERSION ?>/js/security.js'
		const checkUserNotLogedF = checkUserNotLoged;
		checkUserNotLogedF()
	</script>
	<?php
	include_once('././common/components/commonHeader.php');
	?>
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<link rel="stylesheet" href="https://unpkg.com/flickity-fade@1/flickity-fade.css">
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M768WZR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<main class="emms22__pre-event">

		<!-- Header -->

        <div id="inicio"></div>
		<nav class="emms22__header">
			<div class="emms22__container--lg emms22__fade-in">
				<div class="emms22__header__logo">
					<a href="./index.php" class="nav-ini"><img src="../../common/html/<?= VERSION ?>/img/logo-emms.png" alt="Emms 2022"></a>
				</div>
				<a class="emms22__header__nav--mb" id="btn-burger"></a>
				<ul class="emms22__header__nav emms22__header__nav--hidden" id="nav-mb">
                    <li><a href="#inicio">inicio</a></li>
                    <li><a href="#contenido-exclusivo">contenido exclusivo</a></li>
					<li><a href="#agenda">agenda</a></li>
				</ul>
			</div>
		</nav>


		<!-- Hero -->

		<div class="emms22__hero-pre-event">
			<div class="emms22__hero-pre-event__back">
				<video class="lazy" loop muted autoplay playsinline  poster="../../common/html/<?= VERSION ?>/img/thumb.png">
					<source data-src="../../common/html/<?= VERSION ?>/img/video-background-compress.mp4" type="video/mp4">
				</video>
			</div>

			<div class="emms22__hero-pre-event__registered parallax-form">
				<h2>¡Ya eres parte del EMMS 2022!</h2>
				<div class="emms22__hero-pre-event__registered__text">
					<p>Te mantendremos informado de las últimas novedades a través de tu Email.</p>
					<p>Agrega el evento a tu calendario para no perderlo de vista :)</p>
				</div>
				<div class="emms22__hero-pre-event__registered__btn-calendar">
                    <a title="Add to Calendar" class="emms22__button addeventatc" data-id="iI14884549" rel="noopener" href="https://www.addevent.com/event/iI14884549" target="_blank">EMMS DÍA 1</a>
					<a title="Add to Calendar" class="emms22__button addeventatc" data-id="iS14401775" rel="noopener" href="https://www.addevent.com/event/iS14401775" target="_blank">EMMS DÍA 2</a>
					<a title="Add to Calendar" class="emms22__button addeventatc" data-id="pl14402520" rel="noopener" href="https://www.addevent.com/event/pl14402520" target="_blank">EMMS DÍA 3</a>
				</div>
			</div>
            <div id="contenido-exclusivo"></div>
		</div>


		<!-- Registered Premium content -->

		<div class="emms22__pre-event__registered-premium-content">
			<h2>Mientras esperamos que llegue el evento, te invitamos a conocer…</h2>
			<div class="emms22__container--lg">
				<div class="emms22__pre-event__registered-premium-content__text emms22__fade-in">
					<h3><span>CONTENIDO PREMIUM EMMS 2022</span>Descubre todo lo que nuestros Sponsors han preparado para ti.</h3>
					<p>Por ser parte del EMMS accedes a material exclusivo para potenciar tus resultados: </p>
					<ul>
						<li>Capacitaciones audiovisuales</li>
						<li>Contenidos descargables</li>
						<li>Descuentos de todo tipo</li>
						<li>¡Y mucho más! </li>
					</ul>
					<a href="./sponsors-general.php" class="emms22__button emms22__fade-in" target="_blank">ACCEDE AHORA</a>
				</div>
				<div class="emms22__pre-event__registered-premium-content__image emms22__fade-in">
					<img src="../../common/html/<?= VERSION ?>/img/registered-content-premium.png" alt="Contenido Premium">
				</div>
			</div>
            <div id="agenda"></div>
		</div>

        <span id="version" class="emms22--vh"><?= VERSION ?></span>
		<!-- Calendar -->

		<?php include_once('././common/components/commonCalendar.php') ?>


		<!-- Doppler -->

		<div class="emms22__pre-event__doppler">
			<div class="emms22__container--lg">
				<div class="emms22__pre-event__doppler__title">
					<h2 class="emms22__fade-in">SOMOS <img src="../../common/html/<?= VERSION ?>/img/logo-doppler-black.svg" alt="Doppler"></h2>
					<h3 class="emms22__fade-in">La herramienta líder en Marketing Automation en español.</h3>
					<p class="emms22__fade-in">Desde hace 15 años organizamos el EMMS y formamos a profesionales de Marketing a lo largo de todo el mundo, a través de cursos, entrenamientos y recursos 100% gratuitos. </p>
				</div>
				<div class="emms22__pre-event__doppler__description">
					<div class="emms22__pre-event__doppler__description__image emms22__fade-in">
						<img src="../../common/html/<?= VERSION ?>/img/pre-event-doppler.png" alt="Doppler">
					</div>
					<div class="emms22__pre-event__doppler__description__text emms22__fade-in">
						<h4><strong>¿Quieres capacitarte gratis?</strong> ¡Esto te va a interesar! </h4>
						<p>En esta ocasión,  queremos invitarte a completar nuestra Certificación en Automation Marketing gratuita.</p>
						<ul>
							<li>Online y en español</li>
							<li>20 lecciones de 15 minutos</li>
							<li>Cursas a tu ritmo</li>
							<li>Clases teóricas y prácticas</li>
						</ul>
						<a href="https://academy.fromdoppler.com/bootcamp/?origin=emms-2022" target="_blank" class="emms22__button emms22__fade-in">INSCRÍBETE AHORA</a>
					</div>
				</div>
			</div>
		</div>


		<!-- Footer -->

		<footer class="emms22__footer">
			<div class="emms22__footer__event emms22__fade-in">
				<p><strong>EMMS 2022</strong> - Un evento creado por <a href="https://www.fromdoppler.com/es/" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/logo-doppler--neg.svg" alt="Doppler"></a></p>
			</div>
			<div class="emms22__footer__social emms22__fade-in">
				<ul>
					<li><a href="https://www.instagram.com/fromdoppler/" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/icono-instagram.svg" alt="Instagram"></a></li>
					<li><a href="https://www.facebook.com/DopplerEmailMarketing" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/icono-facebook.svg" alt="Facebook"></a></li>
					<li><a href="https://www.youtube.com/user/FromDoppler" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/icono-youtube.svg" alt="Youtube"></a></li>
					<li><a href="https://www.linkedin.com/company/228261" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/icono-linkedin.svg" alt="LinkedIn"></a></li>
					<li><a href="https://twitter.com/fromDoppler" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/icono-twitter.svg" alt="Twitter"></a></li>
				</ul>
			</div>
			<div class="emms22__footer__actions emms22__fade-in">
				<a onclick="OneTrust.ToggleInfoDisplay()" id="ot-sdk-btn" class="ot-sdk-show-settings">Configuración de Cookies.</a>
				<a href="https://www.fromdoppler.com/es/legal/privacidad/" target="_blank">Políticas de privacidad y legales</a>
			</div>
		</footer>

	</main>



	<?php include_once('././common/components/commonFooter.php') ?>
	<script type="module" src="../../common/html/<?= VERSION ?>/js/preEvent.js?version=<?= VERSION ?>"></script>
	<?php
	if (!(PRODUCTION)) {
	?>
		<script type="module" src="../../common/html/<?= VERSION ?>/js/devMode.js?version=<?= VERSION ?>"></script>
	<?php
	}
	?>
    <script src="../../common/html/<?= VERSION ?>/js/date.js?version=<?= VERSION ?>"></script>

</body>

</html>
