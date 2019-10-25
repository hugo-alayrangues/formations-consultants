<?php
/*
 * Quand on accède au site on va automatiquement sur cette page
 * Cette page s'occupe ensuite de nous rediriger au bon endroit
 */

// Appel du contrôleur
require "controllers/controller.php";

/*
 * On regarde s'il y a une action particulière à faire
 * Si oui, on redirige vers la fonction du contrôleur qui correspond à cette action
 * Sinon, on redirige vers la fonction du contrôleur seeView1 (cf. le "else" en bas) qui nous emmènera sur la page d'accueil (= page 1)
 */
if (isset($_GET["action"])) {
    $action = htmlspecialchars($_GET["action"]); // Petite fonction de sécurité

    switch($action) {
        case "see_view_1":
            seeView1();
            break;

        case "see_view_2":
            seeView2();
            break;

        // Si l'action demandée n'existe pas, on renvoie vers une page d'erreur
        default:
            echo "Erreur 404 -> L'erreur 404 est assez connue, c'est quand la page demandée n'a pas été trouvée (404 Not found)";
            break;
    }
} else {
    seeView1();
}