<?php
/* Routeur de la partie php_sql_1 : tous les liens de cette partie renvoient ici
 * Le routeur s'occupe ensuite de nous rediriger au bon endroit
 */

define("ROOT", dirname(dirname(__DIR__))); // ce qui donne ROOT = "C:\wamp64\www\formations_consultants"

require ROOT . "/controllers/php_sql_1/controller.php";

if (isset($_GET["action"])) {
    $action = htmlspecialchars($_GET["action"]); // Petite fonction de sécurité

    switch($action) {
        case "see_home":
            seeHome();
            break;

        case "see_website_functioning":
            seeWebsiteFunctioning();
            break;

        case "see_web_server":
            seeWebServer();
            break;

        case "see_project_setup":
            seeProjectSetup();
            break;

        case "see_php_first_steps":
            seePhpFirstSteps();
            break;

        case "see_php_syntax":
            seePhpSyntax();
            break;

        case "see_php_errors":
            seePhpErrors();
            break;

        case "see_error_page":
            seeErrorPage();
            break;

        case "see_organize_code":
            seeOrganizeCode();
            break;

        case "see_mvc":
            seeMvc();
            break;

        case "see_differences_back_front":
            seeDifferencesBackFront();
            break;

        case "see_very_mvc":
            seeVeryMvc();
            break;

        case "see_mvc_code":
            seeMvcCode();
            break;

        case "go_to_my_project":
            goToMyProject();
            break;

        case "go_to_main_home":
            goToMainHome();
            break;

        default:
            echo "Erreur 404 -> L'erreur 404 est assez connue, c'est quand la page demandée n'a pas été trouvée (404 Not found)";
            break;
    }
} else {
    seeHome();
}