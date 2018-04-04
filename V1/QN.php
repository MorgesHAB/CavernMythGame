
<?php 
	session_start();
    include('Declare_Question_Reponse.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
        <title>Myth Cavern Game</title>
        <style>
        /*body{background: url('img/caverne2.jpg');}*/
        </style>
	</head>
	<body>
        <?php
		$QN = $content[$_SESSION['i']];
        ?>
        <form method="post" action=<?php $action=($_SESSION['i']==$_SESSION['nbr_Q'])?"Algo.php":"QN.php"; echo $action;?>>
		   <p>
		       <?php echo $QN[0]; ?><br />
		       <input type="radio" name=<?php echo "Q".$_SESSION['i'];?> value="R1" id="R1" /> <label for="R1"><?php echo $QN[1]; ?></label><br />
		       <input type="radio" name=<?php echo "Q".$_SESSION['i'];?> value="R2" id="R2" /> <label for="R2"><?php echo $QN[2]; ?></label><br />
		       <input type="radio" name=<?php echo "Q".$_SESSION['i'];?> value="R3" id="R3" /> <label for="R3"><?php echo $QN[3]; ?></label><br />
		       <input type="radio" name=<?php echo "Q".$_SESSION['i'];?> value="R4" id="R4" /> <label for="R4"><?php echo $QN[4]; ?></label><br /><br />
		       <input type="submit" value="Question suivante">
		   </p>
		</form>
		<?php
		// Enregistrement des données de chaque question dans la variable superglobale SESSION, 
		// étant donné que la var superglobale POST est enregistrée uniquement entre deux pages.
		if ($_SESSION['i']!=1) {
			$a=$_SESSION['i']-1;
		 	$_SESSION["Q".$a]=$_POST["Q".$a];
		 } 
		 // Question suivante
		 $_SESSION['i']+=1;
		?>
	</body>
</html>