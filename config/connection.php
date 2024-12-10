<?php
$servername = "localhost";
$user = "root";
$password ="";
$database_name = "repair_shop";
// Creating connection to the database
// im gonn use the PDO class
// we will rap it between a try  catch block to mantian the errors

try{
  // creating instance from the class PDO to create connection to the database
    $conn  = new PDO("mysql:host=$servername;dbname=$database_name",$user,$password);
  // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo $e->getMessage();
  }
?>