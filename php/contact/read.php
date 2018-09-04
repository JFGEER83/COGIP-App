<?php
try
{
// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=apps_cogip;charset=utf8', 'root', '12345678');
$resultat = $bdd->query('SELECT * FROM personnes');
// $donnees = $resultat->fetch();
$donnees='';
}
catch(Exception $e)
{
// En cas d'erreur, on affiche un message et on arrête tout
die('Erreur : '.$e->getMessage());
}
// $reponse->closeCursor();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>contact</title>
<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
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
                    <td> <a href="./update.php?id=<?= $donnees['id']; ?>">Modifier</a> </td>
                    <td> <a href="./delete.php?id=<?= $donnees['id']; ?>"><input type="submit" name="supprimer" value="supprimer">
                     </td>
      </tr>

  <?php  } ?>



</table>
</body>
</html>
