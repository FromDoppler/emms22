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
			checkUserLoged
		} from '../../common/html/<?= VERSION ?>/js/security.js'
		const checkUserF = checkUserLoged;
		checkUserF()
	</script>

	<?php
	include_once('././common/components/commonHeader.php');
	?>
	<link rel="stylesheet" href="../../common/html/<?= VERSION ?>/flickity/flickity.min.css">
	<link rel="stylesheet" href="https://unpkg.com/flickity-fade@1/flickity-fade.css">
</head>

<body>
	<?php
	include_once('././common/components/commonGTMBody.php');
	?>
	<main class="emms22__pre-event emms22__post">

		<!-- Header -->
		<div id="inicio"></div>
		<nav class="emms22__header">
			<div class="emms22__container--lg emms22__fade-in">
				<div class="emms22__header__logo">
					<a href="./index.php"><img src="../../common/html/img/logo-emms.png" alt="Emms 2022"></a>
				</div>
				<a class="emms22__header__nav--mb" id="btn-burger"></a>
				<ul class="emms22__header__nav emms22__header__nav--hidden" id="nav-mb">
					<li><a href="#inicio">inicio</a></li>
					<li><a href="#contenido-exclusivo">contenido exclusivo</a></li>
					<li><a href="#aliados">aliados</a></li>
                    <li><a href="./ediciones-anteriores.php">ediciones anteriores</a></li>
				</ul>
			</div>
		</nav>

		<!-- Hero -->
		<div class="emms22__hero-pre-event">
			<div class="emms22__hero-pre-event__back">
				<video class="lazy" loop muted autoplay playsinline  poster="../../common/html/img/thumb.png">
					<source data-src="../../common/html/img/video-background-compress.mp4" type="video/mp4">
				</video>
			</div>

			<div class="emms22__container--lg">
				<div class="emms22__hero-pre-event__intro">
					<div class="emms22__hero-pre-event__intro__info">
						<h1>¡Revive el EMMS 2022!</h1>
						<ul>
							<li>EL FUTURO DEL MARKETING DIGITAL</li>
							<li>SPEAKERS INTERNACIONALES</li>
							<li>CAPACITACI&Oacute;N E INSPIRACI&Oacute;N</li>
						</ul>
						<span>
                            <strong>Regístrate al EMMS y accede a todas las conferencias del evento.</strong><br><br>
                            <strong>Además, encontrarás E-books, Cápsulas educativas, descuentos en herramientas ¡y mucho más!</strong>
                        </span>
					</div>
				</div>

				<div id="contentEarlyForm">
					<div class="emms22__pre-event__container-form">
						<form class="emms22__pre-event__form" id="earlyForm" novalidate autocomplete="off">
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
							<div class="emms22__home__btn">
								<button class="emms22__button emms22__fade-in" id="register-button">ASEGURA TU CUPO GRATIS</button>
							</div>
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
							<?php include_once('././common/components/commonUtms.php') ?>
						</form>
					</div>
				</div>
			</div>
			<div id="agenda"></div>
		</div>


		<!-- Calendar -->

        <span id="version" class="emms22--vh"><?= VERSION ?></span>

		<?php include_once('././common/components/commonCalendar.php') ?>



		<!-- Premium content -->

        <div id="contenido-exclusivo"></div>
		<div class="emms22__pre-event__premium-content">
			<div class="emms22__container--lg">
				<div class="emms22__pre-event__premium-content__text emms22__fade-in">
					<h2>S&uacute;mate al EMMS y desbloquea contenido Premium</h2>
					<p>Descubre todo lo que nuestros Sponsors han preparado para ti y potencia tu negocio con capacitaciones audiovisuales, contenidos descargables, certificaciones y mucho m&aacute;s.</p>
					<button class="emms22__button emms22__fade-in" data-scroll="contentEarlyForm" onclick="scrollToElement(event)">REGÍSTRATE AHORA</button>
				</div>
				<div class="emms22__pre-event__premium-content__image emms22__fade-in">
					<img src="../../common/html/img/handset.png" alt="Handset">
				</div>
			</div>
		</div>


		<!-- Experiences -->

		<div class="emms22__pre-event__experiences">
				<h2 class="emms22__fade-in">Descubre la experiencia de Speakers de ediciones anteriores</h2>
				<ul class="emms22__pre-event__experiences__carousel emms22__fade-in main-carousel" data-flickity='{ "wrapAround": true, "autoPlay": true, "prevNextButtons": false, "setGallerySize": false }'>
					<li class="emms22__pre-event__experiences__carousel__item carousel-cell">
						<div class="emms22__pre-event__experiences__carousel__item__card">
							<img src="../../common/html/img/speaker-experiences/speaker-tim-ash.png" alt="Tim Ash">
							<h3>Tim Ash <span>Speaker en el EMMS 2018</span></h3>
							<p>“Ser orador principal del EMMS 2018 fue un  verdadero honor. Disfrut&eacute; mucho compartir conceptos de Marketing Digital con una audiencia <strong>tan entusiasta y receptiva</strong>.”</p>
						</div>
					</li>
					<li class="emms22__pre-event__experiences__carousel__item carousel-cell">
						<div class="emms22__pre-event__experiences__carousel__item__card">
							<img src="../../common/html/img/speaker-experiences/speaker-purna-virji.png" alt="Tim Ash">
							<h3>Purna Virji <span>Speaker en el EMMS 2018</span></h3>
							<p>“<strong>&iexcl;Me ha encantado formar parte del EMMS!</strong> Nuevamente gracias por haberme tenido en consideraci&oacute;n.”</p>
						</div>
					</li>
					<li class="emms22__pre-event__experiences__carousel__item carousel-cell">
						<div class="emms22__pre-event__experiences__carousel__item__card">
							<img src="../../common/html/img/speaker-experiences/speaker-andres-silva.png" alt="Tim Ash">
							<h3>Andr&eacute;s Silva Arancibia <span>Speaker en el EMMS 2017</span></h3>
							<p>“Ser speaker en el EMMS 2017 fue una experiencia notable. En menos de 45 minutos recib&iacute; m&aacute;s de 2500 menciones positivas en Twitter. &iexcl;Lo recomiendo mucho!”</p>
						</div>
					</li>
					<li class="emms22__pre-event__experiences__carousel__item carousel-cell">
						<div class="emms22__pre-event__experiences__carousel__item__card">
							<img src="../../common/html/img/speaker-experiences/speaker-nico-leoni.png" alt="Tim Ash">
							<h3>Nico Leoni <span>Speaker en el EMMS 2019</span></h3>
							<p>“Llevo varios a&ntilde;os participando en conferencias  y eventos internacionales. Sin lugar a dudas, el EMMS es <strong>el mejor encuentro del mundo digital.</strong>”</p>
						</div>
					</li>
					<li class="emms22__pre-event__experiences__carousel__item carousel-cell">
						<div class="emms22__pre-event__experiences__carousel__item__card">
							<img src="../../common/html/img/speaker-experiences/speaker-sebastian-cuenca.png" alt="Tim Ash">
							<h3>Sebasti&aacute;n Cuenca <span>Moderador en el EMMS 2019</span></h3>
							<p>“El EMMS fue un gran paso en mi carrera que  me permiti&oacute; llegar a <strong>nuevas audiencias</strong> y dar cursos en otros pa&iacute;ses. Es un evento que brinda informaci&oacute;n de valor y que recomiendo por la  excelencia del equipo y la organizaci&oacute;n.” </p>
						</div>
					</li>
				</ul>
				<div class="emms22__pre-event__experiences__btn">
					<button class="emms22__button emms22__fade-in" data-scroll="contentEarlyForm" onclick="scrollToElement(event)">INSCR&Iacute;BETE HOY</button>
				</div>
		</div>


		<!-- Allies -->

		<div id="aliados"></div>
		<div class="emms22__pre-event__allies">
			<div class="emms22__container--lg">
				<h2 class="emms22__fade-in">Estos son nuestros aliados</h2>
				<div class="emms22__pre-event__allies__group">
					<h3 class="emms22__fade-in">SPONSORS</h3>
					<ul class="emms22__fade-in">
					<?php $pro_sponsors = $db->getAliadosPro('orden_home');
						foreach($pro_sponsors as $pro ) : ?>
						<li>
							<?php if($pro['link_site']) :?>
								<a href="<?=$pro['link_site']?>"  target="_blank">
							<?php endif?>
							<img src="../../admin/aliados_pro/uploads/<?=$pro['image_home']?>" alt="<?=$pro['alt_image_home']?>">
							<?php if($pro['link_site']) :?>
								</a>
							<?php endif?>
						</li>

						<?php endforeach;?>
                        <li><img src="../../common/html/img/mercadoshops-milbrands.png" alt="Mercado Shops y Milbrands"></li>
                        <li><img src="../../common/html/img/milenium-pro.png" alt="Milenium Group"></li>
					</ul>
				</div>

				<div class="emms22__pre-event__allies__group">
					<h3 class="emms22__fade-in">MEDIA PARTNERS</h3>
					<ul class="emms22__fade-in" id="alliesUl"></ul>
				</div>
			</div>
		</div>


		<!-- Bottom form -->

		<div class="emms22__pre-event__bottom-form">
			<div class="emms22__pre-event__bottom-form__title">
				<h3 class="emms22__fade-in">NO TE PIERDAS NADA DEL EMMS 2022</h3>
				<p class="emms22__fade-in">Reg&iacute;strate ahora al mayor evento de Marketing Digital y ent&eacute;rate de todas las novedades: Nuevos speakers, tem&aacute;ticas, regalos y mucho m&aacute;s. </p>
			</div>
			<div class="emms22__home__container-form emms22__fade-in">
				<form class="emms22__pre-event__form" novalidate autocomplete="off" id="earlyFormFooter">
					<div class="emms22__home__container-form__column">
						<ul class="emms22__pre-event__form__field-group">
							<li class="emms22__pre-event__form__field-item">
								<div class="holder">
									<label class="required-label">Nombre *</label>
									<input type="text" name="firstname" placeholder="Tu nombre" class="required error-name nameLength" autocomplete="off">
								</div>
							</li>
							<li class="emms22__pre-event__form__field-item">
								<div class="holder">
									<label class="required-label">Email *</label>
									<input type="email" name="email" placeholder="&iexcl;No olvides usar @!" class="email required" autocomplete="off">
								</div>
							</li>
							<li class="emms22__pre-event__form__field-item">
								<div class="holder">
									<label>Industria *</label>
									<select name="industry-input" class="required" autocomplete="off">
										<option disabled selected value>Elige una industria</option>
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
									<input name="privacy" type="checkbox" value="true" class="required check acept-politic" id="acepto-politicas2"><span class="checkmark"></span>
									<label for="acepto-politicas2">Acepto la Pol&iacute;tica de Privacidad de Doppler *</label>
								</div>
							</li>
							<li class="emms22__pre-event__form__field-item emms22__pre-event__form__field-item__checkbox">
								<div class="holder">
									<input name="promotions" type="checkbox" value="true" id="acepto-promociones2"><span class="checkmark"></span>
									<label for="acepto-promociones2">Acepto recibir promociones de Doppler y sus aliados</label>
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
							<button class="emms22__button emms22__fade-in">S&Uacute;MATE AHORA</button>
						</div>
					</div>
					<?php include_once('././common/components/commonUtms.php') ?>

				</form>
			</div>
		</div>

		<!-- Footer -->

		<footer class="emms22__footer">
			<div class="emms22__footer__event emms22__fade-in">
				<p><strong>EMMS 2022</strong> - Un evento creado por <a href="https://www.fromdoppler.com/es/" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/img/logo-doppler--neg.svg" alt="Doppler"></a></p>
			</div>
			<div class="emms22__footer__social emms22__fade-in">
				<ul>
					<li><a href="https://www.instagram.com/fromdoppler/" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/img/icono-instagram.svg" alt="Instagram"></a></li>
					<li><a href="https://www.facebook.com/DopplerEmailMarketing" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/img/icono-facebook.svg" alt="Facebook"></a></li>
					<li><a href="https://www.youtube.com/user/FromDoppler" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/img/icono-youtube.svg" alt="Youtube"></a></li>
					<li><a href="https://www.linkedin.com/company/228261" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/img/icono-linkedin.svg" alt="LinkedIn"></a></li>
					<li><a href="https://twitter.com/fromDoppler" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/img/icono-twitter.svg" alt="Twitter"></a></li>
				</ul>
			</div>
			<div class="emms22__footer__actions emms22__fade-in">
				<a onclick="OneTrust.ToggleInfoDisplay()" id="ot-sdk-btn" class="ot-sdk-show-settings">Configuraci&oacute;n de Cookies.</a>
				<a href="https://www.fromdoppler.com/es/legal/privacidad/" target="_blank">Pol&iacute;ticas de privacidad y legales</a>
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
