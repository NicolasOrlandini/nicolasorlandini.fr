<?php
/**
 * Created by PhpStorm.
 * User: Singu_Admin
 * Date: 07/01/2018
 * Time: 21:18
 */
require ("database.php");

function compterVisite(){
    global $pdo;

    $ip   = $_SERVER['REMOTE_ADDR']; // L'adresse IP du visiteur, si tu veux la mettre
    $date = date('Y-m-d');           // La date d'aujourd'hui, sous la forme AAAA-MM-JJ

    $query = $pdo->prepare("
        INSERT INTO compteVisite (date_visite , pages_vues) VALUES (:date , 1)
        ON DUPLICATE KEY UPDATE pages_vues = pages_vues + 1
    ");
    $query->execute(array(
        ':date' => $date
    ));
}