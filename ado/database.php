<?php
$server="localhost";
$username="amaderr";
$password="SalleInformatique!";
$db="amader-app";
$conn = new mysqli($server,$username,$password,$db);

if($conn->connect_error)
{
    die('Erreur de connexion:'. $conn->connect_error);
}


try {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=gestioncourrier;charset=utf8', 'root', '');
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}

function getConnectDB(){
    try {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=gestioncourrier;charset=utf8', 'root', '');
    } catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }
    return $bdd;
}
