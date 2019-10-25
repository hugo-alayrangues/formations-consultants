<?php
/* Quand on accède au site on va automatiquement sur cette page
 * Cette page s'occupe ensuite de nous rediriger au bon endroit
 */

define("ROOT", __DIR__); // ce qui donne ROOT = "C:\wamp64\www\formations_consultants" (par exemple)

require ROOT . "/controllers/home_controller.php";

if (isset($_GET["action"])) {
    $action = htmlspecialchars($_GET["action"]); // Petite fonction de sécurité

    switch($action) {
        case "go_to_html_css_1":
            goToHtmlCss1();
            break;

        case "go_to_html_css_2":
            goToHtmlCss2();
            break;

        case "go_to_js":
            goToJs();
            break;

        case "go_to_php_sql_1":
            goToPhpSql1();
            break;

        case "go_to_php_sql_2":
            goToPhpSql2();
            break;

        default:
            echo "Erreur 404 -> L'erreur 404 est assez connue, c'est quand la page demandée n'a pas été trouvée (404 Not found)";
            break;
    }
} else {
    seeHome();
}