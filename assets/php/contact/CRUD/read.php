<?php
try
{
	$bd = new PDO('mysql:host=localhost;dbname=apps_cogip;charset=utf8', 'root', '');
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
    <h1>Liste des contactes</h1>
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
						<td> <a href="../CRUD/update.php?id=<?= $donnees['idPERSONNES']; ?>">Modifier</a> </td>
						<td> <a href="../CRUD/delete.php?id=<?= $donnees['idPERSONNES']; ?>"><i class="far fa-trash-alt"type="submit" name="supprimer" value="supprimer"></i>
						 </td>
          </tr>

      <?php
		} ?>

    </table>
  </body>
</html>
