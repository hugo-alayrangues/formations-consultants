<?php $css = "/formations_consultants/design/css/php_sql_1/mvc.css"; ?>
<?php $title = "PHP / SQL (1) | MVC, concrètement"; ?>
<?php ob_start(); ?>

<?php include("template/header.php")?>

    <div class="main">

        <?php include("template/nav.php")?>

        <div class="content">
            <div id="mvc">
                <div class="line" id="project"><button id="project_button">+</button><p>my_project</p></div>
            </div>
            <div id="explanation">
                <p>Ici on a un site avec une seule page visible par l'utilisateur : le contenu de la page <strong>view.php</strong></p>
                <p>Imaginons que ce site soit en ligne, qu'on ait fait une recherche Google et qu'on ait cliqué sur le lien de ce site.</p>
                <p>Etape par étape, voilà ce qu'il se passe ensuite :</p>
                <ul>
                    <li>On arrive sur la page <strong>index.php</strong></li>
                    <li><strong>index.php</strong> nous renvoie vers le contrôleur, <strong>controller.php</strong></li>
                    <li>si <strong>controller.php</strong> a besoin de données, il les demande au modèle, <strong>model.php</strong></li>
                    <li><strong>model.php</strong> va chercher les données qu'on vient de lui demander dans la base de données</li>
                    <li>Il les envoie ensuite au contrôleur <strong>controller.php</strong></li>
                    <li><strong>controller.php</strong> bricole les données récupérées (si besoin)</li>
                    <li>Une fois que tout est prêt, <strong>controller.php</strong> passe les données à la vue, <strong>view.php</strong></li>
                    <li>Le navigateur lit le HTML qui a été produit par <strong>view.php</strong> et nous affiche le résultat</li>
                </ul>
                <p>Une dernière chose : tous les liens de notre site doivent rediriger vers <strong>index.php</strong></p>
                <p><strong>index.php</strong> est là pour aiguiller, il a un rôle de routeur</p>
            </div>
        </div>
    </div>

<script src="/formations_consultants/design/js/php_sql_1/mvc.js"></script>
<?php $body_content = ob_get_clean(); ?>

<?php require(ROOT . "/views/php_sql_1/template/template.php"); ?>