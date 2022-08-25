"use strict";

document.addEventListener('DOMContentLoaded', () => {
    const dateStr = '2022-11-09 11:00:00';
    const utcDate = '2022-11-09T14:00:00.000Z';
    var eventDate = new Date(utcDate);
    var today = new Date();

    // Tener en cuenta que getTimezoneOffset devuelve números positivos de minutos para las zonas al oeste de UTC,
    // que generalmente se indican como horas negativas (ya que están "detrás" de UTC). Por ejemplo, Los Ángeles es UTC–8h estándar, UTC-7h DST.
    // getTimezoneOffset regresa 480(480 minutos positivos) en diciembre (invierno, hora estándar), en lugar de -480. Devuelve números negativos
    // para el hemisferio oriental (como -600 Sydney en invierno, a pesar de estar "adelante" ( UTC+10h ).

    Date.prototype.stdTimezoneOffset = function () {
        var jan = new Date(this.getFullYear(), 0, 1);
        var jul = new Date(this.getFullYear(), 6, 1);
        return Math.max(jan.getTimezoneOffset(), jul.getTimezoneOffset());
    }

    Date.prototype.isDstObserved = function () {
        return this.getTimezoneOffset() < this.stdTimezoneOffset();
    }

    function addHoursToDate(date, hours) {
        return new Date(new Date(date).setHours(date.getHours() + hours));
    }

    function checkUserDts() {
        if (today.isDstObserved()) {
            eventDate = addHoursToDate(eventDate, 1);
        }
    }

    // Checkeamos si pertenece a Daylight saving time (DST) (horario de verano)
    checkUserDts();


    fetch('/services/getCountryNameAndCode.php')
        .then((response) => {
            return response.json();
        })
        .then(countryResponse => {
            //  ZONA HORARIA: ' + 'UTC-' + new Date().getTimezoneOffset() / 60 '
            const target = checkTargetCountry(countryResponse);
            setCountryAndDate(countryResponse, eventDate, target);
        });

    function checkTargetCountry({ countryName, countryCode }) {
        console.log(countryCode)
        const targetCountries = ['ARG', 'BO', 'CL', 'CO', 'CR', 'CU', 'DO', 'EC', 'ES', 'GD', 'GF', 'GY', 'HN', 'HT', 'JM', 'MX', 'NI', 'PA', 'PE', 'PR', 'PY', 'SR', 'SV', 'UY', 'VE'];
        if (!targetCountries.includes(countryCode)) {
            eventDate = new Date(dateStr);
            return false;
        }
        return true;
    }

    function setCountryAndDate({ countryName, countryCode }, date, target) {
        const flagContainers = document.querySelectorAll('.emms22__pre-event__calendar__date__country span');
        const version = document.getElementById("version").innerHTML;
        if (!target) {
            countryCode = 'ARG';
            countryName = 'Argentina';
        }
        const img = createImgElement(countryName, countryCode, version);
        let hours = date.getHours().toString();
        hours = (hours.length < 2) ? '0' + hours : hours;


        flagContainers.forEach(flagContainer => {
            flagContainer.innerHTML = '';
            flagContainer.appendChild(img);
            flagContainer.innerHTML += '(' + countryCode + ') ' + hours + ':00';
        })


    }

    function createImgElement(countryName, countryCode, version) {
        const img = document.createElement("img");
        img.src = `../html/${version}/img/flags/${countryCode}.png`;
        img.alt = countryName;
        img.title = countryName;

        return img;
    }
});
