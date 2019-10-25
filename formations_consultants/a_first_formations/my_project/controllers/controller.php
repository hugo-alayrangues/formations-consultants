<?php
/*
 * Le contrôleur est généralement consitué d'une série de fonctions qui correspondent à une requête de l'utilisateur
 * Ici on a une fonction qui sera appelée quand l'utilisateur voudra aller sur la page 1, et une autre qui sera appelée
 * quand l'utilisateur voudra aller sur la page 2
 */

/**
 * Cette fonction appelle la vue "view_1.php"
 * La page 1 va donc s'afficher
 */
function seeView1() {
    require "views/view_1.php";
}

/**
 * Cette fonction définit une variable $name puis appelle la vue "view_2.php"
 * La page 2 va donc s'afficher et elle pourra utiliser la variable $name (cf. "view_2.php" pour voir comment)
 */
function seeView2() {
    $name = "Bob";
    require "views/view_2.php";
}
