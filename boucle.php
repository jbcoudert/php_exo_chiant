<!-- BOUCLE -->
<section class="loop">

<a href="https://apprendre-php.com/tutoriels/tutoriel-10-les-structures-de-contrle-les-boucles.html" target="_blank"><h2>PHP - Les boucles</h2></a>

<h4>Exercice 1</h4>
<!-- Créer une variable et l'initialiser à 0. -->
<!-- Tant que cette variable n'atteint pas 10, il faut : -->

    <!-- l'afficher -->
    <!-- l'incrémenter -->

    <?php

        $var = 0;
        while ($var < 10) {
            $var ++ ;
            echo $var . '<br/>';
        }

    ?>


<h4>Exercice 2</h4>
<!-- Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre aléatoire compris en 1 et 100. -->
<!-- Tant que la première variable n'est pas supérieur à 20 : -->

    <!-- multiplier la première variable avec la deuxième -->
    <!-- afficher le résultat -->
    <!-- incrémenter la première variable -->

    <?php

        $a = 0;
        $b = rand(1, 100);
        while ($a < 20) {
            $a ++;
            echo "la variable a est égale à " . $a . "<br/>";
            $c = $a * $b ;
            echo $c . '<br/>';
        }

    ?>



<h4>Exercice 3</h4>
<!-- Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre aléatoire compris en 1 et 100. -->
<!-- Tant que la première variable n'est pas inférieur ou égale à 10 : -->

    <!-- la première variable avec la deuxième -->
    <!-- afficher le résultat -->
    <!-- décrémenter la première variable -->
        <?php

            $a = 100;
            $b = rand(1, 100);
            while ($a > 10) {
                $a --;
                $c = $a / $b;
                echo $c . '<br/>';
            }

        ?>


<h4>Exercice 4</h4>
<!-- Créer une variable et l'initialiser à 1. -->
<!-- Tant que cette variable n'atteint pas 10, il faut : -->

    <!-- l'afficher -->
    <!-- l'incrementer de la moitié de sa valeur -->

    <?php

        $a = 1;
        while ($a < 10) {
            $a += $a/2;
            echo $a . '<br/>';   
        }                        

    ?>



<h4>Exercice 5</h4>
<!-- En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque. -->

    <?php

        $arr = array('O', 'n', ' ', 'y', ' ', 'a', 'r', 'r', 'i', 'v', 'e', ' ', 'p', 'r', 'e', 's', 'q', 'u', 'e');
        foreach ($arr as $value) {
            echo $value . '<br/>';                      
        }

    ?>

<h4>Exercice 6</h4>
<!-- En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon. -->

    <?php

        for ($i=20; $i >= 0 ; $i--) { 
            echo "C'est presque bon.";
        }

    ?>


<h4>Exercice 7</h4>
<!-- En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout. -->
    <?php

        for ($i=0; $i < 100 ; $i += 15) { 
            echo "On tient le bon bout.";
        }

    ?>
    

<h4>Exercice 8</h4>
<!-- En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!. -->

    <?php

        for ($i=200; $i >= 0 ; $i -= 12) { 
            echo "Enfin !!!!";
        }

    ?>


</section><!-- /loop -->