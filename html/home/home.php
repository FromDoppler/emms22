<?php
    define('VERSION', '1.0.0')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMMS 2022</title>

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity-fade@1/flickity-fade.css">
    <link rel="stylesheet" href="../css/styles.css?version=<?= VERSION ?>">
   
</head>
<body>
    <main class="emms22__home">

        <!-- Header -->
        <nav class="emms22__header">
            <div class="emms22__container--lg emms22__fade-in">
                <div class="emms22__header__logo">
                    <a href=""><img src="../img/logo-emms.png" alt="Emms 2022"></a>
                </div>
                <div class="emms22__header__warning emms22__fade-top">
                    <a>¡ÚLTIMOS LUGARES DISPONIBLES! REGÍSTRATE GRATIS AHORA</a>
                </div>
                <a class="emms22__header__nav--mb" id="btn-burger"></a>
                <ul class="emms22__header__nav emms22__header__nav--hidden" id="nav-mb">
                    <li><a href="" class="emms22__header__nav--btn-active">inicio</a></li>
                    <li><a href="">ediciones anteriores</a></li>
                </ul>
            </div>
        </nav>

        <!-- Hero -->
        <div class="emms22__hero-home">
            <div class="emms22__hero-home__back">
               <video src="../img/background-loop-compress.mp4" loop muted autoplay playsinline></video>
            </div>

            <!-- El siguiente div .emms22__container--lg es el que hay que ocultar luego de completar el form -->
            <div class="emms22__container--lg">
                <div class="emms22__hero-home__intro">
                    <ul class="emms22__hero-home__intro__counter">
                        <li><p>FALTAN</p></li>
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
                    <div class="emms22__hero-home__intro__info">
                        <p>EVENTO ONLINE Y GRATUITO - 9 Y 10 DE NOVIEMBRE</p>
                        <h1>¡Vuelve el EMMS!</h1>
                        <ul>
                            <li>EL FUTURO DEL MARKETING DIGITAL</li>
                            <li>SPEAKERS INTERNACIONALES</li>
                            <li>CAPACITACIÓN E INSPIRACIÓN</li>
                        </ul>
                        <span>EARLY BIRDS: Preinscripción hasta el 15 de agosto.</span>
                    </div>
                    <div class="emms22__share">
                        <ul>
                            <li>¡COMPARTE ESTE EVENTO!</li>
                            <li>
                                <a href="javascript: void(0);" onclick="window.open ('http://www.facebook.com/sharer.php?u=http://URL', 'Facebook', 'toolbar=0, status=0, width=550, height=350');">
                                    <img src="../img/share-facebook.svg" alt="Facebook">
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" onclick="window.open ('http://www.twitter.com/share?url=http://URL', 'Twitter', 'toolbar=0, status=0, width=550, height=350');"> 
                                    <img src="../img/share-tw.svg" alt="Twitter">
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" onclick="window.open ('http://www.linkedin.com/share?url=http://URL', 'Linkedin', 'toolbar=0, status=0, width=550, height=350');"> 
                                    <img src="../img/share-in.svg" alt="Linkedin">
                                </a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send?text=https://goemms.com/" target="_blank"> 
                                    <img src="../img/share-whats.svg" alt="Whatsapp">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="emms22__home__container-form parallax-form">
                    <form class="emms22__home__form" id="form" action="success-reservation.php" method="post">
                        <ul class="emms22__home__form__field-group">
                            <li class="emms22__home__form__field-item" id="first-form-item">
                                    <label class="required-label" for="name">Nombre *</label>
                                    <input type="text" name="firstname" id="firstname" placeholder="Tu nombre" class="required error-name">                                
                            </li>
                            <li class="emms22__home__form__field-item ">
                                    <label class="required-label" for="lastname">Apellido *</label>
                                    <input type="text" name="lastname" id="lastname" placeholder="Tu apellido" class="required">                 
                            </li>
                            <li class="emms22__home__form__field-item">
                                    <label class="required-label" for="email">Email *</label>
                                    <input type="email" name="email" id="email" placeholder="¡No olvides usar @!" class="email required">                               
                            </li>
                            <li class="emms22__home__form__field-item">
                                    <label class="required-label" for="phone-input required-label">Teléfono *</label>
                                    <input id="phone-input" name="phone" type="tel" class="required phone phone-number">
                                    <input id="full-phone-input" name="full-phone-input" type="hidden" value="">
                            </li>
                            <li class="emms22__home__form__field-item">
                                    <label class="required-label" for="country">País *</label>
                                    <span class="dropdown-arrow"></span>
                                    <select id="country" name="country" class="required" autocomplete="off">
                                        <option disabled selected value>Elige un país</option>
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
                            </li>
                            <li class="emms22__home__form__field-item">
                                    <label class="required-label" for="country">Industria *</label>
                                    <span class="dropdown-arrow"></span>
                                    <select id="company-input" name="company" class="required" autocomplete="off">
                                        <option disabled selected value>Elige una industria</option>
                                        <option value="Agencias-de-Empleo">Agencias de Empleo</option>
                                        <option value="Alimentación-Consumo-Masivo">Alimentación / Consumo Masivo</option>
                                        <option value="Automóviles">Automóviles</option>
                                        <option value="Banca-Finanzas-Seguros">Banca / Finanzas / Seguros</option>
                                        <option value="Belleza-Cosmética">Belleza / Cosmética</option>
                                        <option value="Educación">Educación</option>
                                        <option value="Entretenimiento">Entretenimiento</option>
                                        <option value="Industria-Fabricación">Industria / Fabricación</option>
                                        <option value="Informática-Electrónica">Informática / Electrónica</option>
                                        <option value="Medios-de-Comunicación">Medios de Comunicación</option>
                                        <option value="Real-Estate">Real Estate</option>
                                        <option value="Retail">Retail</option>
                                        <option value="Ropa-Accesorios-Artículos Deportivos">Ropa / Accesorios / Artículos Deportivos</option>
                                        <option value="Salud">Salud</option>
                                        <option value="Sector-Público">Sector Público</option>
                                        <option value="Servicios">Servicios</option>
                                        <option value="Supermercado">Supermercado</option>
                                        <option value="Telecomunicaciones">Telecomunicaciones</option>
                                        <option value="Turismo">Turismo</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                            </li>
                            <li class="emms22__home__form__field-item">
                                    <label for="company-input">Empresa *</label>
                                    <input id="company-input" name="company" type="text" placeholder="Tu empresa" class="company company-number">
                                    <input id="full-company-input" name="full-company-input" type="hidden" value="">
                            </li>
                        </ul>
                        <ul class="emms22__home__form__field-group">
                            <li class="emms22__home__form__field-item emms22__home__form__field-item__checkbox">
                                    <input name="privacy" type="checkbox" id="acepto-politicas" value="true" class="required check"><span class="checkmark"></span><label for="acepto-politicas">
                                        Acepto la Política de Privacidad de Doppler *
                                    </label>
                            </li>
                            <li class="emms22__home__form__field-item emms22__home__form__field-item__checkbox">
                                <input name="promotions" type="checkbox" id="acepto-promociones" value="true"><span class="checkmark"></span><label for="acepto-promociones">
                                    Acepto recibir promociones de Doppler y sus aliados</label>
                            </li>
                        </ul>
                            <div class="emms22__home__btn">
                                <button type="button" class="emms22__button emms22__fade-in" id="register-button">ASEGURA TU CUPO GRATIS</button>
                            </div>
                            <div class="emms22__home__legal">
                                <p>Doppler te informa que los datos de carácter personal que nos proporciones al rellenar el presente formulario serán tratados por Doppler LLC como responsable de esta Web.<br>
                                    <strong>Finalidad: </strong>Dar de alta esta suscripción para enviar newsletters con información y promociones de productos o servicios propios o de nuestros aliados.<br>
                                    <strong>Legitimación: </strong>Consentimiento del interesado. <br>
                                    <strong>Destinatarios: </strong>Tus datos serán guardados por Doppler y los co-organizadores del evento, Unbounce como empresa de creación de Landing Pages, DigitalOcean como empresa de hosting y Zapier como herramienta de integración de apps.<br>
                                    <strong>Información adicional: </strong>En la <a href="https://www.fromdoppler.com/es/legal/privacidad/?utm_source=goemms&utm_medium=footer&utm_campaign=politicasdeprivacidad" target="_blank" rel="noopener">Política de Privacidad</a> de Doppler encontrarás información adicional
                                    sobre la recopilación y el uso de su información personal por parte de Doppler, incluida
                                    información sobre acceso, conservación, rectificación, eliminación, seguridad,
                                    transferencias
                                    transfronterizas y otros temas. <br>
                                </p>
                            </div>
                    </form>
                </div>
            </div> 

            <!-- El siguiente div .emms22__hero-home__registered es el que se activa luego del registro en el form -->
