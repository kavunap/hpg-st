<!-- <?php
// define('DB_SERVER','localhost');
// define('DB_USER','root');
// define('DB_PASS' ,'');
// define('DB_NAME','hpgdb');
// $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// // Check connection
// if (mysqli_connect_errno())
// {
//  echo "Failed to connect to MySQL: " . mysqli_connect_error();
// }
?> --> 









<?php
//development connection

// $con=mysqli_connect("localhost", "root", "", "crmsdb");

// //remote database connection
// // $con=mysqli_connect("remotemysql.com", "50T8ZnQNNJ", "hXJ7vXn34M", "50T8ZnQNNJ");
// if(mysqli_connect_errno()){
// echo "Connection Fail".mysqli_connect_error();
// }

// //remote database connection
  $host = 'remotemysql.com';
  $db = '5yk4hI4ecJ';
  $user = '5yk4hI4ecJ';
  $pass = '97rCUzTz8z';
  $charset = 'utf8mb4';
  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
  try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // echo 'Connection failed: ' . $e->getMessage();
    throw new PDOException($e->getMessage());
    
}

require_once 'crud.pgp';
$crud = new crud($pdo);


  ?>