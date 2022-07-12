<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EMMS 2021: Conferencias online de Marketing Digital.</title>
	<meta name="robots" content="<?= (PRODUCTION) ? 'index, follow' : 'noindex, nofollow' ?>">
	<meta name="theme-color" content="#3F0453">
	<meta name="title" content="Conferencias exclusivas y online de Marketing Digital | EMMS2021">
	<meta name="description" content="Los l&iacute;deres de la Industria en el evento online de Marketing Digital m&aacute;s impactante del a&ntilde;o. &iexcl;Mira las Conferencias!">
	<meta name="keywords" content="">
	<meta name="language" content="Spanish">
	<meta name="revisit-after" content="15 days">
	<meta name="author" content="Doppler">
	<meta property="og:title" content="Conferencias exclusivas y online de Marketing Digital | EMMS2021">
	<meta property="og:description" content="Los l&iacute;deres de la Industria en el evento online de Marketing Digital m&aacute;s impactante del a&ntilde;o. &iexcl;Mira las Conferencias!">
	<meta property="og:image" content="https://goemms.com/img/share-post.png">
	<meta property="og:url" content="https://goemms.com/">
	<meta property="og:site_name" content="Conferencias exclusivas y online de Marketing Digital | EMMS2021">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:image" content="https://goemms.com/img/share-post.png">
	<meta name="twitter:image:alt" content="Conferencias exclusivas y online de Marketing Digital | EMMS2021">
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<link rel="canonical" href="https://goemms.com/" />

	<link rel="stylesheet" href="..\html\css\styles.css?version=<?= VERSION ?>">
	<!--<script type="text/javascript" src="./html/js/script.js"></script>-->
	<link rel="stylesheet" href="..\html\css\libs\intl-tel-input\intelInput.css">
	<link rel="stylesheet" href="..\html\css\libs\intl-tel-input\intelInput.min.css">
	<!-- El aviso de consentimiento de cookies de OneTrust comienza para goemms.com. -->
	<script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" data-document-language="true" type="text/javascript" charset="UTF-8" data-domain-script="02d37671-cb77-4e6a-804f-9955eb1f7c97<?= (PRODUCTION) ? '' : '-test' ?>"></script>
	<script type="text/javascript">
		function OptanonWrapper() {}
	</script>
	<!-- El aviso de consentimiento de cookies de OneTrust finaliza para goemms.com. -->



</head>

