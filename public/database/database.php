<?php

    $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "baas";
    $prefix = "";
    $database=mysqli_connect($hostname,$user,$password,$database);

        
    if (!$database) {
    die("Connection failed: " . mysqli_connect_error());
    }

    define("DB_HOST", "localhost");
    define("DB_NAME", "baaslk");
    define("DB_USER", "root");
    define("DB_PASS", "");

    $dbConnection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
       
    if (!$dbConnection){
        die("Database Connection failed : " . mysqli_connect_error());
    }
   
  
?>
