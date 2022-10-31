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
    <link rel="stylesheet" href="../../common/html/<?= VERSION ?>/flickity/flickity.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity-fade@1/flickity-fade.css">
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M768WZR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <span id="hashtag" class="hashtag--hidden "><?= $duringDaysArray['d' . $dayDuring]['hashtag-chat'] ?></span>


    <main class="emms22__pre-event emms22__during">

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
                    <li><a href="./sponsors-general.php" target="_blank">contenido exclusivo</a></li>
                    <li><a href="#agenda">agenda</a></li>
                </ul>
            </div>
        </nav>
        <div class="emms22__share">
            <a id="btn-share" class="emms22__share__open-list"><img src="../../common/html/<?= VERSION ?>/img/icons/icon-share.svg" alt="Share"></a>
            <ul id="list-share" class="emms22__share__list">
                <li>
                    <a href="javascript: void(0);" onclick="window.open ('https://www.facebook.com/sharer/sharer.php?u=https://goemms.com/', 'Facebook', 'toolbar=0, status=0, width=550, height=350');">
                        <img src="../../common/html/<?= VERSION ?>/img/icons/Facebook-w.svg" alt="Facebook">
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" onclick="window.open ('https://twitter.com/intent/tweet?url=https://goemms.com/&text=Llega%20una%20nueva%20edici%C3%B3n%20del%20EMMS.%20S%C3%BAmate%20ahora%20al%20evento%20que%20te%20acercar%C3%A1%20a%20los%20mayores%20expertos%20internacionales%20en%20Marketing%20Digital.%20Es%20gratis%20y%20online.%20%C2%A1Reserva%20tu%20plaza!', 'Twitter', 'toolbar=0, status=0, width=550, height=350');">
                        <img src="../../common/html/<?= VERSION ?>/img/icons/Twitter-w.svg" alt="Twitter">
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" onclick="window.open ('http://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fgoemms.com%2F&title=Llega%20una%20nueva%20edici%C3%B3n%20del%20EMMS.%20S%C3%BAmate%20ahora%20al%20evento%20que%20te%20acercar%C3%A1%20a%20los%20mayores%20expertos%20internacionales%20en%20Marketing%20Digital.%20Es%20gratis%20y%20online.%20%C2%A1Reserva%20tu%20plaza!%20', 'Linkedin', 'toolbar=0, status=0, width=550, height=350');">
                        <img src="../../common/html/<?= VERSION ?>/img/icons/LinkedIn-w.svg" alt="LinkedIn">
                    </a>
                </li>
            </ul>
        </div>


        <!-- Hero -->

        <div class="emms22__hero-during">
            <div class="emms22__container--lg">
                <?php if ($liveDayDuring == 2) : ?>
                    <div class="emms22__hero-during__streaming-live">
                        <p><img src="../../common/html/<?= VERSION ?>/img/icons/live-icon.svg" alt="Twitter Icon"> EN VIVO</p>
                    </div>
                <?php endif; ?>
                <div class="emms22__hero-during__streaming-container">
                    <div class="emms22__hero-during__streaming">
                        <div class="emms22__cropper-cont-16-9">
                            <div class="emms22__cropper-cont">
                                <div class="emms22__cropper-cont-interno">
                                    <?php if ($liveDayDuring == 2) : ?>
                                        <?php if ($problemsTransmission) : ?>
                                            <img src="../../common/html/<?= VERSION ?>/img/technical-problems.png" alt="technical-problems">
                                        <?php elseif ($isTransmissionYoutube) : ?>
                                            <iframe src="https://www.youtube.com/embed/<?= $duringDaysArray['d' . $dayDuring]['youtube'] ?>?rel=0&autoplay=1&mute=1&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <?php else : ?>
                                            <iframe src="https://player.twitch.tv/?channel=<?= $duringDaysArray['d' . $dayDuring]['twitch'] ?>&parent=<?= $_SERVER['SERVER_NAME'] ?>">
                                            </iframe>
                                        <?php endif; ?>

                                    <?php elseif ($liveDayDuring == 1) : ?>
                                        <img src="../../common/html/<?= VERSION ?>/img/during-banners/<?= $duringDaysArray['d' . $dayDuring]['banner-transition'] ?>.png" alt="Banner">
                                    <?php elseif ($liveDayDuring == 0) : ?>
                                        <img src="../../common/html/<?= VERSION ?>/img/during-banners/<?= $duringDaysArray['d' . $dayDuring]['banner-nolive'] ?>.png" alt="Banner">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="emms22__hero-during__aside">
                        <?php if ($liveDayDuring == 0) : ?>
                            <div class="emms22__hero-during__aside__promotion">
                                <p>Mientras tanto, puedes escuchar las conferencias <?php if ($dayDuring == 2) : ?> de los días anteriores<?php endif; ?> desde la <a href="#agenda">Agenda</a>, o acceder a todos los contenidos exclusivos que prepararon nuestros Sponsors para ti, por ser parte del EMMS 2022. </p>
                                <p>Descubrirás E-books gratuitos, conferencias, Guías, Plantillas, descuentos, ¡y mucho más!</p>
                                <a href="https://goemms.com/sponsors-general.php" target="_blank" class="emms22__button emms22__fade-in-animation">ACCEDER AHORA</a>
                            </div>
                        <?php else : ?>
                            <div class="emms22__hero-during__aside__chat">
                                <div class="emms22__hero-during__aside__chat__title">
                                    <h3>TWEET CHAT <img src="../../common/html/<?= VERSION ?>/img/icons/Twitter-w.svg" alt="Twitter Icon"></h3>
                                </div>
                                <div class="emms22__hero-during__aside__chat__timeline" id="chatId">

                                </div>
                                <?php if (isset($_SESSION['access_token'])) : ?>
                                    <div class="emms22__hero-during__aside__chat__input">
                                        <form id="tweetForm" class="tweet__form">
                                            <span id="hashtag" class="tweet__form__hashtag"><?= $duringDaysArray['d' . $dayDuring]['hashtag-chat'] ?></span>
                                            <input type="text" name="userTweet" id="userText">
                                            <button type="button">ENVIAR</button>
                                        </form>
                                        <small class="tweet__form__error"></small>
                                        <small class="tweet_form_characters" id="formCharacters">280</small>
                                    </div>
                                <?php else : ?>
                                    <button onclick="window.location='./twitteroauth/redirect.php'" class="twitter__login">INICIA SESIÓN EN TWITTER</button>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- CTA Certificate -->
                <?php
                if ($liveDayDuring == 1 || $liveDayDuring == 2) :
                ?>
                    <div class="emms22__hero-during__certificate">
                        <p><img src="../../common/html/<?= VERSION ?>/img/icons/cup-icon.svg" alt="cup-icon"> Descarga <button data-target="emms22__download-certificate" data-toggle="emms22__modal">aquí</button> tu Certificado de Asistencia y compártelo en Redes Sociales usando el Hashtag <?= $duringDaysArray['d' . $dayDuring]['hashtag-gral'] ?> :)</p>
                    </div>
                <?php
                endif;
                ?>
                <!-- End CTA Certificate -->
            </div>
        </div>
        <div id="emms22__download-certificate" class="emms22__modal">
            <div class="emms22__modal__window">
                <h3>Estás a un paso de obtener tu Certificado</h3>
                <p>Ingresa tu Nombre y Apellido y descárgalo ahora</p>
                <form id="certificateForm">
                    <input type="text" placeholder="Nombre y Apellido" name="fullname">
                    <span>¡Ouch! Debes ingresar al menos 2 caracteres.</span>
                    <button class="emms22__button">DESCARGAR</button>
                </form>
                <a data-dismiss="emms22__modal"></a>
            </div>
        </div>



        <!-- Registered Premium content -->

        <div id="contenido-exclusivo"></div>
        <div class="emms22__pre-event__registered-premium-content">
            <h2>Accede al contenido exclusivo que prepararon nuestros Sponsors para optimizar tu estrategia de Marketing Digital</h2>
            <div class="emms22__container--lg">
                <div class="emms22__pre-event__registered-premium-content__text emms22__fade-in">
                    <h3>Potencia lo aprendido en las Conferencias con muchos más conocimientos: </h3>
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
                        <p>En esta ocasión, queremos invitarte a completar nuestra Certificación en Automation Marketing gratuita.</p>
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
    <?php
    if (!(PRODUCTION)) {
    ?>
        <script type="module" src="../../common/html/<?= VERSION ?>/js/devMode.js?version=<?= VERSION ?>"></script>
    <?php
    }
    ?>
    <script src="../../common/html/<?= VERSION ?>/js/date.js?version=<?= VERSION ?>"></script>
    <script src="../../common/html/<?= VERSION ?>/js/twitter.js?version=<?= VERSION ?>"></script>
    <script src="../../common/html/<?= VERSION ?>/js/certificate.js?version=<?= VERSION ?>"></script>


</body>

</html>
