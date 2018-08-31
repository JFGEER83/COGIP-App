<?php
try
  {
  $bdd = new PDO('mysql:host=localhost;dbname=apps_cogip;charset=utf8', 'root', '');
  }
  catch(Exception $e)
  {
    die('Erreur : '.$e->getMessage());
  }
    $contact = $bdd->query('SELECT * FROM personnes');
    if(isset($_POST['create'])){
    $sql="INSERT INTO personnes (nom_personne, prenom_personne, telephone_personne, email_personne) VALUES (:nom,:prenom, :telephone, :email);";
    ;
    $requete->bindParam(":nom", $_POST['nom_personne']);
    $requete->bindParam(":prenom", $_POST['prenom_presonne']);
    $requete->bindParam(":telephone", $_POST['telephone_personne']);
    $requete->bindParam(":email", $_POST['email_personne']);
    $requete->execute();
    header("refresh:0");

    $req = $bd->prepare($sql);
    $req->execute($requete);
    if ($req->execute($requete)){
    echo 'A été ajoutée avec succès.!';
    $requete->closeCursor();
    }
  }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="./read.php">Liste des contactes</a>
    <section>
    <form action="create.php" method="post">
      <label for="nom">Nom : </label>
      <input type="text" name="nom_personne" id="nom"><br>

      <label for="prenom">Prenom : </label>
      <input type="text" name="prenom_presonne" id="prenom"><br>

      <label for="telephone">Téléphone : </label>
      <input type="number" name="telephone_personne" id="telephone"><br>

      <label for="email">Email: </label>
      <input type="text" name="email_personne" id="email"><br>

      <button type="submit" name="create">Ajouter</button>
    </form>
    </section>
  </body>
</html>
