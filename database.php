<?php
$hostname="127.0.0.1";
$database="tp-crud-student_2";

$dsn="mysql:host=$hostname;dbname=$database";
$username = "root";
$password="";


try {
    $pdo= new PDO($dsn, $username, $password);
  
    echo "Succès : Connexion à la base de données établie avec succès !";
  } catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
  }
