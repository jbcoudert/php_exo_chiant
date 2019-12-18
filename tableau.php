 <!-- TABLEAU -->
 <section class="array">
        
        <a href="https://apprendre-php.com/tutoriels/tutoriel-7-les-tableaux-ou-arrays.html" target="_blank"><h2>PHP - Les tableaux (ou array)</h2></a>

        <h4>Exercice 1</h4>
        <!-- #PHP - Les tableaux ##Exercice 1 Créer un tableau mois et l'initialiser avec les valeurs suivantes : -->

            <!-- janvier -->
            <!-- février -->
            <!-- mars -->
            <!-- avril -->
            <!-- mai -->
            <!-- juin -->
            <!-- juillet -->
            <!-- aout -->
            <!-- septembre -->
            <!-- octobre -->
            <!-- novembre -->
            <!-- décembre -->

            <?php

                $mois = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'sept', 'octobre', 'nov', 'dec');

            ?>


      

        <h4>Exercice 2</h4>
        <!-- Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau. -->
            <?php

                echo $mois[2];

            ?>
      
        <h4>Exercice 3</h4>
        <!-- Avec le tableau de l'exercice , afficher la valeur de l'index 5. -->

            <?php

                echo $mois[5];
                
            ?>

        <h4>Exercice 4</h4>
        <!-- ##Exercice 4 Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant. -->

            <?php

                $change = array( 7 => "août");
                $new_mois = array_replace($mois, $change);
                var_dump ($new_mois);

            ?>

        <h4>Exercice 4</h4>
        <!-- Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom. -->

            <?php

                $departement = array(
                    '01'=>'Ain',
                    '02'=>'Aisne',
                    '03'=>'Allier',
                    '04'=>'Alpes de Hautes-Provence',
                    '05'=>'Hautes-Alpes',
                    '06'=>'Alpes-Maritimes',
                    '07'=>'Ardèche',
                    '08'=>'Ardennes',
                    '09'=>'Ariège',
                    '10'=>'Aube',
                    '11'=>'Aude',
                    '12'=>'Aveyron',
                    '13'=>'Bouches-du-Rhône',
                    '14'=>'Calvados',
                    '15'=>'Cantal',
                    '16'=>'Charente',
                    '17'=>'Charente-Maritime',
                    '18'=>'Cher',
                    '19'=>'Corrèze',
                    '2A'=>'Corse-du-Sud',
                    '2B'=>'Haute-Corse',
                    '21'=>"Côte-d'Or",
                    '22'=>"Côtes d'Armor",
                    '23'=>'Creuse',
                    '24'=>'Dordogne',
                    '25'=>'Doubs',
                    '26'=>'Drôme',
                    '27'=>'Eure',
                    '28'=>'Eure-et-Loir',
                    '29'=>'Finistère',
                    '30'=>'Gard',
                    '31'=>'Haute-Garonne',
                    '32'=>'Gers',
                    '33'=>'Gironde',
                    '34'=>'Hérault',
                    '35'=>'Ille-et-Vilaine',
                    '36'=>'Indre',
                    '37'=>'Indre-et-Loire',
                    '38'=>'Isère',
                    '39'=>'Jura',
                    '40'=>'Landes',
                    '41'=>'Loir-et-Cher',
                    '42'=>'Loire',
                    '43'=>'Haute-Loire',
                    '44'=>'Loire-Atlantique',
                    '45'=>'Loiret',
                    '46'=>'Lot	Cahors',
                    '47'=>'Lot-et-Garonne',
                    '48'=>'Lozère	Mende',
                    '49'=>'Maine-et-Loire',
                    '50'=>'Manche',
                    '51'=>'Marne',
                    '52'=>'Haute-Marne',
                    '53'=>'Mayenne	Laval',
                    '54'=>'Meurthe-et-Moselle',
                    '55'=>'Meuse',
                    '56'=>'Morbihan',
                    '57'=>'Moselle',
                    '58'=>'Nièvre',
                    '59'=>'Nord',
                    '60'=>'Oise',
                    '61'=>'Orne',
                    '62'=>'Pas-de-Calais',
                    '63'=>'Puy-de-Dôme',
                    '64'=>'Pyrénées-Atlantiques',
                    '65'=>'Hautes-Pyrénées',
                    '66'=>'Pyrénées-Orientales',
                    '67'=>'Bas-Rhin',
                    '68'=>'Haut-Rhin',
                    '69'=>'Rhône',
                    '70'=>'Haute-Saône',
                    '71'=>'Saône-et-Loire',
                    '72'=>'Sarthe',
                    '73'=>'Savoie',
                    '74'=>'Haute-Savoie',
                    '75'=>'Paris',
                    '76'=>'Seine-Maritime',
                    '77'=>'Seine-et-Marne',
                    '78'=>'Yvelines',
                    '79'=>'Deux-Sèvres',
                    '80'=>'Somme',
                    '81'=>'Tarn',
                    '82'=>'Tarn-et-Garonne',
                    '83'=>'Var',
                    '84'=>'Vaucluse',
                    '85'=>'Vendée',
                    '86'=>'Vienne',
                    '87'=>'Haute-Vienne',
                    '88'=>'Vosges',
                    '89'=>'Yonne',
                    '90'=>'Territoire-de-Belfort',
                    '91'=>'Essonne',
                    '92'=>'Hauts-de-Seine',
                    '93'=>'Seine-Saint-Denis',
                    '94'=>'Val-de-Marne	Créteil',
                    '95'=>'Val-d’Oise'
                );

            ?>

        <h4>Exercice 6</h4>
        <!-- ##Exercice 6 Avec le tableau de l'exercice 5, afficher la valeur de l'index 59. -->

            <?php

                echo $departement[59];

            ?>
      

        <h4>Exercice 7</h4>
        <!-- Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims. -->

            <?php

                $change_ville = array( 51 => "Marne Reims");
                $new_ville = array_replace($departement, $change_ville);
                var_dump ($new_ville);
                // echo $departement[51] . $change_ville;

            ?>

        <h4>Exercice 8</h4>
        <!-- Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau. -->
            <?php

                foreach ($mois as $value) {
                echo $value . '<br/>';                      
                }

            ?>

        <h4>Exercice 9</h4>
        <!-- ##Exercice 9 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau. -->
                
            <?php

                foreach ($departement as $value) {
                echo $value . '<br/>';                      
                }

            ?>
    

        <h4>Exercice 10</h4>
        <!-- 10 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés. -->
        <!-- Cela pourra être, par exemple, de la forme : "Le département" + nom_departement + "a le numéro" + num_departement -->

            <?php

                foreach ($departement as $cle => $value) {

                echo "Le département " . $value . " a le numéro " . $cle . '<br/>';      
                                
                }

            ?>
     

    </section><!-- /array -->