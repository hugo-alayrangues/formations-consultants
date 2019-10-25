console.log("Hello World!");


// Exemples JavaScript

const bodyElt = document.body;
const h1Elt = document.querySelector("h1");
const textInputElt = document.getElementById("text_input");
const colorInputElt = document.getElementById("color_input");

textInputElt.addEventListener("input", textInputFunction);
colorInputElt.addEventListener("input", colorInputFunction);

function textInputFunction(event) {
    h1Elt.textContent = event.target.value;
}

function colorInputFunction(event) {
    bodyElt.style.backgroundColor = event.target.value;
}