<body>

	<main class="emms22__home parallax-form">

		<!-- Header -->
		<nav class="emms22__header">
			<div class="emms22__container--lg emms22__fade-in">
				<div class="emms22__header__logo">
					<a href=""><img src="./html/img/logo-emms.png" alt="Emms 2022"></a>
				</div>
				
				<ul class="emms22__header__nav">
					<li><a href="">inicio</a></li>
					<li><a href="">ediciones anteriores</a></li>
				</ul>
			</div>
		</nav>

		<!-- Hero -->
		<div class="emms22__hero-home">
			<div class="emms22__hero-home__back">
				<video src="./html/img/background-loop-compress.mp4" loop muted autoplay playsinline></video>
			</div>



			<div class="emms22__hero-home__registered">
				<h2>¡Ya eres parte del EMMS 2022!</h2>
				<p>Te mantendremos informado de las últimas novedades a través de tu Email.</p>
				<a href="">Agrega el evento a tu calendario.</a>
				<ul class="emms22__hero-home__intro__counter">
					<li>
						<p>FALTAN</p>
					</li>
					<li class="emms22__hero-home__intro__counter__number">
						<div><span id="d"></span></div>
						<span class="emms22__hero-home__intro__counter__number--data">días</span>
					</li>
					<li class="emms22__hero-home__intro__counter__number">
						<div><span id="h"></span></div>
						<span class="emms22__hero-home__intro__counter__number--data">horas</span>
					</li>
					<li class="emms22__hero-home__intro__counter__number">
						<div><span id="m"></span></div>
						<span class="emms22__hero-home__intro__counter__number--data">minutos</span>
					</li>
					<li class="emms22__hero-home__intro__counter__number">
						<div><span id="s"></span></div>
						<span class="emms22__hero-home__intro__counter__number--data">segundos</span>
					</li>
				</ul>
			</div>

		</div>

		<!-- Numbers -->

		<div class="emms22__numbers">
			<div class="emms22__container--lg">
				<span class="parallax-waves"></span>
				<h2 class="emms22__fade-in">El evento más importante de Marketing Digital</h2>
				<h3 class="emms22__fade-in">EDICIONES ANTERIORES</h3>
				<ul>
					<li class="emms22__fade-in">
						<p class="emms22__numbers__counter-text" id="count1">+</p>
						<span>Inscritos</span>
					</li>
					<li class="emms22__fade-in">
						<p class="emms22__numbers__counter-text" id="count2"></p>
						<span>Ediciones</span>
					</li>
					<li class="emms22__fade-in">
						<p class="emms22__numbers__counter-text" id="count3">+</p>
						<span>Países</span>
					</li>
					<li class="emms22__fade-in">
						<p class="emms22__numbers__counter-text" id="count4">+</p>
						<span>Speakers</span>
					</li>
				</ul>
			</div>
		</div>



		<div class="emms22__back-purple">

			<!-- Description -->

			<div class="emms22__description">
				<div class="emms22__container--lg">
					<div class="emms22__description__text emms22__fade-in">
						<h2>Llega una nueva edición del evento más esperado por la comunidad del Marketing.</h2>
						<p>Una oportunidad para descubrir las últimas tendencias y estrategias que implementan los líderes del mundo para hacer crecer sus negocios.</p>
						<p><strong>Inspírate y capacítate desde la comodidad de tu casa.</strong> Súmate ahora al evento que te acercará a los mayores expertos en Marketing Digital.</p>
						<a href="#form" class="emms22__button emms22__fade-in">PREINSCRIPCIÓN GRATUITA</a>
					</div>
					<div class="emms22__description__video emms22__fade-in">
						<video src="./html/img/video-insitucional-site-compress.mp4" controls muted autoplay playsinline class="videoAutoplay"></video>
					</div>
				</div>
			</div>

			<!-- Speakers -->

			<div class="emms22__speakers">
				<div class="emms22__container--md">
					<h2 class="emms22__fade-in">Algunos de los conferencistas que han pasado por las últimas ediciones de EMMS:</h2>
					<ul class="emms22__speakers__list">
						<li class="emms22__fade-in">
							<img src="./html/img/speaker-neil-patel.png" alt="Neil Patel">
							<p>Neil Patel<span>NP Digital</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/img/speaker-vero-ruiz-del-vizo.png" alt="Vero Ruiz del Vizo">
							<p>Vero Ruiz del Vizo<span>Amarillo Creative Lab</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/img/speaker-tim-ash.png" alt="Tim Ash">
							<p>Tim Ash<span>Timash.com</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/img/speaker-pablo-castellano.png" alt="Pablo Castellano">
							<p>Pablo Castellano<span>SocialMood</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/img/speaker-marcos-pueyrredon.png" alt="Marcos Pueyrredón">
							<p>Marcos Pueyrredón<span>VTEX</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/img/speaker-julia-rayeb.png" alt="Julia Rayeb">
							<p>Julia Rayeb<span>Facebook</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/img/speaker-alan-schulte.png" alt="Alan Schulte">
							<p>Alan Schulte<span>Linkedin</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/img/speaker-ivette-chalela.png" alt="Ivette Chalela Naffah">
							<p>Ivette Chalela Naffah<span>Waze Ads</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/img/speaker-lolo-alvarez-diaz.png" alt="Lolo Alvarez Díaz">
							<p>Lolo Alvarez Díaz<span>Arcos Dorados</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/img/speaker-gustavo-orjuela.png" alt="Gustavo Orjuela">
							<p>Gustavo Orjuela<span>Wayra</span></p>
						</li>
					</ul>
					<div class="emms22__speakers__action">
						<p class="emms22__fade-in">Próximamente conocerás los Speakers 2022.</p>
						<p class="emms22__fade-in">Regístrate gratis ahora y descubre antes que nadie las últimas novedades del <strong>EMMS</strong>.</p>
						<a href="#form" class="emms22__button emms22__fade-in">APÚNTATE AHORA</a>
					</div>
				</div>
			</div>

		</div>


		<!-- Partners -->

		<div class="emms22__partners">
			<div class="emms22__container--md">
				<h3 class="emms22__fade-in">Nos han acompañado en ediciones anteriores</h3>
				<ul class="emms22__partners_list">
					<li class="emms22__fade-in"><img src="./html/img/logo-metricool.png" alt="Metricol"></li>
					<li class="emms22__fade-in"><img src="./html/img/logo-wayra.png" alt="Wayra"></li>
					<li class="emms22__fade-in"><img src="./html/img/logo-asociacion-marketing-espana.png" alt="Asociación Marketing España"></li>
					<li class="emms22__fade-in"><img src="./html/img/logo-camece.png" alt="Camece"></li>
					<li class="emms22__fade-in"><img src="./html/img/logo-capece.png" alt="Capece"></li>
					<li class="emms22__fade-in"><img src="./html/img/logo-amvo.png" alt="Amvo"></li>
					<li class="emms22__fade-in"><img src="./html/img/logo-linkedin.png" alt="Linkedin"></li>
					<li class="emms22__fade-in"><img src="./html/img/logo-bigbox.png" alt="Bigbox"></li>
					<li class="emms22__fade-in"><img src="./html/img/logo-semrush.png" alt="Semrush"></li>
					<li class="emms22__fade-in"><img src="./html/img/logo-crehana.png" alt="Crehana"></li>
					<li class="emms22__fade-in"><img src="./html/img/logo-marketing-4ecommerce.png" alt="Marketing 4 Ecommerce"></li>
					<li class="emms22__fade-in"><img src="./html/img/logo-vtex.png" alt="Vtex"></li>
					<li class="emms22__fade-in"><img src="./html/img/logo-banco-frances.png" alt="Banco Francés"></li>
					<li class="emms22__fade-in"><img src="./html/img/logo-airbnb.png" alt="Airbnb"></li>
					<li class="emms22__fade-in"><img src="./html/img/logo-woocommerce.png" alt="Woocommerce"></li>
				</ul>
				<p class="emms22__fade-in">¿Quieres ser Media Partner del EMMS 2022? Escríbenos a <a href="mailto:partners@fromdoppler.com">partners@fromdoppler.com</a></p>
			</div>
		</div>

	

		<!-- Footer -->

		<footer class="emms22__footer">
			<div class="emms22__footer__event emms22__fade-in">
				<p><strong>EMMS 2022</strong> - Un evento creado por <a href="https://www.fromdoppler.com/es/" target="_blank"><img src="./html/img/logo-doppler--neg.svg" alt="Doppler"></a></p>
			</div>
			<div class="emms22__footer__social emms22__fade-in">
				<ul>
					<li><a href="https://www.instagram.com/fromdoppler/" target="_blank"><img src="./html/img/icono-instagram.svg" alt="Instagram"></a></li>
					<li><a href="https://www.facebook.com/DopplerEmailMarketing" target="_blank"><img src="./html/img/icono-facebook.svg" alt="Facebook"></a></li>
					<li><a href="https://www.youtube.com/user/FromDoppler" target="_blank"><img src="./html/img/icono-youtube.svg" alt="Youtube"></a></li>
					<li><a href="https://www.linkedin.com/company/228261" target="_blank"><img src="./html/img/icono-linkedin.svg" alt="Linkedin"></a></li>
					<li><a href="https://twitter.com/fromDoppler" target="_blank"><img src="./html/img/icono-twitter.svg" alt="Twitter"></a></li>
				</ul>
			</div>
			<div class="emms22__footer__actions emms22__fade-in">
				<a onclick="OneTrust.ToggleInfoDisplay()" id="ot-sdk-btn" class="ot-sdk-show-settings">Configuración de Cookies.</a>
				<a href="https://qa.fromdoppler.com/es/legal/privacidad/?utm_source=direct" target="_blank">Políticas de privacidad y legales</a>
			</div>
		</footer>

	</main>
	<script src="/html/js/animations.js?version=<?= VERSION ?>"></script>

</body>

</html>