'use strict';

document.addEventListener('DOMContentLoaded', () => {

    const certificateForm = document.getElementById('certificateForm');
    certificateForm.addEventListener('submit', submitCertificate);

    const checkQADomain = () => {
        return (window.location.host === 'qa.goemms.com' || window.location.host === 'localhost') ? true : false;
    }

    function submitCertificate(e) {
        e.preventDefault();
        const formData = new FormData(certificateForm);
        let fullname = formData.get('fullname');
        if (fullname.length < 2) {
            certificateForm.querySelector('span').classList.add('showError');
            return;
        } else {
            certificateForm.querySelector('span').classList.remove('showError');
        }
        forceDownload(fullname);
    }

    function forceDownload(fullname) {

        var xhr = new XMLHttpRequest(),
            encodeFullname = encodeURI(fullname),
            domainUrl = (checkQADomain()) ? 'certificate-emms2022qa.php' : 'certificate-emms2022.php',
            url = 'https://textify.fromdoppler.com/' + domainUrl + '?fullname=' + encodeFullname,
            fileName = 'certificacion-emms2022.png';


        xhr.open("GET", url, true);
        xhr.responseType = "blob";
        xhr.onload = function () {
            var urlCreator = window.URL || window.webkitURL;
            var imageUrl = urlCreator.createObjectURL(this.response);
            var tag = document.createElement('a');
            tag.href = imageUrl;
            tag.download = fileName;
            document.body.appendChild(tag);
            tag.click();
            document.body.removeChild(tag);
        }
        xhr.send();
        document.getElementById('emms22__download-certificate').classList.toggle('emms22__modal--open');
    }

});
