
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
        /**{border: 1px white solid;}*/
        body {
            background: url("img/land.png");
        }
        .content {
            width: 1000px;
            height: 600px;
            margin:auto;
        	background: black url('img/cavern<?php echo $_SESSION['i']?>.jpg') no-repeat;
        	background-size: cover;
        	color: white;
        	font-size: 20px;
        }
        .rep {
        	width: 500px;
        	margin-left: 200px;
        	margin-top: 100px;
        }
        form {
            width: 400px;
        }
        img[src*=Platon] {
            margin-top: 20px;
        	width: 300px;
            height: 200px;
        }
        input[src*=Torche]:hover {
          box-shadow: 12px 12px 100px orange;
        }
        input[type='image'] {
        	width: 250px;
        }
        input[type='image']:hover {
        	text-shadow: 6px 6px 5px orange;
        }
        .form {
            display: flex;
        	margin-left: 10px;
        	width: 700px;
        }
        h3 {
            margin-left: 100px;
            padding-top: 50px;
        }
        </style>
	</head>
	<body>
        <div class='content'>
            <?php
    		$QN = $content[$_SESSION['i']];
            ?>
            <div>
                <h3><?php echo $QN[0]; ?><br /></h3> <!-- Afficher la question -->
            	<div class='form'>
                    <img src="img/PlatonCloud.png">
    		        <div class='rep'><p>
    		        	<form method="post" action=<?php $action=($_SESSION['i']==$_SESSION['nbr_Q'])?"Algo.php":"QN.php"; echo $action;?>>
    				       <input type="radio" name=<?php echo "Q".$_SESSION['i'];?> value="R1" id="R1" required/> <label for="R1"><?php echo $QN[1]; ?></label><br />
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
        </div>
	</body>
</html>