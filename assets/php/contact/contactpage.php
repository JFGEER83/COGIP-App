<?php
try
{
	$bd = new PDO('mysql:host=localhost;dbname=apps_cogip;charset=utf8', 'root', '');
  $resultat = $bd->query('SELECT * FROM PERSONNES ORDER BY nom_personne ASC');
	$donnees = $resultat->fetch();;
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
    <title>Annuaire</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1>Annuaire</h1>
    <table>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Téléphone</th>
      <th>email</th>
    <?php while ($donnees= $resultat ->fetch() ){ ?>
      <tr>
        <td><a href="./detailcontact.php?id=<?= $donnees['idPERSONNES']; ?>"><?= $donnees['nom_personne']; ?></a></td>
        <td><?= $donnees['prenom_presonne']; ?></td>
        <td><?= $donnees['telephone_personne']; ?></td>
        <td><?= $donnees['email_personne']; ?></td>
      </tr>
    <?php
      } ?>
    </table>
  </body>
</html>
