<?php $css = "/formations_consultants/design/css/php_sql_2/home.css"; ?>
<?php $title = "PHP / SQL (2) | Home"; ?>
<?php ob_start(); ?>

<?php include("template/header.php")?>

<div class="main">

    <?php include("template/nav.php")?>

    <div class="content">
        <p>Salut</p>
    </div>
</div>

<?php $body_content = ob_get_clean(); ?>

<?php require(ROOT . "/views/php_sql_2/template/template.php"); ?>