const h1Elt = document.createElement("h1");
h1Elt.classList.add("example");
h1Elt.textContent = "DOM - Ajouter un élément";

document.querySelector("header").appendChild(h1Elt);

