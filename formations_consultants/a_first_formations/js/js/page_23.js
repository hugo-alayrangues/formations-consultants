const inputElt = document.querySelector("input");
const spanInfoElt = document.getElementById("cgu_info");

inputElt.addEventListener("change", changeFunction);

function changeFunction(event) {
    console.log("Case cochée ? -> " + event.target.checked);
    if (event.target.checked) {
        spanInfoElt.textContent = "Vous pouvez continuer";
        spanInfoElt.style.color = "green";
    } else {
        spanInfoElt.textContent = "Vous devez accepter les CGU pour continuer";
        spanInfoElt.style.color = "red";
    }
}