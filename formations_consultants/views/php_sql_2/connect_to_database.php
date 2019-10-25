<?php $css = "/formations_consultants/design/css/php_sql_2/php_code.css"; ?>
<?php $title = "PHP / SQL (2) | Se connecter à une BDD"; ?>
<?php ob_start(); ?>

<?php include("template/header.php")?>

    <div class="main">

        <?php include("template/nav.php")?>

        <div class="content">
            <p>
                Maintenant que la BDD a été créée et un peu remplie, il faut la connecter à notre site pour pouvoir
                récupérer et afficher ce qu'il y a dedans.

            <h3>model.php</h3>
            <pre class="php_code">
<strong>&lt;?php</strong>

<strong>function</strong> dbConnect()
{
    <strong>try</strong>
    {
        <mark>$db</mark> = <strong>new</strong> PDO('mysql:host=localhost;dbname=my_project_2;charset=utf8', 'root', '');
        <strong>return</strong> <mark>$db</mark>;
    }

    <strong>catch</strong>(Exception <mark>$e</mark>)
    {
        <em>die</em>('Erreur : '.<mark>$e</mark>->getMessage());
    }
}
            </pre>
            <strong>Attention pour ceux qui utilisent MAMP c'est :</strong>
            <pre class="php_code">
<mark>$db</mark> = <strong>new</strong> PDO('mysql:host=localhost;dbname=my_project_2;charset=utf8', 'root', 'root');
            </pre>
            <p>
                Et mettez le bon nom pour la base de données (ici il y a dbname=my_project_2 mais vous avez peut-être
                mis un autre nom pour votre BDD.
            </p>
        </div>
    </div>

<?php $body_content = ob_get_clean(); ?>

<?php require(ROOT . "/views/php_sql_2/template/template.php"); ?>