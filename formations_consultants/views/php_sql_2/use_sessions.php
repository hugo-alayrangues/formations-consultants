<?php $css = "/formations_consultants/design/css/php_sql_2/use_sessions.css"; ?>
<?php $title = "PHP / SQL (2) | Sessions"; ?>
<?php ob_start(); ?>

<?php include("template/header.php")?>

    <div class="main">

        <?php include("template/nav.php")?>

        <div class="content">
            <p>
                Les sessions vont nous permettre de créer des variables utilisables sur toutes les pages de notre site,
                sans avoir à les transférer via des formulaires ou des URL.
            </p>
            <p>Pour bien voir le fonctionnement des sessions, nous allons créer 3 pages :</p>
            <ul>
                <li>Une page sur laquelle nous créerons les variables de session</li>
                <li>Une autre sur laquelle on affichera les variables de session créées</li>
                <li>Une dernière qui permettra de fermer la session</li>
            </ul>

            <h3>create_session.php</h3>
            <p>On ouvre la session, puis on crée la/les variable(s) que l'on veut.</p>
            <p>
                <strong>Attention,</strong> session_start() doit être appelée avant d'afficher quoi que ce soit
                dans le navigateur (avant même !DOCTYPE html) :
            </p>
            <pre class="html_code">
<span class="php_strong">&lt;?php</span>

<span class="php_em">session_start</span>();

<span class="php_mark">$_SESSION["planet"]</span> = "Terre";

<span class="php_strong">?&gt;</span>

<strong>&lt;!DOCTYPE</strong> html<strong>&gt;</strong>
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;title&gt;Le petit site sympathique&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;h1&gt;Une variable de session a été créée&lt;/h1&gt;

&lt;p&gt;&lt;a href="index.php?action=see_manage_sessions"&gt;Gérer les session&lt;/a&gt;&lt;/p&gt;

&lt;/body&gt;

&lt;/html&gt;
            </pre>

            <h3>remove_session.php</h3>
            <p>Ici on va fermer la session active (et donc supprimer toutes les variables de session).</p>
            <p>Généralement c'est ce que l'on fait quand l'utilisateur appuie sur un bouton "Déconnexion"</p>
            <p>
                <strong>Attention,</strong> il faut toujours "appeler" la session avec <strong>session_start()</strong>
                avant de faire quoique ce soit dessus :
            </p>
            <pre class="html_code">
<span class="php_strong">&lt;?php</span>

<span class="php_em">session_start</span>();
<span class="php_em">session_destroy</span>();

<span class="php_strong">?&gt;</span>

<strong>&lt;!DOCTYPE</strong> html<strong>&gt;</strong>
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;title&gt;Le petit site sympathique&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;h1&gt;La session a été supprimée&lt;/h1&gt;

&lt;p&gt;&lt;a href="index.php?action=see_manage_sessions"&gt;Gérer les session&lt;/a&gt;&lt;/p&gt;

&lt;/body&gt;

&lt;/html&gt;
            </pre>

            <h3>manage_session.php</h3>
            <p>On n'a plus qu'à utiliser la variable créée juste avant :</p>
            <pre class="html_code">
<span class="php_strong">&lt;?php</span>

<span class="php_em">session_start</span>();

<span class="php_strong">?&gt;</span>

<strong>&lt;!DOCTYPE</strong> html<strong>&gt;</strong>
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;title&gt;Le petit site sympathique&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;h1&gt;Gestion des sessions&lt;/h1&gt;

<span class="php_strong">&lt;?php</span>
<span class="php_strong">if</span> (<span class="php_em">isset</span>(<span class="php_mark">$_SESSION["planet"]</span>)) { <span class="php_strong">?&gt;</span>
    <strong>&lt;p&gt;</strong>Nous habitons la planète <span class="php_strong">&lt;?php</span> <span class="php_em">echo</span> <span class="php_mark">$_SESSION["planet"]</span>; <span class="php_strong">?&gt;</span><strong>&lt;/p&gt;</strong>
<span class="php_strong">&lt;?php</span> } <span class="php_strong">?&gt;</span>

&lt;p&gt;&lt;a href="index.php?action=see_create_session"&gt;Créer une variable de session&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href="index.php?action=see_remove_session"&gt;Supprimer la session&lt;/a&gt;&lt;/p&gt;

&lt;p&gt;&lt;a href="index.php?action=see_home"&gt;Retour à l'accueil&lt;/a&gt;&lt;/p&gt;

&lt;/body&gt;

&lt;/html&gt;
            </pre>
            <p>
                C'est tout, il faut juste faire gaffe à bien mettre le <strong>session_start()</strong> en haut de
                chaque page où vous voulez utiliser une variable de session.
            </p>
        </div>
    </div>

<?php $body_content = ob_get_clean(); ?>

<?php require(ROOT . "/views/php_sql_2/template/template.php"); ?>