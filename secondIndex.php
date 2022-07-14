<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="/html/1.0.0/js/security.js?version=<?= VERSION ?>"></script>

	<?php
	include_once('commonHeader.php');
	?>

</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M768WZR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<main class="emms22__home">

		<!-- Header -->
		<nav class="emms22__header">
			<div class="emms22__container--lg emms22__fade-in">
				<div class="emms22__header__logo">
					<a href="./index.php"><img src="../html/1.0.0/img/logo-emms.png" alt="Emms 2022"></a>
				</div>
				<a class="emms22__header__nav--mb" id="btn-burger"></a>
				<ul class="emms22__header__nav emms22__header__nav--hidden" id="nav-mb">
					<li><a href="./index.php" class="emms22__header__nav--btn-active">inicio</a></li>
					<li><a href="./editions.php">ediciones anteriores</a></li>
				</ul>
			</div>
		</nav>

		<!-- Hero -->
		<div class="emms22__hero-home">
			<div class="emms22__hero-home__back">
				<video src="./html/1.0.0/img/background-loop-compress.mp4" loop muted autoplay playsinline></video>
			</div>

			<div class="emms22__hero-home__registered parallax-form">
				<h2>¡Ya eres parte del EMMS 2022!</h2>
				<div class="emms22__hero-home__registered__text">
					<p>Te mantendremos informado de las últimas novedades a través de tu Email.</p>
					<p>Agrega el evento a tu calendario para no perderlo de vista :)</p>
				</div>
				<div class="emms22__hero-home__registered__btn-calendar">
					<a title="Add to Calendar" class="emms22__button addeventatc" data-id="iS14401775" rel="noopener" href="https://www.addevent.com/event/iS14401775" target="_blank">EMMS DÍA 1</a>
					<a title="Add to Calendar" class="emms22__button addeventatc" data-id="pl14402520" rel="noopener" href="https://www.addevent.com/event/pl14402520" target="_blank">EMMS DÍA 2</a>
				</div>
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
				<div class="emms22__share">
					<ul>
						<li>¡COMPARTE ESTE EVENTO!</li>
						<li>
							<a href="javascript: void(0);" onclick="window.open ('http://www.facebook.com/sharer.php?u=http://URL', 'Facebook', 'toolbar=0, status=0, width=550, height=350');">
								<img src="../html/1.0.0/img/share-facebook.svg" alt="Facebook">
							</a>
						</li>
						<li>
							<a href="javascript: void(0);" onclick="window.open ('http://www.twitter.com/share?url=http://URL', 'Twitter', 'toolbar=0, status=0, width=550, height=350');">
								<img src="../html/1.0.0/img/share-tw.svg" alt="Twitter">
							</a>
						</li>
						<li>
							<a href="javascript: void(0);" onclick="window.open ('http://www.linkedin.com/share?url=http://URL', 'Linkedin', 'toolbar=0, status=0, width=550, height=350');">
								<img src="../html/1.0.0/img/share-in.svg" alt="Linkedin">
							</a>
						</li>
						<li>
							<a href="https://api.whatsapp.com/send?text=https://goemms.com/" target="_blank">
								<img src="../html/1.0.0/img/share-whats.svg" alt="Whatsapp">
							</a>
						</li>
					</ul>
				</div>
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
					</div>
					<div class="emms22__description__video emms22__fade-in">
						<video src="./html/1.0.0/img/video-insitucional-site-compress.mp4" controls muted autoplay playsinline class="videoAutoplay"></video>
					</div>
				</div>
			</div>

			<!-- Speakers -->

			<div class="emms22__speakers">
				<div class="emms22__container--md">
					<h2 class="emms22__fade-in">Algunos de los conferencistas que han pasado por las últimas ediciones de EMMS:</h2>
					<ul class="emms22__speakers__list">
						<li class="emms22__fade-in">
							<img src="./html/1.0.0/img/speaker-neil-patel.png" alt="Neil Patel">
							<p>Neil Patel<span>NP Digital</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/1.0.0/img/speaker-vero-ruiz-del-vizo.png" alt="Vero Ruiz del Vizo">
							<p>Vero Ruiz del Vizo<span>Amarillo Creative Lab</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/1.0.0/img/speaker-tim-ash.png" alt="Tim Ash">
							<p>Tim Ash<span>Timash.com</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/1.0.0/img/speaker-pablo-castellano.png" alt="Pablo Castellano">
							<p>Pablo Castellano<span>SocialMood</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/1.0.0/img/speaker-marcos-pueyrredon.png" alt="Marcos Pueyrredón">
							<p>Marcos Pueyrredón<span>VTEX</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/1.0.0/img/speaker-julia-rayeb.png" alt="Julia Rayeb">
							<p>Julia Rayeb<span>Facebook</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/1.0.0/img/speaker-alan-schulte.png" alt="Alan Schulte">
							<p>Alan Schulte<span>Linkedin</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/1.0.0/img/speaker-ivette-chalela.png" alt="Ivette Chalela Naffah">
							<p>Ivette Chalela Naffah<span>Waze Ads</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/1.0.0/img/speaker-lolo-alvarez-diaz.png" alt="Lolo Alvarez Díaz">
							<p>Lolo Alvarez Díaz<span>Arcos Dorados</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/1.0.0/img/speaker-gustavo-orjuela.png" alt="Gustavo Orjuela">
							<p>Gustavo Orjuela<span>Wayra</span></p>
						</li>
					</ul>
					<div class="emms22__speakers__action">
						<p class="emms22__fade-in">Próximamente conocerás los Speakers 2022.</p>
						<p class="emms22__fade-in">Regístrate gratis ahora y descubre antes que nadie las últimas novedades del <strong>EMMS</strong>.</p>
					</div>
				</div>
			</div>

		</div>


		<!-- Partners -->

		<div class="emms22__partners">
			<div class="emms22__container--md">
				<h3 class="emms22__fade-in">Nos han acompañado en ediciones anteriores</h3>
				<ul class="emms22__partners_list">
					<li class="emms22__fade-in"><img src="./html/1.0.0/img/logo-metricool.png" alt="Metricol"></li>
					<li class="emms22__fade-in"><img src="./html/1.0.0/img/logo-wayra.png" alt="Wayra"></li>
					<li class="emms22__fade-in"><img src="./html/1.0.0/img/logo-asociacion-marketing-espana.png" alt="Asociación Marketing España"></li>
					<li class="emms22__fade-in"><img src="./html/1.0.0/img/logo-camece.png" alt="Camece"></li>
					<li class="emms22__fade-in"><img src="./html/1.0.0/img/logo-capece.png" alt="Capece"></li>
					<li class="emms22__fade-in"><img src="./html/1.0.0/img/logo-amvo.png" alt="Amvo"></li>
					<li class="emms22__fade-in"><img src="./html/1.0.0/img/logo-linkedin.png" alt="Linkedin"></li>
					<li class="emms22__fade-in"><img src="./html/1.0.0/img/logo-bigbox.png" alt="Bigbox"></li>
					<li class="emms22__fade-in"><img src="./html/1.0.0/img/logo-semrush.png" alt="Semrush"></li>
					<li class="emms22__fade-in"><img src="./html/1.0.0/img/logo-crehana.png" alt="Crehana"></li>
					<li class="emms22__fade-in"><img src="./html/1.0.0/img/logo-marketing-4ecommerce.png" alt="Marketing 4 Ecommerce"></li>
					<li class="emms22__fade-in"><img src="./html/1.0.0/img/logo-vtex.png" alt="Vtex"></li>
					<li class="emms22__fade-in"><img src="./html/1.0.0/img/logo-banco-frances.png" alt="Banco Francés"></li>
					<li class="emms22__fade-in"><img src="./html/1.0.0/img/logo-airbnb.png" alt="Airbnb"></li>
					<li class="emms22__fade-in"><img src="./html/1.0.0/img/logo-woocommerce.png" alt="Woocommerce"></li>
				</ul>
				<p class="emms22__fade-in">¿Quieres ser Media Partner del EMMS 2022? Escríbenos a <a href="mailto:partners@fromdoppler.com">partners@fromdoppler.com</a></p>
			</div>
		</div>



		<!-- Footer -->

		<footer class="emms22__footer">
			<div class="emms22__footer__event emms22__fade-in">
				<p><strong>EMMS 2022</strong> - Un evento creado por <a href="https://www.fromdoppler.com/es/" target="_blank"><img src="./html/1.0.0/img/logo-doppler--neg.svg" alt="Doppler"></a></p>
			</div>
			<div class="emms22__footer__social emms22__fade-in">
				<ul>
					<li><a href="https://www.instagram.com/fromdoppler/" target="_blank"><img src="./html/1.0.0/img/icono-instagram.svg" alt="Instagram"></a></li>
					<li><a href="https://www.facebook.com/DopplerEmailMarketing" target="_blank"><img src="./html/1.0.0/img/icono-facebook.svg" alt="Facebook"></a></li>
					<li><a href="https://www.youtube.com/user/FromDoppler" target="_blank"><img src="./html/1.0.0/img/icono-youtube.svg" alt="Youtube"></a></li>
					<li><a href="https://www.linkedin.com/company/228261" target="_blank"><img src="./html/1.0.0/img/icono-linkedin.svg" alt="Linkedin"></a></li>
					<li><a href="https://twitter.com/fromDoppler" target="_blank"><img src="./html/1.0.0/img/icono-twitter.svg" alt="Twitter"></a></li>
				</ul>
			</div>
			<div class="emms22__footer__actions emms22__fade-in">
				<a onclick="OneTrust.ToggleInfoDisplay()" id="ot-sdk-btn" class="ot-sdk-show-settings">Configuración de Cookies.</a>
				<a href="https://qa.fromdoppler.com/es/legal/privacidad/?utm_source=direct" target="_blank">Políticas de privacidad y legales</a>
			</div>
		</footer>

	</main>
	<script src="/html/1.0.0/js/animations.js?version=<?= VERSION ?>"></script>
	<script src="https://www.fromdoppler.com/wp-content/themes/doppler_site/utm/utmCookiesHistory.js" type="text/javascript"></script>
</body>

</html>