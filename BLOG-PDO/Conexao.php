<?php

require_once "Contantes.php";
class conectarDB{
  
  private $con;

  public static function conectar(){
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "BLOG";

  try {
    $conn = new PDO("mysql:host=$servername;port=3307;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $conn;

  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
   } 
  
  }
  
}


