	<script type="module" src="common/html/<?= VERSION ?>/js/lazyVideos.js"></script>
	<script type="module" src="common/html/<?= VERSION ?>/js/lazysizes.min.js"></script>
	<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
	<script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
	<script src="common/html/<?= VERSION ?>/js/animations.js?version=<?= VERSION ?>"></script>
	<script src="https://www.fromdoppler.com/wp-content/themes/doppler_site/utm/utm.js?version=<?= VERSION ?>"></script>
	<script type="module">
	    import {
	        changeRedirectLoged
	    } from '../html/<?= VERSION ?>/js/security.js'
	    const changeNavIfLoged = changeRedirectLoged;
	    changeNavIfLoged();
	</script>
