<?php 
try{
$bdd = new PDO('mysql:host=localhost;dbname=COGIP_APP;charset=utf8', 'root', 'root');
}
catch(PDOExeption $e) {
    echo 'Une erreur est survenue lors de la tentative de connexion à la base de données';
}
