<?php

$db = new PDO("mysql:host=localhost;dbname=exo_chiant_php_yann", 'root', 'plop');

?>

<!-- INSERT INTO `exo` (`id`, `consigne`, `comment`, `code`, `resultat`) VALUES (NULL, 'Creer une variable nom et l\'initialiser avec la valeur de votre choix. Afficher son contenu.', 'J\'ai cree une variable qui a comme valeur une chaine de caractere et je l\'ai appele avec un echo', '//$nom = \"jb\";\r\n//echo $nom; ', 'echo $nom; '); -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="static/css/style.css">

    <title>php</title>
</head>
<body>

    <main>
        
        <h1 class="text-center mt-5">Introduction à PHP</h1>
    <div class="btnGroup d-flex justify-content-center">
        <div class="btn-group">
        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            PHP - Les variables
        </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#heading1">Exercice 1</a>
                <a class="dropdown-item" href="#heading2">Exercice 2</a>
                <a class="dropdown-item" href="#heading3">Exercice 3</a>
                <a class="dropdown-item" href="#heading4">Exercice 4</a>
                <a class="dropdown-item" href="#heading5">Exercice 5</a>
                <a class="dropdown-item" href="#heading6">Exercice 6</a>
                <a class="dropdown-item" href="#heading7">Exercice 7</a>
                <a class="dropdown-item" href="#heading8">Exercice 8</a>
            </div>
        </div>
        <div class="btn-group">
        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            PHP - Les Conditions
        </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Exercice 1</a>
                <a class="dropdown-item" href="#">Exercice 2</a>
                <a class="dropdown-item" href="#">Exercice 3</a>
                <a class="dropdown-item" href="#">Exercice 4</a>
                <a class="dropdown-item" href="#">Exercice 5</a>
                <a class="dropdown-item" href="#">Exercice 6</a>
                <a class="dropdown-item" href="#">Exercice 7</a>
                <a class="dropdown-item" href="#">Exercice 8</a>
            </div>
        </div>
        <div class="btn-group">
        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            PHP - Les Boucles
        </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Exercice 1</a>
                <a class="dropdown-item" href="#">Exercice 2</a>
                <a class="dropdown-item" href="#">Exercice 3</a>
                <a class="dropdown-item" href="#">Exercice 4</a>
                <a class="dropdown-item" href="#">Exercice 5</a>
                <a class="dropdown-item" href="#">Exercice 6</a>
                <a class="dropdown-item" href="#">Exercice 7</a>
                <a class="dropdown-item" href="#">Exercice 8</a>
            </div>
        </div>
        <div class="btn-group">
        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            PHP - Les Tableaux (ou array)
        </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Exercice 1</a>
                <a class="dropdown-item" href="#">Exercice 2</a>
                <a class="dropdown-item" href="#">Exercice 3</a>
                <a class="dropdown-item" href="#">Exercice 4</a>
                <a class="dropdown-item" href="#">Exercice 5</a>
                <a class="dropdown-item" href="#">Exercice 6</a>
                <a class="dropdown-item" href="#">Exercice 7</a>
                <a class="dropdown-item" href="#">Exercice 8</a>
                <a class="dropdown-item" href="#">Exercice 9</a>
                <a class="dropdown-item" href="#">Exercice 10</a>
            </div>
        </div>
        <div class="btn-group">
        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            PHP - Les Dates
        </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Exercice 1</a>
                <a class="dropdown-item" href="#">Exercice 2</a>
                <a class="dropdown-item" href="#">Exercice 3</a>
                <a class="dropdown-item" href="#">Exercice 4</a>
                <a class="dropdown-item" href="#">Exercice 5</a>
                <a class="dropdown-item" href="#">Exercice 6</a>
                <a class="dropdown-item" href="#">Exercice 7</a>
                <a class="dropdown-item" href="#">Exercice 8</a>
            </div>
        </div>
    
    </div>

        
        <?php require "variable.php"; ?>

        <?php require "condition.php"; ?>

        <?php require "boucle.php"; ?>

        <?php require "tableau.php"; ?>
        
        <!-- DATE -->
        <section class="date">

             <a href="https://www.php.net/manual/fr/function.date.php" target="_blank"><h2>PHP - Les dates</h2></a>

            <h4>Exercice 1</h4>
            <!-- Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016) -->

                <?php

                    $date = date_create('27-11-2019');
                    echo date_format($date, 'd/m/Y');
                ?>

            <h4>Exercice 2</h4>
            <!-- Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16) -->

                <?php

                    $date = date_create('27-11-2019');
                    echo date_format($date, 'd-m-Y');

                ?>
          

            <h4>Exercice 3</h4>
            <!-- Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016) -->

                <?php

                    $date = date_create('27-11-2019');
                    echo date_format($date, 'l jS F Y');

                ?>
          

            <h5>Bonus</h5>
            <!-- Bonus : Le faire en français. -->

                <?php
                    
                    $date = date('Y-m-d');
                    setlocale(LC_TIME, "fr_FR.utf8", "fra");
                    echo strftime("%A %d %B %G");                    

                ?>

            <h4>Exercice 4</h4>
            <!-- Afficher le timestamp du jour. -->
            <!-- Afficher le timestamp du mardi 2 août 2016 à 15h00. -->
                <?php

                    date_default_timezone_set('UTC + 1');
                    echo date("h:i:sa");

                ?>
          

            <h4>Exercice 5</h4>
            <!-- 5 Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016. -->

                <?php


                    // $datedeb= isset($_POST['date deb'])?$_POST['date deb']:'2019-11-27';
                    // $datefin=  isset($_POST['date fin'])?$_POST['date fin']:'2016-05-16';

                    // //Conversion en DATE
                    // $dat_datedeb=date_create($datedeb);
                    // $dat_datefin= date_create($datefin);

                    // //Calcul :
                    // $interval =date_diff($dat_datedeb, $dat_datefin);
                    // $nbjour= $interval->format("Il y a %a jours d'écart.");
                    // //--------- Affichage ----------------
                    // echo " <br><strong>Date deb : </strong> ".$datedeb;
                    // echo " <br><strong>Date fin : </strong> ".$datefin;
                    // echo " <br><strong>nb jour:</strong>  ".$nbjour;

                    $now = time(); 
                    $date2 = strtotime("2016-05-16");
                    $datediff = $now - $date2;
                    setlocale(LC_TIME, "fr_FR.utf8", "fra");
                    echo "Il y a " . round($datediff / (60 * 60 * 24)) . " jours de différence entre aujourd'hui et le " . date('m/d/Y', $date2) . '<br/>' ;
                    // echo "Il y a " . round($datediff / (60 * 60 * 24)) . " jours de différence entre aujourd'hui et le " . date('m/d/Y', $date2) ;

                ?>
          

            <h4>Exercice 6</h4>
            <!-- Afficher le nombre de jour dans le mois de février de l'année 2016. -->

                <?php

                    $mois = mktime( 0, 0, 0, 2, 1, 2016 );
                    setlocale(LC_TIME, 'fr_FR.utf-8', 'fra');
                    echo strftime("Le mois de ".date("F Y",$mois)." possède ".date("t",$mois)." jours");

                ?>

            <h4>Exercice 7</h4>
            <!-- Afficher la date du jour + 20 jours. -->

                <?php

                    echo date('Y-m-d', strtotime("+20 days"));

                ?>
          

            <h4>Exercice 8</h4>
            <!-- Afficher la date du jour - 22 jours -->

                <?php

                    echo date('Y-m-d', strtotime("-22 days"));

                ?>

            <h4>Exercice FINAL</h4>
            <!-- Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année. -->
            <!-- En fonction des choix, l'afficher dans un calendrier -->

        </section>

    </main>

</body>
<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="node_modules/parallax-js/dist/parallax.js"></script>
<!-- <script src="node_modules/gsap-ssr/TweenMax.js"></script>
<script src="node_modules/gsap-ssr/TweenLite.js"></script>
<script src="node_modules/gsap-ssr/CSSPlugin.js"></script> -->
<script src="node_modules/gsap-ssr/src/minified/TweenMax.min.js"></script>
<script src="static/js/script.js"></script>
</html>