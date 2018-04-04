<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
        <style>
        body
        {
          background: url("img/puit.jpg");
        }
        p
        {
          color:#373a77;
          text-shadow: 6px 6px black 10px;
          font-size: 100px;
        }
        </style>
	</head>
	<body>     
        <p>
          <?php
            echo "Bienvenue dans la Caverne ".$_POST['nom'];
          ?>
          <p>Prends la torche et évade toi !</p>
          <p><a href="QN.php"><img src="img/torche.jpg"></a></p>
        </p>
	</body>
</html>