<?php
session_start();
include("database.php");

function genererChaineAleatoire($longueur = 10)
{
 $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 $longueurMax = strlen($caracteres);
 $chaineAleatoire = '';
 for ($i = 0; $i < $longueur; $i++)
 {
 $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
 }
 return $chaineAleatoire;
}

$data = file_get_contents('php://input');
$name = time() . "-" .genererChaineAleatoire(10);

if(isset($_SESSION)){
    $statment = $db->prepare("INSERT INTO replay values(:id,:name,:data,:userId)");
    $statment->execute(array(
        'id' => null,
        'name' => $name,
        'data' => $data,
        'userId' => $_SESSION["user"]["id"]
    ));
    $tets = $statment->fetch();
}