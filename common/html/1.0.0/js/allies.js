"use strict";

document.addEventListener("DOMContentLoaded", () => {

    const alliesUl = document.getElementById("alliesUl");
    if (alliesUl != null && alliesUl != undefined) {
        getAllies();

        function getAllies() {

            const endPointApi = '../services/getAliadosMedia.php';

            fetch(endPointApi)
                .then(resp => resp.json())
                .then(resp => {
                    printAllies(resp)
                })
                .catch((error) => {
                    throw new Error(error);
                });
        }

        function printAllies(allies) {

            let groupLength;
            let groupOfAllies = [];
            let flag = 0;
            let arrayOfAlies = [];

            if (allies.length % 2 === 0) {
                groupLength = Math.ceil((allies.length) / 6)
            } else {
                groupLength = Math.ceil((allies.length) / 5);
            }





            allies.forEach((allie, index) => {
                if (flag === groupLength || (index === (allies.length - 1))) {
                    flag = 0;
                    groupOfAllies.push(arrayOfAlies);
                    arrayOfAlies = [];
                }
                arrayOfAlies.push(allie);
                flag++;
            });


            groupOfAllies.forEach((array, index) => {

                setTimeout(() => {
                    array.forEach(allie => {
                        const li = document.createElement('li');
                        li.classList.add("fadeInJs");
                        const img = document.createElement('img');
                        img.src = `/admin/aliados_media_partner/uploads/${allie.image_home}`;
                        img.alt = `${allie.alt_image_home}`;
                        li.appendChild(img);
                        alliesUl.appendChild(li);
                    })
                }, 1000 * index);
            })

        }
    }
});
