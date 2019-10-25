const h3Elt = document.getElementsByTagName("h3")[0];

console.log("Liste des classes du titre h3 :");
console.log(h3Elt.classList);

console.log("Première classe du titre h3 :");
console.log(h3Elt.classList[0]);

console.log("Vérifie la présénce de la classe 'fourth_class' sur le titre h3 :");
console.log(h3Elt.classList.contains("fourth_class"));