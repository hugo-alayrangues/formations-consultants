const h1Elt = document.createElement("h1");
h1Elt.classList.add("example");
h1Elt.textContent = "DOM - Positionner un élément (1)";

document.querySelector("header").insertBefore(h1Elt, document.querySelector("h2"));