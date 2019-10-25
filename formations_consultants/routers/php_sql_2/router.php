<?php
/* Routeur de la partie php_sql_2 : tous les liens de cette partie renvoient ici
 * Le routeur s'occupe ensuite de nous rediriger au bon endroit
 */

define("ROOT", dirname(dirname(__DIR__))); // ce qui donne ROOT = "C:\wamp64\www\formations_consultants"

require ROOT . "/controllers/php_sql_2/controller.php";

if (isset($_GET["action"])) {
    $action = htmlspecialchars($_GET["action"]); // Petite fonction de sécurité

    switch($action) {
        case "see_home":
            seeHome();
            break;

        case "see_improvements":
            seeImprovements();
            break;

        case "see_create_database":
            seeCreateDatabase();
            break;

        case "see_fill_database":
            seeFillDatabase();
            break;

        case "see_connect_to_database":
            seeConnectToDatabase();
            break;

        case "see_sql_queries":
            seeSqlQueries();
            break;

        case "see_display_database_data":
            seeDisplayDatabaseData();
            break;

        case "see_use_form":
            seeUseForm();
            break;

        case "see_url_data":
            seeUrlData();
            break;

        case "see_use_template":
            seeUseTemplate();
            break;

        case "see_use_sessions":
            seeUseSessions();
            break;

        case "go_to_my_project":
            goToMyProject();
            break;

        case "go_to_my_project_2":
            if (isset($_GET["page"])) {
                $page = htmlspecialchars($_GET["page"]);
                goToMyProject2($page);
            } else {
                goToMyProject2();
            }
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