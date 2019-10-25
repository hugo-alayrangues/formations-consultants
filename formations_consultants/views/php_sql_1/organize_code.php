<?php $css = "/formations_consultants/design/css/php_sql_1/organize_code.css"; ?>
<?php $title = "PHP / SQL (1) | Organiser son code - MVC"; ?>
<?php ob_start(); ?>

<?php include("template/header.php")?>

    <div class="main">

        <?php include("template/nav.php")?>

        <div class="content">
            <p>
                Jusqu'à présent, toutes les pages de code que l'on a faites servaient directement à afficher quelque chose à l'utilisateur,
                elles avaient toutes le même rôle.
            </p>
            <p>C'est normal, HTML et CSS sont des langages descriptifs et servent à ça, afficher des choses.</p>
            <p>Mais maintenant nous allons ajouter des opérations et des comportements particuliers à notre site.</p>
            <p>Certaines pages de code vont se retrouver avec un rôle bien particulier.</p>
            <p>Donc si l'on n'organise pas notre code, ça va rapidement être le <strong>bordel</strong>.</p>
            <h3>3 rôles se distinguent</h3>
            <div class="role">
                <div>
                    <h4><span class="first_letter">M</span>odèle</h4>
                    <p>
                        Les pages de code de cette catégorie seront consacrées à la gestion des données de la base de données (BDD).
                        On dit qu'elles font des <strong>requêtes</strong>.
                        Par exemple, elles s'occuperont de stocker des données au bon endroit dans la BDD.
                    </p>
                    <p>
                        Ces pages utiliseront principalement le langage SQL.
                    </p>
                </div>
                <div>
                    <h4><span class="first_letter">V</span>ue</h4>
                    <p>
                        Les pages de code de cette catégorie sont celles que nous avons déjà vues.
                        Elles s'occupent de ce que va voir l'utilisateur.
                    </p>
                    <p>
                        Ces pages utiliseront principalement le langage HTML (avec CSS et JS).
                    </p>
                </div>
                <div>
                    <h4><span class="first_letter">C</span>ontrôleur</h4>
                    <p>
                        Les pages de code de cette catégorie font le lien entre les pages "Modèle" et les pages "Vue".
                        Elles sont la partie intelligente de votre site. Souvent, leur travail est de demander des données
                        aux pages "Modèle", de les traiter (si besoin), puis de les passer aux pages "Vue" pour
                        qu'elles soient affichées.
                    </p>
                    <p>On utilisera <strong>uniquement</strong> du PHP dans ces pages.</p>
                </div>
            </div>
        </div>
    </div>

<?php $body_content = ob_get_clean(); ?>

<?php require(ROOT . "/views/php_sql_1/template/template.php"); ?>