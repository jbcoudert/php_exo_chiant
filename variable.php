 <!-- VARIABLE -->
 <!-- Ouvrir le terminal dans le dossier ou se trouve ce fichier. -->
 <!-- Entrer la commande suivante: php -S 127.0.0.1:8080 -->
 <!-- Dans votre navigateur utiliser l'adresse 127.0.0.1:8080 -->
 
 <a href="https://apprendre-php.com/tutoriels/tutoriel-6-les-variables.html" target="_blank" class="text-center"><h2>PHP - Les variables</h2></a>
 
 <section class="variable">
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

<!-- <h4>Exercice 1</h4> -->
<!-- Créer une variable nom et l'initialiser avec la valeur de votre choix. Afficher son contenu. -->
<?php

    // $nom = "jb";
    // echo $nom; 

?>

<!-- <h4>Exercice 2</h4> -->
<!-- Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. -->
<!-- Attention age est de type entier. Afficher leur contenu. -->

<?php

    // $nom = "coud";
    // $prenom = "jb";
    // $age = 23; 
    
    // echo $nom;
    // echo '<br/>';
    // echo $prenom;
    // echo '<br/>';
    // echo $age;

?>

<!-- <h4>Exercice 3</h4> -->
<!-- Créer une variable km. L'initialiser à 1. Afficher son contenu. -->
<!-- Changer sa valeur par 3. Afficher son contenu. -->
<!-- Changer sa valeur par 125. Afficher son contenu. -->

<?php

    // $km = 1;
    // echo $km . '<br/>';
    // $km2 = 3;
    // $km = $km2;
    // echo $km . '<br/>';
    // $km3 = 125;
    // $km = $km3;
    // echo $km;

?>

<!-- <h4>Exercice 4</h4> -->
<!-- Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix. -->
<!-- Les afficher. -->

<?php

    // $str = 'texte';
    // '</br>';
    // $int = 12;
    // '</br>';
    // $float = 1.5;
    // '</br>';
    // $bool = true;
    // '</br>';
    // $total = $str . '<br/>' . $int . '<br/>' . $float . '<br/>' . $bool;
    // '</br>';
    // echo $total;

?>

<!-- <h4>Exercice 5</h4> -->
<!-- Créer une variable de type float. L'initialiser à 1. Afficher son type. -->
<!-- Changer sa valeur par 4.8 et afficher son contenu. -->

<?php

    // $float_cinq = 1;
    // '</br>';
    // var_dump($float_cinq);
    // '</br>';
    // $float_cinq = 4.8;
    // '</br>';
    // var_dump($float_cinq);

?>

<!-- <h4>Exercice 6</h4> -->
<!-- Créer une variable nom et l'initialiser avec la valeur de votre choix. -->
<!-- Afficher : "Bonjour" + nom + ", comment vas tu ?". -->

<?php

    // $nom = "coud";

    // $bj = "bonjour" . " " . $nom . " " . ", comment vas tu?";
    
    // echo $bj;

?>


<!-- <h4>Exercice 7</h4> -->
<!-- Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier. -->
<!-- Afficher : "Bonjour" + nom + prenom + ",tu as" + age + "ans". -->

<?php

    // $nom = 'coud';
    // $prenom = 'jb';
    // $age = 23;
    // $bj = "bonjour" . " " . $nom . " " . $prenom . " " . ", tu as" . " " . $age . " " . "ans.";
    // echo $bj;

?>


<!-- <h4>Exercice 8</h4> -->
<!-- Créer 3 variables. -->
<!-- Dans la première mettre le résultat de l'opération 3 + 4. -->
<!-- Dans la deuxième mettre le résultat de l'opération 5 * 20. -->
<!-- Dans la troisième mettre le résultat de l'opération 45 / 5. -->
<!-- Afficher le contenu des variables. -->

<?php

    // $sum = 3 + 4;
    // $tot_sum = "la somme de 3 + 4 est " . $sum . '<br/>';
    // echo $tot_sum ;
    // $prod = 5 * 20;
    // $tot_prod = "le produit de 5 x 20 est " . $prod . '<br/>';
    // echo $tot_prod ;
    // $div = 45 / 5;
    // $tot_div = "le produit de 45 / 5 est " . $div . '<br/>';
    // echo $tot_div ;

?>



</section><!-- /variable -->