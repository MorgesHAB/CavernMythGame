<!--  
    Algorithme & gestion de l'affichage

    Date:       Avril 2018
    Auteurs :   Lionel soz
-->
<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
        <title>Myth Cavern Game</title>
        <style>
        /*body{background: url('img/caverne2.jpg');}*/
        h1 {
            color: orange;
            text-shadow: 2px 2px 30px red;
        }
        </style>
	</head>
	<body>
        <!--<h1>Algorithme</h1>
        <h1>Tu sors de la Caverne ! </h1>
        <a href="https://morgeshab.wordpress.com/">Ne clique pas ici</a>
        <p> Affichage des données de réponses enregistrées => prêt à l'analyse (algorithme) </p> -->
        <h1><?php

        // Méthode de comptage de points
        // Insértion des résulats dans un tableau afin d'y compter le nombre d'élément plus tard
        $result = array();
        for ($i=1; $i<=$_SESSION['nbr_Q']; $i++) { 
            if($i == $_SESSION['nbr_Q']) { 
                $result[$i] = $_POST['Q'.$i];
            }
            else {
                $result[$i] = $_SESSION['Q'.$i];
            }
        }
        // préparation au compatage
        $count = array_count_values($result);

        // Attribution des points au joueur
        $score = 0;
        // Tant de point avec réponse 1, 2, 3, 4, ect.
        //      Rep1    -->     0 pts
        //      Rep2    -->     1 pts
        //      Rep3    -->     2 pts
        //      Rep4    -->     3 pts
        //  $score += $count['R1'] * 0;  // Donc on peut enlever cette ligne de code...
        //  éviter les erreurs  // Ajout des points au score
        if (isset($count['R2'])) $score += $count['R2'] * 1;
        if (isset($count['R3'])) $score += $count['R3'] * 2;
        if (isset($count['R4'])) $score += $count['R4'] * 3;
        // Afficher le nombre de points récolter
        // echo $score;
        // En fonction du nombre de points total, afficher différents output selon un barème
        // nombre de points total possible avec toutes les questions
        $total = $_SESSION['nbr_Q'] * 3;
        // Affichage du ratio du joueur
        echo "Votre note ".number_format($score*100/$total,0)." %<br />";
        // Affichage des différentes sorties en fonction de sa "note"
        if ($score/$total>=0.75) {
            echo "Très bien, tu es un diciple de Socrate";
        }
        elseif ($score/$total>=0.5) {
            echo "Bien, continue sur cette lancée";
        }
        elseif ($score/$total>=0.25) {
            echo "Continue comme ça et tu verras la lumière du jour";
        }
        else {
            echo "Mets y plus d'effort si tu veux voir la réalité";
        }

        ?></h1>
	</body>
</html>