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
	<?php
	include_once('././common/components/commonGTMBody.php');
	?>
	<main>

		<!-- Header -->
		<nav class="emms22__header">
			<div class="emms22__container--lg emms22__fade-in">
				<div class="emms22__header__logo">
					<a href="./index.php" class="nav-ini"><img class="lazyload" loading="lazy" data-src="../../common/html/img/logo-emms.png" alt="Emms 2022"></a>
				</div>
				<a class="emms22__header__nav--mb" id="btn-burger"></a>
				<ul class="emms22__header__nav emms22__header__nav--hidden" id="nav-mb">
					<li><a href="./index.php"  class="nav-ini">inicio</a></li>
					<li><a href="#ediciones" class="emms22__header__nav--btn-active">ediciones anteriores</a></li>
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
						<source src="../../common/html/img/video-ediciones-anteriores-2022-compress.mp4" type="video/mp4" alt="Video de ediciones anteriores" />
					</video>
				</div>
			</div>
            <div id="ediciones"></div>
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
							<img class="lazyload" loading="lazy" data-src="../../common/html/img/emms/emms2021.png" alt="EMMS 2021">
						</div>
						<div class="emms22__editions__first__card__text">
							<h4>EMMS 2021</h4>
							<p>Los líderes de la industria se reunieron para dar respuestas y soluciones a los desafíos actuales.
								Revive esta edición
								especial, pensada para todos aquellos que toman decisiones de negocio en su día a día y llevan sus
								empresas al próximo
								nivel.</p>
							<a class="btn-video" href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8oeQSWPozYXCwdC9PKRNPiM" target="_blank" rel="noopener">¡No te la pierdas!</a>
                            <a class="btn-register" id="playlist?list=PLHE_SVtQOB8oeQSWPozYXCwdC9PKRNPiM" data-target="modalRegister" data-toggle="emms22__modal-register">Revive el evento</a>
                        </div>
					</div>

					<div class="emms22__editions__cards__container">
						<div class="emms22__editions__content__cards">
							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/img/emms/emms2020.png" alt="EMMS 2020">
								<h4>EMMS 2020</h4>
								<p>A lo largo de 5 días, 18 oradores de primer nivel compartieron su conocimiento sobre Marketing
									Digital
									enfocado en 5 industrias clave. ¡Las sesiones virtuales de Networking fueron el complemento
									perfecto!
								</p>
								<a class="btn-video" href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8pcO6n-OHDedWgmicdFuj_p" target="_blank" rel="noopener">Revive el evento</a>
                                <a class="btn-register" id="playlist?list=PLHE_SVtQOB8pcO6n-OHDedWgmicdFuj_p" data-target="modalRegister" data-toggle="emms22__modal-register">Revive el evento</a>
                            </div>

							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/img/emms/emms2019.png" alt="EMMS 2019">
								<h4>EMMS 2019</h4>
								<p>Las temáticas más votadas por el público y los especialistas que están cambiando el Marketing
									Digital
									en
									el mundo. ¡Revive la jornada que se convirtió en el evento online del año!</p>
								<a class="btn-video" href="https://www.youtube.com/watch?v=Fxn-toxKKIQ&list=PLHE_SVtQOB8qoW8HGYDWUF1V6c0taJGJk&index=11&t=0s" target="_blank" rel="noopener">Mira las conferencias</a>
                                <a class="btn-register" id="watch?v=Fxn-toxKKIQ&list=PLHE_SVtQOB8qoW8HGYDWUF1V6c0taJGJk&index=11&t=0s" data-target="modalRegister" data-toggle="emms22__modal-register">Revive el evento</a>
                            </div>

							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/img/emms/emms2018.png" alt="EMMS 2018">
								<h4>EMMS 2018</h4>
								<p>Las conferencias en inglés con traducción en simultáneo marcaron un antes y un después para los
									eventos
									de Marketing del mercado hispano. Hubo speakers de primer nivel y miles de asistentes.</p>
								<a class="btn-video" href="https://www.youtube.com/watch?v=kmV1HFlSce4&list=PLHE_SVtQOB8qJGZdZ8UiUZA9N0BqQ_ePf" target="_blank" rel="noopener">Mira las conferencias</a>
                                <a class="btn-register" id="watch?v=kmV1HFlSce4&list=PLHE_SVtQOB8qJGZdZ8UiUZA9N0BqQ_ePf" data-target="modalRegister" data-toggle="emms22__modal-register">Revive el evento</a>
                            </div>

							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/img/emms/emms2017.png" alt="EMMS 2017">
								<h4>EMMS 2017</h4>
								<p>¡La décima edición tuvo récord de registros! Fueron 8 conferencias organizadas en nivel inicial y
									avanzado para que cada uno pudiera capacitarse en base a su experiencia y necesidades.</p>
								<a class="btn-video" href="https://www.youtube.com/watch?v=9Y_Y7ODRz2g&list=PLHE_SVtQOB8rVbcM84J2HdtU9Ko1N2wOW" target="_blank" rel="noopener">Mira las conferencias</a>
                                <a class="btn-register" id="watch?v=9Y_Y7ODRz2g&list=PLHE_SVtQOB8rVbcM84J2HdtU9Ko1N2wOW" data-target="modalRegister" data-toggle="emms22__modal-register">Revive el evento</a>
                            </div>

							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/img/emms/emms2016.png" alt="EMMS 2016">
								<h4>EMMS 2016</h4>
								<p>Se sumaron novedosos formatos como charlas motivacionales, entrevistas a expertos, debates en vivo
									y
									más.
									Esta vez fue la audiencia quien eligió de qué manera aprender.</p>
								<a class="btn-video" href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8olvfTQWIY-K12xmfh-083T" target="_blank" rel="noopener">Disfruta cada formato</a>
                                <a class="btn-register" id="playlist?list=PLHE_SVtQOB8olvfTQWIY-K12xmfh-083T" data-target="modalRegister" data-toggle="emms22__modal-register">Revive el evento</a>
                            </div>

							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/img/emms/emms2015.png" alt="EMMS 2015">
								<h4>EMMS 2015</h4>
								<p>Como cada edición, el EMMS se renovó. Las conferencias se convirtieron en un evento de dos días con
									10
									oradores destacados dentro de 2 temáticas: motivación y acción.</p>
								<a class="btn-video" href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8rSRLFPeeXwpbFwXglMAjw6" target="_blank" rel="noopener">Descubre lo que pasó</a>
                                <a class="btn-register" id="playlist?list=PLHE_SVtQOB8rSRLFPeeXwpbFwXglMAjw6" data-target="modalRegister" data-toggle="emms22__modal-register">Revive el evento</a>
                            </div>

							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/img/emms/emms2014.png" alt="EMMS 2014">
								<h4>EMMS 2014</h4>
								<p>El evento se transformó volviéndose 100% online, internacional y gratis. Con una duración de 10
									horas
									ininterrumpidas, 10 increíbles speakers y más de 10.000 asistentes.</p>
								<a class="btn-video" href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8rfXIJu1cFWY8LjPe6wQQ4b" target="_blank" rel="noopener">Escucha las ponencias</a>
                                <a class="btn-register" id="playlist?list=PLHE_SVtQOB8rfXIJu1cFWY8LjPe6wQQ4b" data-target="modalRegister" data-toggle="emms22__modal-register">Revive el evento</a>
                            </div>

							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/img/emms/emms2013.png" alt="EMMS 2013">
								<h4>EMMS 2013</h4>
								<p>Por primera vez el evento viajó por 5 países: Ecuador, España, República Dominicana, México y
									Argentina,
									los influencers del sector se lucieron con charlas magníficas.</p>
								<a class="btn-video" href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8qr7C4nts3AwCXRP3fPi1y1" target="_blank" rel="noopener">Mira los videos</a>
                                <a class="btn-register" id="playlist?list=PLHE_SVtQOB8qr7C4nts3AwCXRP3fPi1y1" data-target="modalRegister" data-toggle="emms22__modal-register">Revive el evento</a>
                            </div>

							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/img/emms/emms2012.png" alt="EMMS 2012">
								<h4>EMMS 2012</h4>
								<p>Inspirado en el “fin del mundo” volvió el EMMS para salvar a aquellos que no pensaban actualizarse
									con
									las últimas tendencias del Marketing. Más de 2.000 participantes.</p>
								<a class="btn-video" href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8pFFK1-Tg8o1uDOWKUGBaoM" target="_blank" rel="noopener">Dale play a las charlas</a>
                                <a class="btn-register" id="playlist?list=PLHE_SVtQOB8pFFK1-Tg8o1uDOWKUGBaoM" data-target="modalRegister" data-toggle="emms22__modal-register">Revive el evento</a>
                            </div>

							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/img/emms/emms2011.png" alt="EMMS 2011">
								<h4>EMMS 2011</h4>
								<p>El evento más relevante de Marketing Online llegó a México. Se discutieron temas como el Mobile
									Marketing, tendencias del mercado y se inauguró el panel de casos de éxito.</p>
								<a class="btn-video" href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8pCjMuMVOwrataaoQUyaFvo" target="_blank" rel="noopener">Mira las conferencias</a>
                                <a class="btn-register" id="playlist?list=PLHE_SVtQOB8pCjMuMVOwrataaoQUyaFvo" data-target="modalRegister" data-toggle="emms22__modal-register">Revive el evento</a>
                            </div>

							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/img/emms/emms2010.png" alt="EMMS 2010">
								<h4>EMMS 2010</h4>
								<p>Los asistentes aprendieron sobre análisis de Métricas, Social Email Marketing, Diseño y Conversión,
									en
									el
									reconocido Seminario del Email Marketing Made Simple.</p>
								<a class="btn-video" href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8oQe0h6OLhb1QOwMHSfoI3P" target="_blank" rel="noopener">Disfruta las Capacitaciones</a>
                                <a class="btn-register" id="playlist?list=PLHE_SVtQOB8oQe0h6OLhb1QOwMHSfoI3P" data-target="modalRegister" data-toggle="emms22__modal-register">Revive el evento</a>
                            </div>

							<div class="emms22__editions__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../../common/html/img/emms/emms2009.png" alt="EMMS 2009">
								<h4>EMMS 2009</h4>
								<p>Solo 500 personas tuvieron la posibilidad de vivir este evento en Buenos Aires, Argentina.
									Tendencias
									en
									Social Media, Content Marketing, SEO y mucho más.</p>
								<a class="btn-video" href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8qZykZGtv66ITP3zxHPUhfV" target="_blank" rel="noopener">Revive el evento</a>
                                <a class="btn-register" id="playlist?list=PLHE_SVtQOB8qZykZGtv66ITP3zxHPUhfV" data-target="modalRegister" data-toggle="emms22__modal-register">Revive el evento</a>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</section>

        <div id="modalRegister" class="emms22__modal-register">
            <div class="emms22__pre-event__container-form">
                <form class="emms22__pre-event__form" id="formModal" novalidate autocomplete="off">
                    <div class="emms22__home__container-form__column">
                        <h3>Regístrate aquí para ver las ediciones anteriores 🙂</h3>
                        <ul class="emms22__pre-event__form__field-group">
                            <li class="emms22__pre-event__form__field-item">
                                <div class="holder">
                                    <label class="required-label" for="firstname">Nombre *</label>
                                    <input type="text" name="firstname" id="firstname" placeholder="Tu nombre" class="required error-name nameLength" autocomplete="off">
                                </div>
                            </li>
                            <li class="emms22__pre-event__form__field-item">
                                <div class="holder">
                                    <label class="required-label" for="email">Email *</label>
                                    <input type="email" name="email" id="email" placeholder="&iexcl;No olvides usar @!" class="email required" autocomplete="off">
                                </div>
                            </li>
                                <li class="emms22__pre-event__form__field-item">
                                    <div class="holder">
                                        <label for="industry-input">Industria *</label>
                                        <select name="industry-input" class="required" autocomplete="off">
                                            <option disabled selected value>Elige una industria</option>
                                            <option value="Agencias-de-comunicacion-Publicidad-Consultor">Agencia de Comunicaci&oacute;n / Publicidad / Consultor</option>
                                            <option value="Agencias-de-Empleo">Agencias de Empleo</option>
                                            <option value="Alimentaci&oacute;n-Consumo-Masivo">Alimentaci&oacute;n / Consumo Masivo</option>
                                            <option value="Autom&oacute;viles">Autom&oacute;viles</option>
                                            <option value="Banca-Finanzas-Seguros">Banca / Finanzas / Seguros</option>
                                            <option value="Belleza-Cosm&eacute;tica">Belleza / Cosm&eacute;tica</option>
                                            <option value="Educaci&oacute;n">Educaci&oacute;n</option>
                                            <option value="Entretenimiento">Entretenimiento</option>
                                            <option value="Industria-Fabricaci&oacute;n">Industria / Fabricaci&oacute;n</option>
                                            <option value="Inform&aacute;tica-Electr&oacute;nica">Inform&aacute;tica / Electr&oacute;nica</option>
                                            <option value="Medios-de-Comunicaci&oacute;n">Medios de Comunicaci&oacute;n</option>
                                            <option value="Real-Estate">Real Estate</option>
                                            <option value="Retail">Retail</option>
                                            <option value="Ropa-Accesorios-Art&iacute;culos Deportivos">Ropa / Accesorios / Art&iacute;culos Deportivos</option>
                                            <option value="Salud">Salud</option>
                                            <option value="Sector-P&uacute;blico">Sector P&uacute;blico</option>
                                            <option value="Servicios">Servicios</option>
                                            <option value="Supermercado">Supermercado</option>
                                            <option value="Telecomunicaciones">Telecomunicaciones</option>
                                            <option value="Turismo">Turismo</option>
                                            <option value="Otros">Otros</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                            <ul class="emms22__pre-event__form__field-group">
                                <li class="emms22__pre-event__form__field-item emms22__pre-event__form__field-item__checkbox">
                                    <div class="holder">
                                        <input name="privacy" type="checkbox" id="acepto-politicas" value="true" class="required check acept-politic"><span class="checkmark"></span><label for="acepto-politicas">
                                            Acepto la Pol&iacute;tica de Privacidad de Doppler *
                                        </label>
                                    </div>
                                </li>
                                <li class="emms22__pre-event__form__field-item emms22__pre-event__form__field-item__checkbox">
                                    <div class="holder">
                                        <input name="promotions" type="checkbox" id="acepto-promociones" value="true"><span class="checkmark"></span><label for="acepto-promociones">
                                            Acepto recibir promociones de Doppler y sus aliados</label>
                                    </div>
                                </li>
                            </ul>
                            </div>
                            <div class="emms22__home__container-form__column">
                            <div class="emms22__home__legal">
                                <p>Doppler te informa que los datos de car&aacute;cter personal que nos proporciones al rellenar el presente formulario ser&aacute;n tratados por Doppler LLC como responsable de esta Web.<br>
                                    <strong>Finalidad: </strong>Dar de alta esta suscripci&oacute;n para enviar newsletters con informaci&oacute;n y promociones de productos o servicios propios o de nuestros aliados.<br>
                                    <strong>Legitimaci&oacute;n: </strong>Consentimiento del interesado. <br>
                                    <strong>Destinatarios: </strong>Tus datos ser&aacute;n guardados por Doppler y los co-organizadores del evento, Unbounce como empresa de creaci&oacute;n de Landing Pages, DigitalOcean como empresa de hosting y Zapier como herramienta de integraci&oacute;n de apps.<br>
                                    <strong>Informaci&oacute;n adicional: </strong>En la <a href="https://www.fromdoppler.com/es/legal/privacidad/" target="_blank" rel="noopener">Pol&iacute;tica de Privacidad</a> de Doppler encontrar&aacute;s informaci&oacute;n adicional
                                    sobre la recopilaci&oacute;n y el uso de su informaci&oacute;n personal por parte de Doppler, incluida
                                    informaci&oacute;n sobre acceso, conservaci&oacute;n, rectificaci&oacute;n, eliminaci&oacute;n, seguridad,
                                    transferencias
                                    transfronterizas y otros temas. <br>
                                </p>
                            </div>
                            <div class="emms22__home__btn">
                                <button class="emms22__button emms22__fade-in" id="register-button">ACCEDER AHORA</button>
                            </div>
                        </div>
                        <?php include_once('././common/components/commonUtms.php') ?>
                    </form>
                    <a data-dismiss="emms22__modal-register" class="emms22__modal-close"></a>
                </div>
        </div>


		<footer class="emms22__footer">
			<div class="emms22__footer__event emms22__fade-in">
				<p><strong>EMMS 2022</strong> - Un evento creado por <a href="https://www.fromdoppler.com/es/" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/img/logo-doppler--neg.svg" alt="Doppler"></a></p>
			</div>
			<div class="emms22__footer__social emms22__fade-in">
				<ul>
					<li><a href="https://www.instagram.com/fromdoppler/" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/img/icono-instagram.svg" alt="Instagram"></a></li>
					<li><a href="https://www.facebook.com/DopplerEmailMarketing" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/img/icono-facebook.svg" alt="Facebook"></a></li>
					<li><a href="https://www.youtube.com/user/FromDoppler" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/img/icono-youtube.svg" alt="Youtube"></a></li>
					<li><a href="https://www.linkedin.com/company/228261" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/img/icono-linkedin.svg" alt="Linkedin"></a></li>
					<li><a href="https://twitter.com/fromDoppler" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/img/icono-twitter.svg" alt="Twitter"></a></li>
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

    <script type="module" src="../../common/html/<?= VERSION ?>/js/edicionesAnteriores.js?version=<?= VERSION ?>"></script>

</body>

</html>
