<?php
$sql = "SELECT nom_societe FROM SOCIETES ORDER BY nom_societe ASC";
$results= $bdd->query($sql);
while($row =$results->fetch())
{    
echo $row['nom_societe'] . '<br/>'; 
}
$results->closeCursor();

?>