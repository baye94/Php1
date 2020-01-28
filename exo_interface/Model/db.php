<?php
// $db_host = 'localhost';
// $db_name ='acs';
// $user_name ='root';
// $pwd="";

    try {
        $db = new PDO("mysql:host=localhost;dbname=acs", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    } catch (PDOException $e) {
        die('Erreur'.$e->getMessage());
    }



?>