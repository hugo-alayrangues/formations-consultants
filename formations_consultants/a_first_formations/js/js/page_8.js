const headerElt = document.getElementsByTagName("header")[0];

/*
Attention, il ne faut pas oublier de récupérer le premier élément [0]
(ici il n'y a qu'un header mais il pourrait y en avoir plusieurs)
 */

console.log("Contenu de la balise 'header' :");
console.log(headerElt.innerHTML);

console.log("Contenu textuel (sans les balises HTML) de la balise 'header' :");
console.log(headerElt.textContent);