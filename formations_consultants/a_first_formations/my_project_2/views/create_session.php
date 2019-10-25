<?php

session_start();

$_SESSION["planet"] = "Terre";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Le petit site sympathique</title>
</head>

<body>
<h1>Une variable de session a été créée</h1>

<p><a href="index.php?action=see_manage_sessions">Gérer les session</a></p>

</body>

</html>