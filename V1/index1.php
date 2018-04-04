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
        /*form
        {
            width: 25%;
            margin: auto;
        }*/
        </style>
	</head>
	<body>
        <h2>Bienveue sur le jeu du mythe de la caverne</h2>
        <p>
          <form method="post" action="Accueil.php">
            <label for="nom">Entre ton nom ! </label><input type="text" name="nom" id=nom>
            <input type="submit">
          </form>
        </p>
	</body>
</html>