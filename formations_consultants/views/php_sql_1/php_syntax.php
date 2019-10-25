<?php $css = "/formations_consultants/design/css/php_sql_1/php_syntax.css"; ?>
<?php $title = "PHP / SQL (1) | PHP - Syntaxe"; ?>
<?php ob_start(); ?>

<?php include("template/header.php") ?>

    <div class="main">

        <?php include("template/nav.php") ?>

        <div class="content">

            <section>
                <h3>Variables</h3>
                <pre class="php_code">
<strong>&lt;?php</strong>
    <mark>$year</mark> = 2018; <span class="comment">// type : int</span>
    <mark>$pi</mark> = 3.14;   <span class="comment">// type : float</span>

    <mark>$last_name</mark> = "Alayrangues"; <span class="comment">// type : string</span>

    <mark>$sentence</mark> = "Je m'appelle Hugo"; <span class="comment">// Attention aux guillemets</span>

    <mark>$day</mark> = true;    <span class="comment">// type : bool</span>
    <mark>$night</mark> = false; <span class="comment">// type : bool</span>

    <mark>$nothing_for_the_moment</mark> = NULL; <span class="comment">// type : null</span>


    <span class="comment">// Affichage des variables</span>
    <em>echo</em> <mark>$sentence</mark> . " " . <mark>$last_name</mark> . " et on est en " . <mark>$year</mark> . "&lt;br&gt;";


    <span class="comment">// Pour les opérations de base, rien de particulier : + - / *</span>

    <mark>$year</mark>++; <span class="comment">// pareil que $year = $year + 1;</span>

    <em>echo</em> "Année suivante : " . <mark>$year</mark> . "&lt;br&gt;    <mark>$power</mark> = 3 ** 3;

    <mark>$modulo</mark> = 15 % 4;

    <em>echo</em> "3 ** 3 = " . <mark>$power</mark> . "&lt;br&gt;";
    <em>echo</em> "15 % 4 = " . <mark>$modulo</mark>;
<strong>?&gt;</strong>
                </pre>
                <?php
                $year = 2018; // type : int
                $pi = 3.14;   // type : float

                $last_name = "Alayrangues"; // type : string

                $sentence = "Je m'appelle Hugo"; // Attention aux guillemets

                $day = true;    // type : bool
                $night = false; // type : bool

                $nothing_for_the_moment = NULL; // type : null


                // Affichage des variables
                echo $sentence . " " . $last_name . " et on est en " . $year . "<br>";


                // Pour les opérations de base, rien de particulier : + - / *

                $year++; // pareil que $year = $year + 1;

                echo "Année suivante : " . $year . "<br>";

                $power = 3 ** 3;

                $modulo = 15 % 4;

                echo "3 ** 3 = " . $power . "<br>";
                echo "15 % 4 = " . $modulo;
                ?>
            </section>

            <section>
                <h3>Conditions</h3>
                <pre class="php_code">
<strong>&lt;?php</strong>
    <mark>$age</mark> = 21;

    <strong>if</strong> (<mark>$age</mark> >= 18) {
        <em>echo</em> "Majeur" ."&lt;br&gt;";
    } <strong>else</strong> {
        <em>echo</em> "Mineur" ."&lt;br&gt;";
    }


    <mark>$age</mark> = -5;

    <strong>if</strong> (<mark>$age</mark> < 0) {
        <em>echo</em> "Pas né" ."&lt;br&gt;";
    } <strong>elseif</strong> (<mark>$age</mark> >= 0 && <mark>$age</mark> < 18) {
        <em>echo</em> "Mineur" ."&lt;br&gt;";
    } <strong>else</strong> {
        <em>echo</em> "Majeur" ."&lt;br&gt;";
    }
    <span class="comment">
     /*
      * Liste des comparateurs :
      *     == (égalité)
      *     != (différence)
      *     <
      *     >
      *     <=
      *     >=
      *
      * Et pour les conditions multiples :
      *     && (ou AND)
      *     || (ou OR)
      */
    </span>
<strong>?&gt;</strong>
                </pre>
                <?php
                $age = 21;

                if ($age >= 18) {
                    echo "Majeur" . "<br>";
                } else {
                    echo "Mineur" . "<br>";
                }


                $age = -5;

                if ($age < 0) {
                    echo "Pas né" . "<br>";
                } elseif ($age >= 0 && $age < 18) {
                    echo "Mineur" . "<br>";
                } else {
                    echo "Majeur" . "<br>";
                }

                /*
                 * Liste des comparateurs :
                 *     == (égalité)
                 *     != (différence)
                 *     <
                 *     >
                 *     <=
                 *     >=
                 *
                 * Et pour les conditions multiples :
                 *     && (ou AND)
                 *     || (ou OR)
                 */
                ?>
            </section>

            <section>
                <h3>Boucles</h3>
                <h4>Boucle while</h4>
                <pre class="php_code">
<strong>&lt;?php</strong>
    <mark>$nb</mark> = 0;

    <strong>while</strong> (<mark>$nb</mark> < 10) {
        <mark>$nb</mark>++;
        <em>echo</em> <mark>$nb</mark> . "&lt;br&gt;";
    }
