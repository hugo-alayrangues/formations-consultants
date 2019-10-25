const aElt = document.getElementById("link_to_page_8");

console.log("Attribut 'href' du lien :");
console.log(aElt.getAttribute("href"));

console.log("Autre façon de faire :");
console.log(aElt.href);
// Fonctionne pour 'href', 'id' et 'value' uniquement

console.log("Vérifie que l'input a un attribut 'placeholder' :");
console.log(document.getElementsByTagName("input")[0].hasAttribute("placeholder"));