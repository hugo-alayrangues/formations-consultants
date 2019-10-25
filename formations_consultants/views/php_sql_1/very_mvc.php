<?php $css = "/formations_consultants/design/css/php_sql_1/very_mvc.css"; ?>
<?php $title = "PHP / SQL (1) | MVC, très concrètement"; ?>
<?php ob_start(); ?>

<?php include("template/header.php") ?>

    <div class="main">

        <?php include("template/nav.php") ?>

        <div class="content">
            <div id="mvc">
                <div class="line" id="project">
                    <button id="project_button">+</button>
                    <p>my_project</p></div>
            </div>
            <div id="explanation">
                <p>Voici un site un peu plus évolué qu'<a href="router.php?action=see_mvc" target="_blank">ici</a>.
                    On a maintenant un site avec une page d'authentification (<strong>home_page.php</strong>).
                </p>
                <p>A partir de cette page d'authentification 2 types de personnes peuvent se connecter :</p>
                <ul>
                    <li>Les administrateurs du site</li>
                    <li>Les utilisateurs "classique" du site</li>
                </ul>
                <p>Cette fois-ci, voilà ce qu'il se passe quand on clique sur le lien du site :</p>
                <ul>
                    <li>On arrive sur la page <strong>index.php</strong></li>
                    <li><strong>index.php</strong> nous renvoie vers le contrôleur, <strong>home_controller.php</strong></li>
                    <li><strong>home_controller.php</strong> appelle la vue <strong>home_page.php</strong></li>
                    <li>Le navigateur lit <strong>home_page.php</strong> et nous affiche le résultat</li>
                    <li>Sur cette page on peut voir un formulaire de connexion (login/password)</li>
                    <li>On rentre nos identifiants et on valide</li>
                    <li>On est alors redirigé vers <strong>index.php</strong></li>
                    <li><strong>index.php</strong> nous envoie à nouveau vers <strong>home_controller.php</strong></li>
                    <li><strong>home_controller.php</strong> a cette fois-ci besoin de vérifier nos identifiants</li>
                    <li>Nos identifiants sont stockés dans la base de données (BDD)</li>
                    <li><strong>home_controller.php</strong> demande donc nos identifants à <strong>home_model.php</strong></li>
                    <li><strong>home_model.php</strong> va les chercher dans la BDD</li>
                    <li>Il les passe à <strong>home_controller.php</strong></li>
                    <li><strong>home_controller.php</strong> vérifie que les identifiants que nous avons donnés sont bons</li>
                    <li>Admettons qu'ils le sont, et que nous sommes des administrateurs du site</li>
                    <li><strong>home_controller.php</strong> va alors nous envoyer vers le routeur de la partie administrateur, <strong>admin_router.php</strong></li>
                    <li><strong>admin_router.php</strong> va nous envoyer à son tour vers <strong>admin_controller.php</strong></li>
                    <li><strong>admin_controller.php</strong> appelle la vue <strong>admin_page.php</strong></li>
                    <li>Le navigateur lit <strong>admin_page.php</strong> et nous affiche le résultat</li>
                    <li>Bienvenue sur la partie administrateur du site !</li>
                </ul>
                <p>Au début ça fait peur et on pense que c'est un bordel monstrueux. En fait non.</p>
                <p>C'est une organisation classique, et avec un peu de temps on s'y fait très bien.</p>
                <p>Une dernière chose :</p>
                <ul>
                    <li>
                        Quand on est dans la partie administrateur du site, tous les liens doivent renvoyer vers
                        le <strong>admin_router.php</strong>
                    </li>
                    <li>
                        Quand on est dans la partie utilisateur du site, tous les liens doivent renvoyer vers
                        le <strong>user_router.php</strong>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script src="/formations_consultants/design/js/php_sql_1/very_mvc.js"></script>
<?php $body_content = ob_get_clean(); ?>

<?php require(ROOT . "/views/php_sql_1/template/template.php"); ?>