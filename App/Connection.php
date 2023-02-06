<?php
namespace App;

class Connection{

public static function getDb(){

    try {

        $conn = new \PDO('mysql:host=localhost;dbname=mvc;charset=utf8', 
        'root', 
        '123456');

        return $conn;
    } 
    catch(\PDOException $e) {

        echo 'ERROR: ' . $e->getMessage();

    }

}

}

?>