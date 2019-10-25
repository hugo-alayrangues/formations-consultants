<?php

// Appel du fichier qui gère la connexion à la base de données
require "models/database_connection.php";


/**
 * Cette fonction permet de récupérer la liste des utilisateurs du site
 *
 * Dans un premier temps elle se connecte à la base de données grâce à la fonction dbConnect présente dans le
 * fichier "database_connection.php" (on a appelé ce fichier juste au dessus avec "require")
 * dbConnect nous renvoie une extension PDO (PHP Data Objects), c'est une interface qui nous permettra de communiquer à la base de données
 * C'est pour ça qu'on la stocke dans une variable ($db)
 *
 * Ensuite on fait une requête avec "query" pour récupérer les utilisateurs. Le requêtes est en SQL
 * On stocke le résultat de cette requête dans une variable ($req)
 *
 * Et pour finir on retourne la variable $req *
 *
 * @return bool|PDOStatement
 */
function getUsers()
{
    $db = dbConnect();
    $req = $db->query("SELECT * FROM users");

    return $req;
}

/**
 * Cette fonction rajoute un utilisateur dans la base de données
 * Elle prend en paramètres toutes les données qui concerne l'utilisateur
 *
 * Comme ces données viennent de l'extérieur (un formulaire rempli par un utilisateur), elles peuvent contenir du code
 * malveillant. On a déjà fait un nettoyage dans le contrôleur mais on n'est jamais trop sûr donc on va faire ce qu'on appelle
 * une requête préparée.
 * La requête préparée permet aussi de gagner en performance quand on répète plusieurs fois la même requête
 *
 * Dans la requête préparée on définit des variables de cette façon ":var"
 * Et après on va venir lier ces variables avec nos valeurs (les variables php qui nous viennent du formulaire)
 * Pour cela on utilise "bindParam" qui prend en paramètre le nom de la variable définie dans la requête préparée et
 * la variable qui contient la valeur à mettre dans la requête
 *
 * Ensuite on exécute puis on "ferme" la requête
 *
 * @param $name
 * @param $first_name
 * @param $age
 */
function insertUser($name, $first_name, $age)
{
    $db = dbConnect();
    $req = $db->prepare("INSERT INTO users(name, first_name, age) VALUES(:name, :first_name, :age)");
    $req->bindParam("name", $name);
    $req->bindParam("first_name", $first_name);
    $req->bindParam("age", $age);
    $req->execute();
    $req->closeCursor();
}