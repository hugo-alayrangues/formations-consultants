const selectElt = document.getElementsByName("country")[0];

console.log(selectElt);

selectElt.addEventListener("change", changeSelectFunction);

function changeSelectFunction(event) {
    console.log(event.target.value);
}