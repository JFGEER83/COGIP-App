<?php
try
{
	$bd = new PDO('mysql:host=localhost;dbname=apps_cogip;charset=utf8', 'root', '');
	$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $resultat = $bd->query('SELECT * FROM PERSONNES ORDER BY nom_personne ASC');
	$donnees = $resultat->fetch();;
}
catch(PDOException $e)
{
	die('Erreur : '.$e->getMessage());
}
 ?>
