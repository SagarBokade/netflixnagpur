<?php 

    $host= "localhost";
    $username = "id21779891_sagarnbokade";
    $password = "Nitish@2003";
    $database = "id21779891_signin";
    $port = 3306;

    //DataBase connection
    $conn = new mysqli($host,$username,$password,$database,$port);
    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error);
    }
    echo"Succefully Added";
    $conn ->close();
?>