<strong>?&gt;</strong>
                </pre>
                <?php
                $nb = 0;

                while ($nb < 10) {
                    $nb++;
                    echo $nb . "<br>";
                }
                ?>
                <p class="warning">Attention aux boucles infinies !</p>
                <h4>Boucle for</h4>
                <pre class="php_code">
<strong>&lt;?php</strong>
    <strong>for</strong> (<mark>$i</mark> = 0; <mark>$i</mark> < 4; <mark>$i</mark>++) {
        <em>echo</em> "2étoiles";
    }

    <span class="comment">Truc : utilisation possible du modulo</span>
    <strong>for</strong> (<mark>$k</mark> = 0; <mark>$k</mark> < 15; <mark>$k</mark>++) {
        <em>echo</em> <mark>$k</mark> % 4 . "&lt;br&gt;";
    }
<strong>?&gt;</strong>
                </pre>
                <?php
                for ($i = 0; $i < 4; $i++) {
                    echo "2étoiles";
                }

                echo "<br><br>";

                echo "Truc : utilisation possible du modulo <br>";
                for ($k = 0; $k < 15; $k++) {
                    echo $k % 4 . "<br>";
                }
                ?>
            </section>

            <section>
                <h3>Tableaux</h3>
                <h4>Tableau numéroté</h4>
                <pre class="php_code">
<strong>&lt;?php</strong>
    <mark>$users</mark> = <strong>array</strong>("Bob", "Bab", "Bub", "Bib");

    <em>echo</em> <mark>$users</mark>[0] . "&lt;br&gt;"; <span class="comment">// Premier élément du tableau</span>
    <em>echo</em> <mark>$users</mark>[3] . "&lt;br&gt;"; <span class="comment">// Dernier élément du tableau</span>

    <span class="comment">// Parcours du tableau</span>
    <strong>foreach</strong> (<mark>$users</mark> <strong>as</strong> <mark>$user</mark>) {
        <em>echo</em> <mark>$user</mark> . "&lt;br&gt;";
    }
<strong>?&gt;</strong>
                </pre>
                <?php
                $users = array("Bob", "Bab", "Bub", "Bib");

                echo $users[0] . "<br>"; // Premier élément du tableau
                echo $users[3] . "<br>"; // Dernier élément du tableau

                echo "<br>";

                // Parcours du tableau
                echo "Parcours du tableau :" . "<br>";
                foreach ($users as $user) {
                    echo $user . "<br>";
                }
                ?>

                <h4>Tableau associatif</h4>
                <pre class="php_code">
<strong>&lt;?php</strong>
    <mark>$data</mark> = <strong>array</strong>(
        "name" <strong>=></strong> "Doe",
        "first_name" <strong>=></strong> "John",
        "age" <strong>=></strong> 25
    );

    <em>echo</em> <mark>$data</mark>["name"] . "&lt;br&gt;";
    <em>echo</em> <mark>$data</mark>["first_name"] . "&lt;br&gt;";

    <span class="comment">// Parcours du tableau</span>
    <strong>foreach</strong> (<mark>$data</mark> <strong>as</strong> <mark>$key</mark> <strong>=></strong> <mark>$value</mark>) {
        <em>echo</em> <mark>$key</mark> . " : " . <mark>$value</mark> . "&lt;br&gt;";
    }
<strong>?&gt;</strong>
                </pre>
                <?php
                $data = array(
                    "name" => "Doe",
                    "first_name" => "John",
                    "age" => 25
                );

                echo $data["name"] . "<br>";
                echo $data["first_name"] . "<br>";

                echo "<br>";

                // Parcours du tableau
                echo "Parcours du tableau :" . "<br>";
                foreach ($data as $key => $value) {
                    echo $key . " : " . $value . "<br>";
                }
                ?>
            </section>

            <section>
                <h3>Fonctions</h3>
                <pre class="php_code">
<strong>&lt;?php</strong>
    <strong>function</strong> onceUponATime(<mark>$sentence</mark>) {
        <em>echo</em> "Il était une fois, " . <mark>$sentence</mark> . "&lt;br&gt;";
    }

    onceUponATime("l'ISEP...");


    <strong>function</strong> squarePlusOne(<mark>$nb</mark>) {
        <strong>return</strong> <mark>$nb</mark> ** 2 + 1;
    }

    <mark>$result</mark> = squarePlusOne(3);
    <em>echo</em> <mark>$result</mark>;
<strong>?&gt;</strong>
                </pre>
                <?php
                function onceUponATime($sentence) {
                    echo "Il était une fois, " . $sentence . "<br>";
                }

                onceUponATime("l'ISEP...");

                function squarePlusOne($nb) {
                    return $nb ** 2 + 1;
                }

                $result = squarePlusOne(3);
                echo $result;
                ?>
            </section>

        </div>
    </div>

<?php $body_content = ob_get_clean(); ?>

<?php require(ROOT . "/views/php_sql_1/template/template.php"); ?>