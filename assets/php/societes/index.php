<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>COGIP</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <br />

<div class="container">
<br />
    <div class="row">
    <br />
    <h2>COGIP</h2>       
    </div>
<br />
        <div class="row">            
        <a href="add.php" class="btn btn-success">Ajouter un user</a>
        <br />

<div class="table-responsive">
<br />
        <table class="table table-hover table-bordered">
            <br />
            <thead>
            <th>Société</th>
            <th>Adresse</th>
            <th>Pays</th>
            <th>Numéro de TVA</th>
            <th>Téléphone</th>
            <th>Url</th>
            </thead>

            <br />
<tbody>
    <?php include 'database.php'; 
    $pdo = Database::connect();
    $sql = 'SELECT * FROM SOCIETES';
    foreach ($pdo->query($sql) as $row) { 
    //$results= $bd->query($sql);
    //while($row =$results->fetch())           
                echo '<br /> <tr>';
                echo '<td>' . $row['nom_societe'] . '</td>';
                echo '<td>' . $row['adresse_societe'] . '</td>';
                echo '<td>' . $row['pays_societe'] . '</td>';
                echo '<td>' . $row['TVA_societe'] . '</td>';
                echo '<td>' . $row['telephone_societe'] . '</td>';
                echo '<td>' . $row['TYPE_idTYPE'] . '</td>';
                echo '<td>';
                echo '<a class="btn" href="edit.php?id=' . $row['idSOCIETES'] . '">Read</a>';
                echo '</td>';
                echo '<td>';
                echo '<a class="btn btn-success" href="update.php?id=' . $row['idSOCIETES'] . '">Update</a>';
                echo '</td>';
                echo' <td>';
                echo '<a class="btn btn-danger" href="delete.php?id=' . $row['idSOCIETES'] . ' ">Delete</a>';
                echo '</tr>';
    }  
    Database::disconnect();
    ;
?>    
            </tbody>
        </table>

     </div>
    </div>
</div>

    </body>
</html>