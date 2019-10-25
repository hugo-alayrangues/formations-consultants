const formElt = document.querySelector("form");

const firstPasswordElt = formElt.elements[0];
const secondPasswordElt = formElt.elements[1];

// Eléments qui correspondent aux messages au dessus des cases 'input'
const firstPasswordInfoElt = document.getElementById("first_password_info");
const secondPasswordInfoElt = document.getElementById("second_password_info");

// Evénements déclenchés à chaque fois que l'on tape un caractère dans l'input concerné
firstPasswordElt.addEventListener("input", firstPasswordCheck);
secondPasswordElt.addEventListener("input", secondPasswordCheck);

// Evénement déclenché à chaque fois que l'on clique sur le bouton 'submit'
formElt.addEventListener("submit", submitFunction);


// ----- Variables globales (disponibles partout) utiles -----

let first_password = "";
let first_password_ok = false;  // 'true' si le premier mot de passe est bon, 'false' sinon
let second_password_ok = false; // 'true' si le second mot de passe est bon, 'false' sinon
// Quand on arrive sur la page, ils ne sont pas remplis (donc pas valides), donc on initialise à 'false'


// ----- Fonctions utilisées -----

/*
Cette fonction vérifie que le (premier) mot de passe fasse au moins 5 caractères
Si c'est le cas, on passe le message en vert et on passe la variable first_password_ok à 'true'
Sinon, on passe le message en rouge et on passe la variable first_password_ok à 'false'
 */
function firstPasswordCheck(event) {
    let password = event.target.value; // Variable locale (utilisable uniquement dans cette fonction)
    console.log(password);

    if (password.length < 5) {
        firstPasswordInfoElt.style.color = "red";
        first_password_ok = false;
    } else {
        firstPasswordInfoElt.style.color = "green";
        first_password_ok = true;
    }

    first_password = password;
}

/*
Cette fonction vérifie que le (second) mot de passe soit le même que le premier mot de passe
Si c'est le cas, on passe le message en vert et on passe la variable second_password_ok à 'true'
Sinon, on passe le message en rouge et on passe la variable second_password_ok à 'false'
 */
function secondPasswordCheck(event) {
    let password = event.target.value;
    console.log(password);

    if (password !== first_password) {
        secondPasswordInfoElt.style.color = "red";
        second_password_ok = false;
    } else {
        secondPasswordInfoElt.style.color = "green";
        second_password_ok = true;
    }
}

/*
Cette fonction permet de faire une dernière vérification du formulaire avant l'envoi
Ici, on vérifie que les deux variables first_password_ok et second_password_ok soient à 'true'
Si c'est le cas, on envoie les données (la page va se recharger car on n'a pas spécifié de destination ici)
Si ce n'est pas le cas l'envoi est annulé

ATTENTION !
Ces vérifications ne servent en aucun cas à sécuriser le site
En effet, on a vu qu'on pouvait désactiver Javascript, donc si les vérifications de vos formulaires sont faites
uniquement en JavaScript, une simple désactivation fout tout en l'air

Ces vérifications sont juste là pour le confort de l'utilisateur

On verra comment faire de "vraies" vérifications (pour la sécurité) avec PHP
 */
function submitFunction(event) {
    // Dernière vérification avant l'envoi (attention, cela n'assure aucune sécurité)
    if (first_password_ok && second_password_ok) {
        console.log("C'est bon, on envoie !");
    } else {
        console.log("Envoi bloqué : les conditions requises ne sont pas complétées");
        event.preventDefault();
    }
}