<?php $css = "/formations_consultants/design/css/php_sql_1/php_first_steps.css"; ?>
<?php $title = "PHP / SQL (1) | PHP - Premiers pas"; ?>
<?php ob_start(); ?>

<?php include("template/header.php")?>

    <div class="main">

        <?php include("template/nav.php")?>

        <div class="content">
            <section>
                <h3>Insérer du code PHP dans une page</h3>
                <pre class="php_code">
<strong>&lt;?php</strong> <em>echo</em> "Hello World !"<span class="semicolon">;</span> <strong>?&gt;</strong>
            </pre>
                <p><?php echo "Hello World !"; ?></p>
            </section>
            <section class="comments">
                <h3>Les commentaires</h3>
                <pre class="php_code">
<span class="comment">// Commentaire sur une ligne</span>

<span class="comment">
    /* Commentaire
     * sur plusieurs
     * lignes
     */
</span>
                </pre>
                <p class="warning">Les commentaires sont extrêmement importants !</p>
            </section>
        </div>
    </div>

<?php $body_content = ob_get_clean(); ?>

<?php require(ROOT . "/views/php_sql_1/template/template.php"); ?>