<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Le petit site sympathique</title>
</head>

<body>
<h1>Ajouter un utilisateur</h1>

<p><strong>L'utilisateur n'a pas été ajouté, une des données requises n'a pas été renseignée</strong></p>

<form method="post" action="index.php?action=add_user">
    <label>
        Nom :
        <input type="text" name="name" required>
    </label>
    <label>
        Prénom :
        <input type="text" name="first_name" required>
    </label>
    <label>
        Age :
        <input type="number" name="age" required>
    </label>
    <input type="submit" value="Ajouter">
</form>

<p><a href="index.php?action=see_home">Retour à l'accueil</a></p>
</body>
</html>