<!--             <div class="emms22__hero-home__registered">
                <h2>¡Ya eres parte del EMMS 2022!</h2>
                <div class="emms22__hero-home__registered__text">
                    <p>Te mantendremos informado de las últimas novedades a través de tu Email.</p>
                    <p>Agrega el evento a tu calendario para no perderlo de vista :)</p>
                </div>
                <div class="emms22__hero-home__registered__btn-calendar">
                    <a title="Add to Calendar" class="emms22__button addeventatc" data-id="Tm14391098" href="https://www.addevent.com/event/Tm14391098" target="_blank">EMMS DÍA 1</a>
                    <a title="Add to Calendar" class="emms22__button addeventatc" data-id="Tm14391098" href="https://www.addevent.com/event/Tm14391098" target="_blank">EMMS DÍA 2</a>
                </div>
                <ul class="emms22__hero-home__intro__counter">
                        <li><p>FALTAN</p></li>
                        <li class="emms22__hero-home__intro__counter__number">
                            <div><span id="d2"></span></div>
                            <span class="emms22__hero-home__intro__counter__number--data">días</span>
                        </li>
                        <li class="emms22__hero-home__intro__counter__number">
                            <div><span id="h2"></span></div>
                            <span class="emms22__hero-home__intro__counter__number--data">horas</span>
                        </li>
                        <li class="emms22__hero-home__intro__counter__number">
                            <div><span id="m2"></span></div>
                            <span class="emms22__hero-home__intro__counter__number--data">minutos</span>
                        </li>
                        <li class="emms22__hero-home__intro__counter__number">
                            <div><span id="s2"></span></div>
                            <span class="emms22__hero-home__intro__counter__number--data">segundos</span>
                        </li>
                </ul>
                <div class="emms22__share">
                        <ul>
                            <li>¡COMPARTE ESTE EVENTO!</li>
                            <li>
                                <a href="javascript: void(0);" onclick="window.open ('http://www.facebook.com/sharer.php?u=http://URL', 'Facebook', 'toolbar=0, status=0, width=550, height=350');">
                                    <img src="../img/share-facebook.svg" alt="Facebook">
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" onclick="window.open ('http://www.twitter.com/share?url=http://URL', 'Twitter', 'toolbar=0, status=0, width=550, height=350');"> 
                                    <img src="../img/share-tw.svg" alt="Twitter">
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" onclick="window.open ('http://www.linkedin.com/share?url=http://URL', 'Linkedin', 'toolbar=0, status=0, width=550, height=350');"> 
                                    <img src="../img/share-in.svg" alt="Linkedin">
                                </a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send?text=https://goemms.com/" target="_blank"> 
                                    <img src="../img/share-whats.svg" alt="Whatsapp">
                                </a>
                            </li>
                        </ul>
                    </div>
            </div> -->

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
                        <a data-scroll="form" onclick="scrollToElement(event)" class="emms22__button emms22__fade-in">PREINSCRIPCIÓN GRATUITA</a>
                    </div>
                    <div class="emms22__description__video emms22__fade-in">
                        <video src="../img/video-insitucional-site-compress.mp4" controls muted autoplay playsinline class="videoAutoplay"></video>
                    </div>
                </div>
            </div>

            <!-- Speakers -->

            <div class="emms22__speakers">
                <div class="emms22__container--md">
                    <h2 class="emms22__fade-in">Algunos de los conferencistas que han pasado por las últimas ediciones de EMMS:</h2>
                    <ul class="emms22__speakers__list">
                        <li class="emms22__fade-in">
                            <img src="../img/speaker-neil-patel.png" alt="Neil Patel">
                            <p>Neil Patel<span>NP Digital</span></p>
                        </li>
                        <li class="emms22__fade-in">
                            <img src="../img/speaker-vero-ruiz-del-vizo.png" alt="Vero Ruiz del Vizo">
                            <p>Vero Ruiz del Vizo<span>Amarillo Creative Lab</span></p>
                        </li>
                        <li class="emms22__fade-in">
                            <img src="../img/speaker-tim-ash.png" alt="Tim Ash">
                            <p>Tim Ash<span>Timash.com</span></p>
                        </li>
                        <li class="emms22__fade-in">
                            <img src="../img/speaker-pablo-castellano.png" alt="Pablo Castellano">
                            <p>Pablo Castellano<span>SocialMood</span></p>
                        </li>
                        <li class="emms22__fade-in">
                            <img src="../img/speaker-marcos-pueyrredon.png" alt="Marcos Pueyrredón">
                            <p>Marcos Pueyrredón<span>VTEX</span></p>
                        </li>
                        <li class="emms22__fade-in">
                            <img src="../img/speaker-julia-rayeb.png" alt="Julia Rayeb">
                            <p>Julia Rayeb<span>Facebook</span></p>
                        </li>
                        <li class="emms22__fade-in">
                            <img src="../img/speaker-alan-schulte.png" alt="Alan Schulte">
                            <p>Alan Schulte<span>Linkedin</span></p>
                        </li>
                        <li class="emms22__fade-in">
                            <img src="../img/speaker-ivette-chalela.png" alt="Ivette Chalela Naffah">
                            <p>Ivette Chalela Naffah<span>Waze Ads</span></p>
                        </li>
                        <li class="emms22__fade-in">
                            <img src="../img/speaker-lolo-alvarez-diaz.png" alt="Lolo Alvarez Díaz">
                            <p>Lolo Alvarez Díaz<span>Arcos Dorados</span></p>
                        </li>
                        <li class="emms22__fade-in">
                            <img src="../img/speaker-gustavo-orjuela.png" alt="Gustavo Orjuela">
                            <p>Gustavo Orjuela<span>Wayra</span></p>
                        </li>
                    </ul>
                    <div class="emms22__speakers__action">
                        <p class="emms22__fade-in">Próximamente conocerás los Speakers 2022.</p>
                        <p class="emms22__fade-in">Regístrate gratis ahora y descubre antes que nadie las últimas novedades del <strong>EMMS</strong>.</p>
                        <a data-scroll="form" onclick="scrollToElement(event)" class="emms22__button emms22__fade-in">APÚNTATE AHORA</a>
                    </div>
                </div>
            </div>

        </div>


        <!-- Partners -->

        <div class="emms22__partners">
            <div class="emms22__container--md">
                <h3 class="emms22__fade-in">Nos han acompañado en ediciones anteriores</h3>
                <ul class="emms22__partners_list emms22__partners_list--dk">
                    <li class="emms22__fade-in"><img src="../img/logo-metricool.png" alt="Metricol"></li>
                    <li class="emms22__fade-in"><img src="../img/logo-wayra.png" alt="Wayra"></li>
                    <li class="emms22__fade-in"><img src="../img/logo-asociacion-marketing-espana.png" alt="Asociación Marketing España"></li>
                    <li class="emms22__fade-in"><img src="../img/logo-camece.png" alt="Camece"></li>
                    <li class="emms22__fade-in"><img src="../img/logo-capece.png" alt="Capece"></li>
                    <li class="emms22__fade-in"><img src="../img/logo-amvo.png" alt="Amvo"></li>
                    <li class="emms22__fade-in"><img src="../img/logo-linkedin.png" alt="Linkedin"></li>
                    <li class="emms22__fade-in"><img src="../img/logo-bigbox.png" alt="Bigbox"></li>
                    <li class="emms22__fade-in"><img src="../img/logo-semrush.png" alt="Semrush"></li>
                    <li class="emms22__fade-in"><img src="../img/logo-crehana.png" alt="Crehana"></li>
                    <li class="emms22__fade-in"><img src="../img/logo-marketing-4ecommerce.png" alt="Marketing 4 Ecommerce"></li>
                    <li class="emms22__fade-in"><img src="../img/logo-vtex.png" alt="Vtex"></li>
                    <li class="emms22__fade-in"><img src="../img/logo-banco-frances.png" alt="Banco Francés"></li>
                    <li class="emms22__fade-in"><img src="../img/logo-airbnb.png" alt="Airbnb"></li>
                    <li class="emms22__fade-in"><img src="../img/logo-woocommerce.png" alt="Woocommerce"></li>
                </ul>
                <div class="emms22__partners_list emms22__partners_list--mb main-carousel" data-flickity='{ "prevNextButtons": false, "autoPlay": true }'>
                    <div class="carousel-cell">
                        <div><img src="../img/logo-metricool.png" alt="Metricol"></div>
                        <div><img src="../img/logo-wayra.png" alt="Wayra"></div>
                        <div><img src="../img/logo-asociacion-marketing-espana.png" alt="Asociación Marketing España"></div>
                        <div><img src="../img/logo-camece.png" alt="Camece"></div>
                        <div><img src="../img/logo-capece.png" alt="Capece"></div>
                        <div><img src="../img/logo-amvo.png" alt="Amvo"></div>
                        <div><img src="../img/logo-linkedin.png" alt="Linkedin"></div>
                        <div><img src="../img/logo-bigbox.png" alt="Bigbox"></div>
                    </div>
                    <div class="carousel-cell">
                        <div><img src="../img/logo-semrush.png" alt="Semrush"></div>
                        <div><img src="../img/logo-crehana.png" alt="Crehana"></div>
                        <div><img src="../img/logo-marketing-4ecommerce.png" alt="Marketing 4 Ecommerce"></div>
                        <div><img src="../img/logo-vtex.png" alt="Vtex"></div>
                        <div><img src="../img/logo-banco-frances.png" alt="Banco Francés"></div>
                        <div><img src="../img/logo-airbnb.png" alt="Airbnb"></div>
                        <div><img src="../img/logo-woocommerce.png" alt="Woocommerce"></div>
                    </div>
                </div>
                <p class="emms22__fade-in">¿Quieres ser Media Partner del EMMS 2022? Escríbenos a <a href="mailto:partners@fromdoppler.com">partners@fromdoppler.com</a></p>
            </div>
        </div>

        <!-- Bottom form -->

        <div class="emms22__bottom-form">
            <div class="emms22__bottom-form__title">
                <h3 class="emms22__fade-in">NO TE PIERDAS NADA DEL EMMS 2022</h3>
                <p class="emms22__fade-in">Regístrate ahora al mayor evento de Marketing Digital y entérate de todas las novedades: Nuevos speakers, temáticas, regalos y mucho más. </p>
            </div>
            <div class="emms22__home__container-form emms22__fade-in parallax-bottom-form">
                    <form class="emms22__home__form" id="form" action="success-reservation.php" method="post">
                        <div class="emms22__home__container-form__column">
                            <ul class="emms22__home__form__field-group">
                                <li class="emms22__home__form__field-item" id="first-form-item">
                                        <label class="required-label" for="name">Nombre *</label>
                                        <input type="text" name="firstname" id="firstname" placeholder="Tu nombre" class="required error-name">                                
                                </li>
                                <li class="emms22__home__form__field-item ">
                                        <label class="required-label" for="lastname">Apellido *</label>
                                        <input type="text" name="lastname" id="lastname" placeholder="Tu apellido" class="required">                 
                                </li>
                                <li class="emms22__home__form__field-item">
                                        <label class="required-label" for="email">Email *</label>
                                        <input type="email" name="email" id="email" placeholder="¡No olvides usar @!" class="email required">                               
                                </li>
                                <li class="emms22__home__form__field-item">
                                        <label class="required-label" for="phone-input required-label">Teléfono *</label>
                                        <input id="phone-input" name="phone" type="tel" class="required phone phone-number">
                                        <input id="full-phone-input" name="full-phone-input" type="hidden" value="">
                                </li>
                                <li class="emms22__home__form__field-item">
                                        <label class="required-label" for="country">País *</label>
                                        <span class="dropdown-arrow"></span>
                                        <select id="country" name="country" class="required" autocomplete="off">
                                            <option disabled selected value>Elige un país</option>
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
                                </li>
                                <li class="emms22__home__form__field-item">
                                    <label class="required-label" for="country">Industria *</label>
                                    <span class="dropdown-arrow"></span>
                                    <select id="company-input" name="company" class="required" autocomplete="off">
                                        <option disabled selected value>Elige una industria</option>
                                        <option value="Agencias-de-Empleo">Agencias de Empleo</option>
                                        <option value="Alimentación-Consumo-Masivo">Alimentación / Consumo Masivo</option>
                                        <option value="Automóviles">Automóviles</option>
                                        <option value="Banca-Finanzas-Seguros">Banca / Finanzas / Seguros</option>
                                        <option value="Belleza-Cosmética">Belleza / Cosmética</option>
                                        <option value="Educación">Educación</option>
                                        <option value="Entretenimiento">Entretenimiento</option>
                                        <option value="Industria-Fabricación">Industria / Fabricación</option>
                                        <option value="Informática-Electrónica">Informática / Electrónica</option>
                                        <option value="Medios-de-Comunicación">Medios de Comunicación</option>
                                        <option value="Real-Estate">Real Estate</option>
                                        <option value="Retail">Retail</option>
                                        <option value="Ropa-Accesorios-Artículos Deportivos">Ropa / Accesorios / Artículos Deportivos</option>
                                        <option value="Salud">Salud</option>
                                        <option value="Sector-Público">Sector Público</option>
                                        <option value="Servicios">Servicios</option>
                                        <option value="Supermercado">Supermercado</option>
                                        <option value="Telecomunicaciones">Telecomunicaciones</option>
                                        <option value="Turismo">Turismo</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                            </li>
                                <li class="emms22__home__form__field-item">
                                        <label for="company-input">Empresa *</label>
                                        <input id="company-input" name="company" type="text" placeholder="Tu empresa" class="company company-number">
                                        <input id="full-company-input" name="full-company-input" type="hidden" value="">
                                </li>
                            </ul>
                            <ul class="emms22__home__form__field-group">
                                <li class="emms22__home__form__field-item emms22__home__form__field-item__checkbox">
                                        <input name="privacy" type="checkbox" id="acepto-politicas" value="true" class="required check"><span class="checkmark"></span><label for="acepto-politicas">
                                            Acepto la Política de Privacidad de Doppler *
                                        </label>
                                </li>
                                <li class="emms22__home__form__field-item emms22__home__form__field-item__checkbox">
                                    <input name="promotions" type="checkbox" id="acepto-promociones" value="true"><span class="checkmark"></span><label for="acepto-promociones">
                                        Acepto recibir promociones de Doppler y sus aliados</label>
                                </li>
                            </ul>
                        </div>
                        <div class="emms22__home__container-form__column">
                            <div class="emms22__home__legal">
                                <p>Doppler te informa que los datos de carácter personal que nos proporciones al rellenar el presente formulario serán tratados por Doppler LLC como responsable de esta Web.<br>
                                    <strong>Finalidad: </strong>Dar de alta esta suscripción para enviar newsletters con información y promociones de productos o servicios propios o de nuestros aliados.<br>
                                    <strong>Legitimación: </strong>Consentimiento del interesado. <br>
                                    <strong>Destinatarios: </strong>Tus datos serán guardados por Doppler y los co-organizadores del evento, Unbounce como empresa de creación de Landing Pages, DigitalOcean como empresa de hosting y Zapier como herramienta de integración de apps.<br>
                                    <strong>Información adicional: </strong>En la <a href="https://www.fromdoppler.com/es/legal/privacidad/?utm_source=goemms&utm_medium=footer&utm_campaign=politicasdeprivacidad" target="_blank" rel="noopener">Política de Privacidad</a> de Doppler encontrarás información adicional
                                    sobre la recopilación y el uso de su información personal por parte de Doppler, incluida
                                    información sobre acceso, conservación, rectificación, eliminación, seguridad,
                                    transferencias
                                    transfronterizas y otros temas. <br>
                                </p>
                            </div>
                            <div class="emms22__home__btn">
                                <button type="button" class="emms22__button emms22__fade-in">REGISTRARME</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>

        <!-- Footer -->

        <footer class="emms22__footer">
            <div class="emms22__footer__event emms22__fade-in">
                <p><strong>EMMS 2022</strong> - Un evento creado por <a href="https://www.fromdoppler.com/es/" target="_blank"><img src="../img/logo-doppler--neg.svg" alt="Doppler"></a></p>
            </div>
            <div class="emms22__footer__social emms22__fade-in">
                <ul>
                    <li><a href="https://www.instagram.com/fromdoppler/" target="_blank"><img src="../img/icono-instagram.svg" alt="Instagram"></a></li>
                    <li><a href="https://www.facebook.com/DopplerEmailMarketing" target="_blank"><img src="../img/icono-facebook.svg" alt="Facebook"></a></li>
                    <li><a href="https://www.youtube.com/user/FromDoppler" target="_blank"><img src="../img/icono-youtube.svg" alt="Youtube"></a></li>
                    <li><a href="https://www.linkedin.com/company/228261" target="_blank"><img src="../img/icono-linkedin.svg" alt="Linkedin"></a></li>
                    <li><a href="https://twitter.com/fromDoppler" target="_blank"><img src="../img/icono-twitter.svg" alt="Twitter"></a></li>
                </ul>
            </div>
            <div class="emms22__footer__actions emms22__fade-in">
                <a href="#" id="ot-sdk-btn" class="ot-sdk-show-settings">Configuración de Cookies</a>
                <a href="https://qa.fromdoppler.com/es/legal/privacidad/?utm_source=direct" target="_blank">Políticas de privacidad y legales</a>
            </div>
        </footer>

    </main>

    <script src="../js/animations.js?version=<?= VERSION ?>"></script>
    <script type="text/javascript" src="https://cdn.addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>

</body>
</html>