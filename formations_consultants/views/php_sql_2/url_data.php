<?php $css = "/formations_consultants/design/css/php_sql_2/url_data.css"; ?>
<?php $title = "PHP / SQL (2) | Données dans l'URL"; ?>
<?php ob_start(); ?>

<?php include("template/header.php")?>

    <div class="main">

        <?php include("template/nav.php")?>

        <div class="content">
            <p>On vient de voir que l'on pouvait passer des données les formulaires et les variables $_POST</p>
            <p>On va en profiter pour détailler le fonctionnement de $_GET (celui qu'on utilise dans index.php)</p>

            <h3>Envoyer une donnée</h3>
            <pre class="html_code">
<strong>&lt;a</strong> <em>href=</em><mark>"page_random.php<span class="ampersand">?</span>animal=pingouin"</mark>&gt;Lien vers une page random<strong>&lt;/a&gt;</strong>
            </pre>

            <h3>Envoyer plusieurs données</h3>
            <pre class="html_code">
<strong>&lt;a</strong> <em>href=</em><mark>"page_random.php<span class="ampersand">?</span>animal=pingouin<span class="ampersand">&</span>fruit=pomme"</mark>&gt;Lien vers une page random<strong>&lt;/a&gt;</strong>
            </pre>

            <h3>Récupérer les données</h3>
            <p>On se place dans le fichier <strong>random_page.php</strong></p>
            <pre class="php_code">
<strong>&lt;?php</strong>

<em>echo</em> "Le " . <mark>$_GET['animal']</mark> . " mange la " . <mark>$_GET['fruit']</mark>;
            </pre>

            <h3>Sécurité</h3>
            <p>L'URL est visible et <strong>modifiable</strong>.</p>
            <p>Donc un méchant peut écrire un truc pas bien pour notre site.</p>
            <p>Donc il faut protéger un minimum le truc, on fera donc plutôt ça :</p>
            <pre class="php_code">
<strong>&lt;?php</strong>

<mark>$animal</mark> = <em>htmlspecialchars</em>(<mark>$_GET['animal']</mark>);
<mark>$fruit</mark> = <em>htmlspecialchars</em>(<mark>$_GET['fruit']</mark>);

<em>echo</em> "Le " . <mark>$animal</mark> . " mange la " . <mark>$fruit</mark>;
            </pre>
        </div>
    </div>

<?php $body_content = ob_get_clean(); ?>

<?php require(ROOT . "/views/php_sql_2/template/template.php"); ?>