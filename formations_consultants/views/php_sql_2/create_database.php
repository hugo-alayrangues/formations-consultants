<?php $css = "/formations_consultants/design/css/php_sql_2/home.css"; ?>
<?php $title = "PHP / SQL (2) | Créer une base de données"; ?>
<?php ob_start(); ?>

<?php include("template/header.php")?>

    <div class="main">

        <?php include("template/nav.php")?>

        <div class="content">
            <p>Pour créer une base de données avec phpMyAdmin :</p>
            <ul>
                <li>Ouvrez phpMyAdmin (il faut que WAMP/MAMP soit lancé)</li>
                <li>Les identifiants/password pour WAMP sont root/<em>vide</em> et root/root pour MAMP</li>
                <li>Cliquez sur "Nouvelle base de données" (dans le menu à gauche)</li>
                <li>Donnez un nom à votre de base de données et faites "Créer"</li>
            </ul>
            <p>Voilà, votre base de données est créée !</p>

            <h3>Mais en fait c'est quoi une base de données (BDD) ?</h3>
            <p>Une BDD est un endroit où l'on stocke des données (de façon organisée) pour pouvoir les utiliser quand on veut.</p>
            <p>On peut voir une BDD comme la pièce d'une maison.</p>
            <p>Dans cette pièce il y a des armoires qui correspondent, chacune, à un groupe de données particulier.</p>
            <p>
                Dans ces armoires il y a des boîtes, chaque boîte correspond à une caractéristique particulière
                du groupe de données en question.
            </p>

            <h3>Petit exemple</h3>
            <p>Imaginons que l'on veuille stocker tous les utilisateurs de notre site dans notre BDD.</p>
            <p>Nous allons alors créer une armoire "utilisateurs".</p>
            <p>Cette armoire contiendra plusieurs boîtes :</p>
            <ul>
                <li>Une boîte "nom</li>
                <li>Une autre "prénom"</li>
                <li>Et une autre "mot de passe"</li>
            </ul>
            <p>De la même façon si l'on veut stocker des villes, on peut créer une autre armoire "villes".</p>
            <p>Cette armoire contiendra elle aussi plusieurs boîtes :</p>
            <ul>
                <li>La boîte "nom"</li>
                <li>La boîte "nombre d'habitants"</li>
                <li>La boîte "pays"</li>
            </ul>

            <h3>Vocabulaire d'une BDD</h3>
            <ul>
                <li>Les armoires s'appellent des "tables" (dans le sens "tableaux", avec des lignes et des colonnes)</li>
                <li>Les boîtes sont des "champs" (ils correspondent aux colonnes des tables)</li>
                <li>Chaque utilisateur (par exemple) correspondra à une ligne de la table "utilisateurs"</li>
            </ul>
        </div>
    </div>

<?php $body_content = ob_get_clean(); ?>

<?php require(ROOT . "/views/php_sql_2/template/template.php"); ?>