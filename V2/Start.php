<!-- Importer les questions et réponses -->
<?php 
    session_start();
    $_SESSION['i']=1;
    include('Declare_Question_Reponse.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
        <title>Myth Cavern Game</title>
        <style>
        body {
            color: #5b3a05;
            background: url("img/entrée_de_lacaverne.jpg");
            background-size: 100%;
            background-repeat: no-repeat;
        }
        form
        {
            width: 25%;
            margin: auto;
            color:#5b3a05;
            text-shadow:6px 6px black 10px;
            font-size: 50px;
        }
        h2 {
            font-size: 100px;
        }
        </style>
	</head>
	<body>
        <script>alert("Attention, votre naviguateur est entrain de lutter contre un malware platonicien qui essaie de pirater vos données !")</script>
        <h2>Par ici, la terre est hostile. Il est encore temps de rebrousser chemin</h2>
        <p>
          <form method="post" action="Accueil.php">
            <label for="nom">Si tu décides de continuer, dis moi comment les gens te nomment  </label><input type="text" name="nom" id=nom>
            <input type="image" src="img/torchefeu.jpg" value="submit">
          </form>
        </p>
	</body>
</html>