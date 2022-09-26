"use strict";
document.addEventListener('DOMContentLoaded', () => {

    const phasesForm = document.getElementById('current_phase');
    phasesForm.addEventListener('submit', sendDataCurrentPhase);
    const simulatorForm = document.getElementById('simulator');
    simulatorForm.addEventListener('submit', sendDataSimulator);
    const duringDaysForm = document.getElementById('duringCurrentDays');
    duringDaysForm.addEventListener('submit', sendDataDuringDay);
    const duringDaysSimulatorForm = document.getElementById('duringSimulatorDays');
    duringDaysSimulatorForm.addEventListener('submit', sendDataDuringDaySimulator);
    const duringDays = document.querySelectorAll('input[name="duringCurrentDay"]');
    duringDays.forEach(currentDay => currentDay.addEventListener('change', () => clickDuringDays(currentDay.id)));
    const duringDaysSimulator = document.querySelectorAll('input[name="duringSimulatorDay"]');
    duringDaysSimulator.forEach(simulatorDay => simulatorDay.addEventListener('change', () => clickDuringDaysSimulator(simulatorDay.id)));
    const radioPhases = document.querySelectorAll('input[name="phase"]');
    radioPhases.forEach(currentRadioPhase => currentRadioPhase.addEventListener('change', () => clickRadiosPhase(currentRadioPhase.id)));
    const radioPhasesSimulator = document.querySelectorAll('input[name="simulator_phase"]');
    radioPhasesSimulator.forEach(simulatorRadioPhase => simulatorRadioPhase.addEventListener('change', () => clickRadiosPhaseSimulator(simulatorRadioPhase.id)));


    checkRadiosPhase();
    checkRadiosDuringDays();
    checkRadiosSimulator();
    checkRadiosSimulatorDuringDays();

    function clickRadiosPhase(phase) {
        document.getElementById('cardCurrentDay').classList.add('d-none');
        if (phase === "during")
            document.getElementById('cardCurrentDay').classList.remove('d-none');
    }

    function clickRadiosPhaseSimulator(phase) {
        document.getElementById('cardSimulatorDay').classList.add('d-none');
        if (phase === "simulator_during")
            document.getElementById('cardSimulatorDay').classList.remove('d-none');
    }

    function clickDuringDays(dayNumber) {
        const statesLive = document.querySelectorAll('.stateLive');
        statesLive.forEach(sl => sl.classList.add('d-none'));
        document.getElementById(dayNumber + 'Row').classList.remove('d-none');
    }


    function clickDuringDaysSimulator(day) {
        const dayNumber = day.replace('Simulator', '');
        const statesLive = document.querySelectorAll('.stateLiveSimulator');
        statesLive.forEach(sl => sl.classList.add('d-none'));
        document.getElementById(dayNumber + 'RowSimulator').classList.remove('d-none');
    }

    function sendDataDuringDaySimulator(e) {
        e.preventDefault();
        let selectedDay = document.querySelector('input[name="duringSimulatorDay"]:checked').id;
        selectedDay = selectedDay.replace('Simulator', '');
        const stateLive = document.querySelector("input[name='" + selectedDay + "RadiosSimulator']:checked").value;
        selectedDay = selectedDay.slice(-1);
        try {
            const data = { day: selectedDay, live: stateLive }
            fetch('./../../services/setSimulatorDuringDays.php', {
                method: "post",
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data),
            })
                .then(resp => resp)
                .then(resp => {
                    if (resp.ok) {
                        const success = document.getElementById('simulator-days-alert-success');
                        success.classList.remove("d-none");
                    }
                    else {
                        console.log("error");
                        const success = document.getElementById('simulator-days-alert-danger');
                        success.classList.remove("d-none")
                    }
                })
        } catch (error) {
            console.log(error);
        }
        //send data fecth

    }
    function sendDataDuringDay(e) {
        e.preventDefault();

        let selectedDay = document.querySelector('input[name="duringCurrentDay"]:checked').id;
        const stateLive = document.querySelector("input[name='" + selectedDay + "Radios']:checked").value;
        selectedDay = selectedDay.slice(-1);
        try {
            const data = { day: selectedDay, live: stateLive }
            fetch('./../../services/setDuringDays.php', {
                method: "post",
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data),
            })
                .then(resp => resp)
                .then(resp => {
                    if (resp.ok) {
                        const success = document.getElementById('current-days-alert-success');
                        success.classList.remove("d-none");
                    }
                    else {
                        console.log("error");
                        const success = document.getElementById('current-days-alert-danger');
                        success.classList.remove("d-none")
                    }
                })
        } catch (error) {
            console.log(error);
        }
        //send data fecth
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

    function checkRadiosDuringDays() {
        fetch('./../../services/getDuringDays.php', {
            method: "get",
            headers: {
                'Content-Type': 'application/json'
            },
        })
            .then(resp => resp.json())
            .then(resp => {
                document.getElementById('day' + resp.day).checked = true;
                document.getElementById('day' + resp.day + 'Row').classList.remove('d-none');
                if (resp.live) {
                    document.getElementById('day' + resp.day + 'Live').checked = true;

                } else {
                    document.getElementById('day' + resp.day + 'NoLive').checked = true;
                }
            })
    }

    function checkRadiosSimulatorDuringDays() {
        fetch('./../../services/getSimulatorDuringDays.php', {
            method: "get",
            headers: {
                'Content-Type': 'application/json'
            },
        })
            .then(resp => resp.json())
            .then(resp => {
                document.getElementById('day' + resp.day + 'Simulator').checked = true;
                document.getElementById('day' + resp.day + 'RowSimulator').classList.remove('d-none');
                if (resp.live) {
                    document.getElementById('day' + resp.day + 'LiveSimulator').checked = true;

                } else {
                    document.getElementById('day' + resp.day + 'NoLiveSimulator').checked = true;
                }
            })
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
                if (phase === 'during') {
                    document.getElementById('cardCurrentDay').classList.remove('d-none');
                }
            })
            .catch((error) => {
                // Tenemos la respuesta de errores
                console.log('Algo salio mal: ', error)
            });
    }

    function checkRadiosSimulator() {
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
                if (resp.phase === 'during') {
                    document.getElementById('cardSimulatorDay').classList.remove('d-none');
                }
            })
            .catch((error) => {
                // Tenemos la respuesta de errores
                console.log('Algo salio mal: ', error)
            });
    }
});
