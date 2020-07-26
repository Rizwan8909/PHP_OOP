<?php
    $username = 'root';
    $password = '';
    $db_name = 'oop_practice';
    $server_name = 'localhost';

    $conn = new mysqli($server_name, $username, $password, $db_name);

    if($conn->connect_error){
       die("Some thing went wrong -> " .mysqli_connect_error()); 
    }
    else{
        echo "Successfully Connected";
    }
?>