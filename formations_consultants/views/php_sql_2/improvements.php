<?php $css = "/formations_consultants/design/css/php_sql_2/home.css"; ?>
<?php $title = "PHP / SQL (2) | Home"; ?>
<?php ob_start(); ?>

<?php include("template/header.php") ?>

    <div class="main">

        <?php include("template/nav.php") ?>

        <div class="content">
            <p>
                Dans le cours précédent nous sommes arrivés à ça :
                <a href="router.php?action=go_to_my_project" target="_blank">Le petit site sympathique</a>
            </p>
            <p>
                Maintenant le but du jeu va être d'arriver à ça :
                <a href="router.php?action=go_to_my_project_2" target="_blank">Le petit site sympathique (amélioré)</a>
            </p>
            <h3>Premières modifications, pour se chauffer</h3>
            <ul>
                <li>Changez le contenu des 2 pages</li>
                <li>Changez le nom des pages et des fonctions :
                    <ul>
                        <li>Dans index.php :
                            <ul>
                                <li><strong>"see_view_1"</strong> --> <strong>"see_home"</strong></li>
                                <li><strong>"see_view_2"</strong> --> <strong>"see_users_list"</strong></li>
                            </ul>
                        <li>Dans controller.php :
                            <ul>
                                <li><strong>seeView1()</strong> --> <strong>seeHome()</strong></li>
                                <li><strong>seeView2()</strong> --> <strong>seeUsersList()</strong></li>
                            </ul>
                        <li>Dans le dossier "views" :
                            <ul>
                                <li><strong>view_1.php</strong> --> <strong>home.php</strong></li>
                                <li><strong>view_2.php</strong> --> <strong>users_list.php</strong></li>
                            </ul>
                    </ul>
                </li>
            </ul>
            <p>
                De manière générale, prenez l'habitude de donner des noms qui décrivent ce que fait la fonction (ou
                ce que contient la page), plutôt que des noms génériques.
            </p>
        </div>
    </div>

<?php $body_content = ob_get_clean(); ?>

<?php require(ROOT . "/views/php_sql_2/template/template.php"); ?>