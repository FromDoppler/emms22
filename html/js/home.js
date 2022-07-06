// Header Animation

let scrollpos = window.scrollY;
const header = document.querySelector('.emms22__header');
const header_height = header.offsetHeight;
const add_class_on_scroll = () => header.classList.add('emms22__header-scroll');
const remove_class_on_scroll = () => header.classList.remove('emms22__header-scroll');

window.addEventListener('scroll', function() {
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
    var numbers;
    var windowHeight;

    function init() {
        elements = document.querySelectorAll('.emms22__fade-in');
        elements2 = document.querySelectorAll('.emms22__fade-top');
        numbers = document.querySelectorAll('.emms22__numbers__counter-text-content');
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
        }
    }

    function counterNumber() {
        for (var i = 0; i < numbers.length; i++) {
            var number = numbers[i];
            var positionFromTop = numbers[i].getBoundingClientRect().top;

            if (positionFromTop - windowHeight <= 0) {
                //number.classList.add('emms22__numbers__counter-text-animation');
            }
        }
    }

    window.addEventListener('scroll', checkPosition, checkPosition2, counterNumber);
    window.addEventListener('resize', init);

    init();
    checkPosition();
    checkPosition2();
    counterNumber()
})();


// Parallax

const parallaxForm = document.querySelector('.parallax-form');
const parallaxWaves = document.querySelector('.parallax-waves');

window.addEventListener('scroll', function () {
    let scrolled = window.pageYOffset;
    parallaxForm.style.transform = 'translateY(' + (scrolled * 0.3 * -1) + 'px)';
    parallaxWaves.style.transform = 'translateY(' + (scrolled * 0.5 * -1) + 'px)';
});



// Date Counter

var now = new Date();
var current_year = now.getFullYear();
var next_year = current_year + 1;

var target_date = new Date("Jan 1, " + next_year).getTime();
 
var days, hours, minutes, seconds;
 
var $days = document.getElementById("d");
var $hours = document.getElementById("h");
var $minutes = document.getElementById("m");
var $seconds = document.getElementById("s");

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

setInterval(update, 1000);

function pad(num, size) {
    var s = num+"";
    while (s.length < size) s = "0" + s;
    return s;
}


// Text Counter Animation 

let totalNumber = document.querySelectorAll('.emms22__numbers__counter-text');
let getNumber = Array.from(totalNumber)

getNumber.map((viewNumber) => {
    console.log(viewNumber.dataset.number)
    let startCount = 0
    let counterUP = () => {
        startCount++
       viewNumber.innerHTML = `${startCount}`
       if(startCount == viewNumber.dataset.number){
           clearInterval(countStop)
       }
    }
    let countStop = setInterval(() => {
        counterUP()
    }, 2)
})


 // To play videos only when visible

 function playVisibleVideos() {
    document.querySelectorAll(".videoAutoplay").forEach(video => elementIsVisible(video) ? video.play() : video.pause());
}

function elementIsVisible(el) {
    let rect = el.getBoundingClientRect();
    return (rect.bottom >= 0 && rect.right >= 0 && rect.top <= (window.innerHeight || document.documentElement.clientHeight) && rect.left <= (window.innerWidth || document.documentElement.clientWidth));
}

let playVisibleVideosTimeout;
window.addEventListener("scroll", () => {
    clearTimeout(playVisibleVideosTimeout);
    playVisibleVideosTimeout = setTimeout(playVisibleVideos, 100);
});

window.addEventListener("resize", playVisibleVideos);
window.addEventListener("DOMContentLoaded", playVisibleVideos);