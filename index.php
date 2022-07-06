<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EMMS 2021: Conferencias online de Marketing Digital.</title>
	<meta name="robots" content="<?= (PRODUCTION) ? 'index, follow' : 'noindex, nofollow' ?>">
	<meta name="theme-color" content="#3F0453">
	<meta name="title" content="Conferencias exclusivas y online de Marketing Digital | EMMS2021">
	<meta name="description" content="Los l&iacute;deres de la Industria en el evento online de Marketing Digital m&aacute;s impactante del a&ntilde;o. &iexcl;Mira las Conferencias!">
	<meta name="keywords" content="">
	<meta name="language" content="Spanish">
	<meta name="revisit-after" content="15 days">
	<meta name="author" content="Doppler">
	<meta property="og:title" content="Conferencias exclusivas y online de Marketing Digital | EMMS2021">
	<meta property="og:description" content="Los l&iacute;deres de la Industria en el evento online de Marketing Digital m&aacute;s impactante del a&ntilde;o. &iexcl;Mira las Conferencias!">
	<meta property="og:image" content="https://goemms.com/img/share-post.png">
	<meta property="og:url" content="https://goemms.com/">
	<meta property="og:site_name" content="Conferencias exclusivas y online de Marketing Digital | EMMS2021">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:image" content="https://goemms.com/img/share-post.png">
	<meta name="twitter:image:alt" content="Conferencias exclusivas y online de Marketing Digital | EMMS2021">
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<link rel="canonical" href="https://goemms.com/" />

	<link rel="stylesheet" href="html/css/styles.css">
	<script type="text/javascript" src="./html/js/script.js"></script>
	<?php if (PRODUCTION) { ?>
		<!-- El aviso de consentimiento de cookies de OneTrust comienza para goemms.com. -->
		<script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" data-document-language="true" type="text/javascript" charset="UTF-8" data-domain-script="02d37671-cb77-4e6a-804f-9955eb1f7c97"></script>
		<script type="text/javascript">
			function OptanonWrapper() {}
		</script>
		<!-- El aviso de consentimiento de cookies de OneTrust finaliza para goemms.com. -->
	<?php
	} else { ?>
		<!-- El aviso de consentimiento de cookies de OneTrust comienza para goemms.com. -->
		<script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" data-document-language="true" type="text/javascript" charset="UTF-8" data-domain-script="02d37671-cb77-4e6a-804f-9955eb1f7c97-test"></script>
		<script type="text/javascript">
			function OptanonWrapper() {}
		</script>
		<!-- El aviso de consentimiento de cookies de OneTrust finaliza para goemms.com. -->

	<?php } ?>

</head>

<body>
	<main class="emms22__home">

		<!-- Nav -->
		<nav class="emms22__nav">
			<div class="emms22__nav__logo">
				<img src="" alt="">
			</div>
			<ul class="emms22__nav__menu">
				<li><a href="">inicio</a></li>
				<li><a href="">ediciones anteriores</a></li>
			</ul>
		</nav>
		<div>
			<form id="earlyForm">
				<input type="text" name="name" value="Matías">
				<input type="text" name="lastname" value="Rodriguez">
				<input type="email" name="email" value="mroy+656@makingsense.com">
				<!-- AGREGAR SELECTOR -->
				<input type="text" name="country" value="Argentina">
				<!--  -->
				<!-- AGREGAR PHONE -->
				<input type="text" name="phone" value="+542983417387">
				<!--  -->
				<!-- SELECTOR -->
				<input type="text" name="industry" value="IT">
				<!--  -->
				<input type="text" name="company" value="Doppler">
				<input type="checkbox" name="acceptPolicies">
				<input type="checkbox" name="acceptPromotions">
				<input type="hidden" id="utm_source" name="utm_source" value='<?= isset($_GET['utm_source']) ? $_GET['utm_source'] : "" ?>' />
				<input type="hidden" id="utm_campaign" name="utm_campaign" value='<?= isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : "" ?>' />
				<input type="hidden" id="utm_content" name="utm_content" value='<?= isset($_GET['utm_content']) ? $_GET['utm_content'] : "" ?>' />
				<input type="hidden" id="utm_term" name="utm_term" value='<?= isset($_GET['utm_term']) ? $_GET['utm_term'] : "" ?>' />
				<input type="hidden" id="utm_medium" name="utm_medium" value='<?= isset($_GET['utm_medium']) ? $_GET['utm_medium'] : "" ?>' />
				<button>Enviar</button>
			</form>
		</div>
	</main>
</body>

</html>