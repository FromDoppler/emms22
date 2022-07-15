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
		checkUser()
	</script>
	<?php
	include_once('commonHeader.php');
	?>
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<link rel="stylesheet" href="https://unpkg.com/flickity-fade@1/flickity-fade.css">
	<script type="text/javascript" src="./html/<?= VERSION ?>/js/script.js?version=<?= VERSION ?>"></script>
	<link rel="stylesheet" href="../html/<?= VERSION ?>/css/libs/intl-tel-input/intelInput.css">
	<link rel="stylesheet" href="../html/<?= VERSION ?>/css/libs/intl-tel-input/intelInput.min.css">
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
					<a href="./index.php"><img src="../html/<?= VERSION ?>/img/logo-emms.png" alt="Emms 2022"></a>
				</div>
				<div class="emms22__header__warning emms22__fade-top">
					<a>¡ÚLTIMOS LUGARES DISPONIBLES! REGÍSTRATE GRATIS AHORA</a>
				</div>
				<a class="emms22__header__nav--mb" id="btn-burger"></a>
				<ul class="emms22__header__nav emms22__header__nav--hidden" id="nav-mb">
					<li><a href="./index.php" class="emms22__header__nav--btn-active">inicio</a></li>
					<li><a href="./ediciones-anteriores.php">ediciones anteriores</a></li>
				</ul>
			</div>
		</nav>

		<!-- Hero -->
		<div class="emms22__hero-home">
			<div class="emms22__hero-home__back">
				<video src="./html/<?= VERSION ?>/img/background-loop-compress.mp4" loop muted autoplay playsinline></video>
			</div>

			<div class="emms22__container--lg">
				<div class="emms22__hero-home__intro">
					<ul class="emms22__hero-home__intro__counter">
						<li>
							<p>FALTAN</p>
						</li>
						<li class="emms22__hero-home__intro__counter__number">
							<div><span id="d"></span></div>
							<span class="emms22__hero-home__intro__counter__number--data">d&iacute;as</span>
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
					<div class="emms22__hero-home__intro__info">
						<p>EVENTO ONLINE Y GRATUITO - 9 Y 10 DE NOVIEMBRE</p>
						<h1>&iexcl;Vuelve el EMMS!</h1>
						<ul>
							<li>EL FUTURO DEL MARKETING DIGITAL</li>
							<li>SPEAKERS INTERNACIONALES</li>
							<li>CAPACITACI&Oacute;N E INSPIRACI&Oacute;N</li>
						</ul>
						<span>EARLY BIRDS: Preinscripci&oacute;n hasta el 15 de agosto.</span>
					</div>
					<div class="emms22__share">
						<ul>
							<li>¡COMPARTE ESTE EVENTO!</li>
							<li>
								<a href="javascript: void(0);" onclick="window.open ('https://www.facebook.com/sharer/sharer.php?u=https://goemms.com/', 'Facebook', 'toolbar=0, status=0, width=550, height=350');">
									<img src="../html/<?= VERSION ?>/img/share-facebook.svg" alt="Facebook">
								</a>
							</li>
							<li>
								<a href="javascript: void(0);" onclick="window.open ('https://twitter.com/intent/tweet?url=https://goemms.com/&text=Llega%20una%20nueva%20edici%C3%B3n%20del%20EMMS.%20S%C3%BAmate%20ahora%20al%20evento%20que%20te%20acercar%C3%A1%20a%20los%20mayores%20expertos%20internacionales%20en%20Marketing%20Digital.%20Es%20gratis%20y%20online.%20%C2%A1Reserva%20tu%20plaza!', 'Twitter', 'toolbar=0, status=0, width=550, height=350');">
									<img src="../html/<?= VERSION ?>/img/share-tw.svg" alt="Twitter">
								</a>
							</li>
							<li>
								<a href="javascript: void(0);" onclick="window.open ('http://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fgoemms.com%2F&title=Llega%20una%20nueva%20edici%C3%B3n%20del%20EMMS.%20S%C3%BAmate%20ahora%20al%20evento%20que%20te%20acercar%C3%A1%20a%20los%20mayores%20expertos%20internacionales%20en%20Marketing%20Digital.%20Es%20gratis%20y%20online.%20%C2%A1Reserva%20tu%20plaza!%20', 'Linkedin', 'toolbar=0, status=0, width=550, height=350');">
									<img src="../html/<?= VERSION ?>/img/share-in.svg" alt="LinkedIn">
								</a>
							</li>
							<li>
								<a href="https://api.whatsapp.com/send?text=%20Llega%20una%20nueva%20edici%C3%B3n%20del%20EMMS.%20S%C3%BAmate%20ahora%20al%20evento%20que%20te%20acercar%C3%A1%20a%20los%20mayores%20expertos%20internacionales%20en%20Marketing%20Digital.%20Es%20gratis%20y%20online.%20%C2%A1Reserva%20tu%20plaza!%20%0Ahttps%3A%2F%2Fgoemms.com%2F" target="_blank">
									<img src="../html/<?= VERSION ?>/img/share-whats.svg" alt="Whatsapp">
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div id="contentEarlyForm">
					<div class="emms22__home__container-form parallax-form">
						<form class="emms22__home__form" id="earlyForm" novalidate autocomplete="off">
							<ul class="emms22__home__form__field-group">
								<li class="emms22__home__form__field-item">
									<div class="holder">
										<label class="required-label" for="firstname">Nombre *</label>
										<input type="text" name="firstname" id="firstname" placeholder="Tu nombre" class="required error-name" autocomplete="off">
									</div>
								</li>
								<li class="emms22__home__form__field-item ">
									<div class="holder">
										<label class="required-label" for="lastname">Apellido *</label>
										<input type="text" name="lastname" id="lastname" placeholder="Tu apellido" class="required" autocomplete="off">
									</div>

								</li>
								<li class="emms22__home__form__field-item">
									<div class="holder">
										<label class="required-label" for="email">Email *</label>
										<input type="email" name="email" id="email" placeholder="&iexcl;No olvides usar @!" class="email required" autocomplete="off">
									</div>

								</li>
								<li class="emms22__home__form__field-item">
									<div class="holder holder-phone">
										<label class="required-label" for="phone-input">Tel&eacute;fono *</label>
										<input id="phone-input" name="phone-input" type="tel" class="required phone phone-number" autocomplete="off">
									</div>
								</li>
								<li class="emms22__home__form__field-item">
									<div class="holder">
										<label class="required-label" for="country">Pa&iacute;s *</label>
										<span class="dropdown-arrow"></span>
										<select id="country" name="country" class="required" autocomplete="off">
											<option disabled selected value>Elige un pa&iacute;s</option>
											<option value="Afghanistan">Afghanistan</option>
											<option value="Albania">Albania</option>
											<option value="Algeria">Algeria</option>
											<option value="Andorra">Andorra</option>
											<option value="Angola">Angola</option>
											<option value="Antarctica">Antarctica</option>
											<option value="Antigua and Barbuda">Antigua and Barbuda</option>
											<option value="Argentina">Argentina</option>
											<option value="Armenia">Armenia</option>
											<option value="Australia">Australia</option>
											<option value="Austria">Austria</option>
											<option value="Azerbaijan">Azerbaijan</option>
											<option value="Bahamas">Bahamas</option>
											<option value="Bahrain">Bahrain</option>
											<option value="Bangladesh">Bangladesh</option>
											<option value="Barbados">Barbados</option>
											<option value="Belarus">Belarus</option>
											<option value="Belgium">Belgium</option>
											<option value="Belize">Belize</option>
											<option value="Benin">Benin</option>
											<option value="Bermuda">Bermuda</option>
											<option value="Bhutan">Bhutan</option>
											<option value="Bolivia">Bolivia</option>
											<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
											<option value="Botswana">Botswana</option>
											<option value="Brazil">Brazil</option>
											<option value="Brunei">Brunei</option>
											<option value="Bulgaria">Bulgaria</option>
											<option value="Burkina Faso">Burkina Faso</option>
											<option value="Burma">Burma</option>
											<option value="Burundi">Burundi</option>
											<option value="Cambodia">Cambodia</option>
											<option value="Cameroon">Cameroon</option>
											<option value="Canada">Canada</option>
											<option value="Cape Verde">Cape Verde</option>
											<option value="Central African Republic">Central African Republic</option>
											<option value="Chad">Chad</option>
											<option value="Chile">Chile</option>
											<option value="China">China</option>
											<option value="Colombia">Colombia</option>
											<option value="Comoros">Comoros</option>
											<option value="Congo, Democratic Republic">Congo, Democratic Republic</option>
											<option value="Congo, Republic of the">Congo, Republic of the</option>
											<option value="Costa Rica">Costa Rica</option>
											<option value="Cote d'Ivoire">Cote d'Ivoire</option>
											<option value="Croatia">Croatia</option>
											<option value="Cuba">Cuba</option>
											<option value="Cyprus">Cyprus</option>
											<option value="Czech Republic">Czech Republic</option>
											<option value="Denmark">Denmark</option>
											<option value="Djibouti">Djibouti</option>
											<option value="Dominica">Dominica</option>
											<option value="Dominican Republic">Dominican Republic</option>
											<option value="East Timor">East Timor</option>
											<option value="Ecuador">Ecuador</option>
											<option value="Egypt">Egypt</option>
											<option value="El Salvador">El Salvador</option>
											<option value="Equatorial Guinea">Equatorial Guinea</option>
											<option value="Eritrea">Eritrea</option>
											<option value="Estonia">Estonia</option>
											<option value="Ethiopia">Ethiopia</option>
											<option value="Fiji">Fiji</option>
											<option value="Finland">Finland</option>
											<option value="France">France</option>
											<option value="Gabon">Gabon</option>
											<option value="Gambia">Gambia</option>
											<option value="Georgia">Georgia</option>
											<option value="Germany">Germany</option>
											<option value="Ghana">Ghana</option>
											<option value="Greece">Greece</option>
											<option value="Greenland">Greenland</option>
											<option value="Grenada">Grenada</option>
											<option value="Guatemala">Guatemala</option>
											<option value="Guinea">Guinea</option>
											<option value="Guinea-Bissau">Guinea-Bissau</option>
											<option value="Guyana">Guyana</option>
											<option value="Haiti">Haiti</option>
											<option value="Honduras">Honduras</option>
											<option value="Hong Kong">Hong Kong</option>
											<option value="Hungary">Hungary</option>
											<option value="Iceland">Iceland</option>
											<option value="India">India</option>
											<option value="Indonesia">Indonesia</option>
											<option value="Iran">Iran</option>
											<option value="Iraq">Iraq</option>
											<option value="Ireland">Ireland</option>
											<option value="Israel">Israel</option>
											<option value="Italy">Italy</option>
											<option value="Jamaica">Jamaica</option>
											<option value="Japan">Japan</option>
											<option value="Jordan">Jordan</option>
											<option value="Kazakhstan">Kazakhstan</option>
											<option value="Kenya">Kenya</option>
											<option value="Kiribati">Kiribati</option>
											<option value="Korea, North">Korea, North</option>
											<option value="Korea, South">Korea, South</option>
											<option value="Kuwait">Kuwait</option>
											<option value="Kyrgyzstan">Kyrgyzstan</option>
											<option value="Laos">Laos</option>
											<option value="Latvia">Latvia</option>
											<option value="Lebanon">Lebanon</option>
											<option value="Lesotho">Lesotho</option>
											<option value="Liberia">Liberia</option>
											<option value="Libya">Libya</option>
											<option value="Liechtenstein">Liechtenstein</option>
											<option value="Lithuania">Lithuania</option>
											<option value="Luxembourg">Luxembourg</option>
											<option value="Macedonia">Macedonia</option>
											<option value="Madagascar">Madagascar</option>
											<option value="Malawi">Malawi</option>
											<option value="Malaysia">Malaysia</option>
											<option value="Maldives">Maldives</option>
											<option value="Mali">Mali</option>
											<option value="Malta">Malta</option>
											<option value="Marshall Islands">Marshall Islands</option>
											<option value="Mauritania">Mauritania</option>
											<option value="Mauritius">Mauritius</option>
											<option value="Mexico">Mexico</option>
											<option value="Micronesia">Micronesia</option>
											<option value="Moldova">Moldova</option>
											<option value="Mongolia">Mongolia</option>
											<option value="Montenegro">Montenegro</option>
											<option value="Morocco">Morocco</option>
											<option value="Monaco">Monaco</option>
											<option value="Mozambique">Mozambique</option>
											<option value="Namibia">Namibia</option>
											<option value="Nauru">Nauru</option>
											<option value="Nepal">Nepal</option>
											<option value="Netherlands">Netherlands</option>
											<option value="New Zealand">New Zealand</option>
											<option value="Nicaragua">Nicaragua</option>
											<option value="Niger">Niger</option>
											<option value="Nigeria">Nigeria</option>
											<option value="Norway">Norway</option>
											<option value="Oman">Oman</option>
											<option value="Pakistan">Pakistan</option>
											<option value="Panama">Panama</option>
											<option value="Papua New Guinea">Papua New Guinea</option>
											<option value="Paraguay">Paraguay</option>
											<option value="Peru">Peru</option>
											<option value="Philippines">Philippines</option>
											<option value="Poland">Poland</option>
											<option value="Portugal">Portugal</option>
											<option value="Qatar">Qatar</option>
											<option value="Romania">Romania</option>
											<option value="Russia">Russia</option>
											<option value="Rwanda">Rwanda</option>
											<option value="Samoa">Samoa</option>
											<option value="San Marino">San Marino</option>
											<option value="Sao Tome">Sao Tome</option>
											<option value="Saudi Arabia">Saudi Arabia</option>
											<option value="Senegal">Senegal</option>
											<option value="Serbia">Serbia</option>
											<option value="Seychelles">Seychelles</option>
											<option value="Sierra Leone">Sierra Leone</option>
											<option value="Singapore">Singapore</option>
											<option value="Slovakia">Slovakia</option>
											<option value="Slovenia">Slovenia</option>
											<option value="Solomon Islands">Solomon Islands</option>
											<option value="Somalia">Somalia</option>
											<option value="South Africa">South Africa</option>
											<option value="Spain">Spain</option>
											<option value="Sri Lanka">Sri Lanka</option>
											<option value="Sudan">Sudan</option>
											<option value="Suriname">Suriname</option>
											<option value="Swaziland">Swaziland</option>
											<option value="Sweden">Sweden</option>
											<option value="Switzerland">Switzerland</option>
											<option value="Syria">Syria</option>
											<option value="Taiwan">Taiwan</option>
											<option value="Tajikistan">Tajikistan</option>
											<option value="Tanzania">Tanzania</option>
											<option value="Thailand">Thailand</option>
											<option value="Togo">Togo</option>
											<option value="Tonga">Tonga</option>
											<option value="Trinidad and Tobago">Trinidad and Tobago</option>
											<option value="Tunisia">Tunisia</option>
											<option value="Turkey">Turkey</option>
											<option value="Turkmenistan">Turkmenistan</option>
											<option value="Uganda">Uganda</option>
											<option value="Ukraine">Ukraine</option>
											<option value="United Arab Emirates">United Arab Emirates</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="United States">United States</option>
											<option value="Uruguay">Uruguay</option>
											<option value="Uzbekistan">Uzbekistan</option>
											<option value="Vanuatu">Vanuatu</option>
											<option value="Venezuela">Venezuela</option>
											<option value="Vietnam">Vietnam</option>
											<option value="Yemen">Yemen</option>
											<option value="Zambia">Zambia</option>
											<option value="Zimbabwe">Zimbabwe</option>
										</select>
									</div>
								</li>
								<li class="emms22__home__form__field-item">
									<div class="holder">
										<label for="industry-input">Industria *</label>
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
								<li class="emms22__home__form__field-item">
									<div class="holder">
										<label for="company-input">Empresa *</label>
										<input id="company-input" name="company" type="text" placeholder="Tu empresa" class="required" autocomplete="off">
									</div>
								</li>
							</ul>
							<ul class="emms22__home__form__field-group">
								<li class="emms22__home__form__field-item emms22__home__form__field-item__checkbox">
									<div class="holder">
										<input name="privacy" type="checkbox" id="acepto-politicas" value="true" class="required check"><span class="checkmark"></span><label for="acepto-politicas">
											Acepto la Pol&iacute;tica de Privacidad de Doppler *
										</label>
									</div>
								</li>
								<li class="emms22__home__form__field-item emms22__home__form__field-item__checkbox">
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
							<input type="hidden" id="utm_source" name="utm_source" value='<?= isset($_GET['utm_source']) ? $_GET['utm_source'] : "" ?>' />
							<input type="hidden" id="utm_campaign" name="utm_campaign" value='<?= isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : "" ?>' />
							<input type="hidden" id="utm_content" name="utm_content" value='<?= isset($_GET['utm_content']) ? $_GET['utm_content'] : "" ?>' />
							<input type="hidden" id="utm_term" name="utm_term" value='<?= isset($_GET['utm_term']) ? $_GET['utm_term'] : "" ?>' />
							<input type="hidden" id="utm_medium" name="utm_medium" value='<?= isset($_GET['utm_medium']) ? $_GET['utm_medium'] : "" ?>' />
						</form>
					</div>
				</div>
			</div>

		</div>

		<!-- Numbers -->

		<div class="emms22__numbers">
			<div class="emms22__container--lg">
				<span class="parallax-waves"></span>
				<h2 class="emms22__fade-in">El evento m&aacute;s importante de Marketing Digital</h2>
				<h3 class="emms22__fade-in">EDICIONES ANTERIORES</h3>
				<ul>
					<li class="emms22__fade-in">
						<p class="emms22__numbers__counter-text" id="count1">+200000</p>
						<span>Inscritos</span>
					</li>
					<li class="emms22__fade-in">
						<p class="emms22__numbers__counter-text" id="count2">14</p>
						<span>Ediciones</span>
					</li>
					<li class="emms22__fade-in">
						<p class="emms22__numbers__counter-text" id="count3">+10</p>
						<span>Pa&iacute;ses</span>
					</li>
					<li class="emms22__fade-in">
						<p class="emms22__numbers__counter-text" id="count4">+150</p>
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
						<h2>Llega una nueva edici&oacute;n del evento m&aacute;s esperado por la comunidad del Marketing.</h2>
						<p>Una oportunidad para descubrir las &uacute;ltimas tendencias y estrategias que implementan los l&iacute;deres del mundo para hacer crecer sus negocios.</p>
						<p><strong>Insp&iacute;rate y capac&iacute;tate desde la comodidad de tu casa.</strong> S&uacute;mate ahora al evento que te acercar&aacute; a los mayores expertos en Marketing Digital.</p>
						<a data-scroll="contentEarlyForm" onclick="scrollToElement(event)" class="emms22__button emms22__fade-in">PREINSCRIPCIÓN GRATUITA</a>
					</div>
					<div class="emms22__description__video emms22__fade-in">
						<video src="./html/<?= VERSION ?>/img/video-insitucional-site-compress.mp4" controls muted autoplay playsinline class="videoAutoplay"></video>
					</div>
				</div>
			</div>

			<!-- Speakers -->

			<div class="emms22__speakers">
				<div class="emms22__container--md">
					<h2 class="emms22__fade-in">Algunos de los conferencistas que han pasado por las &uacute;ltimas ediciones de EMMS:</h2>
					<ul class="emms22__speakers__list">
						<li class="emms22__fade-in">
							<img src="./html/<?= VERSION ?>/img/speaker-neil-patel.png" alt="Neil Patel">
							<p>Neil Patel<span>NP Digital</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/<?= VERSION ?>/img/speaker-vero-ruiz-del-vizo.png" alt="Vero Ruiz del Vizo">
							<p>Vero Ruiz del Vizo<span>Amarillo Creative Lab</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/<?= VERSION ?>/img/speaker-tim-ash.png" alt="Tim Ash">
							<p>Tim Ash<span>Timash.com</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/<?= VERSION ?>/img/speaker-pablo-castellano.png" alt="Pablo Castellano">
							<p>Pablo Castellano<span>SocialMood</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/<?= VERSION ?>/img/speaker-marcos-pueyrredon.png" alt="Marcos Pueyrred&oacute;n">
							<p>Marcos Pueyrred&oacute;n<span>VTEX</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/<?= VERSION ?>/img/speaker-julia-rayeb.png" alt="Julia Rayeb">
							<p>Julia Rayeb<span>Facebook</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/<?= VERSION ?>/img/speaker-alan-schulte.png" alt="Alan Schulte">
							<p>Alan Schulte<span>LinkedIn</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/<?= VERSION ?>/img/speaker-ivette-chalela.png" alt="Ivette Chalela Naffah">
							<p>Ivette Chalela Naffah<span>Waze Ads</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/<?= VERSION ?>/img/speaker-lolo-alvarez-diaz.png" alt="Lolo Alvarez D&iacute;az">
							<p>Lolo Alvarez D&iacute;az<span>Arcos Dorados</span></p>
						</li>
						<li class="emms22__fade-in">
							<img src="./html/<?= VERSION ?>/img/speaker-gustavo-orjuela.png" alt="Gustavo Orjuela">
							<p>Gustavo Orjuela<span>Wayra</span></p>
						</li>
					</ul>
					<div class="emms22__speakers__action">
						<p class="emms22__fade-in">Pr&oacute;ximamente conocer&aacute;s los Speakers 2022.</p>
						<p class="emms22__fade-in">Reg&iacute;strate gratis ahora y descubre antes que nadie las &uacute;ltimas novedades del <strong>EMMS</strong>.</p>
						<a data-scroll="contentEarlyForm" onclick="scrollToElement(event)" class="emms22__button emms22__fade-in">APÚNTATE AHORA</a>
					</div>
				</div>
			</div>

		</div>


		<!-- Partners -->

		<div class="emms22__partners">
			<div class="emms22__container--md">
				<h3 class="emms22__fade-in">Nos han acompa&ntilde;ado en ediciones anteriores</h3>
				<ul class="emms22__partners_list emms22__partners_list--dk">
					<li class="emms22__fade-in"><img src="./html/<?= VERSION ?>/img/logo-metricool.png" alt="Metricol"></li>
					<li class="emms22__fade-in"><img src="./html/<?= VERSION ?>/img/logo-wayra.png" alt="Wayra"></li>
					<li class="emms22__fade-in"><img src="./html/<?= VERSION ?>/img/logo-asociacion-marketing-espana.png" alt="Asociaci&oacute;n Marketing Espa&ntilde;a"></li>
					<li class="emms22__fade-in"><img src="./html/<?= VERSION ?>/img/logo-camece.png" alt="Camece"></li>
					<li class="emms22__fade-in"><img src="./html/<?= VERSION ?>/img/logo-capece.png" alt="Capece"></li>
					<li class="emms22__fade-in"><img src="./html/<?= VERSION ?>/img/logo-amvo.png" alt="Amvo"></li>
					<li class="emms22__fade-in"><img src="./html/<?= VERSION ?>/img/logo-linkedin.png" alt="LinkedIn"></li>
					<li class="emms22__fade-in"><img src="./html/<?= VERSION ?>/img/logo-bigbox.png" alt="Bigbox"></li>
					<li class="emms22__fade-in"><img src="./html/<?= VERSION ?>/img/logo-semrush.png" alt="Semrush"></li>
					<li class="emms22__fade-in"><img src="./html/<?= VERSION ?>/img/logo-crehana.png" alt="Crehana"></li>
					<li class="emms22__fade-in"><img src="./html/<?= VERSION ?>/img/logo-marketing-4ecommerce.png" alt="Marketing 4 Ecommerce"></li>
					<li class="emms22__fade-in"><img src="./html/<?= VERSION ?>/img/logo-vtex.png" alt="Vtex"></li>
					<li class="emms22__fade-in"><img src="./html/<?= VERSION ?>/img/logo-banco-frances.png" alt="Banco Franc&eacute;s"></li>
					<li class="emms22__fade-in"><img src="./html/<?= VERSION ?>/img/logo-airbnb.png" alt="Airbnb"></li>
					<li class="emms22__fade-in"><img src="./html/<?= VERSION ?>/img/logo-woocommerce.png" alt="Woocommerce"></li>
				</ul>
				<div class="emms22__partners_list emms22__partners_list--mb main-carousel" data-flickity='{ "prevNextButtons": false, "autoPlay": true }'>
					<div class="carousel-cell">
						<div><img src="../html/<?= VERSION ?>/img/logo-metricool.png" alt="Metricol"></div>
						<div><img src="../html/<?= VERSION ?>/img/logo-wayra.png" alt="Wayra"></div>
						<div><img src="../html/<?= VERSION ?>/img/logo-asociacion-marketing-espana.png" alt="Asociación Marketing España"></div>
						<div><img src="../html/<?= VERSION ?>/img/logo-camece.png" alt="Camece"></div>
						<div><img src="../html/<?= VERSION ?>/img/logo-capece.png" alt="Capece"></div>
						<div><img src="../html/<?= VERSION ?>/img/logo-amvo.png" alt="Amvo"></div>
						<div><img src="../html/<?= VERSION ?>/img/logo-linkedin.png" alt="LinkedIn"></div>
						<div><img src="../html/<?= VERSION ?>/img/logo-bigbox.png" alt="Bigbox"></div>
					</div>
					<div class="carousel-cell">
						<div><img src="../html/<?= VERSION ?>/img/logo-semrush.png" alt="Semrush"></div>
						<div><img src="../html/<?= VERSION ?>/img/logo-crehana.png" alt="Crehana"></div>
						<div><img src="../html/<?= VERSION ?>/img/logo-marketing-4ecommerce.png" alt="Marketing 4 Ecommerce"></div>
						<div><img src="../html/<?= VERSION ?>/img/logo-vtex.png" alt="Vtex"></div>
						<div><img src="../html/<?= VERSION ?>/img/logo-banco-frances.png" alt="Banco Francés"></div>
						<div><img src="../html/<?= VERSION ?>/img/logo-airbnb.png" alt="Airbnb"></div>
						<div><img src="../html/<?= VERSION ?>/img/logo-woocommerce.png" alt="Woocommerce"></div>
					</div>
				</div>
				<p class="emms22__fade-in">¿Quieres ser Media Partner del EMMS 2022? Escríbenos a <a href="mailto:partners@fromdoppler.com">partners@fromdoppler.com</a></p>
			</div>
		</div>

		<!-- Bottom form -->

		<div class="emms22__bottom-form">
			<div class="emms22__bottom-form__title">
				<h3 class="emms22__fade-in">NO TE PIERDAS NADA DEL EMMS 2022</h3>
				<p class="emms22__fade-in">Reg&iacute;strate ahora al mayor evento de Marketing Digital y ent&eacute;rate de todas las novedades: Nuevos speakers, tem&aacute;ticas, regalos y mucho m&aacute;s. </p>
			</div>
			<div class="emms22__home__container-form emms22__fade-in parallax-bottom-form">
				<form class="emms22__home__form" novalidate autocomplete="off">
					<div class="emms22__home__container-form__column">
						<ul class="emms22__home__form__field-group">
							<li class="emms22__home__form__field-item">
								<div class="holder">
									<label class="required-label">Nombre *</label>
									<input type="text" name="firstname" placeholder="Tu nombre" class="required error-name" autocomplete="off">
								</div>
							</li>
							<li class="emms22__home__form__field-item ">
								<div class="holder">
									<label class="required-label">Apellido *</label>
									<input type="text" name="lastname" placeholder="Tu apellido" class="required" autocomplete="off">
								</div>
							</li>
							<li class="emms22__home__form__field-item">
								<div class="holder">
									<label class="required-label">Email *</label>
									<input type="email" name="email" placeholder="&iexcl;No olvides usar @!" class="email required" autocomplete="off">
								</div>
							</li>
							<li class="emms22__home__form__field-item">
								<div class="holder holder-phone">
									<label class="required-label">Tel&eacute;fono *</label>
									<input id="phoneInputFooter" name="phone-input" type="tel" class="required phone phone-number" autocomplete="off">
								</div>
							</li>
							<li class="emms22__home__form__field-item">
								<div class="holder">
									<label class="required-label">Pa&iacute;s *</label>
									<span class="dropdown-arrow"></span>
									<select id="country2" name="country" class="required" autocomplete="off">
										<option disabled selected value>Elige un pa&iacute;s</option>
										<option value="Afghanistan">Afghanistan</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Antarctica">Antarctica</option>
										<option value="Antigua and Barbuda">Antigua and Barbuda</option>
										<option value="Argentina">Argentina</option>
										<option value="Armenia">Armenia</option>
										<option value="Australia">Australia</option>
										<option value="Austria">Austria</option>
										<option value="Azerbaijan">Azerbaijan</option>
										<option value="Bahamas">Bahamas</option>
										<option value="Bahrain">Bahrain</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="Barbados">Barbados</option>
										<option value="Belarus">Belarus</option>
										<option value="Belgium">Belgium</option>
										<option value="Belize">Belize</option>
										<option value="Benin">Benin</option>
										<option value="Bermuda">Bermuda</option>
										<option value="Bhutan">Bhutan</option>
										<option value="Bolivia">Bolivia</option>
										<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
										<option value="Botswana">Botswana</option>
										<option value="Brazil">Brazil</option>
										<option value="Brunei">Brunei</option>
										<option value="Bulgaria">Bulgaria</option>
										<option value="Burkina Faso">Burkina Faso</option>
										<option value="Burma">Burma</option>
										<option value="Burundi">Burundi</option>
										<option value="Cambodia">Cambodia</option>
										<option value="Cameroon">Cameroon</option>
										<option value="Canada">Canada</option>
										<option value="Cape Verde">Cape Verde</option>
										<option value="Central African Republic">Central African Republic</option>
										<option value="Chad">Chad</option>
										<option value="Chile">Chile</option>
										<option value="China">China</option>
										<option value="Colombia">Colombia</option>
										<option value="Comoros">Comoros</option>
										<option value="Congo, Democratic Republic">Congo, Democratic Republic</option>
										<option value="Congo, Republic of the">Congo, Republic of the</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Cote d'Ivoire">Cote d'Ivoire</option>
										<option value="Croatia">Croatia</option>
										<option value="Cuba">Cuba</option>
										<option value="Cyprus">Cyprus</option>
										<option value="Czech Republic">Czech Republic</option>
										<option value="Denmark">Denmark</option>
										<option value="Djibouti">Djibouti</option>
										<option value="Dominica">Dominica</option>
										<option value="Dominican Republic">Dominican Republic</option>
										<option value="East Timor">East Timor</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Egypt">Egypt</option>
										<option value="El Salvador">El Salvador</option>
										<option value="Equatorial Guinea">Equatorial Guinea</option>
										<option value="Eritrea">Eritrea</option>
										<option value="Estonia">Estonia</option>
										<option value="Ethiopia">Ethiopia</option>
										<option value="Fiji">Fiji</option>
										<option value="Finland">Finland</option>
										<option value="France">France</option>
										<option value="Gabon">Gabon</option>
										<option value="Gambia">Gambia</option>
										<option value="Georgia">Georgia</option>
										<option value="Germany">Germany</option>
										<option value="Ghana">Ghana</option>
										<option value="Greece">Greece</option>
										<option value="Greenland">Greenland</option>
										<option value="Grenada">Grenada</option>
										<option value="Guatemala">Guatemala</option>
										<option value="Guinea">Guinea</option>
										<option value="Guinea-Bissau">Guinea-Bissau</option>
										<option value="Guyana">Guyana</option>
										<option value="Haiti">Haiti</option>
										<option value="Honduras">Honduras</option>
										<option value="Hong Kong">Hong Kong</option>
										<option value="Hungary">Hungary</option>
										<option value="Iceland">Iceland</option>
										<option value="India">India</option>
										<option value="Indonesia">Indonesia</option>
										<option value="Iran">Iran</option>
										<option value="Iraq">Iraq</option>
										<option value="Ireland">Ireland</option>
										<option value="Israel">Israel</option>
										<option value="Italy">Italy</option>
										<option value="Jamaica">Jamaica</option>
										<option value="Japan">Japan</option>
										<option value="Jordan">Jordan</option>
										<option value="Kazakhstan">Kazakhstan</option>
										<option value="Kenya">Kenya</option>
										<option value="Kiribati">Kiribati</option>
										<option value="Korea, North">Korea, North</option>
										<option value="Korea, South">Korea, South</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Laos">Laos</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Lesotho">Lesotho</option>
										<option value="Liberia">Liberia</option>
										<option value="Libya">Libya</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macedonia">Macedonia</option>
										<option value="Madagascar">Madagascar</option>
										<option value="Malawi">Malawi</option>
										<option value="Malaysia">Malaysia</option>
										<option value="Maldives">Maldives</option>
										<option value="Mali">Mali</option>
										<option value="Malta">Malta</option>
										<option value="Marshall Islands">Marshall Islands</option>
										<option value="Mauritania">Mauritania</option>
										<option value="Mauritius">Mauritius</option>
										<option value="Mexico">Mexico</option>
										<option value="Micronesia">Micronesia</option>
										<option value="Moldova">Moldova</option>
										<option value="Mongolia">Mongolia</option>
										<option value="Montenegro">Montenegro</option>
										<option value="Morocco">Morocco</option>
										<option value="Monaco">Monaco</option>
										<option value="Mozambique">Mozambique</option>
										<option value="Namibia">Namibia</option>
										<option value="Nauru">Nauru</option>
										<option value="Nepal">Nepal</option>
										<option value="Netherlands">Netherlands</option>
										<option value="New Zealand">New Zealand</option>
										<option value="Nicaragua">Nicaragua</option>
										<option value="Niger">Niger</option>
										<option value="Nigeria">Nigeria</option>
										<option value="Norway">Norway</option>
										<option value="Oman">Oman</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Panama">Panama</option>
										<option value="Papua New Guinea">Papua New Guinea</option>
										<option value="Paraguay">Paraguay</option>
										<option value="Peru">Peru</option>
										<option value="Philippines">Philippines</option>
										<option value="Poland">Poland</option>
										<option value="Portugal">Portugal</option>
										<option value="Qatar">Qatar</option>
										<option value="Romania">Romania</option>
										<option value="Russia">Russia</option>
										<option value="Rwanda">Rwanda</option>
										<option value="Samoa">Samoa</option>
										<option value="San Marino">San Marino</option>
										<option value="Sao Tome">Sao Tome</option>
										<option value="Saudi Arabia">Saudi Arabia</option>
										<option value="Senegal">Senegal</option>
										<option value="Serbia">Serbia</option>
										<option value="Seychelles">Seychelles</option>
										<option value="Sierra Leone">Sierra Leone</option>
										<option value="Singapore">Singapore</option>
										<option value="Slovakia">Slovakia</option>
										<option value="Slovenia">Slovenia</option>
										<option value="Solomon Islands">Solomon Islands</option>
										<option value="Somalia">Somalia</option>
										<option value="South Africa">South Africa</option>
										<option value="Spain">Spain</option>
										<option value="Sri Lanka">Sri Lanka</option>
										<option value="Sudan">Sudan</option>
										<option value="Suriname">Suriname</option>
										<option value="Swaziland">Swaziland</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Syria">Syria</option>
										<option value="Taiwan">Taiwan</option>
										<option value="Tajikistan">Tajikistan</option>
										<option value="Tanzania">Tanzania</option>
										<option value="Thailand">Thailand</option>
										<option value="Togo">Togo</option>
										<option value="Tonga">Tonga</option>
										<option value="Trinidad and Tobago">Trinidad and Tobago</option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Uganda">Uganda</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United Arab Emirates">United Arab Emirates</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="United States">United States</option>
										<option value="Uruguay">Uruguay</option>
										<option value="Uzbekistan">Uzbekistan</option>
										<option value="Vanuatu">Vanuatu</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Vietnam">Vietnam</option>
										<option value="Yemen">Yemen</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>
									</select>
								</div>
							</li>
							<li class="emms22__home__form__field-item">
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
							<li class="emms22__home__form__field-item">
								<div class="holder">
									<label>Empresa *</label>
									<input name="company" type="text" placeholder="Tu empresa" class="required" autocomplete="off">
								</div>
							</li>
						</ul>
						<ul class="emms22__home__form__field-group">
							<li class="emms22__home__form__field-item emms22__home__form__field-item__checkbox">
								<div class="holder">
									<input name="privacy" type="checkbox" value="true" class="required check"><span class="checkmark"></span><label>
										Acepto la Pol&iacute;tica de Privacidad de Doppler *
									</label>
								</div>
							</li>
							<li class="emms22__home__form__field-item emms22__home__form__field-item__checkbox">
								<div class="holder">
									<input name="promotions" type="checkbox" value="true"><span class="checkmark"></span><label>
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
								<strong>Destinatarios: </strong>Tus datos serán guardados por Doppler y los co-organizadores del evento, Unbounce como empresa de creación de Landing Pages, DigitalOcean como empresa de hosting y Zapier como herramienta de integración de apps.<br>
								<strong>Información adicional: </strong>En la <a href="https://www.fromdoppler.com/es/legal/privacidad/" target="_blank" rel="noopener">Política de Privacidad</a> de Doppler encontrarás información adicional
								sobre la recopilación y el uso de su información personal por parte de Doppler, incluida
								información sobre acceso, conservación, rectificación, eliminación, seguridad,
								transferencias
								transfronterizas y otros temas. <br>
							</p>
						</div>
						<div class="emms22__home__btn">
							<button class="emms22__button emms22__fade-in">REGISTRARME</button>
						</div>
					</div>
					<input type="hidden" name="utm_source" value='<?= isset($_GET['utm_source']) ? $_GET['utm_source'] : "" ?>' />
					<input type="hidden" name="utm_campaign" value='<?= isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : "" ?>' />
					<input type="hidden" name="utm_content" value='<?= isset($_GET['utm_content']) ? $_GET['utm_content'] : "" ?>' />
					<input type="hidden" name="utm_term" value='<?= isset($_GET['utm_term']) ? $_GET['utm_term'] : "" ?>' />
					<input type="hidden" name="utm_medium" value='<?= isset($_GET['utm_medium']) ? $_GET['utm_medium'] : "" ?>' />

				</form>
			</div>
		</div>

		<!-- Footer -->

		<footer class="emms22__footer">
			<div class="emms22__footer__event emms22__fade-in">
				<p><strong>EMMS 2022</strong> - Un evento creado por <a href="https://www.fromdoppler.com/es/" target="_blank"><img src="./html/<?= VERSION ?>/img/logo-doppler--neg.svg" alt="Doppler"></a></p>
			</div>
			<div class="emms22__footer__social emms22__fade-in">
				<ul>
					<li><a href="https://www.instagram.com/fromdoppler/" target="_blank"><img src="./html/<?= VERSION ?>/img/icono-instagram.svg" alt="Instagram"></a></li>
					<li><a href="https://www.facebook.com/DopplerEmailMarketing" target="_blank"><img src="./html/<?= VERSION ?>/img/icono-facebook.svg" alt="Facebook"></a></li>
					<li><a href="https://www.youtube.com/user/FromDoppler" target="_blank"><img src="./html/<?= VERSION ?>/img/icono-youtube.svg" alt="Youtube"></a></li>
					<li><a href="https://www.linkedin.com/company/228261" target="_blank"><img src="./html/<?= VERSION ?>/img/icono-linkedin.svg" alt="LinkedIn"></a></li>
					<li><a href="https://twitter.com/fromDoppler" target="_blank"><img src="./html/<?= VERSION ?>/img/icono-twitter.svg" alt="Twitter"></a></li>
				</ul>
			</div>
			<div class="emms22__footer__actions emms22__fade-in">
				<a onclick="OneTrust.ToggleInfoDisplay()" id="ot-sdk-btn" class="ot-sdk-show-settings">Configuración de Cookies.</a>
				<a href="https://www.fromdoppler.com/es/legal/privacidad/" target="_blank">Políticas de privacidad y legales</a>
			</div>
		</footer>

	</main>

	<script src="/html/<?= VERSION ?>/js/modules/jquery.min.js"></script>
	<script src="/html/<?= VERSION ?>/js/modules/intlTelInput/intlTelInput.min.js"></script>
	<script src="/html/<?= VERSION ?>/js/modules/intlTelInput/intlTelInput.js"></script>
	<script src="/html/<?= VERSION ?>/js/modules/intlTelInput/phoneValidation.js"></script>
	<?php include_once('commonFooter.php') ?>
</body>

</html>