<?php

session_start();

// configuration
$dbhost 	= "localhost";
$dbname		= "kuendb";
$dbuser		= "root";
$dbpass		= "root";

// database connection
try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e)
    {
        echo "Konekcija ne radi: " . $e->getMessage();
    }
?>