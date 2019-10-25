<?php $css = "/formations_consultants/design/css/php_sql_1/web_server.css"; ?>
<?php $title = "PHP / SQL (1) | Serveur web"; ?>
<?php ob_start(); ?>

<?php include("template/header.php") ?>

    <div class="main">

        <?php include("template/nav.php") ?>

        <div class="content">
            <p>
                En pratique le code source du site d'une entreprise, par exemple, se trouve dans un serveur web de
                l'entreprise en question, ou dans un serveur web d'une entreprise spécialisée (un hébergeur)
            </p>
            <p>Un particulier fait généralement appel aux services d'un hébergeur</p>
            <p><strong>> Deux inconvénients (pour nous, là maintenant, qui voulons faire du PHP) :</strong></p>
            <ul>
                <li>Les hébergeurs sont payants</li>
                <li>Il faut une connexion internet pour communiquer avec le serveur web</li>
            </ul>
            <p><strong>> Solution : Installer un serveur web sur notre ordi.</strong>
                Concrètement, le package WAMP (pour Windows) ou MAMP (pour Mac OS)
            </p>
            <div class="logos logos_1">
                <p><img src="/formations_consultants/design/pictures/wamp_logo.png" alt="wamp_logo" title="WAMP"></p>
                <p><img src="/formations_consultants/design/pictures/mamp_logo.png" alt="mamp_logo" title="MAMP"></p>
            </div>
            <p>Ces packages contiennent les trois programmes principaux suivants :</p>
            <div class="logos logos_2">
                <p><img src="/formations_consultants/design/pictures/apache_logo.png" alt="apache_logo"></p>
                <p><img src="/formations_consultants/design/pictures/mysql_logo.png" alt="mysql_logo"></p>
                <p><img src="/formations_consultants/design/pictures/php_logo.png" alt="php_logo"></p>
            </div>
        </div>
    </div>

<?php $body_content = ob_get_clean(); ?>

<?php require(ROOT . "/views/php_sql_1/template/template.php"); ?>