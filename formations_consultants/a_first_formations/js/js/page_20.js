const buttonElt = document.querySelector("button");

buttonElt.addEventListener("click", onClickFunction);

let a = 1;

// ----- Fonction utilisée -----

function onClickFunction(event) {
    console.log("Type de l'événement déclenché :");
    console.log(event.type);

    console.log("Cible de l'événement (élément auquel est destiné l'événement) :");
    console.log(event.target);

    event.target.textContent = "Clique ici (" + a + ")";
    a++;
}