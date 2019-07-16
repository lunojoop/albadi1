<?php

$tableau = array(
		array('Amy','Gueye','F','Senegal','PHP','asanaliou@gmail.com','29/06/1992','je suis un commentaire'),
		array('Amy', 'Gueye', 'F', 'Senegal', 'PHP', 'asanaliou@gmail.com', '29/06/1992', 'je suis un commentaire'),
		array('Amy', 'Gueye', 'F', 'Senegal', 'PHP', 'asanaliou@gmail.com', '29/06/1992', 'je suis un commentaire'),
		array('Amy', 'Gueye', 'F', 'Senegal', 'PHP', 'asanaliou@gmail.com', '29/06/1992', 'je suis un commentaire'));
	
	if(isset($_POST['Enregistrer'])){

		if (!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['genre']) AND !empty($_POST['pays']) AND !empty($_POST['langage']) AND !empty($_POST['email']) AND !empty($_POST['date_de_naissance']) AND !empty($_POST['commentaires'])){

		$prenom=$_POST['prenom'];
		$nom=$_POST['nom'];
		$genre=$_POST['genre'];
		$pays=$_POST['pays'];
		$langages=$_POST['langage']?$_POST['langage']:null;
		$email=$_POST['email'];
		$date_de_naissance=$_POST['date_de_naissance'];
		$commentaires=$_POST['commentaires'];
		foreach ($langages as $valeur ) {
			$langage = "$langage $valeur";
			array_push($tableau, array($prenom,$nom,$genre,$pays,$langage,$email,$date_de_naissance,$commentaires));
		}
		
	}
	else{
		echo "bonjour";
	}
}
?>
		
	
			
		

<!DOCTYPE html>
<html lang="fr">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="inscription.css">
</head>
<body>
	<form method="POST" action="">
		<div>
			<div>
				<label for="prenom"> Prenom
					<input type="text" name="prenom">
				</label></br>
			</div>
			<div>
				<label for="nom">Nom
					<input type="text" name="nom">
				</label></br></br>
			</div>
			<div>
				<label for="genre">Genre<input type="radio" name="genre">M<input type="radio" name="genre">F</label>
			</div>
			<div>
				<p>Pays<select name="pays" id="pays">
							<option value="Senegal">Sénégal</option>
							<option value="Gambie">Gambie</option>
							<option value="Guinée Bissau">Guinée Bissau</option>
							<option value="Guinée conakry">Guinée Conakry</option>
							<option value="Mauritanie">Mauritanie</option>
							<option value="Mali">Mali</option>
							<option value="Maroc">Maroc</option>
							<option value="AUTRE">AUTRE</option>
						</select>
				</p></br>
			</div>
			<div>
				<label for="langage">Langages<input type="checkbox" name="langage[]"value="PHP">PHP<input type="checkbox" name="langage[]" value="JAVA">Java<input type="checkbox" name="langage[]"value="MYSQL">Mysql<input type="checkbox" name="langage[]" value="C">C</label></br>
			</div>
			<div>
				<label for="email">Email<input type="email" name="email"></label></br>
			</div>
			<div>
				<label for="date_de_naissance">Date de naissance<input type="Date" name="date_de_naissance"></label></br>
			</div>
			<div>
				<label for="commentaires">Commentaires<input type="text" name="commentaires"></label></br>
			</div>
			<div>
				<input type="submit" value="Enregistrer" name="Enregistrer">
				</br>
			</div>
		</div>
		</form>
		<table>
		<div>
			<tr>
				<td>Prenom</td>
				<td>Nom</td>
				<td>Genre</td>
				<td>Pays</td>
				<td>Langages</td>
				<td>Email</td>
				<td>Date de naissance</td>
				<td>Commentaires</td>
			</tr>

				<?php
					foreach($tableau as $lign){
				?>
			<tr>
				<?php
				foreach ($lign as $element) {
					echo '<td>'.$element.'</td>';
				}
				
					
				?>
				
			</tr>
		
			<?php
				}
			?>
			
			
			</div>
		</table>

	
</body>
</html>