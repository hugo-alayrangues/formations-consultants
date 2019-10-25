<?php

session_start();
session_destroy();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Le petit site sympathique</title>
</head>

<body>
<h1>La session a été supprimée</h1>

<p><a href="index.php?action=see_manage_sessions">Gérer les session</a></p>

</body>

</html>