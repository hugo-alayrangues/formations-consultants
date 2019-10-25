const mvcElt = document.getElementById("mvc");

const projectButtonElt = document.getElementById("project_button");
projectButtonElt.addEventListener("click", projectButtonFunction);


// ----- Variables globales -----

let project_deployed = false;
let controllers_deployed = false;
let models_deployed = false;
let views_deployed = false;


// ----- Fonctions (certaines choses pourraient être améliorées) -----

// Retourne une div avec un paragraphe et un bouton
function createDivLine(id, button_id, button_margin, p_content, clickFunction) {
    const divElt = document.createElement("div");
    divElt.setAttribute("class", "line");
    divElt.id = id;

    const buttonElt = document.createElement("button");
    buttonElt.id = button_id;
    buttonElt.textContent = "+";
    buttonElt.style.marginLeft = button_margin;
    buttonElt.addEventListener("click", clickFunction);

    const pElt = document.createElement("p");
    pElt.textContent = p_content;

    divElt.appendChild(buttonElt);
    divElt.appendChild(pElt);

    return divElt;
}

// Retourne une div
function createDiv(id) {
    const divElt = document.createElement("div");
    divElt.id = id;

    return divElt;
}

// Retourne un parapgraphe
function createP(content, margin = "0") {
    const pElt = document.createElement("p");
    pElt.textContent = content;
    pElt.style.marginLeft = margin;

    return pElt;
}

/*
Plie ou déplie la partie "my_project" de l'arborescence
Dans un premier temps on regarde si c'est plié ou déplié
Si c'est plié, on crée les éléments de l'arborescence (controllers, models, etc...)
Si c'est déjà déplié on supprime les éléments visibles
 */
function projectButtonFunction() {
    if (!project_deployed) {
        const projectContentDivElt = createDiv("project_content");

        const button_margin = "50px";

        projectContentDivElt.appendChild(createDivLine("controllers", "controllers_button", button_margin, "controllers", controllersButtonFunction));
        projectContentDivElt.appendChild(createDivLine("models", "models_button", button_margin, "models", modelsButtonFunction));
        projectContentDivElt.appendChild(createDivLine("views", "views_button", button_margin, "views", viewsButtonFunction));
        projectContentDivElt.appendChild(createP("index.php", "50px"));

        mvcElt.appendChild(projectContentDivElt);

        project_deployed = true;
    } else {
        mvcElt.removeChild(document.getElementById("project_content"));
        project_deployed = false;
        controllers_deployed = false;
        models_deployed = false;
        views_deployed = false;
    }
}

/*
Même principe que la fonction projectButtonFunction, pour le bouton "+" de controllers cette fois-ci
 */
function controllersButtonFunction() {
    if (!controllers_deployed) {
        const controllersContentDivElt = createDiv("controllers_content");
        controllersContentDivElt.appendChild(createP("controller.php", "100px"));

        const controllersElt = document.getElementById("controllers");

        controllersElt.parentNode.insertBefore(controllersContentDivElt, controllersElt.nextSibling);

        controllers_deployed = true;
    } else {
        const projectContentElt = document.getElementById("project_content");

        projectContentElt.removeChild(document.getElementById("controllers_content"));
        controllers_deployed = false;
    }
}

/*
Même principe que la fonction projectButtonFunction, pour le bouton "+" de models cette fois-ci
 */
function modelsButtonFunction() {
    if (!models_deployed) {
        const modelsContentDivElt = createDiv("models_content");
        modelsContentDivElt.appendChild(createP("model.php", "100px"));

        const modelsElt = document.getElementById("models");

        modelsElt.parentNode.insertBefore(modelsContentDivElt, modelsElt.nextSibling);

        models_deployed = true;
    } else {
        const projectContentElt = document.getElementById("project_content");

        projectContentElt.removeChild(document.getElementById("models_content"));
        models_deployed = false;
    }
}

/*
Même principe que la fonction projectButtonFunction, pour le bouton "+" de views cette fois-ci
 */
function viewsButtonFunction() {
    if (!views_deployed) {
        const viewsContentDivElt = createDiv("views_content");
        viewsContentDivElt.appendChild(createP("view.php", "100px"));

        const viewsElt = document.getElementById("views");

        viewsElt.parentNode.insertBefore(viewsContentDivElt, viewsElt.nextSibling);

        views_deployed = true;
    } else {
        const projectContentElt = document.getElementById("project_content");

        projectContentElt.removeChild(document.getElementById("views_content"));
        views_deployed = false;
    }
}

//buttonElt.parentNode.insertBefore(pElt, buttonElt.nextSibling);
