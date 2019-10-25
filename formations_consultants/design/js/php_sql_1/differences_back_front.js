const selectCategoryElt = document.getElementsByName("category")[0];

const seeCategoryFormElt = document.getElementById("see_category_form");
seeCategoryFormElt.addEventListener("submit", seeCategorySubmitFunction);

const newCategoryElt = document.getElementsByName("new_category")[0];

const newCategoryFormElt = document.getElementById("new_category_form");
newCategoryFormElt.addEventListener("submit", newCategorySubmitFunction);


// ----- Functions -----

function seeCategorySubmitFunction(event) {
    event.preventDefault();
}

function newCategorySubmitFunction(event) {
    const new_category = newCategoryElt.value;

    const optionElt = document.createElement("option");
    optionElt.setAttribute.value = new_category;
    optionElt.textContent = new_category;

    selectCategoryElt.appendChild(optionElt);

    newCategoryElt.value = "";
    event.preventDefault();
}