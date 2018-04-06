<!-- Importer les questions et réponses -->
<?php 
    session_start();
    $_SESSION['i']=1;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
    <title>Myth Cavern Game</title>
        <style>
        /**{border: 1px white solid;}*/
        body {
          background: url("img/land.png");
        }
        .content {
          width: 1000px;
          height: 600px;
          margin:auto;
          font-size: 20px;
          color: white;
          text-shadow: 10px 10px 10px black;
          background: url("img/prison.jpg") center no-repeat;
          background-size: cover;
        }
        p {
          margin: 30px;
        }
        img[src*=Platon] {
          width: 400px;
        }
        img[src*=torche] {
          margin-left: 100px;
        }
        img[src*=torche]:hover, input[src*=torche]:hover {
          box-shadow: 12px 12px 100px orange;
        }
        input[type*=text] {
          background: url('img/fire.jpg') 2px;
          color: white;
          font-size: 15px;
        }
        img[src*=lampe] {
          width: 100px;
          height: 75px;
          margin-top: 250px;
        }
        /*Apparition de Platon*/
        .Lampe {
          width: 100px;
          margin-top: 50px;
          display: flex;
          margin-left: 70px;
        }
        #Platon {
            display:none;
        }
        .Lampe:hover #Platon {
            display:flex;
        }
        #Platon:hover {
            display: block;
        }
        </style>
	</head>
	<body>
    <div class='content'>
      <?php
      // Tant que le joueur n'a pas entré son nom
      if(!isset($_POST['nom']) OR $_POST['nom']== NULL) { ?>
        <h2>Bienvenue dans la caverne de Platon</h2>
        <p>
          <form method="post" action="index.php">
            <label for="nom">Si tu décides de commencer l'aventure, dis moi comment les gens te nomment  </label><input type="text" name="nom" id=nom required>
            <input type="image" src="img/torchefeu.jpg" value="submit">
          </form>
        </p>
      <?php }
      // Une fois qu'il a entré son nom
      else { ?>
        <p><?php echo "Tu as osé t'aventurer au fond de la caverne <em>".htmlspecialchars($_POST['nom'])."</em>"; ?> </p>
        <p>Dans cette caverne, il fait très sombre, alors prends garde à veiller sur ta torche qui doit toujours t'accompagner. Prends la toujours avec toi. Elle éclairera ton chemin.</p>
        <div class="Lampe">
             <img src="img/lampe.png"> 
            <div id="Platon">
              <div>
                <img src="img/PlatonNuage.png">
                <p>Eh toi là prends ta torche et suit moi, je vais t'emmener à la vérité...</p>
              </div>
             <a href="QN.php"><img src="img/torchefeu.jpg"></a>
            </div>
        </div>  
      <?php } ?>
    </div>
	</body>
</html>