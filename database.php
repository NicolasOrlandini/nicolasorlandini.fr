<?php
/**
 * Created by PhpStorm.
 * User: Singu_Admin
 * Date: 07/01/2018
 * Time: 21:17
 */

//TODO: données à changer lors la mise en place sur le serveur
define('DB_HOST' , 'localhost');
define('DB_NAME' , 'nicolasorlandini');
define('DB_USER' , 'root');
define('DB_PASS' , '');

try{
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch(Exception $e) {
    echo "Impossible de se connecter à la base de données '".DB_NAME."' sur ".DB_HOST." avec le compte utilisateur '".DB_USER."'";
    echo "<br/>Erreur PDO : <i>".$e->getMessage()."</i>";
    die();
}

