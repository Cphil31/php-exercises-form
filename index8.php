<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	if (empty($_POST)){
	 ?>

	<form action="index6.php" method="POST">

		<SELECT name="genre" >
			<OPTION>Mr
			<OPTION>Mme
			<OPTION>Mlle
		</SELECT>

		<label for="">Nom</label>
		<input type="text" name="Nom">
		<label for="">Prénom </label>
		<input type="text" name ="Prenom">
		<input type="submit" name="submit" value="Valider">

	</form> 

	<?php 
	}
	echo $_POST['genre']." ".$_POST['Nom']." ".$_POST['Prenom'];
	?>

			</body>
			</html>

##Exercice 8
Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier **pdf**.