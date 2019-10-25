<?php $css = "/formations_consultants/design/css/php_sql_2/sql_queries.css"; ?>
<?php $title = "PHP / SQL (2) | Requêtes SQL"; ?>
<?php ob_start(); ?>

<?php include("template/header.php")?>

    <div class="main">

        <?php include("template/nav.php")?>

        <div class="content">
            <p>Maintenant que l'on s'est connecté à la BDD, il faut apprendre à lui parler.</p>
            <p>Pour parler à une BDD on utilise le langage SQL.</p>

            <h3>Récupérer des données</h3>
            <h4>Sélectionner une colonne (= un champ) de toutes les lignes d'une table (ici la table "users")</h4>
            <pre class="php_code">
<mark>SELECT</mark> age <mark>FROM</mark> <em>users</em>
            </pre>
            <h4>Sélectionner plusieurs colonnes de toutes les lignes d'une table</h4>
            <pre class="php_code">
<mark>SELECT</mark> name, first_name <mark>FROM</mark> <em>users</em>
            </pre>
            <h4>Sélectionner toutes les colonnes de toutes les lignes d'une table</h4>
            <pre class="php_code">
<mark>SELECT</mark> * <mark>FROM</mark> <em>users</em>
            </pre>
            <h4>Sélectionner une (ou plusieurs) ligne(s) en fonction d'un critère</h4>
            <pre class="php_code">
<mark>SELECT</mark> * <mark>FROM</mark> <em>users</em> <mark>WHERE</mark> first_name = 'Jack'
            </pre>
            <h4>Sélectionner une (ou plusieurs) ligne(s) en fonction de plusieurs critères</h4>
            <pre class="php_code">
<mark>SELECT</mark> * <mark>FROM</mark> <em>users</em> <mark>WHERE</mark> first_name = 'Jack' <mark>AND</mark> age < 100
            </pre>
            <h4>Ordonner les lignes récupérées selon un critère</h4>
            <pre class="php_code">
<mark>SELECT</mark> * <mark>FROM</mark> <em>users</em> <mark>ORDER BY</mark> age
            </pre>
            <h4>Ordre décroissant</h4>
            <pre class="php_code">
<mark>SELECT</mark> * <mark>FROM</mark> <em>users</em> <mark>ORDER BY</mark> age <mark>DESC</mark>
            </pre>
            <h4>Sélectionner un certain nombre de lignes</h4>
            <pre class="php_code">
<mark>SELECT</mark> * <mark>FROM</mark> <em>users</em> <mark>LIMIT</mark> 0, 10
            </pre>
            <h4>Combinaison sélection + tri + limite</h4>
            <pre class="php_code">
<mark>SELECT</mark> * <mark>FROM</mark> <em>users</em> <mark>WHERE</mark> first_name = 'Jack' <mark>OR</mark> age < 100 <mark>ORDER BY</mark> age <mark>DESC</mark> <mark>LIMIT</mark> 0, 10
            </pre>

            <h3>Ajouter des données dans la BDD</h3>
            <pre class="php_code">
<mark>INSERT INTO</mark> <em>users</em>('name', 'first_name', 'age') <mark>VALUES</mark> ('Jones', 'Davy', 120)
            </pre>

            <h3>Modifier des données</h3>
            <pre class="php_code no_margin_bottom">
<mark>UPDATE</mark> <em>users</em> <mark>SET</mark> name = 'Salazar', first_name = 'Armando' <mark>WHERE id = 5</mark>
            </pre>
            <p><strong>N'oubliez pas le WHERE, si vous l'oubliez vous modifierez toute la table</strong></p>

            <h3>Supprimer des données</h3>
            <pre class="php_code no_margin_bottom">
<mark>DELETE FROM</mark> <em>users</em> <mark>WHERE</mark> name = 'Salazar'
            </pre>
            <p><strong>N'oubliez pas le WHERE, si vous l'oubliez vous supprimerez toute la table</strong></p>
        </div>
    </div>

<?php $body_content = ob_get_clean(); ?>

<?php require(ROOT . "/views/php_sql_2/template/template.php"); ?>