const h1Elt = document.querySelector("h1");

h1Elt.setAttribute("id", "isep");

/*
Même chose que : h1Elt.id = "isep";
Fonctionne pour 'href', 'id' et 'value' uniquement
 */

h1Elt.classList.remove("example");
h1Elt.classList.add("junior");

console.log(h1Elt);