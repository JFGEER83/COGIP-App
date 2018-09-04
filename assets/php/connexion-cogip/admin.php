<?php
	try
	{
	$bd = new PDO('mysql:host=localhost;dbname=apps_cogip;charset=utf8', 'root', '');
		//DELETE
		if (isset($_POST["delete"])) {
				$remove= $bd->prepare('DELETE FROM personnes WHERE idPERSONNES=:id');
				$remove->bindParam(':id', $id);
				$id=$_POST["delete"];
				$remove->execute();
		};
  $resultat = $bd->query('SELECT * FROM PERSONNES ORDER BY nom_personne ASC');
	$donnees='';
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
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  </head>
  <body>
    <h1>Liste des contacts</h1>
		<form class="" action="" method="post">
	    <table>
				<th>id</th>
		    <th>Nom</th>
		    <th>Prenom</th>
		    <th>Téléphone</th>
		    <th>email</th>
		  <?php while ($donnees= $resultat ->fetch() ){ ?>
		    <tr>
					<td><?= $donnees['idPERSONNES'];?></td>
		      <td><?= $donnees['nom_personne']; ?></td>
		      <td><?= $donnees['prenom_presonne']; ?></td>
		      <td><?= $donnees['telephone_personne']; ?></td>
		      <td><?= $donnees['email_personne']; ?></td>
					<td><a href="../contact/CRUD/update.php?id=<?= $donnees['idPERSONNES']; ?>">Modifier</a> </td>
					<td ><button type="submit" name="delete" value="<?= $donnees['idPERSONNES'] ?>"><i class="far fa-trash-alt"></i></button></td>
				</tr>
				<?php
			} ?>
				<tr>
					<button type="submit" name="create"><a href="../contact/CRUD/create.php?id=<?= $donnees['idPERSONNES']; ?>">Ajouter</i></button>
				</tr>
	    </table>
		</form>
  </body>
</html>
