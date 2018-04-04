<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
        <style>
        body
        {
          background: url("img/golum.jpg");
          background-repeat:no-repeat;
          background-size: 200%


        }
        p
        {
          color:#5853e2;
          text-shadow: 6px 6px black 10px;
          font-size: 50px;
        }
        </style>
	</head>
	<body>     
        <p>
          <?php
            echo "Tu as osé t'aventurer au fond de la caverne ".$_POST['nom'];
          ?>
          <p>Prends la torche et pars au plus vite. Si tu ne te dépêches pas, tu risques de ne jamais ressortir. Ici, l'esprit des gens est maipulé. Aller, prends la torche et vas-t-en !</p>
          <p><a href="QN.php"><img src="img/torchefeu.jpg" style="width: 20%"></a></p>

        </p>
	</body>
</html>