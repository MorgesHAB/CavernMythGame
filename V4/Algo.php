<!--  
    Algorithme & gestion de l'affichage

    Date:       Avril 2018
    Auteurs :   Lionel soz
-->
<?php 
    session_start();

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
    // Tant de point avec réponse 1, 2, 3, 4, etc.
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
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
        <title>Myth Cavern Game</title>
        <style>
        /*body{background: url('img/caverne2.jpg');}*/
        body {
          background: url("img/land.png");
        }
        .content {
            background: url('img/<?php
                if ($score/$total>=0.75) echo "Out";
                elseif ($score/$total>=0.5) echo "Out_almost";
                elseif ($score/$total>=0.25) echo "Out_difficult";
                else echo "Dead";  
                ?>.jpg') no-repeat;
            background-size: cover;
            width: 1000px;
            height: 600px;
            margin:auto;
        }
        h1 {
            color: white;
            text-shadow: 2px 2px 30px black;
            font-size: 30px;
            width: 500px;
            margin-left: 100px;
            margin-top: 150px;
        }
        p {
            color: white;
            margin-top: 100px;
            margin-left: 20px;
            text-shadow: 2px 2px 2px black;
        }
        a:visited, a {
            color: #c2d7f9;
        }
        h3 {
            margin-left: 300px;
            margin-top: 100px;
            color: orange;
            text-shadow: 2px 2px 30px #decaf7;
        }
        img[src*=Platon] {
            margin-top: 20px;
            width: 300px;
            height: 200px;
        }
        .jugement {
            display: flex;
        }
        .foot {
            display: flex;
        }
        </style>
	</head>
	<body>
        <div class='content'>
            <div class="jugement">
                <img src="img/PlatonCloud.png">
                <h1><?php
                // Affichage des différentes sorties en fonction de sa "note"
                if ($score/$total>=0.75) {
                    echo "Bravo tes réponses m'ont permis de voir que tu méritais de sortir de l'ignorance ! Alors va hors de la caverne et n'y reviens plus !";
                }
                elseif ($score/$total>=0.5) {
                    echo "Malheureusment tes réponses ne m'ont pas permis de t'emmener hors de la caverne, néanmoins admire le soleil qui est un avant goût de ce qui t'attend. Encore un petit effort et tu arriveras à voir la réalité de ce monde";
                }
                elseif ($score/$total>=0.25) {
                    echo "Tu es encore loin de la sortie de la caverne, mais ne perds pas espoir !";
                }
                else {
                    echo "Malheureusement tes réponses ne m'ont pas permis de t'emmener au dehors de la caverne...";
                }
                ?></h1>
            </div>
            <div class='foot'>
                <p><?php // Affichage du ratio du joueur
                echo "Votre note est de ".number_format($score*100/$total,0)." % selon vos réponses données<br />";
                ?></p>
                <h3><a href="index.php">Retourner au point de départ</a></h3>
            </div>
        </div>
	</body>
</html>