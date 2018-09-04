<?php require 'database.php'; 
            if($_SERVER["REQUEST_METHOD"]== "POST" && !empty($_POST))
            { 
                $societeError= '';
                $societeError= '';
                $paysError= '';
                $tvalError= '';
                $telError= '';
                $idError= '';
                $societe = htmlentities(trim($_POST['nom_societe']));
                $adresse = htmlentities(trim($_POST['adresse_societe']));
                $pays = htmlentities(trim($_POST['pays_societe']));
                $tva = htmlentities(trim($_POST['TVA_societe']));
                $tel = htmlentities(trim($_POST['telephone_societe']));
                $id = htmlentities(trim($_POST['TYPE_idTYPE']));

                $valid = true; 
                if (empty($societe)) 
                { 
                    $societeError = 'SVP enter un nom de société'; $valid = false; 
                }
                else if (!preg_match("^[a-zA-Z ]*$",$societe)) 
                { 
                    $societeError = "Seulement les lettres et espaces autorisé"; 
                }
                if(empty($adresse))
                { 
                    $adresseeError ='SVP enter une adresse'; $valid= false; 
                }
                else if (!preg_match("^[a-zA-Z ]*$",$name)) 
                { 
                    $nameError = "Seulement les lettres et espaces autorisé"; 
                }
                if (empty($pays)) 
                { 
                    $paysError = 'SVP entrer un pays'; $valid = false; 
                }
                else if (!preg_match("^[a-zA-Z ]*$",$societe)) 
                { 
                    $societeError = "Seulement les lettres et espaces autorisé"; 
                }
                if (empty($tel)) 
                { 
                    $telError = 'SVP entrer un numéro de téléphone'; $valid = false; 
                }
                else if(!preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#",$tel))
                { 
                    $telError = 'SVP entrer un numéro valide'; $valid = false; 
                }
                if (empty($id)) 
                { 
                    $idError = 'SVP entrer 1 ou 2'; $valid = false; 
                }
                else if(!preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#",$id))
                { 
                    $idError = 'SVP entrer un numéro valide'; $valid = false; 
                }
                if ($valid) { $pdo = Database::connect(); 
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO SOCIETES (nom_societe,adresse_societe,pays_societe,TVA_societe,telephone_societe,TYPE_idTYPE) values(?, ?, ?, ? , ? , ? , ? , ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($societe,$adresse,$pays,$tva,$tel,$id));
            Database::disconnect();
            header("Location: index.php");
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
                <div class="row">
                <br />
                <h3>Ajouter une société</h3>
                </div>
                <br />
                    <form method="post" action="add.php">
                    <br />
                        <div class="control-group <?php echo !empty($societeError)?'error':'';?>">
                                                <label class="control-label">Nom Société</label>
                        <br />
                        <div class="controls">
                                                    <input name="nom" type="text"  placeholder="Nom" value="<?php echo !empty($societe)?$societe:'';?>">
                                                    <?php if (!empty($societeError)): ?>
                                                    <span class="help-inline"><?php echo $societeError;?></span>
                                                    <?php endif; ?>
                        </div>
                        </div>
                    <br />
                        <div class="control-group<?php echo !empty($adresseError)?'error':'';?>">
                                            <label class="control-label">Adresse</label>
                        <br />
                        <div class="controls">
                                                    <input type="text" name="adresse" value="<?php echo !empty($adresse)?$adresse:''; ?>">
                                                    <?php if(!empty($adresseeError)):?>
                                                    <span class="help-inline"><?php echo $adresseError ;?></span>
                                                    <?php endif;?>
                        </div>
                        </div>
                    <br />
                        <div class="control-group<?php echo !empty($paysError)?'error':'';?>">
                                            <label class="control-label">Pays</label>
                        <br />
                        <div class="controls">
                                                    <input type="text" name="pays" value="<?php echo !empty($pays)?$pays:''; ?>">
                                                    <?php if(!empty($paysError)):?>
                                                    <span class="help-inline"><?php echo $paysError ;?></span>
                                                    <?php endif;?>
                        </div>
                        </div>
                    <br />
                        <div class="control-group <?php echo !empty($tvalError)?'error':'';?>">
                                                <label class="control-label">Numéro TVA</label>
                        <br />
                        <div class="controls">
                                                    <input name="tva" type="text" placeholder="TVA" value="<?php echo !empty($tva)?$tva:'';?>">
                                                    <?php if (!empty($tvaError)): ?>
                                                    <span class="help-inline"><?php echo $tvaError;?></span>
                                                    <?php endif;?>
                        </div>
                        </div>
                    <br />
                        <div class="control-group <?php echo !empty($telError)?'error':'';?>">
                                                <label class="control-label">Telephone</label>
                        <br />
                        <div class="controls">
                                                    <input name="tel" type="text" placeholder="Telephone" value="<?php echo !empty($tel) ? $tel:'';?>">
                                                    <?php if (!empty($telError)): ?>
                                                    <span class="help-inline"><?php echo $telError;?></span>
                                                    <?php endif;?>
                        </div>
                        </div>
                    <br />
                        <div class="control-group  <?php echo !empty($idError)?'error':'';?>">
                                            <label class="control-label">ID fournisseur/client</label>
                        <br />
                        <div class="controls">
                                            <input type="text" name="id" value="<?php echo !empty($id)? $id:'' ; ?>">
                                                <?php if(!empty($idError)):?>
                                            <span class="help-inline"><?php echo $idError ;?></span>
                                            <?php endif;?>
                        </div>
                        </div>
                    <br />
                        <div class="form-actions">
                                    <input type="submit" class="btn btn-success" name="submit" value="submit">
                                    <a class="btn" href="index.php">Retour</a>
                        </div>
                    </form>          
        </div>
        </body>
</html> 