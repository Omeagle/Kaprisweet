<?php
//Constantes
//const $DB_NAME="kpridb";
define('DB_NAME',"kpridb");
define('DB_USER',"root");
define('DB_PASS',"");

try {
    $dsn = "mysql:host=localhost;dbname=".DB_NAME;
    $db = new PDO($dsn, DB_USER, DB_PASS);
} catch (PDOException $e){
    echo $e->getMessage();
   // exit;
}