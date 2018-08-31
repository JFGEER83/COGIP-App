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
