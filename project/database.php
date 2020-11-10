<?php 
try {
  $Connection = new PDO('mysql:host=localhost;dbname=clinica;charset=utf8mb4', 'root', '');
  $Connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $Connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);  
} catch (PDOException $e) {
  echo "Connection failed : ". $e->getMessage();
}
?>