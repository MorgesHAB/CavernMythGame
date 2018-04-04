
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
        *{border: 1px white solid;}
        body {
        	background: black url('img/caverne3.jpg') no-repeat;
        	background-size: 100%;
        	color: white;
        	font-size: 20px;
        }
        div {
        	display : flex;
        	height: 500px;
        	margin-left: 40px;
        }
        .rep {
        	width: 700px;
        	padding-left: 200px;
        	padding-top: 100px;
        }
        img {
        	
        	margin-right: 20px;
        	width: 400px;
        }
        input[type='image'] {
        	width: 250px;
        }
        input[type='image']:hover {
        	text-shadow: 6px 6px 5px orange;
        }
        .form {
        	flex-direction: column;
        	margin-left: 10px;
        	width: 700px;
        }
        </style>
	</head>
	<body>
        <?php
		$QN = $content[$_SESSION['i']];
        ?>
        <div>
        	<img src="img/Paton.jpg">
        	<div class='form'>
	        	<h3><?php echo $QN[0]; ?><br /></h3> <!-- Afficher la question -->
		        <div class='rep'><p>
		        	<form method="post" action=<?php $action=($_SESSION['i']==$_SESSION['nbr_Q'])?"Algo.php":"QN.php"; echo $action;?>>
				       <input type="radio" name=<?php echo "Q".$_SESSION['i'];?> value="R1" id="R1" checked/> <label for="R1"><?php echo $QN[1]; ?></label><br />
				       <input type="radio" name=<?php echo "Q".$_SESSION['i'];?> value="R2" id="R2" /> <label for="R2"><?php echo $QN[2]; ?></label><br />
				       <input type="radio" name=<?php echo "Q".$_SESSION['i'];?> value="R3" id="R3" /> <label for="R3"><?php echo $QN[3]; ?></label><br />
				       <input type="radio" name=<?php echo "Q".$_SESSION['i'];?> value="R4" id="R4" /> <label for="R4"><?php echo $QN[4]; ?></label><br />
				       <br /><br /><br /><input type="image" src="img/TorcheFeu.png">
				   	</form>
				</p></div>
			</div>
		</div>

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