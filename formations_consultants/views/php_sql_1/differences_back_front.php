<?php $css = "/formations_consultants/design/css/php_sql_1/differences_back_front.css"; ?>
<?php $title = "PHP / SQL (1) | Back, Front, End, Office"; ?>
<?php ob_start(); ?>

<?php include("template/header.php")?>

    <div class="main">

        <?php include("template/nav.php")?>

        <div class="content">

            <div id="office">
                <div class="front box">
                    <h3>Front office</h3>
                    <p>Partie utilisateur du site</p>
                    <form method="post" action="#" id="see_category_form">
                        <label>
                            Catégorie de photos : <br>
                            <select name="category">
                                <option value="animals">Animaux</option>
                                <option value="paysages">Paysages</option>
                                <option value="buildings">Bâtiments</option>
                            </select>
                            <input type="submit" value="Voir les photos">
                        </label>
                    </form>
                </div>
                <div class="back box">
                    <h3>Back office</h3>
                    <p>Partie administrateur du site</p>
                    <form method="post" action="#" id="new_category_form">
                        <label>
                            Ajouter une catégorie de photos : <br>
                            <input type="text" name="new_category" required>
                            <input type="submit" value="Valider">
                        </label>
                    </form>
                </div>
            </div>

            <div id="end">
                <div class="front box">
                    <h3>Front end</h3>
                    <p>Partie du code dédiée au design du site et à l'expérience utilisateur</p>
                    <p><strong>Attention, il ne s'agit pas du code de la partie utilisateur du site</strong></p>
                    <p>
                        Un développeur "Front end" s'occupera du design de <strong>tout</strong> le site
                        (que ce soit la partie utilisateur ou la partie administrateur).
                    </p>
                    <p>Langages principalement utilisés : CSS et JavaScript</p>
                </div>
                <div class="back box">
                    <h3>Back end</h3>
                    <p>Partie du code dédiée au fonctionnement du site et à la base de données</p>
                    <p><strong>Attention, il ne s'agit pas du code de la partie administrateur du site</strong></p>
                    <p>
                        Un développeur "Back end" s'occupera du fonctionnement de <strong>tout</strong> le site
                        (que ce soit la partie utilisateur ou la partie administrateur).
                    </p>
                    <p>Langages principalement utilisés : PHP et SQL</p>
                </div>
            </div>
        </div>
    </div>

<script src="/formations_consultants/design/js/php_sql_1/differences_back_front.js"></script>
<?php $body_content = ob_get_clean(); ?>

<?php require(ROOT . "/views/php_sql_1/template/template.php"); ?>