<?php
require 'connexion.php';
if($_SERVER["REQUEST_METHOD"]== "POST" && !empty($_POST)){
    $nameError = null;
    $name = htmlentities(trim($_POST['nom_societe']));
    $valid = true;
       if (empty($name)) {
           $nameError = 'Please enter Name';
           $valid = false;
       };

  