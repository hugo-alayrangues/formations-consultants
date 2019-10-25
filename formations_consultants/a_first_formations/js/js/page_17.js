const h1Elt = document.querySelector("h1");

h1Elt.style.color = "red";
h1Elt.style.backgroundColor = "yellow";

/* Attention :
Le 'background-color' du CSS (et tous les autres noms composés)
devient 'backgroundColor' en JS (camelCase)
 */

console.log("Récupérer le style d'un élément :");
console.log("Couleur du titre h1 :");
console.log(h1Elt.style.color);
console.log("Couleur du titre h2 :");
console.log(document.querySelector("h2").style.color);
console.log(getComputedStyle(document.querySelector("h2")).color);