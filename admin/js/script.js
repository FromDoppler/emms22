"use strict";
document.addEventListener('DOMContentLoaded', () => {

    const phasesForm = document.getElementById('current_phase');
    const simulatorForm = document.getElementById('simulator');
    phasesForm.addEventListener('submit', sendDataCurrentPhase);
    simulatorForm.addEventListener('submit', sendDataSimulator);
    const duringDays = document.querySelectorAll('input[name="duringCurrentDay"]');
    duringDays.forEach(currentDay => currentDay.addEventListener('change', () => clickDuringDays(currentDay.id)));
    const radioPhases = document.querySelectorAll('input[name="phase"]');
    radioPhases.forEach(currentRadioPhase => currentRadioPhase.addEventListener('change', () => clickRadiosPhase(currentRadioPhase.id)));
    checkRadiosPhase();
    getDataSimulator();

    function clickRadiosPhase(phase) {
        document.getElementById('cardCurrentDay').classList.add('d-none');
        if (phase === "during")
            document.getElementById('cardCurrentDay').classList.remove('d-none');
    }

    function clickDuringDays(dayNumber) {
        const statesLive = document.querySelectorAll('.stateLive');
        statesLive.forEach(sl => sl.classList.add('d-none'));
        document.getElementById(dayNumber + 'Row').classList.remove('d-none');
    }

    function sendDataSimulator(e) {
        e.preventDefault();
        let selectedPhase = document.querySelector('input[name="simulator_phase"]:checked').id;
        const enabled = (document.getElementById('simulatorEnabled').checked) ? 1 : 0;
        selectedPhase = selectedPhase.replace('simulator_', '');
        try {
            const data = { enabled: enabled, phase: selectedPhase };
            fetch('./../../services/setSimulator.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data),
            })
                .then(resp => resp)
                .then(resp => {
                    if (resp.ok) {
                        const success = document.getElementById('simulator-alert-success');
                        success.classList.remove("d-none");
                    }
                    else {
                        console.log("error");
                        const success = document.getElementById('simulator-alert-danger');
                        success.classList.remove("d-none")
                    }
                })
                .catch((error) => {
                    // Tenemos la respuesta de errores
                    console.log('Algo salio mal: ', error)
                });
        }
        catch (e) {
            console.log("No values");
        }
    }

    function sendDataCurrentPhase(e) {
        const selectedPhase = document.querySelector('input[name="phase"]:checked').id;
        e.preventDefault();
        try {

            const data = { phase: selectedPhase };
            fetch('./../../services/setPhase.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data),
            })
                .then(resp => resp)
                .then(resp => {
                    if (resp.ok) {
                        const success = document.getElementById('current-alert-success');
                        success.classList.remove("d-none");

                    }
                    else {
                        console.log("error");
                        const success = document.getElementById('current-alert-danger');
                        success.classList.remove("d-none")

                    }
                })
                .catch((error) => {
                    // Tenemos la respuesta de errores
                    console.log('Algo salio mal: ', error)
                });
        }
        catch (e) {
            console.log("No values");
        }
    }

    function checkRadiosPhase() {
        fetch('./../../services/getPhase.php', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json'
            },
        })
            .then(resp => resp.json())
            .then(resp => {
                const phase = resp;
                document.getElementById(phase).checked = true;
            })
            .catch((error) => {
                // Tenemos la respuesta de errores
                console.log('Algo salio mal: ', error)

            });
    }

    function getDataSimulator() {
        fetch('./../../services/getSimulator.php', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json'
            },
        })
            .then(resp => resp.json())
            .then(resp => {
                if (resp.enabled == 1) {
                    document.getElementById('simulatorEnabled').checked = true;
                }
                document.getElementById('simulator_' + resp.phase).checked = true;
            })
            .catch((error) => {
                // Tenemos la respuesta de errores
                console.log('Algo salio mal: ', error)

            });
    }
});
