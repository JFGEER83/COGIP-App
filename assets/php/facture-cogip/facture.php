<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=apps_cogip;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM FACTURES ORDER BY date_facture DESC');

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>contact</title>
<link rel="stylesheet" href="css/facture.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
<h1>Liste des factures</h1>
<h2>Classé par date (+récent aux - récent)</h2>
<table>
<th>id</th>
<th>Nom</th>
<th>Date</th>
<th>Motif</th>
<th>Société</th>


<?php while ($donnees = $reponse->fetch())
{?>
<tr>
<td><?= $donnees['idFACTURES'];?></td>
<td><?= $donnees['numero_facture']; ?></td>
<td><?= $donnees['date_facture']; ?></td>
<td><?= $donnees['motif_prestation_facture']; ?></td>
<td><?= $donnees['SOCIETES_idSOCIETES1']; ?></td>
</tr>




 <?php




}
?>
</table>
</body>
</html>
