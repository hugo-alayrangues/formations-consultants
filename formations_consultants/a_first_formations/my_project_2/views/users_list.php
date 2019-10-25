<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Le petit site sympathique</title>
</head>

<body>
<h1>Liste des utilisateurs</h1>

<ul>
    <?php while ($user = $users->fetch()) { ?>
        <li><?php echo $user["first_name"] . " " . $user["name"] . " - " . $user["age"] . " ans"; ?></li>
    <?php } ?>
</ul>

<p><a href="index.php?action=see_home">Retour à l'accueil</a></p>
</body>

</html>