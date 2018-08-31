<?php
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=apps_cogip;charset=utf8','root','');
    $reponse =  $bdd->query
    ("SELECT * FROM personnes
      LEFT JOIN societes ON personnes.societes_idsocietes = societes.idsocietes
      LEFT JOIN personnes ON personnes.factures_idfactures = factures.idfactures
      WHERE idpersonnes");
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
    <table class="table">
        <tr class="info">
            <th>Nom </th>
            <th>Prénom </th>
            <th>Téléphone </th>
            <th>E-mail </th>
            <th>Nom de la société </th>
            <th>La liste des factures </th>
        </tr>
      <?php while ($donnees= $resultat ->fetch() ){ ?>
        <tr>
            <td><?= $donnees['nom_personne']  ?></td>
            <td><?= $donnees['prenom_personne']  ?></td>
            <td><?= $donnees['telephone_personne']  ?></td>
            <td><?= $donnees['email_personne']  ?></td>
            <td><?= $donnees['nom_societe']  ?></td>
            <td><?= $donnees['motif_prestation_facture']  ?></td>
        </tr>
        <?php
      }
      ?>
    </table>
  </body>
</html>
