const body = document.body;

console.log("Premier enfant de body :");
console.log(body.childNodes[0]);

console.log("Deuxième enfant de body :");
console.log(body.childNodes[1]);

console.log("Balise h1 :");
console.log(body.childNodes[3].childNodes[1].childNodes[1]);

console.log("Parent de body :");
console.log(body.parentNode);

console.log("Parent de document (balise html) :");
console.log(document.parentNode);