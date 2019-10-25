const h3Elts = document.getElementsByTagName("h3");

console.log("Titres h3 :");
console.log(h3Elts);

console.log("Nombre de titres h3 :");
console.log(h3Elts.length);

console.log("Parcours des titres h3 :");
for (let k = 0; k < h3Elts.length; k++) {
    console.log(h3Elts[k]);
}