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
                    <a href="./index.php" class="nav-ini"><img src="../../common/html/img/logo-emms.png" alt="Emms 2022"></a>
                </div>
                <a class="emms22__header__nav--mb" id="btn-burger"></a>
                <ul class="emms22__header__nav emms22__header__nav--hidden" id="nav-mb">
                    <li><a href="#inicio">inicio</a></li>
                    <li><a href="./sponsors-general.php">contenido exclusivo</a></li>
                    <li><a href="./ediciones-anteriores.php">ediciones anteriores</a></li>
                </ul>
            </div>
        </nav>
        <div class="emms22__share">
            <a id="btn-share" class="emms22__share__open-list"><img src="../../common/html/img/icons/icon-share.svg" alt="Share"></a>
            <ul id="list-share" class="emms22__share__list">
                <li>
                    <a href="javascript: void(0);" onclick="window.open ('https://www.facebook.com/sharer/sharer.php?u=https://goemms.com/', 'Facebook', 'toolbar=0, status=0, width=550, height=350');">
                        <img src="../../common/html/img/icons/Facebook-w.svg" alt="Facebook">
                    </a>
                </li>
                <li>
                <a href="javascript: void(0);" onclick="window.open ('https://twitter.com/intent/tweet?url=https%3A%2F%2Fgoemms.com%2F&text=%C2%A1Revive%20el%20EMMS!%20Descubre%20las%20mejores%20Conferencias%20sobre%20Marketing%20Digital%2C%20de%20la%20mano%20de%20los%20expertos%20m%C3%A1s%20destacados%20del%20mundo.%20Es%20gratis%20y%20online.%20%C2%A1Accede%20ahora!', 'Twitter', 'toolbar=0, status=0, width=550, height=350');">
                        <img src="../../common/html/img/icons/Twitter-w.svg" alt="Twitter">
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" onclick="window.open ('http://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fgoemms.com%2F&title=Llega%20una%20nueva%20edici%C3%B3n%20del%20EMMS.%20S%C3%BAmate%20ahora%20al%20evento%20que%20te%20acercar%C3%A1%20a%20los%20mayores%20expertos%20internacionales%20en%20Marketing%20Digital.%20Es%20gratis%20y%20online.%20%C2%A1Reserva%20tu%20plaza!%20', 'Linkedin', 'toolbar=0, status=0, width=550, height=550');">
                        <img src="../../common/html/img/icons/LinkedIn-w.svg" alt="LinkedIn">
                    </a>
                </li>
            </ul>
        </div>


        <!-- Hero -->

        <div class="emms22__hero-post">

            <div class="emms22__hero-post__title">
                <h1>Accede a todas las Conferencias del EMMS 2022</h1>
                <p>Del 8 al 10 de noviembre de 2022 se reunieron en el mayor evento de Marketing Digital de Iberoamérica los mayores referentes del mundo. Descubre todo el contenido que compartieron en sus ponencias. </p>
            </div>

            <ul class="emms22__pre-event__calendar__event-list emms22__fade-in">
                <?php
                $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                $speakers = $db->getSpeakersByDay(1);

                foreach ($speakers as $speaker) : ?>
                    <li class="emms22__pre-event__calendar__event-list__event emms22__fade-in">
                        <div class="emms22__pre-event__calendar__event-list__event__card">
                            <div class="emms22__pre-event__calendar__event-list__event__card__speaker">
                                <div class="emms22__pre-event__calendar__event-list__event__card__speaker__image">
                                    <img src="../../admin/speakers/uploads/<?= $speaker['image'] ?>" alt="<?= $speaker['alt_image'] ?>">
                                </div>
                                <div class="emms22__pre-event__calendar__event-list__event__card__speaker__text">
                                    <h4><?= $speaker['name'] ?></h4>
                                    <h5><?= $speaker['job'] ?></h5>
                                    <ul>
                                        <?php if (!empty($speaker['sm_twitter'])) : ?>
                                            <li><a href="<?= $speaker['sm_twitter'] ?>" target="_blank"><img src="common/html/img/icons/Twitter.svg" alt="Twitter"></a></li>
                                        <?php endif; ?>
                                        <?php if (!empty($speaker['sm_linkedin'])) : ?>
                                            <li><a href="<?= $speaker['sm_linkedin'] ?>" target="_blank"><img src="common/html/img/icons/LinkedIn.svg" alt="LinkedIn"></a></li>
                                        <?php endif; ?>
                                        <?php if (!empty($speaker['sm_instagram'])) : ?>
                                            <li><a href="<?= $speaker['sm_instagram'] ?>" target="_blank"><img src="common/html/img/icons/Instagram.svg" alt="Instagram"></a></li>
                                        <?php endif; ?>
                                        <?php if (!empty($speaker['sm_facebook'])) : ?>
                                            <li><a href="<?= $speaker['sm_facebook'] ?>" target="_blank"><img src="common/html/img/icons/Facebook.svg" alt="Facebook"></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="emms22__pre-event__calendar__event-list__event__card__description">
                                <p><?= $speaker['description'] ?></p>
                            </div>
                            <div class="emms22__pre-event__calendar__event-list__event__card__business">
                                <img src="../../admin/speakers/uploads/<?= $speaker['image_company'] ?>" alt="<?= $speaker['alt_image_company'] ?>">
                                <?php if (($dayDuring == 1) && ($liveDayDuring == 0 || $liveDayDuring == 1)) : ?>
                                    <a href="../../speakers-interna.php?slug=<?= $speaker['slug'] ?>" class="emms22__pre-event__calendar__event-list__event__card__btn-conference">Ver conferencia</a>
                                <?php elseif ($dayDuring == 2 || $dayDuring == 3) : ?>
                                    <a href="../../speakers-interna.php?slug=<?= $speaker['slug'] ?>" class="emms22__pre-event__calendar__event-list__event__card__btn-conference">Ver conferencia</a>
                                <?php else : ?>
                                    <a class="emms22__pre-event__calendar__event-list__event__card__btn-bio">Ver bio</a>
                                <?php endif; ?>
                                <div class="emms22__pre-event__calendar__event-list__event__card__bio emms22__pre-event__calendar__event-list__event__card__bio--hide bio-speaker">
                                    <h4><?= $speaker['name'] ?></h4>
                                    <p><?= $speaker['bio'] ?></p>
                                    <a class="emms22__pre-event__calendar__event-list__event__card__btn-bio-hide"> ← VOLVER</a>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>

                <?php
                $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                $speakers = $db->getSpeakersByDay(2);

                foreach ($speakers as $speaker) : ?>
                    <li class="emms22__pre-event__calendar__event-list__event emms22__fade-in">
                        <div class="emms22__pre-event__calendar__event-list__event__card">
                            <div class="emms22__pre-event__calendar__event-list__event__card__speaker">
                                <div class="emms22__pre-event__calendar__event-list__event__card__speaker__image">
                                    <img src="../../admin/speakers/uploads/<?= $speaker['image'] ?>" alt="<?= $speaker['alt_image'] ?>">
                                </div>
                                <div class="emms22__pre-event__calendar__event-list__event__card__speaker__text">
                                    <h4><?= $speaker['name'] ?></h4>
                                    <h5><?= $speaker['job'] ?></h5>
                                    <ul>
                                        <?php if (!empty($speaker['sm_twitter'])) : ?>
                                            <li><a href="<?= $speaker['sm_twitter'] ?>" target="_blank"><img src="common/html/img/icons/Twitter.svg" alt="Twitter"></a></li>
                                        <?php endif; ?>
                                        <?php if (!empty($speaker['sm_linkedin'])) : ?>
                                            <li><a href="<?= $speaker['sm_linkedin'] ?>" target="_blank"><img src="common/html/img/icons/LinkedIn.svg" alt="LinkedIn"></a></li>
                                        <?php endif; ?>
                                        <?php if (!empty($speaker['sm_instagram'])) : ?>
                                            <li><a href="<?= $speaker['sm_instagram'] ?>" target="_blank"><img src="common/html/img/icons/Instagram.svg" alt="Instagram"></a></li>
                                        <?php endif; ?>
                                        <?php if (!empty($speaker['sm_facebook'])) : ?>
                                            <li><a href="<?= $speaker['sm_facebook'] ?>" target="_blank"><img src="common/html/img/icons/Facebook.svg" alt="Facebook"></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="emms22__pre-event__calendar__event-list__event__card__description">
                                <p><?= $speaker['description'] ?></p>
                            </div>
                            <div class="emms22__pre-event__calendar__event-list__event__card__business">
                                <img src="../../admin/speakers/uploads/<?= $speaker['image_company'] ?>" alt="<?= $speaker['alt_image_company'] ?>">
                                <?php if (($dayDuring == 1) && ($liveDayDuring == 0 || $liveDayDuring == 1)) : ?>
                                    <a href="../../speakers-interna.php?slug=<?= $speaker['slug'] ?>" class="emms22__pre-event__calendar__event-list__event__card__btn-conference">Ver conferencia</a>
                                <?php elseif ($dayDuring == 2 || $dayDuring == 3) : ?>
                                    <a href="../../speakers-interna.php?slug=<?= $speaker['slug'] ?>" class="emms22__pre-event__calendar__event-list__event__card__btn-conference">Ver conferencia</a>
                                <?php else : ?>
                                    <a class="emms22__pre-event__calendar__event-list__event__card__btn-bio">Ver bio</a>
                                <?php endif; ?>
                                <div class="emms22__pre-event__calendar__event-list__event__card__bio emms22__pre-event__calendar__event-list__event__card__bio--hide bio-speaker">
                                    <h4><?= $speaker['name'] ?></h4>
                                    <p><?= $speaker['bio'] ?></p>
                                    <a class="emms22__pre-event__calendar__event-list__event__card__btn-bio-hide"> ← VOLVER</a>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>

                <?php
                $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                $speakers = $db->getSpeakersByDay(3);

                foreach ($speakers as $speaker) : ?>
                    <li class="emms22__pre-event__calendar__event-list__event emms22__fade-in">
                        <div class="emms22__pre-event__calendar__event-list__event__card">
                            <div class="emms22__pre-event__calendar__event-list__event__card__speaker">
                                <div class="emms22__pre-event__calendar__event-list__event__card__speaker__image">
                                    <img src="../../admin/speakers/uploads/<?= $speaker['image'] ?>" alt="<?= $speaker['alt_image'] ?>">
                                </div>
                                <div class="emms22__pre-event__calendar__event-list__event__card__speaker__text">
                                    <h4><?= $speaker['name'] ?></h4>
                                    <h5><?= $speaker['job'] ?></h5>
                                    <ul>
                                        <?php if (!empty($speaker['sm_twitter'])) : ?>
                                            <li><a href="<?= $speaker['sm_twitter'] ?>" target="_blank"><img src="common/html/img/icons/Twitter.svg" alt="Twitter"></a></li>
                                        <?php endif; ?>
                                        <?php if (!empty($speaker['sm_linkedin'])) : ?>
                                            <li><a href="<?= $speaker['sm_linkedin'] ?>" target="_blank"><img src="common/html/img/icons/LinkedIn.svg" alt="LinkedIn"></a></li>
                                        <?php endif; ?>
                                        <?php if (!empty($speaker['sm_instagram'])) : ?>
                                            <li><a href="<?= $speaker['sm_instagram'] ?>" target="_blank"><img src="common/html/img/icons/Instagram.svg" alt="Instagram"></a></li>
                                        <?php endif; ?>
                                        <?php if (!empty($speaker['sm_facebook'])) : ?>
                                            <li><a href="<?= $speaker['sm_facebook'] ?>" target="_blank"><img src="common/html/img/icons/Facebook.svg" alt="Facebook"></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="emms22__pre-event__calendar__event-list__event__card__description">
                                <p><?= $speaker['description'] ?></p>
                            </div>
                            <div class="emms22__pre-event__calendar__event-list__event__card__business">
                                <img src="../../admin/speakers/uploads/<?= $speaker['image_company'] ?>" alt="<?= $speaker['alt_image_company'] ?>">
                                <?php if (($dayDuring == 1) && ($liveDayDuring == 0 || $liveDayDuring == 1)) : ?>
                                    <a href="../../speakers-interna.php?slug=<?= $speaker['slug'] ?>" class="emms22__pre-event__calendar__event-list__event__card__btn-conference">Ver conferencia</a>
                                <?php elseif ($dayDuring == 2 || $dayDuring == 3) : ?>
                                    <a href="../../speakers-interna.php?slug=<?= $speaker['slug'] ?>" class="emms22__pre-event__calendar__event-list__event__card__btn-conference">Ver conferencia</a>
                                <?php else : ?>
                                    <a class="emms22__pre-event__calendar__event-list__event__card__btn-bio">Ver bio</a>
                                <?php endif; ?>
                                <div class="emms22__pre-event__calendar__event-list__event__card__bio emms22__pre-event__calendar__event-list__event__card__bio--hide bio-speaker">
                                    <h4><?= $speaker['name'] ?></h4>
                                    <p><?= $speaker['bio'] ?></p>
                                    <a class="emms22__pre-event__calendar__event-list__event__card__btn-bio-hide"> ← VOLVER</a>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>

            </ul>

        </div>



        <!-- Registered Premium content -->

        <div id="contenido-exclusivo"></div>
        <div class="emms22__pre-event__registered-premium-content">
            <h2> Descubre el contenido exclusivo que prepararon nuestros Sponsors para optimizar tu estrategia de Marketing Digital</h2>
            <div class="emms22__container--lg">
                <div class="emms22__pre-event__registered-premium-content__text emms22__fade-in">
                    <h3>Potencia lo aprendido en las Conferencias con muchos más conocimientos:</h3>
                    <ul>
                        <li>Capacitaciones audiovisuales</li>
                        <li>Contenidos descargables</li>
                        <li>Descuentos de todo tipo</li>
                        <li>¡Y mucho más! </li>
                    </ul>
                    <a href="./sponsors-general.php" class="emms22__button emms22__fade-in" target="_blank">ACCEDE AHORA</a>
                </div>
                <div class="emms22__pre-event__registered-premium-content__image emms22__fade-in">
                    <img src="../../common/html/img/registered-content-premium.png" alt="Contenido Premium">
                </div>
            </div>
            <div id="agenda"></div>
        </div>

        <span id="version" class="emms22--vh"><?= VERSION ?></span>




        <!-- Doppler -->

        <div class="emms22__pre-event__doppler">
            <div class="emms22__container--lg">
                <div class="emms22__pre-event__doppler__title">
                    <h2 class="emms22__fade-in">SOMOS <img src="../../common/html/img/logo-doppler-black.svg" alt="Doppler"></h2>
                    <h3 class="emms22__fade-in">La herramienta líder en Marketing Automation en español.</h3>
                    <p class="emms22__fade-in">Desde hace 15 años organizamos el EMMS y formamos a profesionales de Marketing a lo largo de todo el mundo, a través de cursos, entrenamientos y recursos 100% gratuitos. </p>
                </div>
                <div class="emms22__pre-event__doppler__description">
                    <div class="emms22__pre-event__doppler__description__image emms22__fade-in">
                        <img src="../../common/html/img/pre-event-doppler.png" alt="Doppler">
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
                <a onclick="OneTrust.ToggleInfoDisplay()" id="ot-sdk-btn" class="ot-sdk-show-settings">Configuración de Cookies.</a>
                <a href="https://www.fromdoppler.com/es/legal/privacidad/" target="_blank">Políticas de privacidad y legales</a>
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
