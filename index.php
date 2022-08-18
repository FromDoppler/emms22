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
                <video class="lazy" loop muted autoplay playsinline poster="../html/<?= VERSION ?>/img/thumb.png">
                    <source data-src="../html/<?= VERSION ?>/img/video-background-compress.mp4" type="video/mp4">
                </video>
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
                        <span>EARLY BIRDS: Preinscripci&oacute;n hasta el 22 de agosto.</span>
                    </div>
                    <div class="emms22__share">
                        <ul>
                            <li>¡COMPARTE ESTE EVENTO!</li>
                            <li>
                                <a href="javascript: void(0);" onclick="window.open ('https://www.facebook.com/sharer/sharer.php?u=https://goemms.com/', 'Facebook', 'toolbar=0, status=0, width=550, height=350');">
                                    <img class="lazyload" loading="lazy" data-src="../html/<?= VERSION ?>/img/share-facebook.svg" alt="Facebook">
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" onclick="window.open ('https://twitter.com/intent/tweet?url=https://goemms.com/&text=Llega%20una%20nueva%20edici%C3%B3n%20del%20EMMS.%20S%C3%BAmate%20ahora%20al%20evento%20que%20te%20acercar%C3%A1%20a%20los%20mayores%20expertos%20internacionales%20en%20Marketing%20Digital.%20Es%20gratis%20y%20online.%20%C2%A1Reserva%20tu%20plaza!', 'Twitter', 'toolbar=0, status=0, width=550, height=350');">
                                    <img class="lazyload" loading="lazy" data-src="../html/<?= VERSION ?>/img/share-tw.svg" alt="Twitter">
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" onclick="window.open ('http://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fgoemms.com%2F&title=Llega%20una%20nueva%20edici%C3%B3n%20del%20EMMS.%20S%C3%BAmate%20ahora%20al%20evento%20que%20te%20acercar%C3%A1%20a%20los%20mayores%20expertos%20internacionales%20en%20Marketing%20Digital.%20Es%20gratis%20y%20online.%20%C2%A1Reserva%20tu%20plaza!%20', 'Linkedin', 'toolbar=0, status=0, width=550, height=350');">
                                    <img class="lazyload" loading="lazy" data-src="../html/<?= VERSION ?>/img/share-in.svg" alt="LinkedIn">
                                </a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send?text=%20Llega%20una%20nueva%20edici%C3%B3n%20del%20EMMS.%20S%C3%BAmate%20ahora%20al%20evento%20que%20te%20acercar%C3%A1%20a%20los%20mayores%20expertos%20internacionales%20en%20Marketing%20Digital.%20Es%20gratis%20y%20online.%20%C2%A1Reserva%20tu%20plaza!%20%0Ahttps%3A%2F%2Fgoemms.com%2F" target="_blank">
                                    <img class="lazyload" loading="lazy" data-src="../html/<?= VERSION ?>/img/share-whats.svg" alt="Whatsapp">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="contentEarlyForm">
                    <div class="emms22__home__container-form parallax-form">
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
                            <?php include_once('commonUtms.php') ?>
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
                        <video class="lazy" controls poster="../html/<?= VERSION ?>/img/thumbVideo.png">
                            <source data-src="../html/<?= VERSION ?>/img/video-insitucional-site-compress.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>

            <!-- Speakers -->

            <div class="emms22__speakers">
                <div class="emms22__container--md">
                    <h2 class="emms22__fade-in">Algunos de los conferencistas que han pasado por las &uacute;ltimas ediciones de EMMS:</h2>
                    <ul class="emms22__speakers__list">
                        <li class="emms22__fade-in">
                            <img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/speaker-neil-patel.png" alt="Neil Patel">
                            <p>Neil Patel<span>NP Digital</span></p>
                        </li>
                        <li class="emms22__fade-in">
                            <img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/speaker-vero-ruiz-del-vizo.png" alt="Vero Ruiz del Vizo">
                            <p>Vero Ruiz del Vizo<span>Amarillo Creative Lab</span></p>
                        </li>
                        <li class="emms22__fade-in">
                            <img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/speaker-tim-ash.png" alt="Tim Ash">
                            <p>Tim Ash<span>Timash.com</span></p>
                        </li>
                        <li class="emms22__fade-in">
                            <img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/speaker-pablo-castellano.png" alt="Pablo Castellano">
                            <p>Pablo Castellano<span>SocialMood</span></p>
                        </li>
                        <li class="emms22__fade-in">
                            <img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/speaker-marcos-pueyrredon.png" alt="Marcos Pueyrred&oacute;n">
                            <p>Marcos Pueyrred&oacute;n<span>VTEX</span></p>
                        </li>
                        <li class="emms22__fade-in">
                            <img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/speaker-julia-rayeb.png" alt="Julia Rayeb">
                            <p>Julia Rayeb<span>Facebook</span></p>
                        </li>
                        <li class="emms22__fade-in">
                            <img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/speaker-alan-schulte.png" alt="Alan Schulte">
                            <p>Alan Schulte<span>LinkedIn</span></p>
                        </li>
                        <li class="emms22__fade-in">
                            <img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/speaker-ivette-chalela.png" alt="Ivette Chalela Naffah">
                            <p>Ivette Chalela Naffah<span>Waze Ads</span></p>
                        </li>
                        <li class="emms22__fade-in">
                            <img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/speaker-lolo-alvarez-diaz.png" alt="Lolo Alvarez D&iacute;az">
                            <p>Lolo Alvarez D&iacute;az<span>Arcos Dorados</span></p>
                        </li>
                        <li class="emms22__fade-in">
                            <img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/speaker-gustavo-orjuela.png" alt="Gustavo Orjuela">
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
                    <li class="emms22__fade-in"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/logo-metricool.png" alt="Metricol"></li>
                    <li class="emms22__fade-in"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/logo-wayra.png" alt="Wayra"></li>
                    <li class="emms22__fade-in"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/logo-asociacion-marketing-espana.png" alt="Asociaci&oacute;n Marketing Espa&ntilde;a"></li>
                    <li class="emms22__fade-in"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/logo-camece.png" alt="Camece"></li>
                    <li class="emms22__fade-in"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/logo-capece.png" alt="Capece"></li>
                    <li class="emms22__fade-in"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/logo-amvo.png" alt="Amvo"></li>
                    <li class="emms22__fade-in"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/logo-linkedin.png" alt="LinkedIn"></li>
                    <li class="emms22__fade-in"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/logo-bigbox.png" alt="Bigbox"></li>
                    <li class="emms22__fade-in"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/logo-semrush.png" alt="Semrush"></li>
                    <li class="emms22__fade-in"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/logo-crehana.png" alt="Crehana"></li>
                    <li class="emms22__fade-in"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/logo-marketing-4ecommerce.png" alt="Marketing 4 Ecommerce"></li>
                    <li class="emms22__fade-in"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/logo-vtex.png" alt="Vtex"></li>
                    <li class="emms22__fade-in"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/logo-banco-frances.png" alt="Banco Franc&eacute;s"></li>
                    <li class="emms22__fade-in"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/logo-airbnb.png" alt="Airbnb"></li>
                    <li class="emms22__fade-in"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/logo-woocommerce.png" alt="Woocommerce"></li>
                </ul>
                <div class="emms22__partners_list emms22__partners_list--mb main-carousel" data-flickity='{ "prevNextButtons": false, "autoPlay": true }'>
                    <div class="carousel-cell">
                        <div><img class="lazyload" loading="lazy" data-src="../html/<?= VERSION ?>/img/logo-metricool.png" alt="Metricol"></div>
                        <div><img class="lazyload" loading="lazy" data-src="../html/<?= VERSION ?>/img/logo-wayra.png" alt="Wayra"></div>
                        <div><img class="lazyload" loading="lazy" data-src="../html/<?= VERSION ?>/img/logo-asociacion-marketing-espana.png" alt="Asociación Marketing España"></div>
                        <div><img class="lazyload" loading="lazy" data-src="../html/<?= VERSION ?>/img/logo-camece.png" alt="Camece"></div>
                        <div><img class="lazyload" loading="lazy" data-src="../html/<?= VERSION ?>/img/logo-capece.png" alt="Capece"></div>
                        <div><img class="lazyload" loading="lazy" data-src="../html/<?= VERSION ?>/img/logo-amvo.png" alt="Amvo"></div>
                        <div><img class="lazyload" loading="lazy" data-src="../html/<?= VERSION ?>/img/logo-linkedin.png" alt="LinkedIn"></div>
                        <div><img class="lazyload" loading="lazy" data-src="../html/<?= VERSION ?>/img/logo-bigbox.png" alt="Bigbox"></div>
                    </div>
                    <div class="carousel-cell">
                        <div><img class="lazyload" loading="lazy" data-src="../html/<?= VERSION ?>/img/logo-semrush.png" alt="Semrush"></div>
                        <div><img class="lazyload" loading="lazy" data-src="../html/<?= VERSION ?>/img/logo-crehana.png" alt="Crehana"></div>
                        <div><img class="lazyload" loading="lazy" data-src="../html/<?= VERSION ?>/img/logo-marketing-4ecommerce.png" alt="Marketing 4 Ecommerce"></div>
                        <div><img class="lazyload" loading="lazy" data-src="../html/<?= VERSION ?>/img/logo-vtex.png" alt="Vtex"></div>
                        <div><img class="lazyload" loading="lazy" data-src="../html/<?= VERSION ?>/img/logo-banco-frances.png" alt="Banco Francés"></div>
                        <div><img class="lazyload" loading="lazy" data-src="../html/<?= VERSION ?>/img/logo-airbnb.png" alt="Airbnb"></div>
                        <div><img class="lazyload" loading="lazy" data-src="../html/<?= VERSION ?>/img/logo-woocommerce.png" alt="Woocommerce"></div>
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
                                <strong>Destinatarios: </strong>Tus datos serán guardados por Doppler y los co-organizadores del evento, Unbounce como empresa de creación de Landing Pages, DigitalOcean como empresa de hosting y Zapier como herramienta de integración de apps.<br>
                                <strong>Información adicional: </strong>En la <a href="https://www.fromdoppler.com/es/legal/privacidad/" target="_blank" rel="noopener">Política de Privacidad</a> de Doppler encontrarás información adicional
                                sobre la recopilación y el uso de su información personal por parte de Doppler, incluida
                                información sobre acceso, conservación, rectificación, eliminación, seguridad,
                                transferencias
                                transfronterizas y otros temas. <br>
                            </p>
                        </div>
                        <div class="emms22__home__btn">
                            <button class="emms22__button emms22__fade-in">SÚMATE AHORA</button>
                        </div>
                    </div>
                    <?php include_once('commonUtms.php') ?>

                </form>
            </div>
        </div>

        <!-- Footer -->

        <footer class="emms22__footer">
            <div class="emms22__footer__event emms22__fade-in">
                <p><strong>EMMS 2022</strong> - Un evento creado por <a href="https://www.fromdoppler.com/es/" target="_blank"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/logo-doppler--neg.svg" alt="Doppler"></a></p>
            </div>
            <div class="emms22__footer__social emms22__fade-in">
                <ul>
                    <li><a href="https://www.instagram.com/fromdoppler/" target="_blank"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/icono-instagram.svg" alt="Instagram"></a></li>
                    <li><a href="https://www.facebook.com/DopplerEmailMarketing" target="_blank"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/icono-facebook.svg" alt="Facebook"></a></li>
                    <li><a href="https://www.youtube.com/user/FromDoppler" target="_blank"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/icono-youtube.svg" alt="Youtube"></a></li>
                    <li><a href="https://www.linkedin.com/company/228261" target="_blank"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/icono-linkedin.svg" alt="LinkedIn"></a></li>
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
