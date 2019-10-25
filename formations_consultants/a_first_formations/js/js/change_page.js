// Changement de page

const leftLinkElt = document.getElementsByClassName("change_page")[0];
const rightLinkElt = document.getElementsByClassName("change_page")[1];

document.addEventListener("keydown", keydownFunction);

function keydownFunction(event) {
    if (event.key === "ArrowLeft") {
        window.location.href = leftLinkElt.href;
    } else if (event.key === "ArrowRight") {
        window.location.href = rightLinkElt.href;
    }
}