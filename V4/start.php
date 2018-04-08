<!-- 
  Date:       Avril 2018
  Auteurs :   Lionel soz
  Importer les questions et réponses 
-->
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
        .nom {
          margin-top: 100px;
        }
        img[src*=Platon] {
          width: 400px;
        }
        input[src*=Torche] {
          margin-left: 650px;
          margin-top: 150px;
          width: 200px;  
        }
        img[src*=Torche] {
          width: 200px; 
          margin-left: 100px;
        }
        img[src*=Torche]:hover, input[src*=Torche]:hover {
          box-shadow: 12px 12px 100px orange;
        }
        input[type*=text] {
          background: #86a4d6;
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
        <h3>Regarde autour de toi ! Tu es enfermé dans une caverne avec d'autres prisonniers</h3>
        <p class='nom'>
          <form method="post" action="start.php">
            <label for="nom">Si tu décides de commencer ta quête de la vérité, dis moi comment les gens te nomment   </label><input type="text" name="nom" id=nom required>
            <input type="image" src="img/Torche.png" value="submit">
          </form>
        </p>
        <div id='astuce'>Retiens bien cela, la torche est ton guide, elle éclairera toujours ton chemin</div>
      <?php }
      // Une fois qu'il a entré son nom
      else { ?>
        <p><?php echo "Tu souhaites sortir de la caverne et découvrir la vérité sur ton monde <strong><em>".htmlspecialchars($_POST['nom'])."</em></strong> ?"; ?> </p>
        <p>Si tel est le cas, libère le génie qui te servira de guide lors de ta quête de vérité</p>
        <div class="Lampe">
             <img src="img/lampe.png"> 
            <div id="Platon">
              <div>
                <img src="img/PlatonCloud.png">
                <p>Merci de m'avoir libéré de ma lampe <?php echo htmlspecialchars($_POST['nom']); ?>, pour te remercier, je vais t'emmener vers la réalité de ce monde ! Commence par prendre la torche si tu veux y voir clair</p>
              </div>
             <a href="QN.php"><img src="img/Torche.png"></a>
            </div>
        </div>  
      <?php } ?>
    </div>
	</body>
</html>