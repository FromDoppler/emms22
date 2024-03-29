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
    <main class="emms22__pre-event__sponsors__main">

        <!-- Header -->
        <nav class="emms22__header">
            <div class="emms22__container--lg emms22__fade-in">
                <div class="emms22__header__logo">
                    <a href="./index.php" class="nav-ini"><img src="../../common/html/img/logo-emms.png" alt="Emms 2022"></a>
                </div>
                <a class="emms22__header__nav--mb" id="btn-burger"></a>
                <ul class="emms22__header__nav emms22__header__nav--hidden" id="nav-mb">
                    <li><a href="./index.php" class="emms22__header__nav--btn-active nav-ini">inicio</a></li>
                    <li><a href="#contenido-exclusivo">contenido exclusivo</a></li>
                </ul>
            </div>
        </nav>

        <!-- Hero -->

        <header class="emms22__hero-pre-event">
            <div class="emms22__hero-pre-event__back">
                <video class="lazy" loop muted autoplay playsinline poster="../../common/html/img/thumb.png">
                    <source data-src="../../common/html/img/video-background-compress.mp4" type="video/mp4">
                </video>
            </div>

            <div class="emms22__hero-pre-event__sponsors parallax-form emms22__fade-in">
                <h2>Contenido Premium exclusivo para registrados al EMMS 2022</h2>
                <div class="emms22__hero-pre-event__sponsors__text">
                    <p>Descubre los materiales que han preparado para ti nuestros Sponsors. Encontrarás conferencias, recursos descargables ¡y mucho más!</p>
                </div>
                <div id="contenido-exclusivo"></div>
            </div>
        </header>

        <!-- Sponsors -->

        <section class="emms22__pre-event__sponsors">
            <div class="emms22__container--lg">
                <div class="emms22__pre-event__sponsors__capsule-list emms22__fade-in">
                        <?php $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                        $pro_sponsors=$db->getAliadosPro('orden_card');
                        foreach($pro_sponsors as $pro) : ?>
                        <div class="emms22__pre-event__sponsors__capsule-list__card">
                            <div class="emms22__pre-event__sponsors__capsule-list__card__logo">
                                <img src="/admin/aliados_pro/uploads/<?=$pro['image_home']?>" alt="<?=$pro['alt_image_home']?>">
                            </div>
                            <div class="emms22__pre-event__sponsors__capsule-list__card__description">
                                <h4><?=$pro['title']?></h4>
                                <p><?=$pro['description_card']?></p>
                                <?php if(!empty($pro['slug'])) : ?>
                                <a href="sponsors-interna.php?slug=<?=$pro['slug']?>" target="_blank" rel="noopener noreferrer">¡No te lo pierdas!</a>
                                <?php endif ?>
                            </div>
                        </div>
                        <?php endforeach;?>
                        <?php $starter_sponsors=$db->getAliadosStarter('orden_card');
                        foreach($starter_sponsors as $starter) : ?>
                        <div class="emms22__pre-event__sponsors__capsule-list__card">
                            <div class="emms22__pre-event__sponsors__capsule-list__card__logo">
                                <img src="/admin/aliados_starter/uploads/<?=$starter['image_home']?>" alt="<?=$starter['alt_image_home']?>">
                            </div>
                            <div class="emms22__pre-event__sponsors__capsule-list__card__description">
                                <h4><?=$starter['title']?></h4>
                                <p><?=$starter['description_card']?></p>
                                <?php if(!empty($starter['slug'])) : ?>
                                <a href="sponsors-interna.php?slug=<?=$starter['slug']?>" target="_blank" rel="noopener noreferrer">¡No te lo pierdas!</a>
                                <?php endif ?>
                            </div>
                        </div>
                        <?php
                        endforeach;

                        $db->close();
                        ?>
                </div>
            </div>
        </section>

        <!-- Section conferences -->
		<section class="emms22__pre-event__conferences emms22--none">
			<div class="emms22__container--conferences--md emms22__fade-in">
				<div class="emms22__conferences__wrapper">
					<div class="emms22__conferences__content emms22__fade-in">
						<h2>Conferencias exclusivas de nuestros Media Partners</h2>
						<p>Los siguientes expertos comparten contigo las últimas tendencias y estrategias en Marketing Digital para que pongas en práctica ahora mismo en tu negocio.</p>
                        <p>¡Capacítate con EMMS 2022!</p>
					</div>
					<div class="emms22__conferences__cards__container">
                    <div class="emms22__conferences__content__cards emms22__show-dk">
							<div class="emms22__conferences__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../html/img/emms/emms2021.png" alt="Conferencias exclusivas">
								<h4>Acá va el titlulo de la capsula. Acá va el titulo de la capsula.</h4>
								<p>Duración: 00:00:00</p>
								<a href="#" target="_blank" rel="noopener">¡No te lo pierdas!</a>
							</div>

							<div class="emms22__conferences__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../html/img/emms/emms2021.png" alt="Conferencias exclusivas">
								<h4>Acá va el titlulo de la capsula. Acá va el titulo de la capsula.</h4>
								<p>Duración: 00:00:00</p>
								<a href="#" target="_blank" rel="noopener">¡No te lo pierdas!</a>
							</div>

							<div class="emms22__conferences__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../html/img/emms/emms2021.png" alt="Conferencias exclusivas">
								<h4>Acá va el titlulo de la capsula. Acá va el titulo de la capsula.</h4>
								<p>Duración: 00:00:00</p>
								<a href="#" target="_blank" rel="noopener">¡No te lo pierdas!</a>
							</div>

							<div class="emms22__conferences__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../html/img/emms/emms2021.png" alt="Conferencias exclusivas">
								<h4>Acá va el titlulo de la capsula. Acá va el titulo de la capsula.</h4>
								<p>Duración: 00:00:00</p>
								<a href="#" target="_blank" rel="noopener">¡No te lo pierdas!</a>
							</div>

							<div class="emms22__conferences__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../html/img/emms/emms2021.png" alt="Conferencias exclusivas">
								<h4>Acá va el titlulo de la capsula. Acá va el titulo de la capsula.</h4>
								<p>Duración: 00:00:00</p>
								<a href="#" target="_blank" rel="noopener">¡No te lo pierdas!</a>
							</div>

							<div class="emms22__conferences__cards emms22__fade-in">
								<img class="lazyload" loading="lazy" data-src="../html/img/emms/emms2021.png" alt="Conferencias exclusivas">
								<h4>Acá va el titlulo de la capsula. Acá va el titulo de la capsula.</h4>
								<p>Duración: 00:00:00</p>
								<a href="#" target="_blank" rel="noopener">¡No te lo pierdas!</a>
							</div>
						</div>
						<div class="emms22__conferences__content__cards emms22__fade-in emms22__show-mb main-carousel" data-flickity='{ "wrapAround": true, "autoPlay": true, "prevNextButtons": false }'>
							<div class="emms22__conferences__cards  carousel-cell">
								<img class="lazyload" loading="lazy" data-src="../html/img/emms/emms2021.png" alt="Conferencias exclusivas">
								<h4>Acá va el titlulo de la capsula. Acá va el titulo de la capsula.</h4>
								<p>Duración: 00:00:00</p>
								<a href="#" target="_blank" rel="noopener">¡No te lo pierdas!</a>
							</div>

							<div class="emms22__conferences__cards  carousel-cell">
								<img class="lazyload" loading="lazy" data-src="../html/img/emms/emms2021.png" alt="Conferencias exclusivas">
								<h4>Acá va el titlulo de la capsula. Acá va el titulo de la capsula.</h4>
								<p>Duración: 00:00:00</p>
								<a href="#" target="_blank" rel="noopener">¡No te lo pierdas!</a>
							</div>

							<div class="emms22__conferences__cards carousel-cell">
								<img class="lazyload" loading="lazy" data-src="../html/img/emms/emms2021.png" alt="Conferencias exclusivas">
								<h4>Acá va el titlulo de la capsula. Acá va el titulo de la capsula.</h4>
								<p>Duración: 00:00:00</p>
								<a href="#" target="_blank" rel="noopener">¡No te lo pierdas!</a>
							</div>

							<div class="emms22__conferences__cards carousel-cell">
								<img class="lazyload" loading="lazy" data-src="../html/img/emms/emms2021.png" alt="Conferencias exclusivas">
								<h4>Acá va el titlulo de la capsula. Acá va el titulo de la capsula.</h4>
								<p>Duración: 00:00:00</p>
								<a href="#" target="_blank" rel="noopener">¡No te lo pierdas!</a>
							</div>

							<div class="emms22__conferences__cards carousel-cell">
								<img class="lazyload" loading="lazy" data-src="../html/img/emms/emms2021.png" alt="Conferencias exclusivas">
								<h4>Acá va el titlulo de la capsula. Acá va el titulo de la capsula.</h4>
								<p>Duración: 00:00:00</p>
								<a href="#" target="_blank" rel="noopener">¡No te lo pierdas!</a>
							</div>

							<div class="emms22__conferences__cards carousel-cell">
								<img class="lazyload" loading="lazy" data-src="../html/img/emms/emms2021.png" alt="Conferencias exclusivas">
								<h4>Acá va el titlulo de la capsula. Acá va el titulo de la capsula.</h4>
								<p>Duración: 00:00:00</p>
								<a href="#" target="_blank" rel="noopener">¡No te lo pierdas!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


        <!-- Section conferences -->
		<section class="emms22__pre-event__conferences">
			<div class="emms22__container--conferences--md emms22__fade-in">
				<div class="emms22__conferences__wrapper">
					<div class="emms22__conferences__content emms22__fade-in">
						<h2>Conferencias exclusivas de nuestros Media Partners</h2>
						<p>Los siguientes expertos comparten contigo las últimas tendencias y estrategias en Marketing Digital para que pongas en práctica ahora mismo en tu negocio.</p>
                        <p>¡Capacítate con EMMS 2022!</p>
					</div>
					<div class="emms22__conferences__cards__container">
						<div class="emms22__conferences__content__cards">
							<div class="emms22__conferences__cards emms22__fade-in">
                                <a href="https://youtu.be/vvNaes-2Hic" target="_blank">
                                    <img class="lazyload" loading="lazy" data-src="common/html/img/capsules/portada-capsula-todoluminosos.png" alt="Conferencias exclusivas">
                                    <h4>CRO: La metodología que optimiza la rentabilidad de tu negocio</h4>
                                    <p>Duración: 00:14:45</p>
                                    <span>¡No te lo pierdas!</span>
                                </a>
							</div>
							<div class="emms22__conferences__cards emms22__fade-in">
                                <a href="https://youtu.be/N_8Gu28K6hQ" target="_blank">
                                    <img class="lazyload" loading="lazy" data-src="common/html/img/capsules/portada-capsula-mujeresqueemprenden.png" alt="Conferencias exclusivas">
                                    <h4>Cómo armar la estrategia comercial de tu emprendimiento</h4>
                                    <p>Duración: 00:07:57</p>
                                    <span>¡No te lo pierdas!</span>
                                </a>
							</div>
                            <div class="emms22__conferences__cards emms22__fade-in">
                                <a href="https://youtu.be/09IBnkZ3NRk" target="_blank">
                                    <img class="lazyload" loading="lazy" data-src="common/html/img/capsules/portada-capsula-eude-digital.png" alt="Conferencias exclusivas">
                                    <h4>Mediatech, transición tecnológica en los medios de comunicación</h4>
                                    <p>Duración: 00:21:33</p>
                                    <span>¡No te lo pierdas!</span>
                                </a>
							</div>
                            <div class="emms22__conferences__cards emms22__fade-in">
                                <a href="https://youtu.be/gBD9InwnH3g" target="_blank">
                                    <img class="lazyload" loading="lazy" data-src="common/html/img/capsules/portada-capsula-china-rodriguez.png" alt="Conferencias exclusivas">
                                    <h4>Contenido estratégico para tus Redes Sociales</h4>
                                    <p>Duración: 00:14:10</p>
                                    <span>¡No te lo pierdas!</span>
                                </a>
							</div>
                            <div class="emms22__conferences__cards emms22__fade-in">
                                <a href="https://youtu.be/TR2BL60dGrE" target="_blank">
                                    <img class="lazyload" loading="lazy" data-src="common/html/img/capsules/portada-ezequiel-golub.png" alt="Conferencias exclusivas">
                                    <h4>Coderhouse: Cómo llegamos a ser exponenter tecnológicos en LATAM</h4>
                                    <p>Duración: 00:14:29</p>
                                    <span>¡No te lo pierdas!</span>
                                </a>
							</div>
                            <div class="emms22__conferences__cards emms22__fade-in">
                                <a href="https://youtu.be/GLhE_x6n_d0" target="_blank">
                                    <img class="lazyload" loading="lazy" data-src="common/html/img/capsules/portada-david-tomas.png" alt="Conferencias exclusivas">
                                    <h4>Cómo se está aplicando el Big Data en las empresas: Casos de éxito de marcas reconocidas</h4>
                                    <p>Duración: 00:15:24</p>
                                    <span>¡No te lo pierdas!</span>
                                </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


                <!-- Doppler -->

                <section class="emms22__pre-event__doppler">
            <div class="emms22__container--lg">
                <div class="emms22__pre-event__doppler__title">
                    <h2 class="emms22__fade-in">SOMOS <img src="../../common/html/img/logo-doppler-black.svg"
                            alt="Doppler"></h2>
                    <h3 class="emms22__fade-in">La herramienta líder en Marketing Automation en español.</h3>
                    <p class="emms22__fade-in">Desde hace 15 años organizamos el EMMS y formamos a profesionales de
                        Marketing a lo largo de todo el mundo, a través de cursos, entrenamientos y recursos 100%
                        gratuitos. </p>
                </div>
                <div class="emms22__pre-event__doppler__description">
                    <div class="emms22__pre-event__doppler__description__image emms22__fade-in">
                        <img src="../../common/html/img/pre-event-doppler.png" alt="Doppler">
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
                <p><strong>EMMS 2022</strong> - Un evento creado por <a href="https://www.fromdoppler.com/es/"
                        target="_blank"><img class="lazyload" loading="lazy"
                            data-src="../../common/html/img/logo-doppler--neg.svg" alt="Doppler"></a></p>
            </div>
            <div class="emms22__footer__social emms22__fade-in">
                <ul>
                    <li><a href="https://www.instagram.com/fromdoppler/" target="_blank"><img class="lazyload"
                                loading="lazy" data-src="../../common/html/img/icono-instagram.svg"
                                alt="Instagram"></a></li>
                    <li><a href="https://www.facebook.com/DopplerEmailMarketing" target="_blank"><img class="lazyload"
                                loading="lazy" data-src="../../common/html/img/icono-facebook.svg"
                                alt="Facebook"></a></li>
                    <li><a href="https://www.youtube.com/user/FromDoppler" target="_blank"><img class="lazyload"
                                loading="lazy" data-src="../../common/html/img/icono-youtube.svg" alt="Youtube"></a>
                    </li>
                    <li><a href="https://www.linkedin.com/company/228261" target="_blank"><img class="lazyload"
                                loading="lazy" data-src="../../common/html/img/icono-linkedin.svg"
                                alt="LinkedIn"></a></li>
                    <li><a href="https://twitter.com/fromDoppler" target="_blank"><img class="lazyload" loading="lazy"
                                data-src="../../common/html/img/icono-twitter.svg" alt="Twitter"></a></li>
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
