const header = document.querySelector("header");

const h1Elt = document.createElement("h1");
h1Elt.textContent = "DOM - Remplacer ou supprimer un élément";

header.replaceChild(h1Elt, document.getElementsByClassName("to_replace")[0]);

header.removeChild(document.getElementById("to_delete"));

