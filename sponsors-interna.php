<?php
require_once('config.php');
require_once('utils/DB.php');

if(!isset($_GET['slug']) or (trim($_GET['slug'])==='')) {
 	header("HTTP/1.0 404 Not Found");
	include '404.php';
	exit;
}
$db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$premium = $db->getAliadoProBySlug($_GET['slug']);
if(count($premium) === 0) :
	$premium = $db->getAliadoStarterBySlug($_GET['slug']);
	if(count($premium) === 0) {
		header("HTTP/1.0 404 Not Found");
		include '404.php';
		exit;
	}
	else{
		$source = 'aliados_starter';
	}

else:
	$source = 'aliados_pro';
endif;
$premium = $premium[0];
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
		} from './html/<?= VERSION ?>/js/security.js'
		const checkUserNotLogedF = checkUserNotLoged;
		checkUserNotLogedF()
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
	<main>

		<!-- Header -->
		<nav class="emms22__header emms22__header__sponsors__interna emms22__header__sponsors__interna__logos">
			<div class="emms22__container--lg emms22__fade-in">
				<div class="emms22__header__sponsors__interna__logos">
					<a href="./index.php" class="nav-ini">
                        <img class="lazyload emms22__header__sponsors__interna__logo__doppler" loading="lazy" data-src="../html/<?= VERSION ?>/img/logo-emms.png" alt="Emms 2022" />
                    </a>
					<?php if(!empty($premium['link_site'])) : ?>
                    <a href="<?=$premium['link_site']?>" target="_blank" >
					<?php endif;?>
						<img class="lazyload emms22__header__sponsors__interna__logo__sponsor" loading="lazy" data-src="/admin/<?=$source?>/uploads/<?=$premium['image_landing']?>" alt="<?=$premium['alt_image_landing']?>" />
                	<?php if(!empty($premium['link_site'])) : ?>
					</a>
					<?php endif;?>
				</div>
			</div>
		</nav>
		<!-- Hero -->
		<section class="emms22__hero">
			<div class="emms22__container--editions--lg emms22__hero__container">
				<div class="emms22__hero__content__sponsors__interna emms22__fade-in">
					<h1><?=$premium['title']?></h1>
					<p><?=$premium['description']?></p>
				</div>
				<div class="emms22__hero__content__sponsors__interna__video emms22__fade-in">
				<?php if(!empty($premium['youtube'])) :  ?>
                    <div class="cropper-cont-16-9">
                        <div class="cropper-cont ">
                            <div class="cropper-cont-interno">
                                <iframe src="https://www.youtube.com/embed/<?=$premium['youtube']?>"></iframe>
                            </div>
                        </div>
                    </div>
				<?php else : ?>
					<img src="/admin/<?=$source?>/uploads/<?=$premium['image_youtube']?>" alt="<?=$premium['alt_image_youtube']?>" />
   				<?php endif; ?>
				</div>
			</div>
		</section>

		<?php if(!empty($premium['title_magnet'])) : ?>
		<!-- Section Sponsors -->
		<section class="emms22__sponsors__interna">
			<div class="emms22__container--editions--md emms22__fade-in">
				<div class="emms22__sponsors__interna__wrapper">
					<div class="emms22__sponsors__interna__content emms22__fade-in">
						<h2><?=$premium['title_magnet']?></h2>
						<p><?=$premium['description_magnet']?></p>
					    <button class="emms22__sponsors__interna__button"><a href="<?=$premium['link_magnet']?>" target="_blank" rel="noopener">ACCEDER</a>
					    </button>
                    </div>
				</div>
			</div>
		</section>
		<?php endif;?>
		<?php if(!empty($premium['title_learnmore'])) : ?>
        <!-- Section Sponsors - Conoce más -->
        <section class="emms22__sponsors__interna emms22__sponsors__interna__wrapper__color">
			<div class="emms22__container--editions--md emms22__fade-in">
				<div class="emms22__sponsors__interna__wrapper">
					<div class="emms22__sponsors__interna__content__color emms22__fade-in">
						<h2><?=$premium['title_learnmore']?></h2>
						<p><?=$premium['description_learnmore']?></p>
					    <button class="emms22__sponsors__interna__button"><a href="<?=$premium['link_learnmore']?>" target="_blank" rel="noopener">MÁS INFORMACIÓN</a>
					    </button>
                    </div>
				</div>
			</div>
		</section>
		<?php endif;?>

		<footer class="emms22__footer">
			<div class="emms22__footer__event emms22__fade-in">
				<p><strong>EMMS 2022</strong> - Un evento creado por <a href="https://www.fromdoppler.com/es/" target="_blank"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/logo-doppler--neg.svg" alt="Doppler"></a></p>
			</div>
			<div class="emms22__footer__social emms22__fade-in">
				<ul>
					<li><a href="https://www.instagram.com/fromdoppler/" target="_blank"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/icono-instagram.svg" alt="Instagram"></a></li>
					<li><a href="https://www.facebook.com/DopplerEmailMarketing" target="_blank"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/icono-facebook.svg" alt="Facebook"></a></li>
					<li><a href="https://www.youtube.com/user/FromDoppler" target="_blank"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/icono-youtube.svg" alt="Youtube"></a></li>
					<li><a href="https://www.linkedin.com/company/228261" target="_blank"><img class="lazyload" loading="lazy" data-src="./html/<?= VERSION ?>/img/icono-linkedin.svg" alt="Linkedin"></a></li>
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
