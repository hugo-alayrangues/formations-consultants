<?php $css = "/formations_consultants/design/css/php_sql_2/use_template.css"; ?>
<?php $title = "PHP / SQL (2) | Template"; ?>
<?php ob_start(); ?>

<?php include("template/header.php")?>

    <div class="main">

        <?php include("template/nav.php")?>

        <div class="content">
            <p>La plupart du temps sur un site certains éléments des pages sont les mêmes partout.</p>
            <p>On va voir ici comment éviter de faire des copier-coller inutiles sur chaque page.</p>
            <p>
                L'idée de base est de créer une page type appelée "template" qui va définir la structure de toutes
                les autres pages qui l'utilisent.
            </p>

            <h3>Template</h3>
            <h4>template.php</h4>
            <p>Vous pouvez créer ce fichier dans un dossier "template" lui-même placé dans le dossier "views".</p>
            <pre class="html_code">
<strong>&lt;!DOCTYPE html&gt;</strong>
<strong>&lt;html&gt;</strong>

<strong>&lt;head&gt;</strong>
    &lt;meta charset="utf-8"/&gt;
    <span class="comment">&lt;!-- &lt;link rel="stylesheet" href=<span class="php_strong">&lt;?php</span> <span class="php_em">echo</span> "template.css"; <span class="php_strong">?&gt;</span>&gt; --&gt;
    &lt;!-- &lt;link rel="stylesheet" href=<span class="php_strong">&lt;?php</span> <span class="php_em">echo</span> <span class="php_mark">$css</span>; <span class="php_strong">?&gt;</span>&gt; --&gt;</span>
    &lt;title&gt;<span class="php_strong">&lt;?php</span> <span class="php_em">echo</span> <span class="php_mark">$title</span>; <span class="php_strong">?&gt;</span>&lt;/title&gt;
<strong>&lt;/head&gt;</strong>

<strong>&lt;body&gt;</strong>

    <span class="php_strong">&lt;?php</span> <span class="php_em">echo</span> <span class="php_mark">$body_content</span>; <span class="php_strong">?&gt;</span>

<strong>&lt;/body&gt;</strong>

<strong>&lt;/html&gt;</strong>
            </pre>

            <h4>home.php</h4>
            <p>On va juste faire quelques modifications pour utiliser le template :</p>
            <pre class="html_code">
<span class="php_strong">&lt;?php</span> <span class="php_mark">$title</span> = "Le petit site sympathique | Accueil"; <span class="php_strong">?&gt;</span>

<span class="php_strong">&lt;?php</span> <span class="php_em">ob_start</span>(); <span class="php_strong">?&gt;</span>

    &lt;h1>Le petit site sympathique&lt;/h1&gt;
    &lt;h2>Bienvenue à toi, admin sympathique&lt;/h2&gt;

    &lt;p&gt;&lt;a href="index.php?action=see_users_list"&gt;Liste des utilisateurs&lt;/a&gt;&lt;/p&gt;
    &lt;p&gt;&lt;a href="index.php?action=see_add_user"&gt;Ajouter un utilisateur&lt;/a&gt;&lt;/p&gt;

<span class="php_strong">&lt;?php</span> <span class="php_mark">$body_content</span> = <span class="php_em">ob_get_clean</span>(); <span class="php_strong">?&gt;</span>

<span class="php_strong">&lt;?php</span> <span class="php_em">require</span>("views/template/template.php"); <span class="php_strong">?&gt;</span>
            </pre>

            <h3>Include</h3>
            <p>
                Pour le moment on a juste mis en place le template pour éviter de devoir réécrire toutes les balises
                HTML récurrentes. On peut donc se concentrer uniquement sur le contenu de la page.
            </p>
            <p>
                Mais même dans ce contenu certaines choses vont se répéter. Le menu de navigation fait partie de ces
                éléments que l'ont va devoir remettre sur chaque page.
            </p>
            <p>Il serait dommage de devoir le copier-coller sur chaque page.</p>
            <p>On va donc le mettre quelque part, tout seul, et l'appeler quand on en a besoin</p>
            <p>
                Cela nous permettra d'avoir un code beaucoup plus facile à modifier : si votre site a 10 pages et
                que vous avez copié-collé votre menu sur chaque page, le jour où il faudra faire une modification vous
                devrez la faire 10 fois.
            </p>

            <h4>nav.php</h4>
            <p>Vous pouvez placer ce fichier dans le dossier "template" que nous avons créé juste avant.</p>
            <p>Là on fabrique juste notre menu de navigation :</p>
            <pre class="html_code">
<strong>&lt;nav&gt;</strong>
    <strong>&lt;a</strong> <em>href=</em><mark>"index.php?action=see_home"</mark><strong>&gt;</strong>Accueil<strong>&lt;/a&gt;</strong>
    <strong>&lt;a</strong> <em>href=</em><mark>"index.php?action=see_users_list"</mark><strong>&gt;</strong>Liste des utilisateurs<strong>&lt;/a&gt;</strong>
    <strong>&lt;a</strong> <em>href=</em><mark>"index.php?action=see_add_user"</mark><strong>&gt;</strong>Ajouter un utilisateur<strong>&lt;/a&gt;</strong>
<strong>&lt;/nav&gt;</strong>
            </pre>

            <h4>home.php</h4>
            <p>On remplace les liens vers les autres pas notre nouveau menu :</p>
            <pre class="html_code">
<span class="php_strong">&lt;?php</span> <span class="php_mark">$title</span> = "Le petit site sympathique | Accueil"; <span class="php_strong">?&gt;</span>

<span class="php_strong">&lt;?php</span> <span class="php_em">ob_start</span>(); <span class="php_strong">?&gt;</span>

    &lt;h1>Le petit site sympathique&lt;/h1&gt;
    &lt;h2>Bienvenue à toi, admin sympathique&lt;/h2&gt;

    <span class="php_strong">&lt;?php</span> <span class="php_em">include</span>("template/nav.php")<span class="php_strong">?&gt;</span>

<span class="php_strong">&lt;?php</span> <span class="php_mark">$body_content</span> = <span class="php_em">ob_get_clean</span>(); <span class="php_strong">?&gt;</span>

<span class="php_strong">&lt;?php</span> <span class="php_em">require</span>("views/template/template.php"); <span class="php_strong">?&gt;</span>
            </pre>

            <p>
                Voilà, vous n'avez plus qu'à appliquer ces modifications sur toutes vos pages, et vous aurez une gestion
                centralisée de votre menu de navigation.
            </p>
            <p>
                <strong>Important :</strong> pour vérifier que votre page est bien construite, regardez votre code depuis
                le navigateur (rappel: clic droit, afficher le code source)
            </p>
            <p>
                Une dernière chose, à la place de mettre <strong>session_start()</strong> en haut de chaque page,
                il peut être judicieux de le mettre juste en haut du template (ou dans index.php).
            </p>
        </div>
    </div>

<?php $body_content = ob_get_clean(); ?>

<?php require(ROOT . "/views/php_sql_2/template/template.php"); ?>