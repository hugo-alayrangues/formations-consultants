<?php $css = "/formations_consultants/design/css/php_sql_2/use_form.css"; ?>
<?php $title = "PHP / SQL (2) | Formulaires"; ?>
<?php ob_start(); ?>

<?php include("template/header.php")?>

    <div class="main">

        <?php include("template/nav.php")?>

        <div class="content">
            <p>
                Maintenant on va s'attaquer à la construction de
                <a href="router.php?action=go_to_my_project_2&page=see_add_user" target="_blank">cette page</a>
                (et de la fonctionnalité qui va avec)
            </p>

            <h3>add_user.php</h3>
            <p>On crée cette page dans le dossier "views".</p>
            <p>Tout est classique, il faut juste bien mettre les arguments suivants à la balise <strong>form</strong> :</p>
            <ul>
                <li><strong>method</strong></li>
                <li><strong>action</strong></li>
            </ul>
            <pre class="html_code">
<span class="comment">&lt;!DOCTYPE html&gt; ...</span>

<strong>&lt;body&gt;</strong>
&lt;h1&gt;Ajouter un utilisateur&lt;/h1&gt;

<strong>&lt;form</strong> <em>method=</em><mark>"post"</mark> <em>action=</em><mark>"index.php?action=add_user"</mark><strong>&gt;</strong>
    &lt;label&gt;
        Nom :
        &lt;input type="text" name="name" required>
    &lt;/label&gt;
    &lt;label&gt;
        Prénom :
        &lt;input type="text" name="first_name" required&gt;
    &lt;/label&gt;
    &lt;label&gt;
        Age :
        &lt;input type="number" name="age" required&gt;
    &lt;/label&gt;
    &lt;input type="submit" value="Ajouter"&gt;
&lt;/form&gt;

&lt;p&gt;&lt;a href="index.php?action=see_home">Retour à l'accueil&lt;/a&gt;&lt;/p&gt;
<strong>&lt;/body&gt;</strong>
            </pre>

            <h3>index.php</h3>
            <p>On rajoute juste l'action "add_user" :</p>
            <pre class="php_code">
<strong>case</strong> "add_user":
    addUser();
    <strong>break</strong>;
            </pre>

            <h3>controller.php</h3>
            <pre class="php_code">
<strong>function</strong> addUser() {
    <strong>if</strong> (<mark>$_POST["name"]</mark> <strong>&&</strong> <mark>$_POST["first_name"]</mark> <strong>&&</strong> <mark>$_POST["age"]</mark>) {

        <mark>$name</mark> = <em>htmlspecialchars</em>(<mark>$_POST["name"]</mark>);
        <mark>$first_name</mark> = <em>htmlspecialchars</em>(<mark>$_POST["first_name"]</mark>);
        <mark>$age</mark> = <em>htmlspecialchars</em>(<mark>$_POST["age"]</mark>);

        insertUser(<mark>$name</mark>, <mark>$first_name</mark>, <mark>$age</mark>);

        <em>require</em> "views/add_user_success.php";

    } <strong>else</strong> {
        <em>require</em> "views/add_user_fail.php";
    }
}
            </pre>

            <h3>model.php</h3>
            <p>
                Une petite nouveauté ici, comme on utilise des valeurs contenues dans des variables, il faut ajouter
                quelques trucs :
            </p>
            <pre class="php_code">
<strong>function</strong> insertUser(<mark>$name</mark>, <mark>$first_name</mark>, <mark>$age</mark>)
{
    <mark>$db</mark> = dbConnect();

    <mark>$req</mark> = <mark>$db</mark>-><em>prepare</em>("INSERT INTO users(name, first_name, age) VALUES(<span class="bindparam_var">:name</span>, <span class="bindparam_var">:first_name</span>, <span class="bindparam_var">:age</span>)");

    <mark>$req</mark>-><em>bindParam</em>(<span class="bindparam_var">"name"</span>, <mark>$name</mark>);
    <mark>$req</mark>-><em>bindParam</em>(<span class="bindparam_var">"first_name"</span>, <mark>$first_name</mark>);
    <mark>$req</mark>-><em>bindParam</em>(<span class="bindparam_var">"age"</span>, <mark>$age</mark>);

    <mark>$req</mark>-><em>execute</em>();
    <mark>$req</mark>-><em>closeCursor</em>();
}
            </pre>
        </div>
    </div>

<?php $body_content = ob_get_clean(); ?>

<?php require(ROOT . "/views/php_sql_2/template/template.php"); ?>