<?php
if(isset($_GET["id"])){
	$id = $_GET["id"];
}
try
{
		$bd = new PDO('mysql:host=localhost;dbname=apps_cogip;charset=utf8', 'root', '');
	}catch(Exception $e)
	{
	  die('Erreur : '.$e->getMessage());
	}
	$resultat=$bd->prepare('SELECT * FROM personnes WHERE idPERSONNES=:id');
	$resultat->bindParam(':id', $id);
	$resultat->execute();
	$resultat=$resultat->fetch();
	if (isset($_POST['button'])) {
		// $id=$_POST['idPERSONNES'];
		$nom = filter_var($_POST['nom_personne'], FILTER_SANITIZE_STRING);
    $prenom = filter_var($_POST['prenom_presonne'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['telephone_personne'], FILTER_SANITIZE_NUMBER_INT);
    $email = filter_var($_POST['email_personne'], FILTER_SANITIZE_EMAIL);
    $valid_email = filter_var($email, FILTER_VALIDATE_EMAIL);

		$sql = "UPDATE personnes SET nom_personne= :nom, prenom_presonne=:prenom, telephone_personne= :telephone, email_personne= :email WHERE idPERSONNES=:id";
		$req = $bd->prepare($sql);
		$req->bindParam(':nom', $nom);
		$req->bindParam(':prenom', $prenom);
		$req->bindParam(':telephone', $phone);
		$req->bindParam(':email', $valid_email);
		$req->bindParam(':id', $id);
		$req->execute();
		header('location:read.php'); //change de page apres execute
	}


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>contact</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="../CRUD/read.php">Liste des données</a>
	<h1>Modifier</h1>
    <form action="" method="post">
			<input type="hidden" name="idPERSONNES" value="<?= $resultat["id"];?>">
      <label for="nom">Nom : </label>
      <input type="text" name="nom_personne" value="<?= $resultat["nom_personne"];?>"><br>

      <label for="prenom">Prenom : </label>
      <input type="text" name="prenom_presonne"  value="<?= $resultat["prenom_presonne"];?>"><br>

      <label for="telephone">Téléphone : </label>
      <input type="number" name="telephone_personne"  value="<?= $resultat["telephone_personne"];?>"><br>

      <label for="email">Email: </label>
      <input type="text" name="email_personne"  value="<?= $resultat["email_personne"];?>"><br>

			<button type="submit" name="button">Modifier</button>
		</form>
</body>
</html>
