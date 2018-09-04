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
    $message = "";
  if(isset($_POST['create'])){
    $nom = filter_var($_POST['nom_personne'], FILTER_SANITIZE_STRING);
    $prenom = filter_var($_POST['prenom_presonne'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['telephone_personne'], FILTER_SANITIZE_NUMBER_INT);
    $email = filter_var($_POST['email_personne'], FILTER_SANITIZE_EMAIL);
    $valid_email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $societe = $_POST['societe_personne'];
    if(!empty($nom) && !empty($prenom) && !empty($phone) && !empty($valid_email)) {
      $add_value = $bdd->prepare('INSERT INTO personnes(nom_personne, prenom_presonne, telephone_personne, email_personne, SOCIETES_idSOCIETES) VALUES(:nom, :prenom, :telephone, :email, :societe)');
      $add_value->bindParam(':nom', $nom);
      $add_value->bindParam(':prenom', $prenom);
      $add_value->bindParam(':telephone', $phone);
      $add_value->bindParam(':email', $valid_email);
      $add_value->bindParam(':societe', $societe);
      $add_value->execute();
      header('location:read.php'); //change de page apres execute
      $message = "A été ajoutée !";
  }else{
      $message = "N'a pas été ajoutée !";
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
    <form action="" method="post">
      <label for="nom">Nom : </label>
      <input type="text" name="nom_personne"><br>

      <label for="prenom">Prenom : </label>
      <input type="text" name="prenom_presonne"><br>

      <label for="telephone">Téléphone : </label>
      <input type="number" name="telephone_personne" ><br>

      <label for="email">Email: </label>
      <input type="text" name="email_personne"><br>

      <label for="email">idSociete: </label>
      <input type="number" name="societe_personne"><br>

      <button type="submit" name="create">Ajouter</button>
      <?php echo $message; ?>
    </form>
    </section>
  </body>
</html>
