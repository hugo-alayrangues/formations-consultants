<?php

function seeHome() {
    $header_title = "Page d'accueil";
    require ROOT . "/views/php_sql_2/home.php";
}

function seeImprovements() {
    $header_title = "my_project - Améliorations";
    require ROOT . "/views/php_sql_2/improvements.php";
}

function seeCreateDatabase() {
    $header_title = "phpMyAdmin - Créer une base de données";
    require ROOT . "/views/php_sql_2/create_database.php";
}

function seeFillDatabase() {
    $header_title = "phpMyAdmin - Remplir une base de donneés";
    require ROOT . "/views/php_sql_2/fill_database.php";
}

function seeConnectToDatabase() {
    $header_title = "Se connecter à une base de donneés";
    require ROOT . "/views/php_sql_2/connect_to_database.php";
}

function seeSqlQueries() {
    $header_title = "Parler à sa BDD - Requêtes SQL";
    require ROOT . "/views/php_sql_2/sql_queries.php";
}

function seeDisplayDatabaseData() {
    $header_title = "Afficher des données";
    require ROOT . "/views/php_sql_2/display_database_data.php";
}

function seeUseForm() {
    $header_title = "Utiliser les formulaires";
    require ROOT . "/views/php_sql_2/use_form.php";
}

function seeUrlData() {
    $header_title = "Transférer des données par l'URL";
    require ROOT . "/views/php_sql_2/url_data.php";
}

function seeUseTemplate() {
    $header_title = "Utiliser un template";
    require ROOT . "/views/php_sql_2/use_template.php";
}

function seeUseSessions() {
    $header_title = "Utiliser les sessions";
    require ROOT . "/views/php_sql_2/use_sessions.php";
}

function goToMyProject() {
    header("Location: /formations_consultants/a_first_formations/my_project/index.php");
}

function goToMyProject2($action = false) {
    if ($action) {
        header("Location: /formations_consultants/a_first_formations/my_project_2/index.php?action=" . $action);
    } else {
        header("Location: /formations_consultants/a_first_formations/my_project_2/index.php");
    }
}

function goToMainHome() {
    header("Location: /formations_consultants/index.php");
}