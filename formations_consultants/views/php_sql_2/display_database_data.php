<?php $css = "/formations_consultants/design/css/php_sql_2/display_database_data.css"; ?>
<?php $title = "PHP / SQL (2) | Afficher des données"; ?>
<?php ob_start(); ?>

<?php include("template/header.php")?>

    <div class="main">

        <?php include("template/nav.php")?>

        <div class="content">
            <p>
                On va ici voir comment on s'y prend pour arriver à afficher une liste d'utilisateurs comme
                <a href="router.php?action=go_to_my_project_2&page=see_users_list" target="_blank">ici</a>
            </p>

            <h3>controller.php</h3>
            <p>On rajoute quelques petits trucs dans notre contrôleur :</p>
            <ul>
                <li>L'appel du modèle (require "models...")</li>
                <li>Une variable qui contiendra le résultat de la requête SQL ($users)</li>
            </ul>
            <pre class="php_code">
<strong>&lt;?php</strong>

<em>require</em> "models/model.php";

<span class="comment">function seeHome() ...</span>

<strong>function</strong> seeUsersList() {
    <mark>$users</mark> = getUsers();
    <em>require</em> "views/users_list.php";
}
            </pre>

            <h3>model.php</h3>
            <p>On crée la fonction <strong>getUsers</strong> qui sera chargée de récupérer tous les utilisateurs dans la BDD :</p>
            <pre class="php_code">
 <strong>&lt;?php</strong>

<span class="comment">function dbConnect() ...</span>

<strong>function</strong> getUsers()
{
        <mark>$db</mark> = dbConnect();
        <mark>$req</mark> = <mark>$db</mark>-><em>query</em>("SELECT * FROM users");

        <strong>return</strong> <mark>$req</mark>;
}
            </pre>

            <h3>users_list.php</h3>
            <p>Il n'y plus qu'à afficher les utilisateurs comme vous le souhaitez :</p>
            <pre class="html_code">
<span class="comment">&lt;!DOCTYPE html&gt; ...</span>

<strong>&lt;body&gt;</strong>
    <strong>&lt;h1&gt;</strong>Liste des utilisateurs<strong>&lt;/h1&gt;</strong>

    <strong>&lt;ul&gt;</strong>
        <span class="php_strong">&lt;?php</span> <span class="php_strong">while</span> (<span class="php_mark">$user</span> = <span class="php_mark">$users</span>-><span class="php_em">fetch</span>()) { <span class="php_strong">?&gt;</span>
            <strong>&lt;li&gt;</strong><span class="php_strong">&lt;?php</span> <span class="php_em">echo</span> <span class="php_mark">$user["first_name"]</span> . " " . <span class="php_mark">$user["name"]</span> . " - " . <span class="php_mark">$user["age"]</span> . " ans"; <span class="php_strong">?&gt;</span><strong>&lt;/li&gt;</strong>
        <span class="php_strong">&lt;?php } ?&gt;</span>
    <strong>&lt;/ul&gt;</strong>

    <strong>&lt;p&gt;&lt;a</strong> <em>href=</em><mark>"index.php?action=see_home"</mark><strong>&gt;</strong>Retour à l'accueil<strong>&lt;/a&gt;&lt;/p&gt;</strong>
<strong>&lt;/body&gt;</strong>
            </pre>
        </div>
    </div>

<?php $body_content = ob_get_clean(); ?>

<?php require(ROOT . "/views/php_sql_2/template/template.php"); ?>