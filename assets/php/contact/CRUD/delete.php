<?php
  try
    {
    if(isset($_POST['delete']))
    {
        $id=$_POST['id'];
        $sql="DELETE FROM personnes WHERE idPERSONNES = $id";
        $requete->execute();
        $requete->closeCursor();
    }else{
        $id=$_GET['id'];
    }
    $sql="SELECT * FROM personnes WHERE idPERSONNES = $id";
    $requete->execute();
    $donnees = $requete->fetch();
    $requete->closeCursor();
    }
  ;
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

          <?php foreach ($type as $key => $value) { ?>
              <input type="radio" name="type" id="type<?=$value['id']?>" value='<?=$value['id']?>' <?=$checkType[$value['id']]?>><label for="type<?=$value['id']?>"><?=$value['type']?></label>
              <?php } ?>
          <br>
          <button type="submit" name="delete">Supprimer</button>
      </form>
    </section>
  </body>
</html>
