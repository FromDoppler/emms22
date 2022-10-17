document.addEventListener('DOMContentLoaded', () => {
    // Header Animation
    let scrollpos = window.scrollY;
    const header = document.querySelector('.emms22__header');
    const header_height = header.offsetHeight;
    const add_class_on_scroll = () => header.classList.add('emms22__header-scroll');
    const remove_class_on_scroll = () => header.classList.remove('emms22__header-scroll');

    window.addEventListener('scroll', function () {
        scrollpos = window.scrollY;
        if (scrollpos >= 100) {
            add_class_on_scroll();
        } else {
            remove_class_on_scroll();
        }
    });

    // Animation viewport scroll

    (function () {
        var elements;
        var elements2;
        var windowHeight;

        function init() {
            elements = document.querySelectorAll('.emms22__fade-in');
            elements2 = document.querySelectorAll('.emms22__fade-top');
            windowHeight = window.innerHeight;
        }

        function checkPosition() {
            for (var i = 0; i < elements.length; i++) {
                var element = elements[i];
                var positionFromTop = elements[i].getBoundingClientRect().top;

                if (positionFromTop - windowHeight <= 0) {
                    element.classList.add('emms22__fade-in-animation');
                    element.classList.remove('emms22__fade-in');
                }
                else {
                    element.classList.remove('emms22__fade-in-animation');
                    element.classList.add('emms22__fade-in');
                }
            }
        }

        function checkPosition2() {
            for (var i = 0; i < elements2.length; i++) {
                var element2 = elements2[i];
                var positionFromTop = elements2[i].getBoundingClientRect().top;

                if (positionFromTop - windowHeight <= 0) {
                    element2.classList.add('emms22__fade-top-animation');
                    element2.classList.remove('emms22__fade-top');
                }
                else {
                    element2.classList.remove('emms22__fade-top-animation');
                    element2.classList.add('emms22__fade-top');
                }
            }
        }

        window.addEventListener('scroll', checkPosition, checkPosition2);
        window.addEventListener('resize', init);

        init();
        checkPosition();
        checkPosition2()
    })();


    // Parallax

    const parallaxForm = document.querySelector('.parallax-form');
    const parallaxWaves = document.querySelector('.parallax-waves');
    //FIXME: Separar animaciones en modulos para llamar solo en las que se usen
    if (parallaxForm != null && parallaxWaves != null) {
        window.addEventListener('scroll', function () {
            let scrolled = window.pageYOffset;
            parallaxForm.style.transform = 'translateY(' + (scrolled * 0.3 * -1) + 'px)';
            parallaxWaves.style.transform = 'translateY(' + (scrolled * 0.5 * -1) + 'px)';
        });
    }


    // Date Counter

    var now = new Date();
    var current_year = now.getFullYear();
    var next_year = current_year + 1;

    var target_date = new Date("November 9, " + current_year + ", 11:00:00").getTime();

    var days, hours, minutes, seconds;

    var $days = document.getElementById("d");
    var $hours = document.getElementById("h");
    var $minutes = document.getElementById("m");
    var $seconds = document.getElementById("s");

    //FIXME: Separar animaciones en modulos para llamar solo en las que se usen
    if ($days != null) {
        function update() {
            var current_date = new Date().getTime();
            var seconds_left = (target_date - current_date) / 1000;

            days = parseInt(seconds_left / 86400);
            seconds_left = seconds_left % 86400;

            hours = parseInt(seconds_left / 3600);
            seconds_left = seconds_left % 3600;

            minutes = parseInt(seconds_left / 60);
            seconds = parseInt(seconds_left % 60);

            $days.innerHTML = pad(days, 2);
            $hours.innerHTML = pad(hours, 2);
            $minutes.innerHTML = pad(minutes, 2);
            $seconds.innerHTML = pad(seconds, 2);
        }
        update();
    }


    setInterval(update, 1000);

    function pad(num, size) {
        var s = num + "";
        while (s.length < size) s = "0" + s;
        return s;
    }


    // Share

    function socialWindow(url) {
        var left = (screen.width - 570) / 2;
        var top = (screen.height - 570) / 2;
        var params = "menubar=no,toolbar=no,status=no,width=570,height=570,top=" + top + ",left=" + left;
        window.open(url, "NewWindow", params);
    }

    function setShareLinks() {
        var pageUrl = encodeURIComponent(document.URL);
        var tweet = encodeURIComponent(jQuery("meta[property='og:description']").attr("content"));

        jQuery(".social-share.facebook").on("click", function () {
            url = "https://www.facebook.com/sharer.php?u=" + pageUrl;
            socialWindow(url);
        });

        jQuery(".social-share.twitter").on("click", function () {
            url = "https://twitter.com/intent/tweet?url=" + pageUrl + "&text=" + tweet;
            socialWindow(url);
        });

        jQuery(".social-share.linkedin").on("click", function () {
            url = "https://www.linkedin.com/shareArticle?mini=true&url=" + pageUrl;
            socialWindow(url);
        })
    }


    // Mobile nav

    const heading = document.getElementById('nav-mb');
    const btn = document.getElementById('btn-burger');
    if (btn != undefined && btn != null) {
        btn.addEventListener('click', (e) => {
            heading.classList.toggle('emms22__header__nav--hidden');
            btn.classList.toggle('emms22__header__nav--mb--active');
        });
    }

    // Flickity Carousel
    if (flkty != undefined) {
        var elem = document.querySelector('.main-carousel');
        var flkty = new Flickity(elem, {
            // options
            cellAlign: 'left',
            contain: true,
            prevNextButtons: false,
            fade: true,
            wrapAround: true
        });
    }


    // Show/Hide Biography Speaker
    const btnsBio = document.querySelectorAll(".emms22__pre-event__calendar__event-list__event__card__btn-bio");
    const btnBioHide = document.querySelectorAll(".emms22__pre-event__calendar__event-list__event__card__btn-bio-hide");
    const classBioShow = "emms22__pre-event__calendar__event-list__event__card__bio--show";

    btnsBio.forEach(btn => {
        btn.addEventListener("click", () => {
            hideAllBios();
            btn.parentNode.querySelector(".bio-speaker").classList.toggle(classBioShow);
        });
    })

    btnBioHide.forEach(btnHide => {
        btnHide.addEventListener("click", () => {
            btnHide.parentNode.classList.toggle(classBioShow);
        });
    })

    function hideAllBios() {
        document.querySelectorAll(".bio-speaker").forEach(bio => {
            bio.classList.remove(classBioShow);
        })


    }

});


