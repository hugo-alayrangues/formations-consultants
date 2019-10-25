// Attention, cette page contient le code le plus moche de la planète. Ames sensibles s'abstenir.

const mvcElt = document.getElementById("mvc");

const projectButtonElt = document.getElementById("project_button");
projectButtonElt.addEventListener("click", projectButtonFunction);


// ----- Variables globales -----

let project_deployed = false;
let controllers_deployed = false;
let models_deployed = false;
let views_deployed = false;
let routers_deployed = false;
let design_deployed = false;
let css_deployed = false;
let js_deployed = false;
let pictures_deployed = false;
let admin_views_deployed = false;
let home_views_deployed = false;
let user_views_deployed = false;


// ----- Fonctions (beaucoup de copier-coller, c'est mal) -----

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
        projectContentDivElt.appendChild(createDivLine("design", "design_button", button_margin, "design", designButtonFunction));
        projectContentDivElt.appendChild(createDivLine("models", "models_button", button_margin, "models", modelsButtonFunction));
        projectContentDivElt.appendChild(createDivLine("routers", "routers_button", button_margin, "routers", routersButtonFunction));
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
        routers_deployed = false;
        design_deployed = false;
    }
}

/*
Même principe que la fonction projectButtonFunction, pour le bouton "+" de controllers cette fois-ci
 */
function controllersButtonFunction() {
    if (!controllers_deployed) {
        const controllersContentDivElt = createDiv("controllers_content");
        controllersContentDivElt.appendChild(createP("admin_controller.php", "100px"));
        controllersContentDivElt.appendChild(createP("home_controller.php", "100px"));
        controllersContentDivElt.appendChild(createP("user_controller.php", "100px"));

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
        modelsContentDivElt.appendChild(createP("admin_model.php", "100px"));
        modelsContentDivElt.appendChild(createP("home_model.php", "100px"));
        modelsContentDivElt.appendChild(createP("user_model.php", "100px"));

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

        const button_margin = "100px";

        viewsContentDivElt.appendChild(createDivLine("admin_views", "admin_views_button", button_margin, "admin", adminViewsButtonFunction));
        viewsContentDivElt.appendChild(createDivLine("home_views", "home_views_button", button_margin, "home", homeViewsButtonFunction));
        viewsContentDivElt.appendChild(createDivLine("user_views", "user_views_button", button_margin, "user", userViewsButtonFunction));

        const viewsElt = document.getElementById("views");

        viewsElt.parentNode.insertBefore(viewsContentDivElt, viewsElt.nextSibling);

        views_deployed = true;
    } else {
        const projectContentElt = document.getElementById("project_content");

        projectContentElt.removeChild(document.getElementById("views_content"));
        views_deployed = false;
        admin_views_deployed = false;
        home_views_deployed = false;
        user_views_deployed = false;
    }
}

/*
Même principe que la fonction projectButtonFunction, pour le bouton "+" de routers cette fois-ci
 */
function routersButtonFunction() {
    if (!routers_deployed) {
        const routersContentDivElt = createDiv("routers_content");
        routersContentDivElt.appendChild(createP("admin_router.php", "100px"));
        routersContentDivElt.appendChild(createP("user_router.php", "100px"));

        const routersElt = document.getElementById("routers");

        routersElt.parentNode.insertBefore(routersContentDivElt, routersElt.nextSibling);

        routers_deployed = true;
    } else {
        const projectContentElt = document.getElementById("project_content");

        projectContentElt.removeChild(document.getElementById("routers_content"));
        routers_deployed = false;
    }
}

/*
Même principe que la fonction projectButtonFunction, pour le bouton "+" de design cette fois-ci
 */
function designButtonFunction() {
    if (!design_deployed) {
        const designContentDivElt = createDiv("design_content");

        const button_margin = "100px";
        designContentDivElt.appendChild(createDivLine("css", "css_button", button_margin, "css", cssButtonFunction));
        designContentDivElt.appendChild(createDivLine("js", "js_button", button_margin, "js", jsButtonFunction));
        designContentDivElt.appendChild(createDivLine("pictures", "pictures_button", button_margin, "pictures", picturesButtonFunction));

        const designElt = document.getElementById("design");

        designElt.parentNode.insertBefore(designContentDivElt, designElt.nextSibling);

        design_deployed = true;
    } else {
        const projectContentElt = document.getElementById("project_content");

        projectContentElt.removeChild(document.getElementById("design_content"));
        design_deployed = false;
        css_deployed = false;
        js_deployed = false;
        pictures_deployed = false;
    }
}

