<?php
	if(isset($_POST['Enregistrer'])){

		if(!empty($_post['Prenom']) AND !empty($_POST['Nom']) AND !empty($_POST['Genre']) AND !empty($_POST['Pays']) AND !empty($_POST['Langages']) AND !empty($_POST['Email']) AND !empty($_POST['Date_de_naissance']) AND !empty($_POST['Commentaires'])){

		$Prenom=$_POST['Prenom'];
		$Nom=$_POST['Nom'];
		$Genre=$_POST['Genre'];
		$Pays=$_POST['Pays'];
		$Langages=$_POST['Langages'];
		$Email=$_POST['Email'];
		$Date_de_naissance=$_POST['Date_de_naissance'];
		$Commentaires=$_POST['Commentaires'];
	}}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="inscription.css">
</head>
<body>
	<form method="POST">
		<label for="Prénom"> Prénom
			<input type="text" name="Prenom">
		</label></br>
		<label for="Nom">Nom
			<input type="text" name="Nom">
		</label></br></br>
		<label for="Genre">Genre
			<input type="radio" name="Genre">M<input type="radio">F
		</label>
		<p>Pays
			<select name="Pays">
				<option>Sénégal</option>
				<option>Gambie</option>
				<option>Guinée Bissau</option>
				<option>Guinée Conakry</option>
				<option>Mauritanie</option>
				<option>Mali</option>
				<option>Maroc</option>
				<option>AUTRE</option>
		</select>
		</p></br>
		<label for="Langages">Langages
			<input type="checkbox" name="Langages">PHP<input type="checkbox"name="Langages">Java<input type="checkbox"name="Langages">Mysql<input type="checkbox"name="Langages">C
		</label></br>
		<label for="Email">Email
			<input type="text" name="Email">
		</label></br>
		<label for="Date de naissance">Date de naissance
			<input type="text" name="Date_de_naissance">
		</label></br>
		<label for="Commentaires">Commentaires
			<input type="text" name="Commentaires">
		</label></br>
		<input type="submit" value="Enregistrer" name="Enregistrer">
		</br>
		<table>
			<tr>
				<td>Prénom</td>
				<td>Nom</td>
				<td>Genre</td>
				<td>Pays</td>
				<td>Langages</td>
				<td>Email</td>
				<td>Date de naissance</td>
				<td>Commentaires</td>
			</tr>
			<tr>
				<td>Amy</td>
				<td>Guéye</td>
				<td>F</td>
				<td>Sénégal</td>
				<td></td>
				<td>asanaliou@gmail.com</td>
				<td>29/06/92</td>
				<td></td>
			</tr>
			<tr>
				<td>Khadija</td>
				<td>Diop</td>
				<td>F</td>
				<td>Maroc</td>
				<td></td>
				<td>dijajoop@gmail.com</td>
				<td>18/07/99</td>
				<td></td>
			</tr>
			<tr>
				<td>Moustapha</td>
				<td>Diop</td>
				<td>M</td>
				<td>Mauritanie</td>
				<td></td>
				<td>mawahibounafi@gmail.com</td>
				<td>12/12/82</td>
				<td></td>
			</tr>
			<tr>
				<td>EL hadji</td>
				<td>Diop</td>
				<td>M</td>
				<td>Mali</td>
				<td></td>
				<td>joopelhadj@gmail.com</td>
				<td>03/07/1951</td>
				<td></td>
			</tr>
			<tr>
				<td><?php echo $Prenom;  ?></td>
				<td><?php echo $Nom;  ?></td>
				<td><?php echo $Genre;  ?></td>
				<td><?php echo $Pays;  ?></td>
				<?php
					foreach($Langages as $value){

				?>
				<td><?php echo $Langages;  ?></td>
				<td><?php echo $Email;  ?></td>
				<td><?php echo $Date_de_naissance;  ?></td>
				<td><?php echo $Commentaires;  ?></td>
			</tr>
		
			
		</table>
		<?php
		}
			?>
	</form>
</body>
</html>