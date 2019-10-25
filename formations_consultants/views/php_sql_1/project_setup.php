<?php $css = "/formations_consultants/design/css/php_sql_1/project_setup.css"; ?>
<?php $title = "PHP / SQL (1) | Mettre en place son projet"; ?>
<?php ob_start(); ?>

<?php include("template/header.php") ?>

    <div class="main">

        <?php include("template/nav.php") ?>

        <div class="content">
            <div class="os">
                <div class="windows">
                    <h2>Windows (WAMP)</h2>
                    <p>Etapes à suivre :</p>
                    <ul>
                        <li>Allez dans le dossier <strong>www</strong> de WAMP (C:\wamp\www)</li>
                        <li>Créez un dossier <strong>nom_du_projet</strong></li>
                        <li>Ouvrez votre navigateur</li>
                        <li>Rendez vous à l'adresse <strong>localhost/nom_du_projet</strong> (WAMP doit être lancé)</li>
                    </ul>
                </div>
                <div class="mac_os">
                    <h2>Mac OS (MAMP)</h2>
                    <p>Etapes à suivre :</p>
                    <ul>
                        <li>Allez dans le dossier <strong>Sites</strong> (/Users/pseudo/Sites)</li>
                        <li>Créez un dossier <strong>nom_du_projet</strong></li>
                        <li>Ouvrez votre navigateur</li>
                        <li>Rendez vous à l'adresse <strong>localhost:8888/nom_du_projet</strong> (MAMP doit être lancé)</li>
                    </ul>
                </div>
            </div>
            <div class="common">
                <p>Si tout va bien, vous êtes à la racine de votre projet.</p>
                <p>On continue :</p>
                <ul>
                    <li>Ouvrez votre éditeur (si ce n'est pas déjà fait)</li>
                    <li>Dans <strong>File</strong> ou <strong>Fichier</strong>, cliquez sur <strong>Open (folder)</strong></li>
                    <li>Cherchez le dossier <strong>nom_du_projet</strong> qui vient d'être créé</li>
                    <li>Créez un nouveau fichier <strong>index.php</strong></li>
                    <li>Ecrivez un truc dedans (n'importe quoi, on s'en fout)</li>
                    <li>Retournez sur le navigateur, toujours à l'adresse <strong>localhost/nom_du_projet</strong></li>
                </ul>
                <p>Voilà</p>
            </div>

        </div>
    </div>

<?php $body_content = ob_get_clean(); ?>

<?php require(ROOT . "/views/php_sql_1/template/template.php"); ?>