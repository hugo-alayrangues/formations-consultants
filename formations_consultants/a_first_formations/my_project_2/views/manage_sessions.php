<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Le petit site sympathique</title>
</head>

<body>
<h1>Gestion des sessions</h1>

<?php
if (isset($_SESSION["planet"])) { ?>
    <p>Nous habitons la planète <?= $_SESSION["planet"]; ?></p>
<?php } ?>

<p><a href="index.php?action=see_create_session">Créer une variable de session</a></p>
<p><a href="index.php?action=see_remove_session">Supprimer la session</a></p>

<p><a href="index.php?action=see_home">Retour à l'accueil</a></p>
</body>

</html>