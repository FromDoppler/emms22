"use strict";
document.addEventListener('DOMContentLoaded', () => {

    const phasesForm = document.getElementById('current_phase');
    const simulatorForm = document.getElementById('simulator');
    phasesForm.addEventListener('submit', sendDataCurrentPhase);
    simulatorForm.addEventListener('submit', sendDataSimulator);
    checkRadiosPhase();
    getDataSimulator();

    function sendDataSimulator(e) {
        e.preventDefault();
        alert("send data..");
    }

    function sendDataCurrentPhase(e) {
        e.preventDefault();
        try {
            const selectedPhase = document.querySelector('input[name="phase"]:checked').id;
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
                        const sucess = document.getElementById('current-alert-success');
                        sucess.classList.remove("d-none");
                        setTimeout(function () {
                            sucess.classList.add("d-none")
                        }, 5000);
                    }
                    else {
                        console.log("error");
                        const sucess = document.getElementById('current-alert-danger');
                        sucess.classList.remove("d-none")
                        setTimeout(function () {
                            sucess.classList.add("d-none")
                        }, 5000);
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
