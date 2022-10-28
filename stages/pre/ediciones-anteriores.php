<?php
require_once('././config.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php
	include_once('././common/components/commonHeader.php');
	?>

</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M768WZR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<main>

		<!-- Header -->
		<nav class="emms22__header">
			<div class="emms22__container--lg emms22__fade-in">
				<div class="emms22__header__logo">
					<a href="./index.php" class="nav-ini"><img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/logo-emms.png" alt="Emms 2022"></a>
				</div>
				<a class="emms22__header__nav--mb" id="btn-burger"></a>
				<ul class="emms22__header__nav emms22__header__nav--hidden" id="nav-mb">
					<li><a href="./index.php"  class="nav-ini">inicio</a></li>
					<li><a class="emms22__header__nav--btn-active">ediciones anteriores</a></li>
				</ul>
			</div>
		</nav>
		<!-- Hero -->
		<section class="emms22__hero">
			<div class="emms22__container--editions--lg emms22__hero__container">
				<div class="emms22__hero__content emms22__fade-in">
					<h1>Somos Doppler</h1>
					<p>
						Desde 2007 organizamos EMMS, el evento online y gratuito del que se han nutrido para hacer crecer sus
						negocios
						+300 mil profesionales del Marketing, con conferencias que se superan año a año.
					</p>
					<p>Somos la herramienta líder del mercado hispanohablante. Multiplica tus conversiones y fideliza a tu
						audiencia
						a través de Campañas de Email Marketing y Marketing Automation, SMS, y Emails Transaccionales.</p>
					<button class="emms22__hero__button"><a href="https://www.fromdoppler.com/?origin=emms-edicionesanteriores" target="_blank" rel="noopener">DESCUBRE
							MÁS SOBRE DOPPLER</a>
					</button>
				</div>
				<div class="emms22__hero__content__video emms22__fade-in">
					<video class="padding-top" autoplay muted loop>
						<source src="../../common/html/<?= VERSION ?>/img/video-ediciones-anteriores-2022-compress.mp4" type="video/mp4" alt="Video de ediciones anteriores" />
					</video>
				</div>
			</div>
		</section>

		<!-- Section previous editions -->
		<section class="emms22__editions">
			<div class="emms22__container--editions--md emms22__fade-in">
				<div class="emms22__editions__wrapper">
					<div class="emms22__editions__content emms22__fade-in">
						<h2>Revive las ediciones anteriores</h2>
						<p>¿Te has perdido alguno de nuestros eventos o quieres revivirlo? Disfruta gratis todas las conferencias y
							potencia tu negocio junto a los líderes del Marketing Digital.</p>
					</div>

					<div class="emms22__editions__first__card__content emms22__fade-in">
						<div class="emms22__editions__first__card__img">
							<img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/emms/emms2021.png" alt="EMMS 2021">
						</div>
						<div class="emms22__editions__first__card__text">
							<h4>EMMS 2021</h4>
							<p>Los líderes de la industria se reunieron para dar respuestas y soluciones a los desafíos actuales.
								Revive esta edición
								especial, pensada para todos aquellos que toman decisiones de negocio en su día a día y llevan sus
								empresas al próximo
								nivel.</p>
							<a href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8oeQSWPozYXCwdC9PKRNPiM" target="_blank" rel="noopener">¡No te la pierdas!</a>
						</div>
					</div>

					<div class="emms22__editions__cards__container">
						<div class="emms22__editions__content__cards">
							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/emms/emms2020.png" alt="EMMS 2020">
								<h4>EMMS 2020</h4>
								<p>A lo largo de 5 días, 18 oradores de primer nivel compartieron su conocimiento sobre Marketing
									Digital
									enfocado en 5 industrias clave. ¡Las sesiones virtuales de Networking fueron el complemento
									perfecto!
								</p>
								<a href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8pcO6n-OHDedWgmicdFuj_p" target="_blank" rel="noopener">Revive el evento</a>
							</div>

							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/emms/emms2019.png" alt="EMMS 2019">
								<h4>EMMS 2019</h4>
								<p>Las temáticas más votadas por el público y los especialistas que están cambiando el Marketing
									Digital
									en
									el mundo. ¡Revive la jornada que se convirtió en el evento online del año!</p>
								<a href="https://www.youtube.com/watch?v=Fxn-toxKKIQ&list=PLHE_SVtQOB8qoW8HGYDWUF1V6c0taJGJk&index=11&t=0s" target="_blank" rel="noopener">Mira las conferencias</a>
							</div>

							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/emms/emms2018.png" alt="EMMS 2018">
								<h4>EMMS 2018</h4>
								<p>Las conferencias en inglés con traducción en simultáneo marcaron un antes y un después para los
									eventos
									de Marketing del mercado hispano. Hubo speakers de primer nivel y miles de asistentes.</p>
								<a href="https://www.youtube.com/watch?v=kmV1HFlSce4&list=PLHE_SVtQOB8qJGZdZ8UiUZA9N0BqQ_ePf" target="_blank" rel="noopener">Mira las conferencias</a>
							</div>

							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/emms/emms2017.png" alt="EMMS 2017">
								<h4>EMMS 2017</h4>
								<p>¡La décima edición tuvo récord de registros! Fueron 8 conferencias organizadas en nivel inicial y
									avanzado para que cada uno pudiera capacitarse en base a su experiencia y necesidades.</p>
								<a href="https://www.youtube.com/watch?v=9Y_Y7ODRz2g&list=PLHE_SVtQOB8rVbcM84J2HdtU9Ko1N2wOW" target="_blank" rel="noopener">Mira las conferencias</a>
							</div>

							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/emms/emms2016.png" alt="EMMS 2016">
								<h4>EMMS 2016</h4>
								<p>Se sumaron novedosos formatos como charlas motivacionales, entrevistas a expertos, debates en vivo
									y
									más.
									Esta vez fue la audiencia quien eligió de qué manera aprender.</p>
								<a href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8olvfTQWIY-K12xmfh-083T" target="_blank" rel="noopener">Disfruta cada formato</a>
							</div>

							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/emms/emms2015.png" alt="EMMS 2015">
								<h4>EMMS 2015</h4>
								<p>Como cada edición, el EMMS se renovó. Las conferencias se convirtieron en un evento de dos días con
									10
									oradores destacados dentro de 2 temáticas: motivación y acción.</p>
								<a href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8rSRLFPeeXwpbFwXglMAjw6" target="_blank" rel="noopener">Descubre lo que pasó</a>
							</div>

							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/emms/emms2014.png" alt="EMMS 2014">
								<h4>EMMS 2014</h4>
								<p>El evento se transformó volviéndose 100% online, internacional y gratis. Con una duración de 10
									horas
									ininterrumpidas, 10 increíbles speakers y más de 10.000 asistentes.</p>
								<a href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8rfXIJu1cFWY8LjPe6wQQ4b" target="_blank" rel="noopener">Escucha las ponencias</a>
							</div>

							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/emms/emms2013.png" alt="EMMS 2013">
								<h4>EMMS 2013</h4>
								<p>Por primera vez el evento viajó por 5 países: Ecuador, España, República Dominicana, México y
									Argentina,
									los influencers del sector se lucieron con charlas magníficas.</p>
								<a href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8qr7C4nts3AwCXRP3fPi1y1" target="_blank" rel="noopener">Mira los videos</a>
							</div>
							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/emms/emms2012.png" alt="EMMS 2012">
								<h4>EMMS 2012</h4>
								<p>Inspirado en el “fin del mundo” volvió el EMMS para salvar a aquellos que no pensaban actualizarse
									con
									las últimas tendencias del Marketing. Más de 2.000 participantes.</p>
								<a href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8pFFK1-Tg8o1uDOWKUGBaoM" target="_blank" rel="noopener">Dale play a las charlas</a>
							</div>

							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/emms/emms2011.png" alt="EMMS 2011">
								<h4>EMMS 2011</h4>
								<p>El evento más relevante de Marketing Online llegó a México. Se discutieron temas como el Mobile
									Marketing, tendencias del mercado y se inauguró el panel de casos de éxito.</p>
								<a href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8pCjMuMVOwrataaoQUyaFvo" target="_blank" rel="noopener">Mira las conferencias</a>
							</div>

							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/emms/emms2010.png" alt="EMMS 2010">
								<h4>EMMS 2010</h4>
								<p>Los asistentes aprendieron sobre análisis de Métricas, Social Email Marketing, Diseño y Conversión,
									en
									el
									reconocido Seminario del Email Marketing Made Simple.</p>
								<a href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8oQe0h6OLhb1QOwMHSfoI3P" target="_blank" rel="noopener">Disfruta las Capacitaciones</a>
							</div>

							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/emms/emms2009.png" alt="EMMS 2009">
								<h4>EMMS 2009</h4>
								<p>Solo 500 personas tuvieron la posibilidad de vivir este evento en Buenos Aires, Argentina.
									Tendencias
									en
									Social Media, Content Marketing, SEO y mucho más.</p>
								<a href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8qZykZGtv66ITP3zxHPUhfV" target="_blank" rel="noopener">Revive el evento</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<footer class="emms22__footer">
			<div class="emms22__footer__event emms22__fade-in">
				<p><strong>EMMS 2022</strong> - Un evento creado por <a href="https://www.fromdoppler.com/es/" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/logo-doppler--neg.svg" alt="Doppler"></a></p>
			</div>
			<div class="emms22__footer__social emms22__fade-in">
				<ul>
					<li><a href="https://www.instagram.com/fromdoppler/" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/icono-instagram.svg" alt="Instagram"></a></li>
					<li><a href="https://www.facebook.com/DopplerEmailMarketing" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/icono-facebook.svg" alt="Facebook"></a></li>
					<li><a href="https://www.youtube.com/user/FromDoppler" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/icono-youtube.svg" alt="Youtube"></a></li>
					<li><a href="https://www.linkedin.com/company/228261" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/icono-linkedin.svg" alt="Linkedin"></a></li>
					<li><a href="https://twitter.com/fromDoppler" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/icono-twitter.svg" alt="Twitter"></a></li>
				</ul>
			</div>
			<div class="emms22__footer__actions emms22__fade-in">
				<a onclick="OneTrust.ToggleInfoDisplay()" id="ot-sdk-btn" class="ot-sdk-show-settings">Configuración de Cookies.</a>
				<a href="https://www.fromdoppler.com/es/legal/privacidad/" target="_blank">Políticas de privacidad y legales</a>
			</div>
		</footer>
	</main>



	<script src="/html/<?= VERSION ?>/js/modules/jquery.min.js"></script>
	<?php include_once('././common/components/commonUtms.php') ?>
	<?php include_once('././common/components/commonFooter.php') ?>

	<script type="module">
		import {
			changeRedirectLoged
		} from '../../common/html/<?= VERSION ?>/js/security.js'
		const changeNavIfLoged = changeRedirectLoged;
		changeNavIfLoged();
	</script>

</body>

</html>
