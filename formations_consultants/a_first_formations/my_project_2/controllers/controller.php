<?php

// Appel du modèle car nous aurons besoin de manipuler des données stockées dans une base de données
require "models/model.php";

function seeHome() {
    require "views/home.php";
}

/**
 * Cette fonction définit une variable $users dans laquelle on va stocker tous les utilisateurs de notre site
 * Ces utilisateurs sont stockés dans la base de données, donc pour les récupérer on fait appel à une fonction du modèle
 */
function seeUsersList() {
    $users = getUsers();
    require "views/users_list.php";
}

function seeAddUser() {
    require "views/add_user.php";
}

/**
 * Cette fonction sert à ajouter un utilisateur dans la base de données
 * Les données que l'on souhaite stocker pour un utilisateur sont : son nom, son prénom et son âge
 * Ces données sont récupérées via un formulaire et peuvent donc être dangereuses.
 * Dangereuses dans le sens où un utilisateur du site peut rentrer n'importe quoi dans une case de formulaire,
 * et notamment du code malveillant.
 * C'est dans le contrôleur que l'on va s'assurer que les données récupérées ne sont pas dangereuses ou qu'elles respectent bien les conditions données
 *
 * C'est pour cela qu'on fait passer chaque variable récupérée avec le formulaire dans une fonction de sécurité (htmlspecialchars)
 * On vérifie également que chaque champ du formulaire a été rempli (conditions du "if")
 *
 * Une fois que nos données sont "propres", on peut les passer à une fonction du modèle qui se chargera de les stocker au bon endroit
 *
 * Si on réussit à ajouter l'utilisateur, on appelle la vue "add_user_success.php"
 * Si il y avait des champs manquants, on appelle la vue "add_user_fail.php" *
 */
function addUser() {
    if ($_POST["name"] && $_POST["first_name"] && $_POST["age"]) {
        $name = htmlspecialchars($_POST["name"]);
        $first_name = htmlspecialchars($_POST["first_name"]);
        $age = htmlspecialchars($_POST["age"]);

        insertUser($name, $first_name, $age);

        require "views/add_user_success.php";
    } else {
        require "views/add_user_fail.php";
    }
}

function seeManageSessions() {
    require "views/manage_sessions.php";
}

function seeCreateSession() {
    require "views/create_session.php";
}

function seeRemoveSession() {
    require "views/remove_session.php";
}
