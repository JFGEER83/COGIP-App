<?php
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=apps_cogip;charset=utf8','root','');
    $id=$_GET['id'];
    $reponse =  $bdd->query("SELECT * FROM factures
      LEFT JOIN societes ON factures.societes_idsocietes1 = societes.idsocietes
      LEFT JOIN personnes ON factures.personnes_idpersonnes = personnes.idpersonnes
      WHERE personnes.idpersonnes=$id");
    $donnees = '';
    } catch (Exception $e) {
      die('Erreur : '.$e->getMessage());
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Details</title>
  </head>
  <body>
    <table>
      <tr>
        <th>Nom </th>
        <th>Prénom </th>
        <th>Téléphone </th>
        <th>E-mail </th>
        <th>Nom de la société </th>
        <th>Adresse de la société </th>
        <th>N°TVA </th>
        <th>N°facture </th>
        <th>La liste des factures </th>
      </tr>
    <?php
        while ($donnees = $reponse->fetch()) {
    ?>
      <tr>
        <td><?= $donnees['nom_personne']  ?></td>
        <td><?= $donnees['prenom_presonne']  ?></td>
        <td><?= $donnees['telephone_personne']  ?></td>
        <td><?= $donnees['email_personne']  ?></td>
        <td><?= $donnees['nom_societe']  ?></td>
        <td><?= $donnees['adresse_societe']  ?></td>
        <td><?= $donnees['TVA_societe']  ?></td>
        <td><?= $donnees['numero_facture']  ?></td>
        <td><?= $donnees['motif_prestation_facture']  ?></td>
      </tr>
      <?php
      }
      ?>
    </table>
  </body>
</html>
