<?php

function seeHome() {
    $header_title = "Page d'accueil";
    require ROOT . "/views/php_sql_1/home.php";
}

function seeWebsiteFunctioning() {
    $header_title = "Fonctionnement d'un site web - Précisions";
    require ROOT . "/views/php_sql_1/website_functioning.php";
}

function seeWebServer() {
    $header_title = "Serveur web";
    require ROOT . "/views/php_sql_1/web_server.php";
}

function seeProjectSetup() {
    $header_title = "Mettre en place son projet";
    require ROOT . "/views/php_sql_1/project_setup.php";
}

function seePhpFirstSteps() {
    $header_title = "PHP - Premiers pas";
    require ROOT . "/views/php_sql_1/php_first_steps.php";
}

function seePhpSyntax() {
    $header_title = "PHP - Syntaxe";
    require ROOT . "/views/php_sql_1/php_syntax.php";
}

function seePhpErrors() {
    $header_title = "Les erreurs";
    require ROOT . "/views/php_sql_1/php_errors.php";
}

function seeErrorPage() {
    require ROOT . "/views/php_sql_1/error_page.php";
}

function seeOrganizeCode() {
    $header_title = "Organiser son code - MVC";
    require ROOT . "/views/php_sql_1/organize_code.php";
}

function seeMvc() {
    $header_title = "MVC, concrètement";
    require ROOT . "/views/php_sql_1/mvc.php";
}

function seeDifferencesBackFront() {
    $header_title = "Back, Front, End, Office";
    require ROOT . "/views/php_sql_1/differences_back_front.php";
}

function seeVeryMvc() {
    $header_title = "MVC, très concrètement";
    require ROOT . "/views/php_sql_1/very_mvc.php";
}

function seeMvcCode() {
    $header_title = "Un peu de code";
    require ROOT . "/views/php_sql_1/mvc_code.php";
}

function goToMyProject() {
    header("Location: /formations_consultants/a_first_formations/my_project/index.php");
}

function goToMainHome() {
    header("Location: /formations_consultants/index.php");
}