// Scroll to form

function scrollToElement(event) {
    const scrollTarget = event.target.getAttribute('data-scroll');
    const scrollElement = document.querySelector(`[id="${scrollTarget}"]`);

    scrollElement.scrollIntoView({
        behavior: 'smooth'
    });
}


// Modal certificate

document.addEventListener('click', function (e) {
    e = e || window.event;
    var target = e.target || e.srcElement;

    if (target.hasAttribute('data-toggle') && target.getAttribute('data-toggle') == 'emms22__modal') {
        if (target.hasAttribute('data-target')) {
            var m_ID = target.getAttribute('data-target');
            document.getElementById(m_ID).classList.add('emms22__modal--open');
            document.body.style.overflowY = 'hidden';
            e.preventDefault();
        }
    }

    if ((target.hasAttribute('data-dismiss') && target.getAttribute('data-dismiss') == 'emms22__modal') || target.classList.contains('emms22__modal')) {
        var modal = document.querySelector('[class="emms22__modal emms22__modal--open"]');
        modal.classList.remove('emms22__modal--open');
        document.body.style.overflowY = 'scroll';
        e.preventDefault();
    }
}, false);


// Share social network

const shareList = document.getElementById('list-share');
const share = document.getElementById('btn-share');
if (share != undefined && share != null) {
    share.addEventListener('click', (e) => {
        shareList.classList.toggle('emms22__share__list--active');
        share.classList.toggle('emms22__share--active');
    });
}

