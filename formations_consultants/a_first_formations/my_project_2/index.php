<?php
/* Quand on accède au site on va automatiquement sur cette page
 * Cette page s'occupe ensuite de nous rediriger au bon endroit
 */

require "controllers/controller.php";

if (isset($_GET["action"])) {
    $action = htmlspecialchars($_GET["action"]); // Petite fonction de sécurité

    switch($action) {
        case "see_home":
            seeHome();
            break;

        case "see_users_list":
            seeUsersList();
            break;

        case "see_add_user":
            seeAddUser();
            break;

        case "add_user":
            addUser();
            break;

        case "see_manage_sessions":
            seeManageSessions();
            break;

        case "see_create_session":
            seeCreateSession();
            break;

        case "see_remove_session":
            seeRemoveSession();
            break;

        default:
            echo "Erreur 404 -> L'erreur 404 est assez connue, c'est quand la page demandée n'a pas été trouvée (404 Not found)";
            break;
    }
} else {
    seeHome();
}