<?php $css = "/formations_consultants/design/css/php_sql_1/mvc_code.css"; ?>
<?php $title = "PHP / SQL (1) | Un peu de code"; ?>
<?php ob_start(); ?>

<?php include("template/header.php")?>

    <div class="main">

        <?php include("template/nav.php")?>

        <div class="content">
            <p>On reprend l'architecture de base vue <a href="router.php?action=see_mvc" target="_blank">ici</a>.</p>
            <p>Voici le résultat attendu : <a href="router.php?action=go_to_my_project" target="_blank">Le petit site sympathique</a></p>
            <p>Et voilà le code :</p>
            <h3>index.php</h3>
            <pre class="php_code">
<strong>&lt;?php</strong>
<span class="comment">/* Quand on accède au site on va automatiquement sur cette page
 * Cette page s'occupe ensuite de nous rediriger au bon endroit
 */</span>

<em>require</em> "controllers/controller.php";

<strong>if</strong> (<em>isset</em>(<mark>$_GET["action"]</mark>)) {
    <mark>$action</mark> = <em>htmlspecialchars</em>(<mark>$_GET["action"]</mark>); <span class="comment">// Petite fonction de sécurité</span>

    <strong>switch</strong>(<mark>$action</mark>) {
    <strong>case</strong> "see_view_1":
        seeView1();
        <strong>break</strong>;

    <strong>case</strong> "see_view_2":
        seeView2();
        <strong>break</strong>;

    <strong>default</strong>:
        <em>echo</em> "Erreur 404";
        <strong>break</strong>;
    }
} <strong>else</strong> {
    seeView1();
}
            </pre>

            <h3>controllers/controller.php</h3>
            <pre class="php_code">
<strong>&lt;?php</strong>
<strong>function</strong> seeView1() {
    <em>require</em> "views/view_1.php";
}

<strong>function</strong> seeView2() {
    <mark>$name</mark> = "Bob";
    <em>require</em> "views/view_2.php";
}

            </pre>

            <h3>views/view_1.php</h3>
            <pre class="html_code">
<strong>&lt;!DOCTYPE</strong> html<strong>&gt;</strong>
<strong>&lt;html&gt;</strong>
<strong>&lt;head&gt;</strong>
    <strong>&lt;meta</strong> <em>charset=</em><mark>"utf-8"</mark><strong>&gt;</strong>
    <strong>&lt;title&gt;</strong>Le petit site sympathique<strong>&lt;/title&gt;</strong>
<strong>&lt;/head&gt;</strong>

<strong>&lt;body&gt;</strong>
    <strong>&lt;h1&gt;</strong>Le petit site sympathique<strong>&lt;/h1&gt;</strong>

    <strong>&lt;p&gt;&lt;a</strong> <em>href=</em><mark>"index.php?action=see_view_2"</mark><strong>&gt;</strong>Lien vers la page 2<strong>&lt;/a&gt;&lt;/p&gt</strong>;
<strong>&lt;/body&gt;</strong>
<strong>&lt;/html&gt;</strong>
            </pre>

            <h3>views/view_2.php</h3>
            <pre class="html_code">
<strong>&lt;!DOCTYPE</strong> html<strong>&gt;</strong>
<strong>&lt;html&gt;</strong>
<strong>&lt;head&gt;</strong>
    <strong>&lt;meta</strong> <em>charset=</em><mark>"utf-8"</mark><strong>&gt;</strong>
    <strong>&lt;title&gt;</strong>Le petit site sympathique<strong>&lt;/title&gt;</strong>
<strong>&lt;/head&gt;</strong>

<strong>&lt;body&gt;</strong>
    <strong>&lt;h1&gt;</strong>Salut <span class="php_strong">&lt;?php</span> <span class="php_em">echo</span> <span class="php_mark">$name</span>; <span class="php_strong">?&gt;</span>&lt;/h1&gt;</strong>

    <strong>&lt;p&gt;&lt;a</strong> <em>href=</em><mark>"index.php?action=see_view_1"</mark><strong>&gt;</strong>Lien vers la page 1<strong>&lt;/a&gt;&lt;/p&gt</strong>;
<strong>&lt;/body&gt;</strong>
<strong>&lt;/html&gt;</strong>
            </pre>
        </div>
    </div>

<?php $body_content = ob_get_clean(); ?>

<?php require(ROOT . "/views/php_sql_1/template/template.php"); ?>