<?php 
$Résultat="le résultat s'affiche ici";
if (isset($_POST['calculer'])){
	
	if (!empty($_POST['Nombre1']) AND!empty($_POST['Nombre2']) AND !empty($_POST['ordinateur'])){
		$Nombre1=$_POST['Nombre1'];
		$Nombre2=$_POST['Nombre2'];
		$ordinateur=$_POST['ordinateur'];
		
		if (ctype_digit($Nombre1) && ctype_digit($Nombre2)){
			
			switch($ordinateur){
				case 'add':
					$resultat = $Nombre1+$Nombre2;
					break;
				case 'sous':
					$resultat = $Nombre1-$Nombre2;
					break;
				case 'mult':
					$resultat = $Nombre1*$Nombre2;
					break;
				case 'div':
					$resultat = $Nombre1/$Nombre2;
					break;
				case 'mod':
					$resultat = $Nombre1%$Nombre2;
					break;
			}

		}
		
	}
}

?>

<!DOCTYPE html>
	<html lang="fr">
	<head>
		<title>formulaire</title>
		<meta charset="utf-8">
	</head>
	<body>
		<div class="calculette">
			<form method="POST">
				<label for="Nombre1">Nombre1</label>
				<input type="text" name="Nombre1"></br>
				<label for="Nombre2">Nombre2</label>
				<input type="text" name="Nombre2"></p>
				<label for="ordinateur">opérateur</label>
				<select name="ordinateur" value="choisir l'operateur">
					<option value="add">+</option>
					<option value="sous">-</option>
					<option value="mult">*</option>
					<option value="div">/</option>
					<option value="mod">%</option>
				</select></br>
				<input type="submit" value="calculer" name="calculer">
		
			</form>
		</div>
		<div>
			<hr>
			<?php
			
				if(isset($resultat)){
					echo $resultat;}
	
			?>
		</div>
		
	</body>
	</html>