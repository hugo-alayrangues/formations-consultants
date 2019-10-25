const formElt = document.querySelector("form");

console.log(formElt);
console.log(formElt.elements);

for (let k = 0; k < formElt.elements.length; k++) {
    console.log(formElt.elements[k]);
}

formElt.addEventListener("submit", submitFunction);

function submitFunction(event) {
    console.log("L'envoi est bloqué (la page ne se recharge pas)");
    event.preventDefault();
}