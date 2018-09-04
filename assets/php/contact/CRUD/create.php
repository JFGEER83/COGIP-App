<?php
try
  {
  $bdd = new PDO('mysql:host=localhost;dbname=apps_cogip;charset=utf8', 'root', '12345678');
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


<?php




  $contact2 = $bdd->query('SELECT * FROM FACTURES');
  $message2 = "";
  if(isset($_POST['create'])){
    $nom = filter_var($_POST['numero_facture'], FILTER_SANITIZE_STRING);
    $prenom = filter_var($_POST['date_facture'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['motif_prestation_facture'], FILTER_SANITIZE_NUMBER_INT);

  if(!empty($nom) && !empty($prenom) && !empty($phone)) {
    $add_value = $bdd->prepare('INSERT INTO FACTURES (numero_facture, date_facture, motif_prestation_facture) VALUES(:numero, :date, :motif)');
    $add_value->bindParam(':numero', $numero);
    $add_value->bindParam(':date', $date);
    $add_value->bindParam(':motif', $motif);

    $add_value->execute();
    header('location:read.php'); //change de page apres execute
    $message2 = "A été ajoutée !";
  }else{
    $message2 = "N'a pas été ajoutée !";
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
    <a href="./read.php">Liste des contacts</a>
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
