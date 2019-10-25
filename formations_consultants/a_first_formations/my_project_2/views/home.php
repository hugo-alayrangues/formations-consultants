<?php $title = "Le petit site sympathique | Accueil"; ?>

<?php ob_start(); ?>

    <h1>Le petit site sympathique</h1>
    <h2>Bienvenue à toi, admin sympathique</h2>

    <?php include("template/nav.php")?>

<?php $body_content = ob_get_clean(); ?>

<?php require("views/template/template.php"); ?>