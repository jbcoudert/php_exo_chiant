<!-- CONDITION -->
<div class="back">

    <!-- <div class="slide one"> -->
        
        <a href="https://apprendre-php.com/tutoriels/tutoriel-9-les-structures-de-contrle-les-conditions.html" target="_blank"><h2>PHP - Les conditions</h2></a>
        
        <section class="condition">
        
        <img src="static/img/galaxie.jpg" class="img1" alt="">
             <!-- <img src="static/img/images.jpeg" class="img2" alt=""> -->
        <div class="accordion w-50 m-auto slide one" id="accordionExample">
        <?php
            $req = $db->query("SELECT * FROM exo");
        
            foreach($req as $row) {
                
        ?>
          <div class="card">
            <div class="card-header" id="heading<?php echo $row['id'] ?>">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $row['id'] ?>" aria-expanded="true" aria-controls="collapse<?php echo $row['id'] ?>">
                  Exercice <?php echo $row['id'] ?>
                </button>
              </h2>
            </div>
        
            <div id="collapse<?php echo $row['id'] ?>" class="collapse" aria-labelledby="heading<?php echo $row['id'] ?>" data-parent="#accordionExample">
              <div class="card-body">
                <h4>Consigne Exercice <?php echo $row['id'] ?> : <?php echo $row['consigne'] ?> </h4>
                <p><?php echo $row['comment'] ?></p>
                <p class="bg-dark text-white p-2 code">Le code que j'ai créer: <br> <?php echo nl2br($row['code']) ?></p>
                <p class="bg-primary text-white p-2 result">Le résultat : <br> <?php eval($row['resultat']) ?></p>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
</div>

<!-- </div> -->


<!-- <h4>Exercice 1</h4> -->
<!-- Les conditions ##Exercice 1 Créer une variable age et l'initialiser avec une valeur. -->
<!-- Si l'age est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur. -->

<?php

    // $age = 23;
    // if ($age >= 18) {
    //     echo ("Vous êtes majeur");
    // }
    // else {
    //     echo ("Vous êtes mineur");
    // }

?>

<!-- <h4>Exercice 2</h4> -->
<!-- Créer une variable IsEasy de type booléan et l'initialiser avec une valeur. -->
<!-- Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!. -->

<?php

    // $isEasy = true ;
    // if ($isEasy == true) {
    //     echo ("C'est facile!!!");
    // }
    // else {
    //     echo ("C'est difficile!!!");
    // }

?>


<!-- <h4>Exercice 3</h4> -->
<!-- Créer deux variables age et genre. La variable genre peut prendre comme valeur : -->

    <!-- Homme -->
    <!-- Femme -->

<!-- En fonction de l'âge et du genre afficher la phrase correspondante : -->

    <!-- Vous êtes un homme et vous êtes majeur -->
    <!-- Vous êtes un homme et vous êtes mineur -->
    <!-- Vous êtes une femme et vous êtes majeur -->
    <!-- Vous êtes une femme et vous êtes mineur -->

<!-- Gérer tous les cas. -->

<?php

    // $age = 18;
    // $genre = "Femme";
    // // $age2 = 45;
    // // $genre2 = "Femme";
    
    // if ($age >= 18 && $genre == 'Homme') {
    //     echo "Vous êtes un homme et vous êtes majeur";
    // } 
    // elseif ($age < 18 && $genre == 'Homme') {
    //     echo "Vous êtes un homme et vous êtes mineur";
    // }
    // elseif ($age >= 18 && $genre == 'Femme') {
    //     echo "Vous êtes une femme et vous êtes majeur";
    // }
    // else {
    //     echo "Vous êtes une femme et vous êtes mineur";
    // }

        // NE PAS PRENDRE

    // $totgenre = if ($genre == "Homme") {
    //     "Vous êtes un homme";
    // } else {
    //     "Vous êtes une femme";
    // } 

    // $tot_age = if ($age < 18) {
    //     "vous êtes mineur";
    // } else {
    //     "vous êtes majeur";
    // }

    // echo $tot_genre . "et" . $tot_age;
?>

<!-- <h4>Exercice 4</h4> -->
<!-- L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. -->
<!-- Cette échelle va de 1 à 9. -->
<!-- Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante. -->

    <!-- 1	Micro-séisme impossible à ressentir. -->
    <!-- 2	Micro-séisme impossible à ressentir mais enregistrable par les sismomètres. -->
    <!-- 3	Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti. -->
    <!-- 4	Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats. -->
    <!-- 5	Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes. -->
    <!-- 6	Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre. -->
    <!-- 7	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance. -->
    <!-- 8	Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres. -->
    <!-- 9	Séisme capable de tout détruire sur une très vaste zone. -->

<!-- Gérer tous les cas et utiliser autre chose que des if else -->
    <?php

        // $un = "Micro-séisme impossible à ressentir.";
        // $deux = "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        // $trois = "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        // $quatre = "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
        // $cinq = "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
        // $six = "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
        // $sept = "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
        // $huit = "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        // $neuf = "Séisme capable de tout détruire sur une très vaste zone.";

        // $magn_min = 1;
        // $magn_max = 9;
        // // echo rand($magn_min, $magn_max);

        // switch (rand($magn_min, $magn_max)) {
        //     case 1:
        //         echo ("Echelle de 1 = " . $un);
        //         break;
        //     case 2:
        //         echo  ("Echelle de 2 = " . $deux);
        //         break;
        //     case 3:
        //         echo  ("Echelle de 3 = " . $trois);
        //         break;
        //     case 4:
        //         echo  ("Echelle de 4 = " . $quatre);
        //         break;
        //     case 5:
        //         echo  ("Echelle de 5 = " . $cinq);
        //         break;
        //     case 6:
        //         echo  ("Echelle de 6 = " . $six);
        //         break;
        //     case 7:
        //         echo  ("Echelle de 7 = " . $sept);
        //         break;
        //     case 8:
        //         echo  ("Echelle de 8 = " . $huit);
        //         break;
        //     case 9:
        //         echo  ("Echelle de 9 = " . $neuf);
        //         break;
        //     default:
        //         echo("aucun tremblement");
        //         break;
        // }

    ?>


<!-- <h4>Exercice 5</h4> -->
<!-- Traduire ce code avec des if et des else : -->

    <!--<?php

        // echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';

        // if ($maVariable != 'Homme') {
        //     echo "est une développeuse !!!";
        // } else {
        //     echo "est un développeur !!!";
        // }

    ?>-->

  

<!-- <h4>Exercice 6</h4> -->
<!-- Traduire ce code avec des if et des else : -->

<!--<?php

    // echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';

    // if ($monAge >= 18) {
    //     echo "Tu est majeur";
    // } else {
    //     echo "Tu n'est pas majeur";
    // }

?>-->



<!-- <h4>Exercice 7</h4> -->
<!-- Traduire ce code avec des if et des else : -->

<!--<?php

    // echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';

    // if ($maVariable == false) {
    //     echo "C'est pas bon !!!";
    // } else {
    //     echo "c'est bon !!";
    // }

?>-->



<!-- <h4>Exercice 8</h4> -->
<!-- Traduire ce code avec des if et des else : -->

<!--<?php

    // echo ($maVariable) ? 'cest ok !!' : 'cest null :D';

    // if ($maVariable != null) {
    //     echo "c'est ok!!";
    // } else {
    //     "c'est null :D";
    // }

?>-->



</section><!-- /condition -->