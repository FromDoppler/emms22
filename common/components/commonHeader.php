	<title><?= ($simulated) ? "SIMULADO" : "" ?>EMMS 2022: Conferencias online de Marketing Digital. </title>
	<meta name="robots" content="<?= (PRODUCTION) ? 'index, follow' : 'noindex, nofollow' ?>">

	<meta name="theme-color" content="#3F0453">

	<meta name="title" content="EMMS 2022: El mayor evento de Marketing Digital">
    <?php if ( $response['phaseToShow'] == 'pre' ) :?>
        <meta name="description" content="¡Gratis y Online! Llega una nueva edición del evento más esperado por la comunidad del Marketing. Descubre las últimas tendencias y las estrategias que implementan los líderes del mundo para hacer crecer sus negocios. ¡Reserva tu cupo ahora!">
    <?php elseif ( $response['phaseToShow'] == 'during' ) :?>
        <meta name="description" content="¡Ya estamos en vivo! Ha comenzado el evento gratis y online más esperado por la comunidad del Marketing. Descubre las últimas tendencias y las estrategias que implementan los líderes del mundo para hacer crecer sus negocios. ¡Súmate ahora!">
    <?php elseif ( $response['phaseToShow'] == 'post' ) :?>
        <meta name="description" content="¡Gratis y Online! Revive el evento más esperado por la comunidad del Marketing. Descubre las últimas tendencias y las estrategias que implementan los líderes del mundo para hacer crecer sus negocios. ¡Accede ahora a todas las Conferencias!">
    <?php endif; ?>
	<meta name="keywords" content="">
	<meta name="language" content="Spanish">
	<meta name="revisit-after" content="15 days">
	<meta name="author" content="Doppler">

	<meta property="og:title" content="EMMS 2022: El mayor evento de Marketing Digital">
    <?php if ( $response['phaseToShow'] == 'pre' ) :?>
        <meta property="og:description" content="¡Gratis y Online! Llega una nueva edición del evento más esperado por la comunidad del Marketing. Descubre las últimas tendencias y las estrategias que implementan los líderes del mundo para hacer crecer sus negocios. ¡Reserva tu cupo ahora!">
    <?php elseif ( $response['phaseToShow'] == 'during' ) :?>
        <meta property="og:description" content="¡Ya estamos en vivo! Ha comenzado el evento gratis y online más esperado por la comunidad del Marketing. Descubre las últimas tendencias y las estrategias que implementan los líderes del mundo para hacer crecer sus negocios. ¡Súmate ahora!">
    <?php elseif ( $response['phaseToShow'] == 'post' ) :?>
        <meta property="og:description" content="¡Gratis y Online! Revive el evento más esperado por la comunidad del Marketing. Descubre las últimas tendencias y las estrategias que implementan los líderes del mundo para hacer crecer sus negocios. ¡Accede ahora a todas las Conferencias!">
    <?php endif; ?>
    <meta property="og:image" content="https://goemms.com/share.png">
	<meta property="og:url" content="https://goemms.com/">
	<meta property="og:site_name" content="EMMS 2022: El mayor evento de Marketing Digital">
	<meta property="og:type" content="website" />

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:image" content="https://goemms.com/share.png">
	<meta name="twitter:image:alt" content="EMMS 2022: El mayor evento de Marketing Digital">
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />

	<link rel="canonical" href="https://goemms.com/" />
	<link hreflang="x-default" href="https://goemms.com/" rel="alternate" />
	<link hreflang="es-ar" href="https://goemms.com/" rel="alternate" />

	<link rel="apple-touch-icon" sizes="180x180" href="common/html/img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="common/html/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="common/html/img/favicon-16x16.png">

	<link rel="stylesheet" href="common/html/<?= VERSION ?>/css/styles.css">

	<!-- Font Proxima Nova -->
	<link rel="stylesheet" href="https://use.typekit.net/fbq8dbp.css" />

	<!-- El aviso de consentimiento de cookies de OneTrust comienza para goemms.com. -->
	<script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" data-document-language="true" type="text/javascript" charset="UTF-8" data-domain-script="02d37671-cb77-4e6a-804f-9955eb1f7c97<?= (PRODUCTION) ? '' : '-test' ?>"></script>
	<script type="text/javascript">
	    function OptanonWrapper() {}
	</script>
	<!-- El aviso de consentimiento de cookies de OneTrust finaliza para goemms.com. -->


	<!-- Google Tag Manager -->
	<script>
	    (function(w, d, s, l, i) {
	        w[l] = w[l] || [];
	        w[l].push({
	            'gtm.start': new Date().getTime(),
	            event: 'gtm.js'
	        });
	        var f = d.getElementsByTagName(s)[0],
	            j = d.createElement(s),
	            dl = l != 'dataLayer' ? '&l=' + l : '';
	        j.async = true;
	        j.src =
	            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
	        f.parentNode.insertBefore(j, f);
	    })(window, document, 'script', 'dataLayer', 'GTM-M768WZR');
	</script>
	<!-- End Google Tag Manager -->
