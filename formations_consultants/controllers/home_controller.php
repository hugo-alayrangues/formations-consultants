<?php

/*
 * Ce contrôleur s'occupe de nous renvoyer vers le bon routeur
 */

function seeHome() {
    require ROOT . "/views/main_home.php";
}

function goToPhpSql1() {
    header("Location: routers/php_sql_1/router.php");
}

function goToPhpSql2() {
    header("Location: routers/php_sql_2/router.php");
}

function goToHtmlCss1() {
    header("Location: a_first_formations/html_css_1/index.html");
}

function goToHtmlCss2() {
    header("Location: a_first_formations/html_css_2/index.html");
}

function goToJs() {
    header("Location: a_first_formations/js/index.html");
}