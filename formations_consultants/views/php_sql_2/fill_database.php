<?php $css = "/formations_consultants/design/css/php_sql_2/fill_database.css"; ?>
<?php $title = "PHP / SQL (2) | Remplir une base de données"; ?>
<?php ob_start(); ?>

<?php include("template/header.php")?>

    <div class="main">

        <?php include("template/nav.php")?>

        <div class="content">
            <p>Nous allons créer une table "users" qui contiendra tous les utilisateurs de notre site :</p>
            <ul>
                <li>Dans la partie "Nouvelle table", appelez la table "users" et laissez 4 colonnes</li>
                <li>Cliquez sur "Exécuter"</li>
            </ul>
            <p>Normalement vous vous retrouvez devant un tableau à remplir</p>
            <p>Remplissez le comme ceci :</p>
            <p><img src="<?= '/formations_consultants/design/pictures/fill_table.png'; ?>" alt="fill_table" id="fill_table"></p>
            <p>Cliquez sur "Enregistrer" puis sur l'onglet "Insérer" (dans le menu du haut)</p>
            <p>Vous arrivez normalement sur une page avec ce type de formulaire :</p>
            <p><img src="<?= '/formations_consultants/design/pictures/new_line.png'; ?>" alt="new_line"></p>
            <p>Vous n'avez plus qu'à ajouter les utilisateurs.</p>
            <p><strong>Attention, ne touchez pas à la ligne "id", laissez-la vide. Elle se remplit automatiquement (auto increment)</strong></p>
            <p>Voici le genre de résultat que vous devriez obtenir (onglet "Parcourir") :</p>
            <p><img src="<?= '/formations_consultants/design/pictures/users_table.png'; ?>" alt="users_table"></p>
        </div>
    </div>

<?php $body_content = ob_get_clean(); ?>

<?php require(ROOT . "/views/php_sql_2/template/template.php"); ?>