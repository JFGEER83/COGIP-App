<?php
include ("model.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$sql = 'SELECT nom_societe FROM SOCIETES';
try{
$stmt = $dbb->query($sql);
$results = $stmt->setFetchMode(PDO::FETCH_BOTH); 
while ($row = $stmt->fetch()){
    print $row[0] . "\t" . $row[1] . "\t" . $row[2] . "\n";
    }
}
catch (PDOException $e) {
    print $e->getMessage();
}   
?>

</body>
</html>

