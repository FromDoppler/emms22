<?php
require_once('././config.php');
require_once('././utils/DB.php');

if (!isset($_GET['slug']) or (trim($_GET['slug']) === '')) {
    header("HTTP/1.0 404 Not Found");
    include '././common/components/404.php';
    exit;
}
$db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$speaker = $db->getSpeakerBySlug($_GET['slug']);
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
    <main class="emms22__page-speakers">

        <!-- Header -->
        <nav class="emms22__header">
            <div class="emms22__container--lg emms22__fade-in">
                <div class="emms22__header__logo">
                    <a href="./index.php" class="nav-ini"><img src="../../common/html/<?= VERSION ?>/img/logo-emms.png" alt="Emms 2022"></a>
                </div>
                <a class="emms22__header__nav--mb" id="btn-burger"></a>
                <ul class="emms22__header__nav emms22__header__nav--hidden" id="nav-mb">
                    <li><a href="./index.php" class="emms22__header__nav--btn-active nav-ini">inicio</a></li>
                    <li><a href="#contenido-exclusivo">contenido exclusivo</a></li>
                </ul>
            </div>
        </nav>


        <!-- Hero -->

        <div class="emms22__hero-speakers">
            <div class="emms22__container--lg">

                <div class="emms22__hero-speakers__title">
                    <h2>Branding Vs Performance: Cómo terminar una guerra donde todos ganan</h2>
                </div>
                <div class="emms22__hero-speakers__conference-container">
                    <div class="emms22__hero-speakers__conference">
                        <?php if ($getLoged === null) : ?>
                            <div class="emms22__cropper-cont-16-9">
                                <div class="emms22__cropper-cont">
                                    <div class="emms22__cropper-cont-interno">
                                        <iframe src="https://www.youtube.com/embed/<?= $duringDaysArray['d' . $dayDuring]['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        <?php else : ?>
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
                        <?php endif; ?>
                    </div>
                    <div class="emms22__hero-speakers__aside">
                        <h3>Tim Ash</h3>
                        <p>Speaker internacional sobre psicología evolutiva y Marketing Digital, consultor, formador y emprendedor. Autor de bestsellers. Estos son sólo algunos de los títulos que podrían describir a uno de los líderes de pen samiento de la industria actual. </p>
                        <ul>
                            <li><a><img src="../../common/html/<?= VERSION ?>/img/icons/Facebook.svg" alt="Facebook"></a></li>
                            <li><a><img src="../../common/html/<?= VERSION ?>/img/icons/Twitter.svg" alt="Twitter"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="emms22__hero-speakers__btn-back">
                    <a href="./registrado.php#agenda">← VER MÁS CONFERENCIAS</a>
                </div>

            </div>
        </div>


        <!-- Registered Premium content -->

        <div id="contenido-exclusivo"></div>
        <div class="emms22__pre-event__registered-premium-content">
            <h2>Ya puedes acceder a material exclusivo para potenciar su estrategia de Marketing Digital</h2>
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


        <!-- Doppler -->

        <section class="emms22__pre-event__doppler">
            <div class="emms22__container--lg">
                <div class="emms22__pre-event__doppler__title">
                    <h2 class="emms22__fade-in">SOMOS <img src="../../common/html/<?= VERSION ?>/img/logo-doppler-black.svg" alt="Doppler"></h2>
                    <h3 class="emms22__fade-in">La herramienta líder en Marketing Automation en español.</h3>
                    <p class="emms22__fade-in">Desde hace 15 años organizamos el EMMS y formamos a profesionales de
                        Marketing a lo largo de todo el mundo, a través de cursos, entrenamientos y recursos 100%
                        gratuitos. </p>
                </div>
                <div class="emms22__pre-event__doppler__description">
                    <div class="emms22__pre-event__doppler__description__image emms22__fade-in">
                        <img src="../../common/html/<?= VERSION ?>/img/pre-event-doppler.png" alt="Doppler">
                    </div>
                    <div class="emms22__pre-event__doppler__description__text emms22__fade-in">
                        <h4><strong>¿Quieres capacitarte gratis?</strong> ¡Esto te va a interesar! </h4>
                        <p>En esta ocasión, queremos invitarte a completar nuestra Certificación en Automation Marketing
                            gratuita.</p>
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
        </section>


        <!-- Footer -->

        <footer class="emms22__footer">
            <div class="emms22__footer__event emms22__fade-in">
                <p><strong>EMMS 2022</strong> - Un evento creado por <a href="https://www.fromdoppler.com/es/" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/logo-doppler--neg.svg" alt="Doppler"></a></p>
            </div>
            <div class="emms22__footer__social emms22__fade-in">
                <ul>
                    <li><a href="https://www.instagram.com/fromdoppler/" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/icono-instagram.svg" alt="Instagram"></a></li>
                    <li><a href="https://www.facebook.com/DopplerEmailMarketing" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/icono-facebook.svg" alt="Facebook"></a></li>
                    <li><a href="https://www.youtube.com/user/FromDoppler" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/icono-youtube.svg" alt="Youtube"></a>
                    </li>
                    <li><a href="https://www.linkedin.com/company/228261" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/icono-linkedin.svg" alt="LinkedIn"></a></li>
                    <li><a href="https://twitter.com/fromDoppler" target="_blank"><img class="lazyload" loading="lazy" data-src="../../common/html/<?= VERSION ?>/img/icono-twitter.svg" alt="Twitter"></a></li>
                </ul>
            </div>
            <div class="emms22__footer__actions emms22__fade-in">
                <a onclick="OneTrust.ToggleInfoDisplay()" id="ot-sdk-btn" class="ot-sdk-show-settings">Configuración de
                    Cookies.</a>
                <a href="https://www.fromdoppler.com/es/legal/privacidad/" target="_blank">Políticas de privacidad y
                    legales</a>
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

</body>

</html>
