<?php
require_once 'DataBase.php';
$db = new DataBase();
$connexion = $db->connect();

if($connexion){
    echo "reussi";
} else {
    echo "echec";
}
?>
