<?php require('database.php'); 
    $id = null; if (!empty($_GET['id'])) 
    { 
        $id = $_REQUEST['id']; 
    } 
    if (null == $id) 
    { 
        header("location:index.php"); 
    } 
    else 
    { 
         $pdo = Database ::connect(); 
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION). 
    $sql = "SELECT * FROM SOCIETES where idSOCIETES =?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    Database::disconnect();
}
?>
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
<div class="span10 offset1">
<br />
<div class="row">
<br />
<h3>Edition</h3>
</div>
<br />
<div class="form-horizontal" >
<br />
<div class="control-group">
                        <label class="control-label">Société</label>
<br />
<div class="controls">
                            <label class="checkbox">
                                <?php echo $data['nom_societe']; ?>
                            </label>
</div>
</div>
<br />
<div class="control-group">
                        <label class="control-label">Adresse</label>
<br />
<div class="controls">
                            <label class="checkbox">
                                <?php echo $data['adresse_societe']; ?>
                            </label>
</div>
</div>
<br />
<div class="control-group">
                        <label class="control-label">Pays</label>
<br />
<div class="controls">
                            <label class="checkbox">
                                <?php echo $data['pays_societe']; ?>
                            </label>
</div>
</div>
<br />
<div class="control-group">
                        <label class="control-label">TVA</label>
<br />
<div class="controls">
                            <label class="checkbox">
                                <?php echo $data['TVA_societe']; ?>
                            </label>
</div>
</div>
<br />
<div class="control-group">
                        <label class="control-label">Telephone</label>
<br />
<div class="controls">
                            <label class="checkbox">
                                <?php echo $data['telephone_societe']; ?>
                            </label>
</div>
</div>
<br />
<div class="control-group">
                        <label class="control-label">Type</label>
<br />
<div class="controls">
                            <label class="checkbox">
                                <?php echo $data['TYPE_idTYPE']; ?>
                            </label>
</div>
</div>
<br />
<div class="form-actions">
                        <a class="btn" href="index.php">Back</a>
</div>
</div>
</div>
</div>
<!-- /container -->
    </body>
</html>