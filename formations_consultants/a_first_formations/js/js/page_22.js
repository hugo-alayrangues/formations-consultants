const inputElt = document.querySelector("input");
const spanInfoElt = document.getElementById("pseudo_info");

inputElt.addEventListener("focus", focusInputFunction);
inputElt.addEventListener("blur", blurInputFunction);

function focusInputFunction(event) {
    console.log("Input sélectionné");
    spanInfoElt.textContent = "Votre pseudo sera visible par tous les autres membres";
}

function blurInputFunction(event) {
    console.log("Input n'a plus le focus");
    spanInfoElt.textContent = "";
}