/*
Même principe que la fonction projectButtonFunction, pour le bouton "+" de css cette fois-ci
 */
function cssButtonFunction() {
    if (!css_deployed) {
        const cssContentDivElt = createDiv("css_content");
        cssContentDivElt.appendChild(createP("stylesheet.css", "150px"));

        const cssElt = document.getElementById("css");

        cssElt.parentNode.insertBefore(cssContentDivElt, cssElt.nextSibling);

        css_deployed = true;
    } else {
        const designContentElt = document.getElementById("design_content");

        designContentElt.removeChild(document.getElementById("css_content"));
        css_deployed = false;
    }
}

/*
Même principe que la fonction projectButtonFunction, pour le bouton "+" de js cette fois-ci
 */
function jsButtonFunction() {
    if (!js_deployed) {
        const jsContentDivElt = createDiv("js_content");
        jsContentDivElt.appendChild(createP("script.js", "150px"));

        const jsElt = document.getElementById("js");

        jsElt.parentNode.insertBefore(jsContentDivElt, jsElt.nextSibling);

        js_deployed = true;
    } else {
        const designContentElt = document.getElementById("design_content");

        designContentElt.removeChild(document.getElementById("js_content"));
        js_deployed = false;
    }
}

/*
Même principe que la fonction projectButtonFunction, pour le bouton "+" de pictures cette fois-ci
 */
function picturesButtonFunction() {
    if (!pictures_deployed) {
        const picturesContentDivElt = createDiv("pictures_content");
        picturesContentDivElt.appendChild(createP("logo.png", "150px"));
        picturesContentDivElt.appendChild(createP("paysage.jpg", "150px"));

        const picturesElt = document.getElementById("pictures");

        picturesElt.parentNode.insertBefore(picturesContentDivElt, picturesElt.nextSibling);

        pictures_deployed = true;
    } else {
        const designContentElt = document.getElementById("design_content");

        designContentElt.removeChild(document.getElementById("pictures_content"));
        pictures_deployed = false;
    }
}

/*
Même principe que la fonction projectButtonFunction, pour le bouton "+" de admin (views) cette fois-ci
 */
function adminViewsButtonFunction() {
    if (!admin_views_deployed) {
        const adminViewsContentDivElt = createDiv("admin_views_content");
        adminViewsContentDivElt.appendChild(createP("admin_page.php", "150px"));

        const adminViewsElt = document.getElementById("admin_views");

        adminViewsElt.parentNode.insertBefore(adminViewsContentDivElt, adminViewsElt.nextSibling);

        admin_views_deployed = true;
    } else {
        const adminViewsContentElt = document.getElementById("views_content");

        adminViewsContentElt.removeChild(document.getElementById("admin_views_content"));
        admin_views_deployed = false;
    }
}

/*
Même principe que la fonction projectButtonFunction, pour le bouton "+" de home (views) cette fois-ci
 */
function homeViewsButtonFunction() {
    if (!home_views_deployed) {
        const homeViewsContentDivElt = createDiv("home_views_content");
        homeViewsContentDivElt.appendChild(createP("home_page.php", "150px"));

        const homeViewsElt = document.getElementById("home_views");

        homeViewsElt.parentNode.insertBefore(homeViewsContentDivElt, homeViewsElt.nextSibling);

        home_views_deployed = true;
    } else {
        const homeViewsContentElt = document.getElementById("views_content");

        homeViewsContentElt.removeChild(document.getElementById("home_views_content"));
        home_views_deployed = false;
    }
}

/*
Même principe que la fonction projectButtonFunction, pour le bouton "+" de user (views) cette fois-ci
 */
function userViewsButtonFunction() {
    if (!user_views_deployed) {
        const userViewsContentDivElt = createDiv("user_views_content");
        userViewsContentDivElt.appendChild(createP("user_page.php", "150px"));

        const userViewsElt = document.getElementById("user_views");

        userViewsElt.parentNode.insertBefore(userViewsContentDivElt, userViewsElt.nextSibling);

        user_views_deployed = true;
    } else {
        const userViewsContentElt = document.getElementById("views_content");

        userViewsContentElt.removeChild(document.getElementById("user_views_content"));
        user_views_deployed = false;
    }
}


//buttonElt.parentNode.insertBefore(pElt, buttonElt.nextSibling);
