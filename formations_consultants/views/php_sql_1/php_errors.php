<?php $css = "/formations_consultants/design/css/php_sql_1/php_errors.css"; ?>
<?php $title = "PHP / SQL (1) | Les erreurs"; ?>
<?php ob_start(); ?>

<?php include("template/header.php")?>

    <div class="main">

        <?php include("template/nav.php")?>

        <div class="content">
            <p><a href="router.php?action=see_error_page" target="_blank">Page avec une erreur</a></p>
            <p>Ce qu'il faut faire :</p>
            <ul>
                <li>Prendre le temps de lire l'erreur (même si c'est en anglais)</li>
                <li>Si on trouve pas, copier-coller l'erreur dans Google</li>
            </ul>

            <h3 id="tools">Outils de base pour débuguer un programme</h3>
            <ul>
                <li>echo</li>
                <li>var_dump(...)</li>
            </ul>

            <h4>echo</h4>
            <pre class="php_code">
<strong>&lt;?php</strong>
    <mark>$nb</mark> = 10;

    <mark>$week</mark> = 14;

    <strong>if</strong> (<mark>$nb</mark> > 20) {
        <mark>$week</mark> = <mark>$week</mark> / 2;
    }

    <em>echo</em> "Nombre de jours dans la semaine : " . <mark>$week</mark>;
<strong>?&gt;</strong>
            </pre>
            <?php
            $nb = 10;

            $week = 14;

            if ($nb > 20) {
                $week = $week / 2;
            }

            echo "Nombre de jours dans la semaine : " . $week;
            ?>

            <p>Le résultat n'est pas celui attendu</p>
            <p>> On débugue : </p>

            <pre class="php_code">
<strong>&lt;?php</strong>
    <mark>$nb</mark> = 10;

    <mark>$week</mark> = 14;

    <span class="debug"><em>echo</em> "Etape 1 &lt;br&gt;";</span>

    <strong>if</strong> (<mark>$nb</mark> > 20) {
        <span class="debug"><em>echo</em> "Etape 2 &lt;br&gt;";</span>
        <mark>$week</mark> = <mark>$week</mark> / 2;
    }

    <span class="debug"><em>echo</em> "Etape 3 &lt;br&gt;";</span>

    <em>echo</em> "Nombre de jours dans la semaine : " . <mark>$week</mark>;
<strong>?&gt;</strong>
            </pre>
            <?php
            $nb = 10;

            $week = 14;

            echo "Etape 1 <br>";

            if ($nb > 20) {
                echo "Etape 2 <br>";
                $week = $week / 2;
            }

            echo "Etape 3 <br>";

            echo "Nombre de jours dans la semaine : " . $week;
            ?>

            <p>On voit tout de suite qu'il manque l'étape 2, donc que l'on n'est pas passé dans le <strong>if</strong></p>
            <p>> On modifie la condition du <strong>if</strong> et c'est bon</p>

            <h4>var_dump(...)</h4>
            <pre class="php_code">
<strong>&lt;?php</strong>
    <mark>$nb</mark> = 5;

    <em>echo</em> <mark>$nb</mark>;

    var_dump(<mark>$nb</mark>)
<strong>?&gt;</strong>
            </pre>
            <?php
            $nb = 5;

            echo $nb;

            var_dump($nb);
            ?>

            <h4>Un dernier truc...</h4>
            <pre class="php_code">
<strong>&lt;?php</strong> die(); <strong>?&gt;</strong>
            </pre>
            <p>Arrête l'exécution du programme</p>
        </div>
    </div>

<?php $body_content = ob_get_clean(); ?>

<?php require(ROOT . "/views/php_sql_1/template/template.php"); ?>