const radioElts = document.getElementsByName("level");

console.log(radioElts);

for (let k = 0; k < radioElts.length; k++) {
    console.log(radioElts[k]);
    radioElts[k].addEventListener("change", changeRadioFunction);
}

function changeRadioFunction(event) {
    console.log("Année sélectionnée : " + event.target.value);
}

