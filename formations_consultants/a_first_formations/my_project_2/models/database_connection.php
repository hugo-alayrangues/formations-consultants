<?php

/**
 * Connexion à la base de données "my_project_2"
 * Il faut juste mettre le bon hôte, le bon nom, le bon nom d'utilisateur et le bon mot de passe
 *
 * @return PDO
 */
function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=my_project_2;charset=utf8', 'root', '');
        return $db;
    }

    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}