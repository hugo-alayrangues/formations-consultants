const buttonElt = document.querySelector("button");

buttonElt.addEventListener("click", onClickFunction);


// ----- Fonctions utilisées -----

function onClickFunction() {
    const generated_color = generateRandomColor();

    const pElt = document.createElement("p");
    pElt.setAttribute("class", "generated_by_click");
    pElt.textContent = generated_color;
    pElt.style.color = generated_color;
    pElt.style.fontWeight = "bold";
    pElt.style.fontSize = "1.5em";

    const buttonElt = document.getElementsByTagName("button")[0];

    // Astuce pour ajouter un élément après un autre :
    buttonElt.parentNode.insertBefore(pElt, buttonElt.nextSibling);
}

function generateRandomColor() {
    return "rgb("
        + (Math.floor(Math.random() * 256))
        + "," + (Math.floor(Math.random() * 256))
        + "," + (Math.floor(Math.random() * 256))
        + ")";
}