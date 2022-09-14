"use strict";
document.addEventListener('DOMContentLoaded', () => {

    const phasesForms = document.getElementById('current_phase');
    phasesForms.addEventListener('submit', sendData);
    checkRadiosPhase();

    function sendData(e) {
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
                        console.log(resp.ok);
                        console.log("correcto");
                        const sucess = document.getElementById('alert-success');
                        sucess.classList.remove("d-none")
                    }
                    else {
                        console.log("error");
                        const sucess = document.getElementById('alert-danger');
                        sucess.classList.remove("d-none")
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
});
