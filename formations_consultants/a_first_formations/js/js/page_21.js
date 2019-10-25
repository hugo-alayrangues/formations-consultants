document.addEventListener("keypress", keypressFunction);

document.addEventListener("keydown", keydownFunction);

const textareaElts = document.getElementsByTagName("textarea");


// ----- Fonctions utilisées -----

function keypressFunction(event) {
    console.log(event.key);
    textareaElts[0].textContent += event.key;
}

function keydownFunction(event) {
    console.log(event.key);
    textareaElts[1].textContent += event.key;
}