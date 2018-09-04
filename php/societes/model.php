<?php 
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=COGIP_APP;charset=utf8', 'root', 'root',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}