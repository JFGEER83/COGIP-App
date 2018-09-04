<?php
$sql = "SELECT * FROM SOCIETES";
$results= $dbb->query($sql);
while($row =$results->fetch()){
       echo ['nom_societe'];
}
$results->closeCursor();