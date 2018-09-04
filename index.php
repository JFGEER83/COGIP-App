<?php
switch ($_GET['page']) {
  case 'detailcontact':
    require "controllers/detailcontact_controller.php";
    break;
  case 'annuaire':
    require "controllers/contact_controller.php";
    break;
}
 ?>
