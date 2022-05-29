<?php 
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $db = "rj_movies";
    $conn = mysqli_connect($server_name,$user_name,$password,$db);

    if(!$conn){
        die("Database Connection failed: ".mysqli_connect_error());
    }
