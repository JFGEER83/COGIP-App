<?php
try
{
	$bd = new PDO('mysql:host=localhost;dbname=apps_cogip;charset=utf8', 'root', '');
	if (!isset($_POST['button'])) {
		$id = $_POST['idPERSONNES'];
		$resultat = $bd->query("SELECT * FROM personnes WHERE idPERSONNES = $id");
		$donnees = '';
	}else {
		$id=$_POST['idPERSONNES'];
		$nom=$_POST['nom_personne'];
		$prenom=$_POST['prenom_presonne'];
		$telephone=$_POST['telephone_personne'];
		$email=$_POST['email_personne'];
		$tab = array(
				':id' => $_POST['id'],
				':nom'=> $_POST['nom'],
				':prenom' => $_POST['prenom'],
				':telephone'  => $_POST['telephone'],
				':email'  => $_POST['email'],
		);
		$sql = "UPDATE personnes SET nom= :nom, prenom=:prenom, telephone= :telephone, email= :email WHERE idPERSONNES=:id";
		$req = $bd->prepare($sql);
		if ($req->execute($tab)){
		echo 'A été modifiées avec succès !';
		};
	}
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
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
    <form action="update.php" method="post">
      <label for="nom">Nom : </label>
      <input type="text" name="nom_personne" id="nom"><br>

      <label for="prenom">Prenom : </label>
      <input type="text" name="prenom_personne" id="prenom"><br>

      <label for="telephone">Téléphone : </label>
      <input type="number" name="telephone_personne" id="telephone"><br>

      <label for="email">Email: </label>
      <input type="text" name="email_personne" id="email"><br>

		<button type="submit" name="button">Modifier</button>
	</form>
</body>
</html>
