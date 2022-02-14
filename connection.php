<?php 
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $db = "movie_ticket";
    $conn = mysqli_connect($server_name,$user_name,$password,$db);

    if(!$conn){
        die("Database Connection failed: ".mysqli_connect_error());
    }
    else{
        echo "<h3>Connected with the database successfully</h3>";
    }
?>