<?php
  try
  {
  if (isset($_POST["delete"])) {
  	foreach ($_POST["delete"] as $todel) {
  		$remove= $bdd->prepare('DELETE FROM personnes WHERE nom_personne=:nom');
  		$remove->bindParam(':nom', $nom);
  		$nom=$todel;
  		$remove->execute();
  		header('refresh:0');
  	}
  };

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <section>
        <form action="delete.php" method="post">
          <label for="nom">Nom : </label>
          <input type="text" name="nom_personne" id="nom"><br>

          <label for="prenom">Prenom : </label>
          <input type="text" name="prenom_personne" id="prenom"><br>

          <label for="telephone">Téléphone : </label>
          <input type="number" name="telephone_personne" id="telephone"><br>

          <label for="email">Email: </label>
          <input type="text" name="email_personne" id="email"><br>

          <button type="submit" name="delete">Supprimer</button>
      </form>
    </section>
  </body>
</html>
