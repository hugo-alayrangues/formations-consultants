<?php $css = "/formations_consultants/design/css/php_sql_1/website_functioning.css"; ?>
<?php $title = "PHP / SQL (1) | Fonctionnement site web"; ?>
<?php ob_start(); ?>

<?php include("template/header.php")?>

    <div class="main">

        <?php include("template/nav.php")?>

        <div class="content">
            <p>Pour le moment on a utilisé les langages HTML, CSS et JS pour faire nos sites</p>
            <p>Nos pages de code étaient "décodées" puis affichées par notre navigateur</p>
            <p><strong> Limitation : Comment on fait pour faire des trucs plus poussés (espace membres par exemple) ?</strong></p>
            <div class="logos">
                <p><img src="/formations_consultants/design/pictures/php_logo.png" alt="php_logo" id="php_logo"><em>Hypertext Preprocessor</em></p>
                <p><img src="/formations_consultants/design/pictures/sql_logo.png" alt="sql_logo"><em>Structured Query Language</em></p>
            </div>
            <p><strong> Problème : Notre navigateur ne sait pas lire de PHP, ni de SQL... Donc comment qu'on fait ?</strong></p>
            <p><strong> Solution : Les serveurs web</strong></p>
            <p id="client_server"><img src="/formations_consultants/design/pictures/client_server.png" alt="client_server"></p>
            <p>Finalement, on demande une page au serveur, le serveur "transforme" le PHP en HTML, puis nous envoie la page</p>
        </div>
    </div>

<?php $body_content = ob_get_clean(); ?>

<?php require(ROOT . "/views/php_sql_1/template/template.php"); ?>