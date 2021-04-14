<?php


    //database connection properties
     $host ='localhost';
    $user ='root';
     $password = '';
     $database ='blog';
$con = mysqli_connect($host,$user,$password,$database);
    if(!$con){
        die("Connection Failed".mysqli_connect_error());
    }
    else{
        echo "Connection Establised";
    }
    
?>